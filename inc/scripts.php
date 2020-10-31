<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.js"></script>
<script src="assets/plugins/popper/popper.js"></script>
<script src="assets/plugins/feather/feather.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/typeahead/typeahead.js"></script>
<script src="assets/plugins/typeahead/typeahead-active.js"></script>
<script src="assets/plugins/pace/pace.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/highlight/highlight.min.js"></script>
<!-- google chart Script -->
<script src="assets/plugins/google-chart/google-chart.min.js"></script>
<script src="assets/plugins/google-chart/google-sample.js"></script>
<!-- Required Script -->
<script src="assets/js/app.js"></script>
<script src="assets/js/avesta.js"></script>
<script src="assets/js/avesta-customizer.js"></script>

<script>
    $(() => {
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
</script>