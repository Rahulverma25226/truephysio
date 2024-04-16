@include('header')

<main>
    <!-- Banner -->
    <section class="section position-relative" style="background-image: url(image/image-1920x900-5.jpg);">
        <div class="image-overlay"></div>
        <div class="r-container position-relative h-100" style="z-index: 2;">
            <div class="d-flex flex-column gap-3">
                <h3 class="accent-color font-1 fw-semibold">About us</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class=" active" aria-current="page">&nbsp;&nbsp;/ About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- ABOUT TUDEBON -->
    <section class="section">
        <div class="r-container">
            <div class="row row-cols-1 row-cols-lg-2">
                @if (count($aboutdata) > 0)
                    @foreach ($aboutdata as $newabout)
                        <div class="col mb-3">
                            <div class="position-relative ps-5">
                                <a href="{{ asset('storage/aboutImages/' . $newabout->image) }}" data-fslightbox="gallery">
                                    <img src="{{ asset('storage/aboutImages/' . $newabout->image) }}" alt=""
                                        class="img-fluid rounded-4">
                                </a>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column gap-2 h-100 justify-content-center px-3">
                                <h6 class="fw-semibold font-1 accent-color-1 ls-2">ABOUT TRUEPHYSIO</h6>
                                <h5 class="accent-color font-1 fw-semibold">{{ $newabout->title }}</h5>
                                <p class="font-2 fw-light">
                                    {{ $newabout->short_about }}
                                </p>

                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No About more</p>
                @endif
            </div>
        </div>
    </section>
    <section class="section position-relative bg-attach-fixed"
        style="background-image: url(image/image-1920x900-2.jpg);">
        <div class="image-overlay-2"></div>
        <div class="r-container position-relative mb-5" style="z-index: 2;">
            <div class="w-100 row row-cols-1 row-cols-lg-4 text-center text-white">
                <div class="col mb-3">
                    <div class="d-flex flex-column">
                        <h3><i class="fa-solid fa-users" style="color: white;"></i></h3>
                        <h3 class="font-1 fw-semibold m-0" style="color: white;">1,200<sup class="fw-normal">+</sup>
                        </h3>
                        <span class="font-1" style="color: white;">Happy Patients</span>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="d-flex flex-column">
                        <h3><i class="fa-solid fa-award" style="color: white;"></i></h3>
                        <h3 class="font-1 fw-semibold m-0" style="color: white;">15<sup class="fw-normal">Th</sup></h3>
                        <span class="font-1" style="color: white;">Years of Experience</span>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="d-flex flex-column">
                        <h3><i class="fa-solid fa-user-doctor" style="color: white;"></i></h3>
                        <h3 class="font-1 fw-semibold m-0" style="color: white;">250<sup class="fw-normal">+</sup></h3>
                        <span class="font-1" style="color: white;">Therapist & Staff</span>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="d-flex flex-column">
                        <h3><i class="fa-solid fa-hospital" style="color: white;"></i></h3>
                        <h3 class="font-1 fw-semibold m-0" style="color: white;">75<sup class="fw-normal">+</sup></h3>
                        <span class="font-1" style="color: white;">Branch Clinic</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-color-2">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 text-center">
                @if (count($aboutdata) > 0)
                    @foreach ($aboutdata as $visionmission)
                        <h3 class="accent-color font-1 fw-semibold">Our Vision & Mission</h3>
                        <div class="row row-cols-1 row-cols-lg-2 text-start">
                            <div class="col">
                                <div class="accordion" id="accordionExample">
                                    <div>
                                        <h5 style="margin-top: 10px; margin-bottom:10px;">Our Vision</h5>
                                    </div>
                                    <p>
                                        {{ $visionmission->ourvision }}
                                    </p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="accordion" id="accordionExample2">
                                    <div class="accordion-item">
                                        <div>
                                            <h5 style="margin-top: 10px; margin-bottom:10px;">Our Mission</h5>
                                        </div>
                                        <p>{{ $visionmission->ourmission }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No more</p>
                @endif
            </div>
        </div>
        </div>
    </section>


    <!-- THERAPIST -->
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 text-center">
                <h3 class="accent-color font-1 fw-semibold">Meet Our Specialist</h3>
                <p class="font-2 fw-light mx-auto my-0" style="max-width: 912px;">

                </p>
                <div class="w-100 row row-cols-1 row-cols-lg-4 my-4">

    @foreach ($teamdata as $team)
        <div class="col mb-3">
            <div class="team-container">
                <div class="team-image">
                    <img src="{{ asset('storage/TeamImages/' . $team->image) }}" alt=""
                        class="img-fluid">
                </div>
                <div class="team-detail font-1">
                    <h5 class="m-0">{{ $team->name }}</h5>
                    <span class="accent-color-1">{{ $team->expert }}</span>
                </div>
            </div>
        </div>
    @endforeach


                </div>
                <!-- <div class="d-flex justify-content-center">
                    <a href="#" class="btn button font-1 ls-2 fw-semibold fs-7 py-3 px-4">VIEW ALL THERAPIST</a>
                </div> -->
            </div>
        </div>
    </section>

    <section class="section position-relative bg-attach-fixed"
        style="background-image: url(image/image-1920x900-4.jpg);">
        <div class="image-overlay-2"></div>
        <div class="r-container position-relative" style="z-index: 2;">
            <div class="d-flex flex-column gap-3 text-white text-center align-items-center">
                <h3 style="font-size: 48px; color: white;">Feel Something Wrong With Your Bones?</h3>

                <a href="{{ route('contact') }}" class="btn button font-1 ls-2 fw-semibold fs-7 py-3 px-4">FREE
                    CONSULTATION</a>
            </div>
        </div>
    </section>

    <!-- PARTNER -->


</main>
@include('footer')
