@include('header')

<main>
    <!-- Banner -->
    <section class="section position-relative" style="background-image: url(image/image-1920x900-5.jpg);">
        <div class="image-overlay"></div>
        <div class="r-container position-relative h-100" style="z-index: 2;">
            <div class="d-flex flex-column gap-3">
                <h3 class="accent-color font-1 fw-semibold">Our Gallery</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class=" active" aria-current="page">&nbsp;&nbsp;/ Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 text-center">
                <h3 class="accent-color font-1 fw-semibold">Gallery</h3>
                <p class="font-2 fw-light mx-auto" style="max-width: 912px;">

                </p>
                <div class="row row-cols-1 row-cols-lg-3 text-start">
                    @if (!empty($gallerydata))
                        @foreach ($gallerydata as $new)
                            <div class="col mb-3">
                                <div>
                                    <img src="{{ asset('storage/GalleryImages/' . $new->image) }}" class="img-fluid" alt="image">
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No data available</p>
                    @endif

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
    <br><br>
</main>
@include('footer')
