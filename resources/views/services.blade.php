@include('header')

<main>
    <!-- Banner -->
    <section class="section position-relative" style="background-image: url(image/image-1920x900-5.jpg);">
        <div class="image-overlay"></div>
        <div class="r-container position-relative h-100" style="z-index: 2;">
            <div class="d-flex flex-column gap-3">
                <h3 class="accent-color font-1 fw-semibold">Our Services</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>

                        <li class="breadcrumb active" aria-current="page">&nbsp;&nbsp;/ Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section><br><br>

    <!-- SERVICES -->
    <section class="section bg-color-2">
        <div class="r-container">
            <div class="d-flex flex-column text-center gap-2">
                <h3 class="accent-color font-1 fw-semibold">Services</h3>
                <p class="font-2 fw-light mx-auto" style="max-width: 912px;">
                </p>
                <div class="w-100 row row-cols-1 row-cols-lg-3">
                    @if (count($data) > 0)
                        @foreach ($data as $new)
                            <div class="col mb-3">
                                <div class="rounded-3 border border-3 p-5 d-flex flex-column justify-content-center align-items-center gap-3"
                                    style="--bs-border-color: var(--accent-color-1);">
                                    <img src="{{ 'storage/serviceImages/thumbImage/' . $new->thumb }}" alt="" class="img-fluid" width="80"
                                        height="80">
                                    <h5>{{ $new->title }}</h5>
                                    <p>{{ $new->short_about }}</p>
                                    <a href="{{ url('/more-services/' . $new->id) }}"
                                        class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No Services</p>
                    @endif
                </div>
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
                        <h3 class="font-1 fw-semibold m-0" style="color: white;">15<sup class="fw-normal">Th</sup>
                        </h3>
                        <span class="font-1" style="color: white;">Years of Experience</span>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="d-flex flex-column">
                        <h3><i class="fa-solid fa-user-doctor" style="color: white;"></i></h3>
                        <h3 class="font-1 fw-semibold m-0" style="color: white;">250<sup class="fw-normal">+</sup>
                        </h3>
                        <span class="font-1" style="color: white;">Therapist & Staff</span>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="d-flex flex-column">
                        <h3><i class="fa-solid fa-hospital" style="color: white;"></i></h3>
                        <h3 class="font-1 fw-semibold m-0" style="color: white;">75<sup class="fw-normal">+</sup>
                        </h3>
                        <span class="font-1" style="color: white;">Branch Clinic</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><br><br>
@include('footer')
