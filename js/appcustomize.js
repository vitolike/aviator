function redirect(url) {
    window.location.href = url;
}
function formasync(id) {
    $("#" + id).on('submit', function (e) {
        e.preventDefault();
    });
}
function message(data, position = 'topRight') {
    if (data.type == 1 || data.status == 1) {
        iziToast.success({
            title: data.title,
            message: data.message,
            position: position
        });
    } else if (data.type == 0 || data.status == 0) {
        iziToast.error({
            title: data.title,
            message: data.message,
            position: position
        });
    }
}
function apex(method, url, data, form, success = null, error = null, reset = false, requestData = true) {
    if (requestData) {
        $.ajax({
            type: method,
            url: url,
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            beforeSend: function () {
                $(form).find('button[type=submit]').html(`<img src="/loading.gif" alt="loading" class="loader_in_form">`);
                $(form).find('button[type=submit]').attr('disable', true);
            },
            success: function (response) {
                if (response && response != null && response != '') {
                    if (response.status == 1) {
                        message(response);
                        if (success) {
                            setTimeout(() => {
                                window.location.href = success;
                            }, 1000);
                        }
                        $(form).find('button[type=submit]').html('success');
                    } else if (response.status == 0) {
                        $(form).find('button[type=submit]').attr('disable', false);
                        message(response);
                        if (error) {
                            setTimeout(() => {
                                window.location.href = error;
                            }, 1000);
                        }
                        $(form).find('button[type=submit]').html('Retry');
                    } else {
                        $(form).find('button[type=submit]').attr('disable', false);
                        message({
                            'title': 'Oops!',
                            'message': 'Server Error, Please retry',
                            'type': 0
                        });
                        $(form).find('button[type=submit]').html('Retry');
                    }
                    if (reset) {
                        $(form).trigger("reset");
                    }
                } else {
                    $(form).find('button[type=submit]').attr('disable', false);
                    message({
                        'title': 'Oops!',
                        'message': 'Server Error, Please retry',
                        'type': 0
                    });
                    $(form).find('button[type=submit]').html('Retry');
                }
            },
            error: function (e) {
                console.log(e);
                $(form).find('button[type=submit]').attr('disable', false);
                $(form).find('button[type=submit]').html('Retry');
                if (e.status == 422) {
                    message({
                        'title': 'Oops!',
                        'message': e.responseJSON.message,
                        'type': 0
                    });
                } else {
                    $(form).find('button[type=submit]').attr('disable', false);
                    message(response);
                    console.log(e);
                    $(form).find('button[type=submit]').html('Retry');
                }
            }
        });
    } else {
        $.ajax({
            type: method,
            url: url,
            dataType: "json",
            success: function (response) {
                if (response.status == 1) {
                    message(response);
                    if (success) {
                        setTimeout(() => {
                            window.location.href = success;
                        }, 1500);
                    }
                } else {
                    swal(response.title, response.message, response.type);
                    if (error) {
                        setTimeout(() => {
                            window.location.href = error;
                        }, 1500);
                    }
                }
                if (reset) {
                    $(form).trigger("reset");
                }
            },
            error: function (e) { }
        });
    }
}