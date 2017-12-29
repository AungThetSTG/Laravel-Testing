@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teacher as $key=>$t)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$t->name}}</td>
                                <td>{{$t->login->email}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                {{ $teacher->links() }}
            </div>
        </div>
    </div>
@endsection