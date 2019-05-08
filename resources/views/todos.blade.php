@extends('layout')

@section('content')
<h3>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
                @csrf
                <input type="text" class="form-control input-lg" name="todo" placeholder="Enter new todo">
            </form>
        </div>
    </div>
    @foreach ($todos as $todo)
    {{$todo->todo}}
    <a href="{{route('todo.delete',['id'=>$todo->id])}}" class="btn btn-danger">x</a>
    <a href="{{route('todo.update',['id'=>$todo->id])}}" class="btn btn-primary btn-xs">Update</a>
    @if (!$todo->completed)
    <a href="{{route('todo.completed',['id'=>$todo->id])}}" class="btn btn-xs btn-success">Mark as completed</a>
    @else
    <span class="text-success">Completed</span>
    @endif
    <hr>
</h3>r
    @endforeach
@endsection
