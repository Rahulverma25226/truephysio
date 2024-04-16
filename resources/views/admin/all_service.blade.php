@include ('admin.header')

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
                                        <th>Title</th>
                                        <th>Thumb</th>
                                        <th>Image</th>
                                        <th>Short About</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allservice as $service)
                                        <tr>

                                            <td>{{ $service->id }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td><img src="{{ asset('storage/serviceImages/' . $service->thumb) }}"
                                                    style="height: 30px; width: 30px;"> </td>
                                            <td><img src="{{ asset('storage/serviceImages/' . $service->image) }}"
                                                    style="height: 30px; width: 30px;"> </td>
                                            <td>{{ $service->short_about }}</td>
                                            <td>{{ $service->description }}</td>
                                            <td>
                                                <form action="{{ route('admin.del.service', $service->id) }}"
                                                    method="POST"
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
