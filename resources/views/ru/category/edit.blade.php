@extends('layouts.master')

@section('title')
    {{--@section('sidebar')--}}
    @parent
@stop

@section('content')
    <h2>RU Category Edit </h2>

    <form action="{{route('rucategories.update', $article['id'])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-1">
            <label for="exampleFormControlTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlTitle" name="title" required value="{{$article['title']}}">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlTitle" class="form-label">Sign</label>
            <select class="form-control" id="exampleFormControlTitle" name="sign" required>
                <option value="{{$article['sign']}}">{{$article['sign']}}</option>
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
        <div class="mb-1">
            <label for="exampleFormControlTitle" class="form-label">Category</label>
            <select class="form-control" id="exampleFormControlTitle" name="category" required>
                <option value="{{$article['category']}}">{{$article['category']}}</option>
                <option value="business">business</option>
                <option value="love">love</option>
                <option value="health">health</option>
                <option value="finance">finance</option>
                <option value="auto">auto</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlBody" class="form-label">Body</label>
            <textarea class="form-control" id="exampleFormControlBody" rows="3" name="body" required>{{$article['body']}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@stop
