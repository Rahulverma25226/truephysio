<footer>
    <section class="bg-accent-color-1">
        <div class="r-container section border-bottom">
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-3 text-white">
                        <div class="logo-container">
                            <a href="{{ route('index') }}"><img src="{{asset('image/logo22.jpg')  }}" alt="" class="img-fluid"></a>
                        </div>
                        <p>
                            Being healthy is more than just the absence of illness; it's a holistic state of well-being that encompasses physical, mental, and emotional harmony. It's about making conscious choices every day, embracing a balanced diet, staying physically active, and nurturing positive thoughts...
                        </p>
                        <div class="social-container">
                            <a href="#" class="social-item">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                            <h5 class="font-2 mb-3">Services</h5>
                            <ul class="list gap-2">
                                <li>
                                    <a href="{{ route('index') }}" class="d-flex flex-row gap-3 align-items-center text-dark">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="d-flex flex-row gap-3 align-items-center text-dark">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        About us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}" class="d-flex flex-row gap-3 align-items-center text-dark">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('gallery') }}" class="d-flex flex-row gap-3 align-items-center text-dark">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('appointment') }}" class="d-flex flex-row gap-3 align-items-center text-dark">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        Appointment
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="d-flex flex-row gap-3 align-items-center text-dark">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        Contact us
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <h5 class="font-2 mb-3">Contact us</h5>
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex flex-row align-items-center gap-3 text-white">
                            <span class="fs-2"><i class="fa-solid fa-phone"></i></span>
                            <div class="d-flex flex-column">
                                <span>Phone</span>
                                <span><?= $comp_phone; ?></span>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center gap-3 text-white">
                            <span class="fs-2">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <div class="d-flex flex-column">
                                <span>Email</span>
                                <span><?= $comp_email1; ?> </span>
                                <span><?= $comp_email2; ?> </span>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center gap-3 text-white">
                            <span class="fs-2">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <div class="d-flex flex-column">
                                <span>Address</span>
                                <span><b>Branch: 1 </b><?= $comp_branch1; ?></span><br>
                                <span><b>Branch: 2 </b><?= $comp_branch2; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 text-white text-center " style="margin: 40px;">
            <p class="m-0">Copyright 2023 © All Right Reserved Design by truephysio</p>
        </div>
    </section>
</footer>

<script src="{{ ('asset(js/vendor/fslightbox.js'); }}"></script>
</body>


</html>
