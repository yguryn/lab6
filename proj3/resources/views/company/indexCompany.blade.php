@extends('layout')

@section('title')
    List companies
@endsection
@section('mainContent')
    <h1>List companies</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td><a href="company/{{$company->id}}">{{$company->name}}</a> </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <hr>
    <div>
    <a href="/company/createcompany">
        <button id="submit" name="submit" class="btn btn-primary" style="margin-top: 20px">Add new company</button>
    </a>

    <a href="/cars">
        <button id="submit" name="submit" class="btn btn-primary" style="margin-top: 20px">Cars</button>
    </a>

    <a href="/">
        <button id="submit" name="submit" class="btn btn-primary" style="margin-top: 20px">Company and cars</button>
    </a>
    </div>
@endsection
