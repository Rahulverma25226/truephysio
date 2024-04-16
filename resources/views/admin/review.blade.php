@include('admin.header')

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
                        Add Review
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form action="{{ route('admin.review.save') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- <div class="col-lg input_field_sections">
                                    <h5>Add image</h5>
                                    <input type="file" class="form-control" name="image" value="file" />
                                </div> --}}
                                <div class="col-lg input_field_sections">
                                    <h5>Patient name</h5>
                                    <input name="pname" type="text" class="form-control" />
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-title">
                            All About
                        </div>
                        <div class="panel-body table-responsive">
                            <table id="example0" class="table display">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        {{-- <th>Image</th> --}}
                                        <th>Name</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($review as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            {{-- <td>
                                                <img src="{{ asset('storage/reviewImage/' . $data->image) }}"
                                                    style="height: 30px; width: 30px;">
                                            </td> --}}
                                            <td>
                                                {{ $data->name }}
                                            </td>
                                            <td>
                                                {{ $data->description }}
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.delete.review', $data->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this item?')">
                                                        @csrf
                                                <input type="submit" class="btn btn-info btn-xs" value="delete">
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


@include ('admin.footer')
