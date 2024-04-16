@include ('admin.header')

<div class="outer">
    <div class="inner bg-container forms">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-white">
                        FAQ
                    </div>
                    @if (session('message'))
                        <div class="alert alert-success col-md-6 mt-4 ">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form action="{{ route('admin.faq.save') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>Question</h5>

                                    <input name="question" type="text" class="form-control" required/>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>Answer</h5>

                                    <input type="text" name="answer" class="form-control" required />

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
                            All FAQ
                        </div>
                        <div class="panel-body table-responsive">
                            <table id="example0" class="table display">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($faq as $data )
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->question }}</td>
                                        <td>
                                            {{ $data->answer }}
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.del.faq', $data->id) }}" method="POST"
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
