function withdraw(id, min_withdraw_amount) {

    $("#min_withdraw_amount").val(min_withdraw_amount);
    // Initially Hide Error Message
    $("#amount-error").hide();
    $("#account_no-error").hide();
    $("#account_holder_name-error").hide();
    $("#name-error").hide();
    $("#ifsc_code-error").hide();
    $("#upi_id-error").hide();
    $("#mobile_no-error").hide();
    $("#email-error").hide();
    $("#address-error").hide();
    $("#crypto_wallet_address-error").hide();

    // Initially Show All Div 
    $("#account_div").show();
    $("#acc_holder_name_div").show();
    $("#name_div").show();
    $("#ifsc_code_div").show();
    $("#upi_id_div").show();
    $("#mobile_div").show();
    $("#email_div").show();
    $("#address_div").show();
    $("#crypto_wallet_div").show();

    //Clear the input field
    $("#amount").val('');
    $("#account_no").val('');
    $("#account_holder_name").val('');
    $("#name").val('');
    $("#ifsc_code").val('');
    $("#upi_id").val('');
    $("#mobile_no").val('');
    $("#email").val('');
    $("#address").val('');
    $("#crypto_wallet_address").val('');
    $("#payment_gateway_type").val(id);

    // according to id hide the div
    if(id == 1 || id == 2 || id == 3 || id == 5 || id == 9) {
        $("#name_div").hide();
        $("#email_div").hide();
        $("#address_div").hide();
        $("#crypto_wallet_div").hide();
    } else if(id == 6) {
        $("#acc_holder_name_div").hide();
        $("#upi_id_div").hide();
        $("#mobile_div").hide();
        $("#crypto_wallet_div").hide();
    } else if(id == 7) {
        $("#account_div").hide();
        $("#acc_holder_name_div").hide();
        $("#name_div").hide();
        $("#ifsc_code_div").hide();
        $("#upi_id_div").hide();
        $("#email_div").hide();
        $("#address_div").hide();
        $("#crypto_wallet_div").hide();
    } else if(id == 4 || id == 8) {
        $("#account_div").hide();
        $("#acc_holder_name_div").hide();
        $("#name_div").hide();
        $("#ifsc_code_div").hide();
        $("#upi_id_div").hide();
        $("#mobile_div").hide();
        $("#email_div").hide();
        $("#address_div").hide();
    }
}

jQuery.validator.addMethod("wallet_balance", function(value) {
    value_int = parseInt(value);
    let wallet_balance =  $("#balance").val();
    wallet_balance = parseInt(wallet_balance);
    return value_int < wallet_balance;
},`Insufficient general wallet balance.`);

var min_amount;
jQuery.validator.addMethod("min_withdraw_amount", function(value) {
    min_amount = $("#min_withdraw_amount").val();
    return parseFloat(value) >= min_amount;
}, function () {return 'Minimum ' + min_amount + "."});

const payment_gateway_id = $('#payment_gateway_type').val()

$("#withdraw_form").validate({
    rules: {
        amount : {
            required            : true,
            wallet_balance      : true,
            min_withdraw_amount : true,
        },
        account_no : {
            required : function (element) {
                if (payment_gateway_id == 1 || payment_gateway_id == 2 || payment_gateway_id == 3 || payment_gateway_id == 5 || payment_gateway_id == 6) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        account_holder_name : {
            required : function (element) {
                if (payment_gateway_id == 1 || payment_gateway_id == 2 || payment_gateway_id == 3 || payment_gateway_id == 5) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        name : {
            required : function (element) {
                if (payment_gateway_id == 6) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        ifsc_code : {
            required : function (element) {
                if (payment_gateway_id == 1 || payment_gateway_id == 2 || payment_gateway_id == 3 || payment_gateway_id == 5 || payment_gateway_id == 6) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        upi_id : {
            required : function (element) {
                if (payment_gateway_id == 1 || payment_gateway_id == 2 || payment_gateway_id == 3 || payment_gateway_id == 5) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        mobile_no : {
            required : function (element) {
                if (payment_gateway_id == 1 || payment_gateway_id == 2 || payment_gateway_id == 3 || payment_gateway_id == 5 || payment_gateway_id == 7) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        email : {
            required : function (element) {
                if (payment_gateway_id == 6) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        address : {
            required : function (element) {
                if (payment_gateway_id == 6) {
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
    },
    
})