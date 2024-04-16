@include ('admin.header')

<div class="outer">
    <div class="inner bg-container">
        <div class="card">
            <div class="card-body m-t-35">
                <div>
                    <h4>Carrier Option</h4>
                </div>
                <form class="form-horizontal login_validator" id="tryitForm"
                    action="https://demo.admireadmin.com/admire2/add_user.html" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row m-t-25">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-title">
                                            All Carrier Option
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table id="example0" class="table display">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No.</th>
                                                            <th>Name</th>
                                                            <th>Phone no.</th>
                                                            <th>Email</th>
                                                            <th>Resume</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($carrieroption as $data)
                                                            <tr>
                                                                <td>{{ $data->id }}</td>
                                                                <td>{{ $data->name }}</td>
                                                                <td>{{ $data->phone }}</td>
                                                                <td>{{ $data->email }}</td>
                                                                <td>
                                                                    <img src="{{ asset('storage/ResumeUpload' . $data->resume) }}"
                                                                        style="height: 30px; width: 30px;">
                                                                </td>
                                                                <td>
                                                                    <form
                                                                        action="{{ route('admin.delete.carrier', $data->id) }}"
                                                                        method="POST"
                                                                        onsubmit="return confirm('Are you sure you want to delete this item?')">
                                                                        @csrf
                                                                        @method('POST')
                                                                        <input type="submit"
                                                                            class="btn btn-info btn-xs" value="delete">
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
                </form>
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

@include ('admin.footer')
