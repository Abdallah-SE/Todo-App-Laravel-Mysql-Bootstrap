
        @extends('layouts.app')
        @section('content')
        <div class="container">
            <div>
            <h1 class="text-center m-3">Todos Main Page</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card border-primary" >
                        <div class="card-header text-center m4">
                            Todos Items
                        </div>
                        <div class="card-body text-primary">
                            <ul class="list-group">
                            @foreach($todos as $todo)
                               <li class="list-group-item">
                                   {{ $todo->name}} 
                                   @if($todo->completed == false)
                                   <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm float-end" class="mr-3 ml-3" style="margin-left: 5px;">
                                       Complete
                                   </a>
                                   @endif
                                   <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-end" class="float-end">
                                       Display
                                   </a>
                               </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
  