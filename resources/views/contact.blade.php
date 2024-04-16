@include('header')

<main>
    <!-- Banner -->
    <section class="section position-relative" style="background-image: url(image/image-1920x900-5.jpg);">
        <div class="image-overlay"></div>
        <div class="r-container position-relative h-100" style="z-index: 2;">
            <div class="d-flex flex-column gap-3">
                <h3 class="accent-color font-1 fw-semibold">Contact Us</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb active" aria-current="page">&nbsp;&nbsp;/ Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="r-container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-column gap-2">
                        <h6 class="fw-semibold font-1 accent-color-1 ls-2">CONTACT US</h6>
                        <h3 class="accent-color font-1 fw-semibold">Get In Touch</h3>
                        <p class="font-2 fw-light">

                        </p>
                        <div class="row row-cols-1 row-cols-lg-2">
                            <div class="col mb-3">
                                <div class="d-flex flex-row align-items-center gap-3 accent-color">
                                    <span class="fs-2"><i class="fa-solid fa-phone"></i></span>
                                    <div class="d-flex flex-column">
                                        <h5 class="m-0">Phone</h5>
                                        <small><span><?= $comp_phone; ?></span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="d-flex flex-row align-items-center gap-3 accent-color">
                                    <span class="fs-2">
                                        <i class="fa-solid fa-envelope"></i>
                                    </span>
                                    <div class="d-flex flex-column">
                                        <h5 class="m-0">Email</h5>
                                        <small><span><?= $comp_email1; ?></span></small>
                                        <small><span><?= $comp_email2; ?></span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="d-flex flex-row align-items-center gap-3 accent-color">
                                    <span class="fs-2">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    <div class="d-flex flex-column">
                                        <h5 class="m-0">Address</h5>
                                        <small><b>Branch: 1 </b><span><?= $comp_branch1; ?></span></small>
                                        <small><b>Branch: 2 </b><span><?= $comp_branch2; ?></span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="d-flex flex-row align-items-center gap-3 accent-color">
                                    <div class="d-flex flex-column" style="margin-top: 25px;">
                                        <small><b>Branch: 3 </b><span><?= $comp_branch3; ?></span></small>
                                        <small><b>Branch: 4 </b><span><?= $comp_branch4; ?></span></small>
                                        <small><b>Branch: 5 </b><span><?= $comp_branch5; ?></span></small>
                                        <small><b>Branch: 6 </b><span><?= $comp_branch6; ?></span></small>
                                        <small><b>Branch: 7 </b><span><?= $comp_branch7; ?></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom border-3 my-4" style="--bs-border-color: var(--accent-color-1);">
                        </div>
                        <div class="d-flex flex-column">
                            <h5>Follow Us On : </h5>
                            <div class="social-container">
                                <a href="https://www.facebook.com/" class="social-item bg-accent-color-1" style="width: 2.3rem; height: 2.3rem;">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="https://www.twitter.com/" class="social-item bg-accent-color-1" style="width: 2.3rem; height: 2.3rem;">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="https://www.youtube.com/" class="social-item bg-accent-color-1" style="width: 2.3rem; height: 2.3rem;">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                                <a href="https://www.instagram.com/" class="social-item bg-accent-color-1" style="width: 2.3rem; height: 2.3rem;">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="r_container">
            <div class="mb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2676.32774834721!2d77.3499210097921!3d28.418256322513013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdda1f9f1cec1%3A0xec7dae8452988837!2sResidency!5e1!3m2!1sen!2sin!4v1710402847243!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

</main>
@include('footer')
