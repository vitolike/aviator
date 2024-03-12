$("#change_avatar").on('click', function() {
    $.ajax({
        url  : '/get_avatar',
        type : 'get',
        success : function(result) {
            if(result.isSuccess) {
                for (let i = 0; i < result.data.length; i++) {
                    $("#image_div").append(`
                        <img src="${result.data[i].image}" alt="" id="img${result.data[i].id}" class="avatar_img" onclick="changeAvatar(${result.data[i].id})">
                    `)
                } 
            }
        }
    })
})

function changeAvatar (id) {
    const img = $("#img" + id).attr('src');
    $.ajax({
        url : '/change_avatar',
        type : 'post',
        data : {
            'avatar' : id,
            'image'  : img,
        },
        success : function(result) {
            if (result.isSuccess) {
                $('#avtar-modal').modal('hide');
                $("#avatar_img").attr('src', img);
            }
        }
    })
}
