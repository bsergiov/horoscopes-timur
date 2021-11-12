@extends('layouts.master')

@section('title')

    {{--@section('sidebar')--}}
    @parent
@stop

@section('content')
    <h2>RU all articles</h2>
    <form action="{{route('ru.store')}}" method="POST">
        @csrf
        <div class="mb-1">
            <label for="exampleFormControlTitle" class="form-label" >Title</label>
            <input type="text" class="form-control" id="exampleFormControlTitle" name="title" required>
        </div>
        <div class="mb-1">
            <label for="exampleFormControlTitle" class="form-label">Since</label>
            <select class="form-control" id="exampleFormControlTitle" name="since" required>
                <option value="aries">aries</option>
                <option value="taurus">taurus</option>
                <option value="gemini">gemini</option>
                <option value="cancer">cancer</option>
                <option value="leo">leo</option>
                <option value="virgo">virgo</option>
                <option value="libra">libra</option>
                <option value="scorpio">scorpio</option>
                <option value="sagittarius">sagittarius</option>
                <option value="capricorn">capricorn</option>
                <option value="aquarius">aquarius</option>
                <option value="pisces">pisces</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlBody" class="form-label">Body</label>
            <textarea class="form-control" id="exampleFormControlBody" rows="3" name="body" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>

    @foreach($articles  as $value)
        <div class="card mt-2">
            <div class="card-header">
                {{$value['title']}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$value['since']}} </h5>
                <p class="card-text">{{$value['body']}}</p>
                <a href="{{route('ru.')}}" class="btn btn-outline-primary">Edit</a>
                <a href="#" class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    @endforeach



@stop
