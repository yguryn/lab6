@extends('layout')

@section('title')
    List cars
@endsection
@section('mainContent')
    <h1>List Car</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td><a href="cars/{{$car->id}}">{{$car->name}}</a> </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <hr>
    <div>
        <a href="/cars/create">
            <button id="submit" name="submit" class="btn btn-primary" style="margin-top: 20px">Add new car</button>
        </a>

        <a href="/company">
            <button id="submit" name="submit" class="btn btn-primary" style="margin-top: 20px">Companies</button>
        </a>
    </div>
@endsection
