@extends('template.default')

@section('content')
    <h1>Pokedex Create</h1>

    <form action="{{ url('/pokedexs')}}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name">
        <label for="type">Type</label>
        <input type="text" class="form-control" name="type" id="type">
        <label for="species">Species</label>
        <input type="text" class="form-control" name="species" id="species">
        <label for="height">Height</label>
        <input type="number" class="form-control" name="height" id="height">
        <label for="weight">Weight</label>
        <input type="number" class="form-control" name="weight" id="weight">
        <label for="hp">HP</label>
        <input type="decimal" class="form-control" name="hp" id="hp">
        <label for="attack">Attack</label>
        <input type="decimal" class="form-control" name="attack" id="attack">
        <label for="defense">Defense</label>
        <input type="decimal" class="form-control" name="defense" id="defense">
        <label for="image_url">Image (URL)</label>
        <input type="text" class="form-control" name="image_url" id="image_url">
        <br>
        <button class="btn btn-primary" type="submit">บันทึก</button>

    </form>
        <br>
        @include('pokedexs.table')
@endsection
