@extends('layout')

@section('mainContent')
    <h1>Show Car</h1>
    <div style="color: {{$car->color}}">
        <h1>Name: {{$car->name}}</h1>
    </div>
    <p>
        <strong>Company: {{$car->company}}</strong>
    </p>
    <a href="{{$car->id}}/edit"><button id="submit" name="submit" class="btn btn-primary" style="margin-top: 20px">Edit car</button></a>
@endsection
