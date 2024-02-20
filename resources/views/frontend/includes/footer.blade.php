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


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

{{-- Owl Caraosel --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- testimonials -->
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                700: {
                    items: 2,
                    nav: false,
                },
                1200: {
                    items: 4,
                    nav: false,
                },
            },
        })


    })
</script>


<!-- core  -->
<script src="{{ asset('frontend/assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>
<!-- bootstrap 3 affix -->
<script src="{{ asset('frontend/assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

<!-- steller js -->
<script src="{{ asset('frontend/assets/js/steller.js') }}"></script>

</body>

</html>
