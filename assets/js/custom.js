$(() => {
    const searchForm = $(".search-form-panel");

    $(".btn-filter").click(()=>{
        searchForm.css("display") == "block"
            ? searchForm.slideUp(400)
            : searchForm.slideDown(200)
    })

    $(".show-deep-search").click(()=>{
        $(".deep-search").css("display") == "none"
            ? $(".deep-search").slideDown(400)
            : $(".deep-search").slideUp(200)
    })

    const checkBox = $(".show-actions-menu");
    const getDown = $(".get-down");
    const actionsMenu = $(".actions-menu");
    
    checkBox.click(() => {
        if(getDown.hasClass("margin-top-60")){
            getDown.removeClass("margin-top-60");
            actionsMenu.slideUp(600);
        } else {
            getDown.addClass("margin-top-60");
            actionsMenu.slideDown(200);
        }
    })

    $(".close-actions-menu").click(()=>{
        checkBox.prop("checked", false);
        getDown.removeClass("margin-top-60");
        actionsMenu.slideUp(600);
    })
})


// Important script for Today Moday datepicker
$(function(){
    'use strict'
    
    var dateFormat = 'mm/dd/yy',
    from = $('#dateFrom')
    .datepicker({
        defaultDate: '+1w',
        numberOfMonths: 2
    })
    .on('change', function() {
        to.datepicker('option','minDate', getDate( this ) );
    }),
    to = $('#dateTo').datepicker({
        defaultDate: '+1w',
        numberOfMonths: 2
    })
    .on('change', function() {
        from.datepicker('option','maxDate', getDate( this ) );
    });
    
    function getDate( element ) {
        var date;
        try {
        date = $.datepicker.parseDate( dateFormat, element.value );
        } catch( error ) {
        date = null;
        }
    
        return date;
    }
});