<script src="{{ asset('system/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('system/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('system/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('system/assets/plugins/chart.js/Chart.min.js') }}"></script>


<!-- daterangepicker -->
<script src="{{ asset('system/assets/') }}plugins/moment/moment.min.js"></script>
<script src="{{ asset('system/assets/') }}plugins/daterangepicker/daterangepicker.js"></script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


<!-- AdminLTE App -->
<script src="{{ asset('system/assets/dist/js/adminlte.js') }}"></script>

@yield('js')
