function deposit(id) {
  
    let array_to_hide = [
        'mobile_no-error', 
        'name-error', 
        'email-error', 
        'utr_id-error', 
        'crypto_wallet_address-error',
        'crypto_transaction_id-error',
        'account_no_id-error',
        'account_holder_name_id-error',
        'ifsc_code_id-error',
        'bank_name_id-error',
        'upi_id-error',
    ];
    hide_field(array_to_hide);
    

    let amount = "";
    $("#payment_gateway_type").val(id);

    // Initially Show All Div 
    let arr_to_show = [
        'mobile_div',
        'name_div',
        'email_div',
        'cwallet_div',
        'ctxt_div',
        'bank_name_div',
        'account_no_div',
        'account_holder_name_div',
        'ifsc_code_div',
        'bank_name_div',
        'upi_div',
        'utr_div',
        'account_number_tag',
        'bank_name_tag',
        'mobile_number_tag',
        'name_tag',
    ];
    show_field(arr_to_show)

    arr_to_show = [
        'mobile_no',
        'name',
        'email',
        'utr_id',
        'crypto_wallet_address',
        'crypto_transaction_id',
        'account_no_id',
        'account_holder_name_id',
        'account_holder_name_id',
        'ifsc_code_id',
        'bank_name_id',
        'upi_id',
    ];
    show_field(arr_to_show)

    let min_amount;
    let max_amount;

    // according to id hide the div & set the text
    if(id == 1) {
        amount = $("#gpay_amount").val()
        min_amount = $("#gpay_min_amount").val();
        max_amount = $("#gpay_max_amount").val();
        error_id = "#gpay_amount-error";

        //Title
        $("#mobile_title").text("GPAY NUMBER");
        $("#name_title").text("GPAY NAME");
        $("#utr_title").text("UPI TRANSACTION ID");
        $("#mobile_number_title").text("GPAY NUMBER");
        $("#account_name_title").text("GPAY NAME");

        // Hide
        array_to_hide = [
            'email_div',
            'cwallet_div',
            'ctxt_div',
            'account_no_div',
            'account_holder_name_div',
            'ifsc_code_div',
            'bank_name_div',
            'account_number_tag',
            'bank_name_tag',
            'upi_div',
            'mobile_number_tag'
        ]
        hide_field(array_to_hide);
       
    } else if(id == 2) {
        amount = $("#phonepe_amount").val();
        min_amount = $("#phonepe_min_amount").val();
        max_amount = $("#phonepe_max_amount").val();
        error_id = "#phonepe_amount-error";

        //Title
        $("#mobile_title").text("PHONEPE NUMBER");
        $("#name_title").text("PHONEPE NAME");
        $("#email_title").text("EMAIL ID");
        $("#utr_title").text("UTR");
        $("#mobile_number_title").text("PhonePe NUMBER");
        $("#account_name_title").text("PhonePe NAME");

        //Hide
        array_to_hide = [
            'cwallet_div',
            'ctxt_div',
            'account_no_div',
            'account_holder_name_div',
            'ifsc_code_div',
            'bank_name_div',
            'account_number_tag',
            'bank_name_tag',
            'upi_div',
            'mobile_number_tag'
        ]
        hide_field(array_to_hide);
       
    } else if(id == 3) {
        amount = $("#upi_amount").val();
        min_amount = $("#upi_min_amount").val();
        max_amount = $("#upi_max_amount").val();
        error_id = "#upi_amount-error";

        $("#mobile_title").text("MOBILE NUMBER");
        $("#email_title").text("EMAIL ID");
        $("#upi_title").text("UPI ID");
        $("#utr_title").text("TRANSACTION ID");
        $("#mobile_number_title").text("UPI ID");
        $("#account_name_title").text("UPI NAME");

        //Hide
        array_to_hide = [
            'name_div',
            'cwallet_div',
            'ctxt_div',
            'account_no_div',
            'account_holder_name_div',
            'ifsc_code_div',
            'bank_name_div',
            'account_number_tag',
            'bank_name_tag',
        ]
        hide_field(array_to_hide);
      
    } else if(id == 4) {
        amount = $("#bitcoin_amount").val();
        min_amount = $("#bitcoin_min_amount").val();
        max_amount = $("#bitcoin_max_amount").val();
        error_id = "#bitcoin_amount-error";
        $("#bitcoin_amt_value").val(amount)
        // Title
        $("#cwallet_title").text("CRYPTO WALLET ADDRESS");
        $("#ctxt_title").text("CRYPTO TRANSACTION ID");
        
        //Hide
        array_to_hide = [
            'mobile_div',
            'name_div',
            'email_div',
            'utr_div',
            'account_no_div',
            'account_holder_name_div',
            'ifsc_code_div',
            'bank_name_div',
            'upi_div',
        ]
        hide_field(array_to_hide);
      
    } else if (id == 6 || id == 9) {
        if (id == 6) {
            amount = $("#net_bank_amount").val();
            min_amount = $("#net_bank_min_amount").val();
            max_amount = $("#net_bank_max_amount").val();
            error_id = "#net_bank_amount-error";
            
        } else {
            amount = $("#imps_amount").val();
            min_amount = $("#imps_min_amount").val();
            max_amount = $("#imps_max_amount").val();
            error_id = "#imps_amount-error";
        }
        $("#utr_title").text("Transaction Number/UTR");
        $("#mobile_number_title").text("IFSC CODE");
        $("#account_name_title").text("ACCOUNT NAME");
        // Hide
        array_to_hide = [
            'mobile_div',
            'name_div',
            'email_div',
            'cwallet_div',
            'ctxt_div',
            'upi_div',
        ]
        hide_field(array_to_hide);
       
    }

    $("#min_deposit_amount").val(min_amount)
    $("#max_deposit_amount").val(max_amount)
    if (parseFloat(amount) < parseFloat(min_amount)) {
        $(error_id).text(`Minimum ${parseFloat(min_amount).toFixed(2)}`)
        $(error_id).show();
    } else if (parseFloat(amount) > parseFloat(max_amount)) {
        $(error_id).text(`Maximum ${parseFloat(max_amount).toFixed(2)}`)
        $(error_id).show();
    } else {
        $(".pay-options").hide();
        $(".pay-static-form").show();
    }
    
    // Set Amount
    $("#deposit_amount").val(amount);
    $("#select_amount").text(amount);
   
}

