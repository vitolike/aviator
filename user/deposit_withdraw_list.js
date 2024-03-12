$(document).ready(function(){
 
    $('#withdraw_report').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        "ordering": true,
        "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]], 
        ajax: {
            url  : "/api/user/withdrawal_list",
            method : 'post',
            "dataSrc": function (response) {
                if (response.isSuccess) {
                    if(response.data.aaData.length != undefined && response.data.aaData.length > 0) {
                        response.recordsTotal = response.data.aaData.length;
                        response.recordsFiltered = response.data.aaData.length;
                        response.draw = response.data.draw;
                        console.log(response);
                        return response.data.aaData;
                    } else {
                        response.recordsTotal = 0;
                        response.recordsFiltered = 0;
                        response.draw = response.data.draw;
                        return [];
                    }
                } else {
                    response.recordsTotal = 0;
                    response.recordsFiltered = 0;
                    response.draw = response.data.draw;
                    return [];
                }
            },
        },
      
        columns: [
            { data: 'id', orderable: false},
            { data: 'platform', orderable: false },
            { data: 'amount', orderable: false },
            { data: 'remark', orderable: false},
            { data: 'status', orderable: false},
            { data: 'created_at', orderable: false },
        ],
    });

});

$(".nav-item").on('click', function() {
    const tab_id = $(this).attr("id");
    if(tab_id == 'withdraw') {
        $("#deposit_list").removeClass('active');
        $("#withdraw_list").addClass('active');
        $(".head_title").text('Withdraw Requests');
    }
    if(tab_id == 'deposit') {
        $("#withdraw_list").removeClass('active');
        $("#deposit_list").addClass('active');
        $(".head_title").text('Deposit Requests');
    }
})

var table = '';
deposit('', '');

function deposit(from_date, to_date) {
    if (table != '') {
        table.destroy();
    }

    table = $('#deposit_report').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        "ordering": true,
        "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]], 
        ajax: {
            url    : "/deposit_list",
            method : 'post',
            data   : {
                'from_date' : from_date,
                'to_date'   : to_date,
            },
            "dataSrc": function (response) {
                if (response.isSuccess) {
                    if(response.data.aaData.length != undefined && response.data.aaData.length > 0) {
                        response.recordsTotal = response.data.iTotalRecords;
                        response.recordsFiltered = response.data.iTotalDisplayRecords;
                        response.draw = response.data.draw;
                        console.log(response);
                        return response.data.aaData;
                    } else {
                        response.recordsTotal = 0;
                        response.recordsFiltered = 0;
                        response.draw = response.data.draw;
                        return [];
                    }
                } else {
                    response.recordsTotal = 0;
                    response.recordsFiltered = 0;
                    response.draw = response.data.draw;
                    return [];
                }
            },
        },
      
        columns: [
            { data: 'index_no', orderable: false},
            { data: 'payment_gateway_name', orderable: false },
            { data: 'amount', orderable: false },
            { data: 'remark', orderable: false},
            { data: 'status', orderable: false},
            { data: 'created_at', orderable: false },
        ],
    });

}

$("#searchDeposit").on('click', function() {
    const from_date = $("#from_date").val();
    const to_date = $("#to_date").val();
    if (from_date > to_date) {
        toastr.error("From Date is smaller than To Date");
    } else {
        deposit(from_date, to_date)
    }
})