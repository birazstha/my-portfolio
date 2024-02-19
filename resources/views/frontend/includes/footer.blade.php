<!-- Page Footer -->
<footer class="page-footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <p>Copyright
                    {{ now()->year }}
                    &copy; <a href="" target="_blank">{{ frontendConfig('name') }}</a>
                </p>
            </div>
            <div class="col-sm-6">
                <div class="socials">
                    @include('frontend.home.links')
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End of page footer -->

<!-- core  -->
<script src="{{ asset('frontend/assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>
<!-- bootstrap 3 affix -->
<script src="{{ asset('frontend/assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

<!-- steller js -->
<script src="{{ asset('frontend/assets/js/steller.js') }}"></script>

</body>

</html>
