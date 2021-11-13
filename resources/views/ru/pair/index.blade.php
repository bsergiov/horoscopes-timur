@extends('layouts.master')

@section('title')
    {{--@section('sidebar')--}}
    @parent
@stop

@section('content')
    <h2>RU pair</h2>
    {{--    <h5>Count {{count($articles) ?? 0}}</h5>--}}
    <form action="{{route('ruparies.store')}}" method="POST">
        @csrf
        <div class="mb-1">
            <label for="exampleFormControlTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlTitle" name="title" required>
        </div>
        <div class="mb-1">
            <label for="exampleFormControlTitlePair" class="form-label">Pair WARNING! format onePair-twoPair</label>
            <input type="text" class="form-control" id="exampleFormControlTitlePair" name="pair" required>
        </div>
        <div class="mb-1">
            <label for="exampleFormControlTitleLtfv" class="form-label">Ltfv</label>
            <input type="number" class="form-control" id="exampleFormControlTitleLtfv" name="ltfv" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlBody" class="form-label">Body</label>
            <textarea class="form-control" id="exampleFormControlBody" rows="3" name="body" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <hr>

    @foreach($articles  as $value)
        <div class="card mt-2">
            <div class="card-header">
                <p> {{$value['title']}}. id {{$value['id']}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Pair: {{$value['pair']}} </h5>
                <p class="card-text">{{$value['body']}}</p>
                <div class="row">
                    <a href="{{route('ruparies.edit', $value['id'])}}" class="btn btn-outline-primary">Edit</a>
                    <form class="ml-1" action="{{route('ruparies.destroy', $value['id'])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{$value['id']}}">
                        <button class="btn btn-outline-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach



@stop
