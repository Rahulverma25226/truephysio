@include ('admin.header')

<div class="outer">
    <div class="inner bg-container forms">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-white">
                        About us
                    </div>
                    @if (session('message'))
                        <div class="alert alert-success col-md-6 mt-4 ">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form action="{{ route('admin.about.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>About Image</h5>
                                    <input type="file" class="form-control" name="image"  required/>
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Title</h5>
                                    <input name="title" type="text" class="form-control" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>Short About</h5>
                                    <input type="text" name="short_about" class="form-control"
                                        placeholder="Short about" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>Description</h5>
                                    <input type="text" name="description" class="form-control"
                                        placeholder="description" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>Our vision</h5>
                                    <textarea name="ourvision" id="" cols="80" rows="5"></textarea>
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Our Mission</h5>
                                    <textarea name="ourmission" id="" cols="80" rows="5"></textarea>
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
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Short About</th>
                                        <th>Our Vision</th>
                                        <th>Our Mission</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($about as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/aboutImages/' . $data->image) }}"
                                                    style="height: 30px; width: 30px;">
                                            </td>
                                            <td>
                                                {{ $data->title }}
                                            </td>
                                            <td>
                                                {{ $data->short_about }}
                                            </td>
                                            <td>
                                                {{ $data->ourvision }}
                                            </td>
                                            <td>
                                                {{ $data->ourmission }}
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.delete.about', $data->id) }}" method="POST"
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
