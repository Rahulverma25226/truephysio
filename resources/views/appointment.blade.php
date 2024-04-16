@include('header')
<main>
    <!-- Banner -->
    <section class="section position-relative" style="background-image: url(image/image-1920x900-5.jpg);">
        <div class="image-overlay"></div>
        <div class="r-container position-relative h-100" style="z-index: 2;">
            <div class="d-flex flex-column gap-3">
                <h3 class="accent-color font-1 fw-semibold">Appointment</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb active" aria-current="page">&nbsp;&nbsp;/ Appointment</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 text-center">
                <h6 class="fw-semibold font-1 accent-color-1 ls-2">BOOKING</h6>
                <h3 class="accent-color font-1 fw-semibold">Make An Appointment</h3>
                <p class="font-2 fw-light mx-auto" style="max-width: 912px;"></p>
                <div>
                    <div class="toast-container position-fixed bottom-0 end-0 p-3">
                        @if (session('message'))
                            <div class="alert alert-success col-md-12 mt-4 ">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <form action="{{ route('appointment.save') }}" method="POST" enctype="multipart/form-data"
                        class="d-flex flex-column h-100 justify-content-center w-100  form">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control py-3 px-4" name="name" id="name"
                                placeholder="Name" required>
                            <div class="invalid-feedback">
                                The field is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control py-3 px-4" name="phone" id="phone"
                                placeholder="Phone" required>
                            <div class="invalid-feedback">
                                The field is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control py-3 px-4" name="email" id="email"
                                placeholder="Email" required>
                            <div class="invalid-feedback">
                                The field is required.
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-lg-2">
                            <div class="col mb-3">
                                <select name="service_name" class="form-select py-3 px-4"
                                    aria-label="Default select example">
                                    <option selected>Select Services</option>
                                    <option value="Chiropractic Care">Chiropractic Care</option>
                                    <option value="Acupunctur">Acupunctur</option>
                                    <option value="Message Therapy">Message Therapy</option>
                                    <option value="Sports Chiropractic">Sports Chiropractic</option>
                                    <option value="Laser Therapy">Laser Therapy</option>
                                    <option value="Pediatric Chiropractic">Pediatric Chiropractic</option>
                                </select>
                            </div>
                            <div class="col mb-3">
                                <input type="date" name="date" class="form-control py-3 px-4" id="subject"
                                    required>
                                <div class="invalid-feedback">
                                    The field is required.
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="submit" id="" class="btn button  py-3" value="Submit">
                        </div>
                    </form>
                </div>
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
</main>
@include('footer')
