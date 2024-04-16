@include('header')
<!-- End Of Header -->

<main>
    <!-- Banner -->
    <section class="section position-relative"
    style="background-image: url('{{ asset('image/image-1920x900-5.jpg') }}')">

        <div class="image-overlay"></div>
        <div class="r-container position-relative h-100" style="z-index: 2;">
            <div class="d-flex flex-column gap-3">
                <h3 class="accent-color font-1 fw-semibold">{{ $data->title }}</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb active" aria-current="page">&nbsp;&nbsp;/ {{ $data->title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
@if (!is_null($data))


    <section class="section">
        <div class="r-container">
            <div class="row ">
                <div class="col col-lg-12">
                    <div class="d-flex flex-column">
                        <h3 class="fw-semibold font-1">{{ $data->title }}</h3>
                        <div class="d-flex flex-row gap-3 mb-3">

                        </div>


                        <div class="row row-cols-1 row-cols-lg-2 mb-3">
                            <div class="col col-lg-6">
                                <a href="{{ asset('storage/serviceImages/' . $data->image) }}" data-fslightbox="gallery">
                                    <img src="{{ asset('storage/serviceImages/' . $data->image) }}" alt=""
                                        class="img-fluid rounded-3">
                                </a>
                            </div>
                            <div class="col col-lg-6">
                                <h6>{{ $data->title }}</h6>
                                <p>{{ $data->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <p>no found</p>
        @endif
    </section>
    <section class="section position-relative bg-attach-fixed"
        style="background-image: url(' {{ asset('image/image-1920x900-4.jpg') }} ')">
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
