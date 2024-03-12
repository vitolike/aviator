
$(document).ready(function () {

    setTimeout(owlCarouselSliderCustom, 200);

    function owlCarouselSliderCustom() {
        $(".collection-page").removeClass('d-none');
        $('.owl-carousel').owlCarousel({
            lazyLoad:true,
            loop: true,
            margin: 0,
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    }

    
    //$(".list-body0").niceScroll({ cursorborder: "", cursorcolor: "#333", boxzoom: false });
    //$(".list-body1").niceScroll({ cursorborder: "", cursorcolor: "#333", boxzoom: false });
    //$(".list-body2").niceScroll({ cursorborder: "", cursorcolor: "#333", boxzoom: false });
    //$(".modal-body").mCustomScrollbar({
    //    scrollInertia: 100,
    //    theme: "dark-3"
    //});
    
    // scrollFunction();
    // function scrollFunction() {
    //     console.log('-----------------scrollFunction------------------');
    //     $(".list-body").mCustomScrollbar({
    //         scrollInertia: 50,
    //         theme: "dark-3"
    //     });
    // }
    setTimeout(function () {
        $(".niceCountryInputMenuDropdownContent").mCustomScrollbar({
            //scrollInertia: 50,
            theme: "dark-3"
        });
    }, 500);

    //$(".cc-picker").click(function () {
    //    setTimeout(function () {
    //        $(".cc-picker-code-list").mCustomScrollbar({
    //            //scrollInertia: 50,
    //            theme: "dark-3"
    //        });
    //    }, 500);
    //});
    

    $(".options").mCustomScrollbar({
        scrollInertia: 50,
        theme: "dark-3"
    });
    // $(".tabs-navs .nav-item").click(function () {
    //     $(this).parent().parent().find(".nav-item").removeClass('active');
    //     //$(".tabs-navs .nav-item").removeClass('active');
    //     $(this).addClass('active');
       
    // });
    // $(".auto-btn").click(function () {
    //     $(this).parent().parent().parent().find(".second-row").addClass('show');
    // });
    // $(".bet-btn").click(function () {
    //     $(this).parent().parent().parent().find(".second-row").removeClass('show');
    // });
    // $(".navigation-switcher .slider").click(function () {
    //     $(".slider").removeClass('active');
    //     //$(".tabs-navs .nav-item").removeClass('active');
    //     $(this).addClass('active');

    // });
    $(".histry-toggle").click(function () {
        $(this).parent().toggleClass('show');
    });

    $(function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    });
    $(".niceCountryInputSelector").each(function (i, e) {
        new NiceCountryInput(e).init();
    });
    $(function () {
        $("#phoneField1").CcPicker();
        $("#phoneField1").CcPicker("setCountryByCode", "es");
        $("#phoneField1").on("countrySelect", function (e, i) {
            alert(i.countryName + " " + i.phoneCode);
        });
    });
    $(".payment-btn").click(function () {
        var tab_id = $(this).attr('data-tab');
        $(".payment-btn").removeClass('active');
        $(this).addClass('active');
        $('.deposite-box').removeClass('show');
        $("#" + tab_id).addClass('show');
    });
    $(".custom-form-show").click(function () {
        $(".pay-options").hide();
        $(".pay-static-form").show();
    });
    $(".form-back").click(function () {
        $(".pay-static-form").hide();
        $(".pay-options").show();
    });

    $(".accrodian-btn").click(function () {
       // var acc_id = $(this).attr('data-tab');
        $(this).parent().parent().toggleClass('active');
       //$("#" + acc_id).toggleClass('hide');
    });    
});
$(window).resize(function () {
    $(".list-body").mCustomScrollbar("destroy");
    $(".list-body").mCustomScrollbar({
        scrollInertia: 50,
        theme: "dark-3"
    });
});

$(function () {
    var LoginformControl = $(".login-form .login-controls input");
    $(LoginformControl).focusin(function (e) {
        $(e.target).parents().parents().addClass('input-focus');
    });
    $(LoginformControl).focusout(function (e) {
        $(e.target).parents().parents().removeClass('input-focus');
    });
})



$('.custom-select').each(function () {
    var $this = $(this),
        numberOfOptions = $(this).children('option').length;
    $this.addClass('s-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="styledSelect"></div>');
    var $styledSelect = $this.next('div.styledSelect');
    $styledSelect.text($this.children('option').eq(0).text());
    var $list = $('<ul />', {
        'class': 'options'
    }).insertAfter($styledSelect);
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            id: $this.children('option').eq(i).val()
        }).appendTo($list);
    }
    var $listItems = $list.children('li');
    $styledSelect.click(function (e) {
        e.stopPropagation();
        //$('div.styledSelect.active').each(function () {
        //    $(this).removeClass('active').next('ul.options').hide();
        //});
        $(this).toggleClass('active').next('ul.options').toggle();
    });
    $listItems.click(function (e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('id'));
        $list.hide();
    });
    $(document).click(function () {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});
//function GetWidth() {
//    var getWidth = $('.grid-view').width();
//    $('.deposite-box').css("width", getWidth).css("left", getLeft.left - getWidth);
//}