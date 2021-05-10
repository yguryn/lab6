@extends('layout')

@section('mainContent')
    <h1>Show Company <br></h1>
    <div>
        <h1>Name: {{$company->name}}</h1>
    </div>
    <div>
        <h1>Quantity: {{$company->quantity}}</h1>
    </div>

    <div>
        <h1>Cars</h1>
    </div>

    @foreach ($cars as $car)
        <table class="table table-striped">
        <tr>
            <td>{{$car}}</td>
        </tr>
        </table>
    @endforeach

    <form class="form-horizontal" method="post" action="/company/{{$company->id}}">
    @csrf
    @method('delete')
    <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Delete</button>
            </div>
        </div>
    </form>
@endsection