function hide_field(field_id) {
    const length = field_id.length;
    for(i = 0; i < field_id.length; i++) {
        $("#" + field_id[i]).hide();
    }
}

function show_field(field_id) {
    const length = field_id.length;
    for(i = 0; i < field_id.length; i++) {
        $("#" + field_id[i]).show();
    }
}


$(".amount-tooltips .btn").click(function () {
    $(this).parent().find(".btn").removeClass('active');
    $(this).addClass('active');
    var amount = $(this).text();
    $(".amount").val(amount);
    const bitcoin_amt = $("#bitcoin_amount").val()
    $("#bitcoin_amt_value").text(bitcoin_amt)
    const upi_amt = $("#upi_amount").val()
    $("#upi_amount_txt").text(upi_amt)
});

$("[data-tab]").click(function () {
    var payment = $(this).attr('data-tab');
    var amount = $("#" + payment).find('.amount-tooltips .active').text();
    $(".amount").val(amount);
    $("#bitcoin_amt_value").text(amount)
    $("#upi_amount_txt").text(amount)

    // Hide Error Message
    $("#phonepe_amount-error").hide();
    $("#gpay_amount-error").hide();
    $("#upi_amount-error").hide();
    $("#bitcoin_amount-error").hide();
    $("#net_bank_amount-error").hide();
    $("#imps_amount-error").hide();
});

$(document).ready(function() {
    const username = $("#user_name").val();
    const password = $("#password").val();

    if (username != '' && username != undefined && password != '' && password != undefined) {
        $('#userpassword-modal').modal('show');
        $("#username_txt").text(username);
        $("#password_txt").text(password);
        
    } 
    const bitcoin_amt = $("#bitcoin_amount").val()
    $("#bitcoin_amt_value").text(bitcoin_amt)
    const upi_amt = $("#upi_amount").val()
    $("#upi_amount_txt").text(upi_amt)


    $("#send_to_phone").prop('disabled', true);
    $("#send_to_phone").css({
        'background-image' : 'linear-gradient(0deg,#9fa8b3,#becad7)',
        'box-shadow'       : 'none',
        'color'            : '#d4d9df',
    });

    //Hide Error Message
    $("#phonepe_amount-error").hide();
    $("#gpay_amount-error").hide();
    $("#upi_amount-error").hide();
    $("#bitcoin_amount-error").hide();
    $("#net_bank_amount-error").hide();
    $("#imps_amount-error").hide();
})

