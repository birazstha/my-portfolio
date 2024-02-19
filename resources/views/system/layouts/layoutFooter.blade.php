<script src="{{ asset('system/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('system/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

{{-- Bootstrap 5 --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<!-- Bootstrap 4 -->
<script src="{{ asset('system/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('system/assets/plugins/chart.js/Chart.min.js') }}"></script>


<!-- daterangepicker -->
<script src="{{ asset('system/assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('system/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


<!-- AdminLTE App -->
<script src="{{ asset('system/assets/dist/js/adminlte.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.upload').on('change', function(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.preview').attr('src', e.target.result).removeClass('d-none');
                };
                reader.readAsDataURL(input.files[0]);
            }
        });

        $('.hero-upload').on('change', function(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.hero-preview').attr('src', e.target.result).removeClass('d-none');
                };
                reader.readAsDataURL(input.files[0]);
            }
        });

        $('.small-upload').on('change', function(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.small-preview').attr('src', e.target.result).removeClass('d-none');
                };
                reader.readAsDataURL(input.files[0]);
            }
        });
    });
</script>

<script>
    $('#file-upload').change(function() {
        var i = $(this).prev('label').clone();
        var file = $('#file-upload')[0].files[0].name;
        $(this).prev('label').text(file);
    });
</script>

@yield('js')
