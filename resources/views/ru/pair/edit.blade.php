@extends('layouts.master')

@section('title')
    {{--@section('sidebar')--}}
    @parent
@stop

@section('content')
    <h2>RU pair Edit</h2>
    {{--    <h5>Count {{count($articles) ?? 0}}</h5>--}}
    <form action="{{route('ruparies.update', $article['id'])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-1">
            <label for="exampleFormControlTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlTitle" name="title" required value="{{$article['title']}}">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlTitlePair" class="form-label">Pair WARNING! format onePair-twoPair</label>
            <input type="text" class="form-control" id="exampleFormControlTitlePair" name="pair" required value="{{$article['pair']}}">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlTitleLtfv" class="form-label">Ltfv</label>
            <input type="number" class="form-control" id="exampleFormControlTitleLtfv" name="ltfv" required value="{{$article['ltfv']}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlBody" class="form-label">Body</label>
            <textarea class="form-control" id="exampleFormControlBody" rows="3" name="body" required>{{$article['body']}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@stop
