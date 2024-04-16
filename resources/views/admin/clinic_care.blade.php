@include ('admin.header')

<div class="outer">
    <div class="inner bg-container forms">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-white">
                        Clinic Care
                    </div>
                    @if (session('message'))
                        <div class="alert alert-success col-md-6 mt-4 ">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form action="{{ route('admin.cliniccare.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>Clinic Image</h5>
                                    <input type="file" class="form-control" name="image"  />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Short Clinic</h5>
                                    <input name="short_title" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>Description</h5>
                                    <textarea name="description" id="" cols="80" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>Title 1</h5>
                                    <input name="title1" type="text" class="form-control" />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Title 2</h5>
                                    <input name="title2" type="text" class="form-control" />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Title 3</h5>
                                    <input name="title3" type="text" class="form-control" />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Title 4</h5>
                                    <input name="title4" type="text" class="form-control" />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Title 5</h5>
                                    <input name="title5" type="text" class="form-control" />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Title 6</h5>
                                    <input name="title6" type="text" class="form-control" />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Title 7</h5>
                                    <input name="title7" type="text" class="form-control" />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Title 8</h5>
                                    <input name="title8" type="text" class="form-control" />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Title 9</h5>
                                    <input name="title9" type="text" class="form-control" />
                                </div>
                            </div><br><br>
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
                            All Services
                        </div>
                        <div class="panel-body table-responsive">
                            <table id="example0" class="table display">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Image</th>
                                        <th>Short About</th>
                                        <th>Description</th>
                                        <th>Title 1</th>
                                        <th>Title 2</th>
                                        <th>Title 3</th>
                                        <th>Title 4</th>
                                        <th>Title 5</th>
                                        <th>Title 6</th>
                                        <th>Title 7</th>
                                        <th>Title 8</th>
                                        <th>Title 9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cliniccare as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/ClinicCareImages/' . $data->image) }}"
                                                    style="height: 30px; width: 30px;">
                                            </td>
                                            <td>
                                                {{ $data->short_title }}
                                            </td>
                                            <td>
                                                {{ $data->description }}
                                            </td>
                                            <td>
                                                {{ $data->title1 }}
                                            </td>
                                            <td>
                                                {{ $data->title2 }}
                                            </td>
                                            <td>
                                                {{ $data->title3 }}
                                            </td>
                                            <td>
                                                {{ $data->title4 }}
                                            </td>
                                            <td>
                                                {{ $data->title5 }}
                                            </td>
                                            <td>
                                                {{ $data->title6 }}
                                            </td>
                                            <td>
                                                {{ $data->title7 }}
                                            </td>
                                            <td>
                                                {{ $data->title8 }}
                                            </td>
                                            <td>
                                                {{ $data->title9 }}
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.delete.cliniccare', $data->id) }}" method="POST"
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
