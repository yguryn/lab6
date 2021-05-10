@extends('layout')

@section('title')
    Countries and companies
@endsection
<h1>Countries and companies</h1>

@foreach ($countries as $country)
    <table class="table table-striped">
        <tr>
            <td>{{$country->name}}</td>
            <td>

            @foreach($country->company as $count)
                <h1>{{$count->name}}</h1>
            @endforeach
            </td>
        </tr>
            </td>
        </tr>
    </table>
@endforeach

