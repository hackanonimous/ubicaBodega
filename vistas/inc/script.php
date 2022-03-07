<!-- jQuery -->
<script src="<?php echo SERVERURL;?>vistas/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo SERVERURL;?>vistas/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo SERVERURL;?>vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo SERVERURL;?>vistas/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo SERVERURL;?>vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo SERVERURL;?>vistas/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo SERVERURL;?>vistas/plugins/chart.js/Chart.min.js"></script>
<!-- JQVMap -->
<script src="<?php echo SERVERURL;?>vistas/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo SERVERURL;?>vistas/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo SERVERURL;?>vistas/plugins/moment/moment.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo SERVERURL;?>vistas/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo SERVERURL;?>vistas/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo SERVERURL;?>vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SERVERURL;?>vistas/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo SERVERURL;?>vistas/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?php echo SERVERURL;?>vistas/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  });
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>