let payment_gateway_id = $("#payment_gateway_type").val();
$("#deposit_form").validate({   
    rules: {
        mobile_no : {
            required : function (element) {
                if (payment_gateway_id == 1 || payment_gateway_id == 2 || payment_gateway_id == 3) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        name : {
            required : function (element) {
                if (payment_gateway_id == 1 || payment_gateway_id == 3) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        email : {
            required : function (element) {
                if (payment_gateway_id == 1 || payment_gateway_id == 2) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        utr_id : {
            required : function (element) {
                if (payment_gateway_id == 1 || payment_gateway_id == 2 || payment_gateway_id == 3) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        crypto_wallet_address : {
            required : function (element) {
                if (payment_gateway_id == 4) {
                    return false;
                } else {
                    return true;
                }
            }
        },

        crypto_transaction_id : {
            required : function (element) {
                if (payment_gateway_id == 4) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        account_no : {
            required : function (element) {
                if (payment_gateway_id == 6 || payment_gateway_id == 9) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        account_holder_name : {
            required : function (element) {
                if (payment_gateway_id == 6 || payment_gateway_id == 9) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        ifsc_code : {
            required : function (element) {
                if (payment_gateway_id == 6 || payment_gateway_id == 9) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        bank_name : {
            required : function (element) {
                if (payment_gateway_id == 6 || payment_gateway_id == 9) {
                    return false;
                } else {
                    return true;
                }
            }
        },

        upi_id : {
            required : function (element) {
                if (payment_gateway_id == 3) {
                    return false;
                } else {
                    return true;
                }
            }
        },
      
    },
    
})

// Copy username & Password
$("#copy_detail").on('click', function() {
	const username = $("#username_txt").text();
	const password = $("#password_txt").text();
    
    $("#username_password").val(`Username : ${username} \nPassword : ${password}`);

    let copyText = document.getElementById("username_password");
	
	/* Prevent iOS keyboard from opening */
	copyText.readOnly = true;

	/* Change the input's type to text so its text becomes selectable */
	copyText.type = 'text';
    
	/* Select the text field */
	copyText.select();
    const copy_text = document.execCommand("copy");
	
    if (copy_text) {
        toastr.success("COPIED TO THE CLIPBOARD!")
    }
	/* Change the input's type back to hidden */
	copyText.type = 'hidden';
    
})


$("#send_to_email").on('click', function(event) {
    event.preventDefault();
    $(this).text("SENT");
    const email = $("#email_address").val();
    $.ajax({
        url  : '/send_to_email',
        type : 'post',
        data : {
            'email' : email,
        },
        success : function(response) {
        }
    })
})

$(".amount").on('click', function () {
    //Hide Error Message
    $("#phonepe_amount-error").hide();
    $("#gpay_amount-error").hide();
    $("#upi_amount-error").hide();
    $("#bitcoin_amount-error").hide();
    $("#net_bank_amount-error").hide();
    $("#imps_amount-error").hide();
})

$(".amount").on('input', function() {
    const id = $(this).attr('id');
    const amount = $("#" + id).val();

    const amount_arr = amount.split("");
    
    if (amount.length == 0) {
        $("#" + id).val('0');
    } else {
        if (amount_arr[0] == 0) {
            amount_arr.shift();      
            const new_amount = amount_arr.join("");
            $("#" + id).val(new_amount);
        }
    }
})


// Copy Owner Details for Deposit
$(".copy_owner_details").on('click', function() {
	
    const id = $(this).attr('id');
    let copyText;
    if (id == 'copy_acc_no') {
        copyText = document.getElementById("acc_no_hide");
    } else if (id == 'copy_mobile_no') {
        copyText = document.getElementById("mobile_no_hide");
    } else if (id == 'copy_name') {
        copyText = document.getElementById("name_hide");
    } else if (id == 'copy_bank_name') {
        copyText = document.getElementById("bank_name_hide");
    }
	
	/* Prevent iOS keyboard from opening */
	copyText.readOnly = true;

	/* Change the input's type to text so its text becomes selectable */
	copyText.type = 'text';
    
	/* Select the text field */
	copyText.select();
    const copy_text = document.execCommand("copy");
	
    if (copy_text) {
        toastr.success("COPIED TO THE CLIPBOARD!")
    }
	/* Change the input's type back to hidden */
	copyText.type = 'hidden';
    
})

function paymentGatewayDetails(id) {
    $.ajax({
        url  : 'payment_gateway_details',
        type : 'get',
        data : {
            'id' : id,
        },
        success : function(response) {
            if (response.isSuccess) {
                $("#barcode").attr('src',response.data.barcode);
                $("#owner_name").text(response.data.user_name);
                $("#name_hide").val(response.data.user_name);

                if (id == 1 || id == 2) {
                    $("#owner_mobile_no").text(response.data.mobile_no);
                    $("#mobile_no_hide").val(response.data.mobile_no);
                } else if (id == 3) {
                    $("#owner_mobile_no").text(response.data.upi_id);
                    $("#mobile_no_hide").val(response.data.upi_id);
                } else if (id == 6 || id == 9) {
                    $("#owner_account_number").text(response.data.account_number);
                    $("#owner_mobile_no").text(response.data.ifsc_code);
                    $("#owner_bank_name").text(response.data.bank_name);

                    $("#acc_no_hide").val(response.data.account_number)
                    $("#mobile_no_hide").val(response.data.ifsc_code)
                    $("#bank_name_hide").val(response.data.bank_name)
                }
            }
        }
    })
}