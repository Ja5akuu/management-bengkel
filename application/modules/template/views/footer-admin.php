<footer class="footer text-center">
	All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url() ?>assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url() ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url() ?>dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url() ?>dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url() ?>dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- select -->
 <script src="<?php echo base_url() ?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/select2/dist/js/select2.min.js"></script>
<!-- select -->
<!-- Charts js Files -->
<script src="<?php echo base_url() ?>assets/libs/flot/excanvas.js"></script>
<script src="<?php echo base_url() ?>assets/libs/flot/jquery.flot.js"></script>
<script src="<?php echo base_url() ?>assets/libs/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url() ?>assets/libs/flot/jquery.flot.time.js"></script>
<script src="<?php echo base_url() ?>assets/libs/flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url() ?>assets/libs/flot/jquery.flot.crosshair.js"></script>
<script src="<?php echo base_url() ?>assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url() ?>dist/js/pages/chart/chart-page-init.js"></script>
<script src="<?php echo base_url() ?>assets/libs/chart/jquery.peity.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/chart/matrix.charts.js"></script>
<script src="<?php echo base_url() ?>assets/libs/chart/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/chart/turning-series.js"></script>
<script src="<?php echo base_url() ?>dist/js/pages/chart/chart-page-init.js"></script>
<!-- this page js -->
<script src="<?php echo base_url() ?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="<?php echo base_url() ?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="<?php echo base_url() ?>assets/extra-libs/DataTables/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url() ?>dist/js/custom.min.js"></script>
<script>
    $(".select2").select2();
</script>
<!-- datatable -->
<script>
	$('#zero_config').DataTable();

	// js confirmation
	function confirmDialog() {
       return confirm('Are you sure?')
   }

     

    /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            format:'yyyy-mm-dd',
            todayHighlight: true
        });

        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose1').datepicker({
            autoclose: true,
            format:'yyyy-mm-dd',
            todayHighlight: true
        });
</script>
</body>

</html>