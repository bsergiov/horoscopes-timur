@extends('layouts.master')

@section('title')
    {{--@section('sidebar')--}}
    @parent
@stop

@section('content')
    <h2>RU Over articles</h2>
    {{--    <h5>Count {{count($articles) ?? 0}}</h5>--}}
    <form action="{{route('ruover.store')}}" method="POST">
        @csrf
        <div class="mb-1">
            <label for="exampleFormControlTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlTitle" name="title" required>
        </div>
        <div class="mb-1">
            <label for="exampleFormControlTitle" class="form-label">Sign</label>
            <select class="form-control" id="exampleFormControlTitle" name="sign" required>
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
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <hr>

    @foreach($articles  as $value)
        <div class="card mt-2">
            <div class="card-header">
                <p> {{$value['title']}}. id {{$value['id']}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Sign: {{$value['sign']}} </h5>
                <p class="card-text">{{$value['body']}}</p>
                <div class="row">
                    <a href="{{route('ruover.edit', $value['id'])}}" class="btn btn-outline-primary">Edit</a>
                    <form class="ml-1" action="{{route('ruover.destroy', $value['id'])}}" method="POST">
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
