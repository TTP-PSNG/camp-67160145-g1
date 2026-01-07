@extends('template.default')

@section('content')
    <h1>Pokedex Update</h1>

    <form action="{{ url('/pokedexs/'.$pokedex_update->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$pokedex_update->name}}">
        <label for="type">Type</label>
        <input type="text" class="form-control" name="type" id="type" value="{{$pokedex_update->type}}">
        <label for="species">Species</label>
        <input type="text" class="form-control" name="species" id="species" value="{{$pokedex_update->species}}">
        <label for="height">Height</label>
        <input type="number" class="form-control" name="height" id="height" value="{{$pokedex_update->height}}">
        <label for="weight">Weight</label>
        <input type="number" class="form-control" name="weight" id="weight" value="{{$pokedex_update->weight}}">
        <label for="hp">HP</label>
        <input type="decimal" class="form-control" name="hp" id="hp" value="{{$pokedex_update->hp}}">
        <label for="attack">Attack</label>
        <input type="decimal" class="form-control" name="attack" id="attack" value="{{$pokedex_update->attack}}">
        <label for="defense">Defense</label>
        <input type="decimal" class="form-control" name="defense" id="defense" value="{{$pokedex_update->defense}}">
        <label for="image_url">Image (URL)</label>
        <input type="text" class="form-control" name="image_url" id="image_url" value="{{$pokedex_update->image_url}}">
        <br>
        <button class="btn btn-primary" type="submit">แก้ไขข้อมูล</button>

    </form>
        <br>
        @include('pokedexs.table')
@endsection
