@include ('admin.header')
<div class="outer">
    <div class="inner bg-container">
        <div class="card">
            <div class="card-body m-t-35">
                <div>
                    <h4>Add Image</h4>
                </div>
                <div class="row">
                    <div class="col-6">
                        @if (session('message'))
                            <div class="alert alert-success col-md-6 mt-4 ">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form class="form-horizontal login_validator" action="{{ route('admin.gallery.save') }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row m-t-25">
                                <div class="col-lg-12 text-center text-lg-left">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                        <div class="m-t-20 text-center">
                                            <div class="form-group">
                                                <label>Add Gallery Image</label>
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                            <input type="submit" class="btn btn-success fileinput-exists" value="Submit">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-title">
                                All Gallery Images
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="example0" class="table display">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($gallery as $data)
                                                <tr>
                                                    <td>{{ $data->id }}</td>
                                                    <td>
                                                        <img src="{{ asset('storage/GalleryImages/' . $data->image) }}"
                                                            style="height: 30px; width: 30px;">
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('admin.del.gallery', $data->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Are you sure you want to delete this item?')">
                                                            @csrf
                                                            <input type="submit" class="btn btn-info btn-xs"
                                                                value="delete">
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="search_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <form>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="float-right" aria-hidden="true">&times;</span>
                    </button>
                    <div class="input-group search_bar_small">
                        <input type="text" class="form-control" placeholder="Search..." name="search">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </div>


</div>

</div>


</div>

@include ('admin.footer')



<script type="text/javascript" src="{{ asset('admin/js/pluginjs/jasny-bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendors/holderjs/js/holder.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('admin/js/pages/validation.js') }}"></script>
