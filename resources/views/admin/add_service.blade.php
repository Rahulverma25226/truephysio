@include ('admin.header')

<div class="outer">
    <div class="inner bg-container forms">
        <div class="row">
            <div class="col">
                @if (session('message'))
                    <div class="alert alert-success col-md-6 mt-4 ">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card">

                    <div class="card-header bg-white">
                        Add Service
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form action="{{ route('admin.service.save') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg input_field_sections">
                                    <h5>Add Thumb</h5>
                                    <input type="file" class="form-control" name="thumb" value="file" />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Add image</h5>
                                    <input type="file" class="form-control" name="image" value="file" />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Title</h5>
                                    <input name="title" type="text" class="form-control" />
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg input_field_sections">
                                <h5>Short About</h5>
                                <input type="text" name="short_about" class="form-control"
                                    placeholder="Short about" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg input_field_sections">
                                <h5>Description</h5>
                                <textarea name="description" id="" cols="80" rows="5"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include ('admin.footer')
