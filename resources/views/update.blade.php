@extends('layout')

@section('content')
<h3>
    <div class="row">
        <div class="">
            <form action="{{route('todo.save', ['id'=>$todo->id])}}" method="get">
                @csrf
                <input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}" placeholder="Enter new todo">
            </form>
        </div>
    </div>
</h3>
@endsection
