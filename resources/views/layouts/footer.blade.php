@section('footer')
<footer id="footer" style="margin-top: 100px">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <img src="{{asset('assets/img/about/logo.jpg')}}" class="w-100">
                        <div class="social-links mt-3">
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bx-envelope"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
{{--                    <h4>Useful Links</h4>--}}
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Գլխավոր</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Նորություններ</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Կառույցներ</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">ITOK</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Պատմություն</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
{{--                    <h4>Our Services</h4>--}}
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Մշակույթի տուն</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Գյուղապետարան</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Դպրոց</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Մանկապարտեզ</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Ամբուլատորիա</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Եկեղեցի</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
{{--                    <h4>Մշակույթ</h4>--}}
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Ամետիստ</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Գեղարվեստի դպրոց</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Կավագործություն</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Կիթառի խմբակ</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Թեքվանդոյի խմբակ</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <strong><span>Ոսկեվան</span></strong>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
            Designed by <a href="https://itok.am" target="_blank">ITOK</a>
        </div>
    </div>

</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="{{asset('/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('/assets/js/main.js')}}"></script>


@endsection
