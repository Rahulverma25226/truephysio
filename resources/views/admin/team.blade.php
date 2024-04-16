@include ('admin.header')

<div class="outer">
    <div class="inner bg-container forms">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-white">
                        Team
                    </div>
                    @if (session('message'))
                        <div class="alert alert-success col-md-6 mt-4 ">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form action="{{ route('admin.team.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>Team Image</h5>
                                    <input type="file" class="form-control" name="image"  />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Dr. Name</h5>
                                    <input type="text" class="form-control" name="name"  />
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Expert</h5>
                                    <input type="text" class="form-control" name="expert"  />
                                </div>
                            </div>
                            <br><br>
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
                            All Team
                        </div>
                        <div class="panel-body table-responsive">
                            <table id="example0" class="table display">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Image</th>
                                        <th>Dr. Name</th>
                                        <th>Expert</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($team as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/teamImages/' . $data->image) }}"
                                                    style="height: 30px; width: 30px;">
                                            </td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->expert }}</td>
                                            <td>
                                                <form action="{{ route('admin.del.team', $data->id) }}" method="POST"
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
