@extends('layout')

@section('title')
    Add a new car
@endsection

@section('mainContent')
    <h2>Add Company</h2>
    <form class="form-horizontal" method="post" action="/company/createcompany">
        @csrf
        <fieldset>

            <!-- Form Name -->
            <legend></legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Name</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="quantity">Quantity</label>
                <div class="col-md-4">
                    <input id="quantity" name="quantity" type="text" placeholder="Enter quantity of cars" class="form-control input-md">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
            </div>

        </fieldset>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <a href="/company">
            <button id="submit" name="submit" class="btn btn-primary" style="margin-left: 15px">Show companies</button>
        </a>
    </div>

@endsection
