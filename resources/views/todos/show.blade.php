    @extends('layouts.app')
    
    @section('content')
    <div class="container">
            <div>
            <h1 class="text-center m-3">{{$todo->name}}</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card border-primary text-center">
                        <div class="card-header">
                            Todo Details
                        </div>
                        <div class="card-body">
                            {{$todo->description}}
                        </div>
                        <div class="card-footer">
                            <a href="/todos/{{$todo->id}}/edit" class="btn btn-secondary btn-sm float-start">Edit</a>
                            <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm float-end">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endsection