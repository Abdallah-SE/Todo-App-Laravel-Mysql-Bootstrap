    @extends('layouts.app')
    
    @section('content')
    <h2 class="text-center m-3"> Edit Todo</h2>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Edit Todo</div>
                <div class="card-body">
                    <form class="form" action="/todos/{{$todo->id}}/update-todos" method="POST">
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul class="">
                                @foreach($errors->all() as $error)
                                <li class="list-group-item-danger">{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <br>
                        @csrf
                        <div class="form-group">
                            <label for="name">Todo name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$todo->name}}">
                        </div><br>
                        <div class="form-group">
                            <label for="description">Todo description</label>
                            <textarea class="form-control" cols="5" rows="5" name="description" placeholder="Description">{{$todo->description}}
                            </textarea>
                        </div><br>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary btn-lg float-end">Update Todo</button>                        
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
        
    @endsection