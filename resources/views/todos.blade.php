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
    {{$todo->todo}} <a href="" class="btn btn-danger">x</a>
</h3>
        <hr>
    @endforeach
@endsection
