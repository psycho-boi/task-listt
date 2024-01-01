@extends('layouts.app')

@section('title', 'Add Task')


@section('content')
    <form action="{{route('task.store')}}" method="post">
        @csrf
       <div>
        <label for="title">
            Title:
        </label>
        <input type="text" id="title" name="title"><br>
       </div>

       <div>
        <label for="description">
            description:
        </label>
        <textarea id="description" name="description" rows="5" ></textarea><br>
    </div>

    <div>
        <label for="long_description">
            long_description:
        </label>
        <textarea id="long_description" name="long_description" rows="10"></textarea><br>

        <input type="submit" value="Add Task">
    </div>

    </form>
@endsection