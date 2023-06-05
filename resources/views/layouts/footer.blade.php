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
                        @php
                            $footer_menu = \App\Models\Menu::where('main_menu', 1)->get();
                        @endphp
                    @foreach($footer_menu as $value)
                        @if($value->parent_id == 0 && $value->is_drop == 0)
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ $value->url }}">{{$value->name}}</a></li>
                        @endif
                    @endforeach
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
{{--                    <h4>Our Services</h4>--}}
                    <ul>
                        @php
                            $footer_drop = \App\Models\Menu::where('parent_id', '=', 4)->get();
                        @endphp
                        @foreach($footer_drop as $value)
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ $value->url }}">{{$value->name}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <ul>
                        @php
                            $footer_drop = \App\Models\Culturex::all();
                        @endphp
                        @foreach($footer_drop as $drop_menu)
                            <li><i class="bx bx-chevron-right"></i> <a href="/buildings/{{ $drop_menu->url }}">{{ $drop_menu->name }}</a></li>
                        @endforeach
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
