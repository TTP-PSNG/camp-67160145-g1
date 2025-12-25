@extends('template.default')
@section('header' , 'ข้อมูลที่บันทึก')

@section('content')
<div class="container square-box justify-content-center align-items-center overflow-hidden px-5 py-5">
        <p><strong>ชื่อ-สกุล :</strong> {{ $fname }} {{ $lname }}</p>
        <p><strong>วัน/เดือน/ปีเกิด :</strong> {{ $birthday }}</p>
        <p><strong>อายุ :</strong> {{ $age }}</p>
        <p><strong>เพศ :</strong> {{ $gender }}</p>
        <p><strong>ที่อยู่ :</strong> {{ $address }}</p>
        <p><strong>สีที่ชอบ :</strong> {{ $color }}</p>
        <p><strong>แนวเพลงที่ชอบ :</strong> {{ $song }}</p>

        <div class="text-center mt-4">
            <a href="{{ url('/index') }}" class="text-decoration-none">
                ← กลับหน้ากรอกข้อมูล
            </a>
        </div>
</div>
@endsection
