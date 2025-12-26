@extends('template.default')

@section('content')
    <h1>Flight Update</h1>
    <form action="{{ url('/flights'.$flight_update->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$flight_update->name}}">
        <label for="name">Airline</label>
        <input type="text" class="form-control" name="airline" id="airline" value="{{$flight_update->airline}}">
        <label for="name">Number of Seats</label>
        <input type="text" class="form-control" name="number_of_seats" id="number_of_seats" value="{{$flight_update->number_of_seats}}">
        <label for="name">Price</label>
        <input type="decimal" class="form-control" name="price" id="price" value="{{$flight_update->price}}">
        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>
    @include('flights.table')
    <h1>Flight Lists</h1>
    <table class="table">
        <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>airline</td>
            <td>number_of_seats</td>
            <td>price</td>
            <td></td>
        </tr>
        </thead>
        <?php foreach ($flight as $item) { ?>
            <tr>
                <td>{{$item->id }}</td>
                <td>{{$item->name }}</td>
                <td>{{$item->airline }}</td>
                <td>{{$item->number_of_seats }}</td>
                <td>{{$item->price }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ url('/flights/'.$item->id.'/edit')}}">แก้ไข</a>
                    / ลบ </td>
            </tr>
        <?php } ?>

    </table>

@endsection
