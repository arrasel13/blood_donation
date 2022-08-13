    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- jQuery UI-->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!--    Toaster-->
    <script src="assets/js/toastr.min.js"></script>
    <!-- Default JS -->
    <script src="assets/js/script.js"></script>

    <script>
        $( function() {
            $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
            $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
        } );
    </script>

    <?php include_once './includes/toastr.php'; ?>

</body>
</html>