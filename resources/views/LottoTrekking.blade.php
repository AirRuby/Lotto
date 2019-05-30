@extends('layouts.app')

@section('content')
<h1>Trekking</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            <h4>{{$error}}</h4>
        </div>
    @endforeach
@endif

    <div class="midden">
        <div></div>
        <form action="{{route('LottoTrekking')}}" method="post">
            {{ csrf_field() }}
        <div>
            <h4>Getal 0</h4>
            <input name="getal0" type="number">
        </div>
            <br>
        <div>
            <h4>Getal 1</h4>
            <input name="getal1" type="number">
        </div>
            <br>
        <div>
            <h4>Getal 2</h4>
            <input name="getal2" type="number">
        </div>
            <br>
        <div>
            <h4>Getal 3</h4>
            <input name="getal3" type="number">
        </div>
            <br>
        <div>
            <h4>Getal 4</h4>
            <input name="getal4" type="number">
        </div>
            <br>
        <div>
            <h4>Getal 5</h4>
            <input name="getal5" type="number">
        </div>
            <br><br>
            <input type="submit" value="Bekijk resultaat">
        </form>
    </div>
@endsection
