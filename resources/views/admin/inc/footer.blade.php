
{{-- https://themesbrand.com/velzon/html/default/index.html --}}
<!-- apexcharts -->

     <script src="{{ config('app.url') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('app.url') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ config('app.url') }}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ config('app.url') }}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ config('app.url') }}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="{{ config('app.url') }}/assets/js/pages/datatables.init.js"></script>
    <!-- App js -->
    <script src="{{ config('app.url') }}/assets/js/app.js"></script>
<!-- App js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<script>
   //  toastr.error("errorerror");
  @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
  @endif
  @if(Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
  @endif
  @if(Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
  @endif
  @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
  @endif
</script>

