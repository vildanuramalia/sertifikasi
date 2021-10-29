@extends('layouts.main')

@section('container')
<div id="left" class='mt-3'>
    <h1>{{ $title }}</h1>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle float-left">
</div>
<div id="right">
    <h5><b>Aplikasi Ini dibuat oleh</b></h5>
    <h5>
        <table>
            <tr>
                <td width = "100px">Nama</td>
                <td>: {{ $name }}</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>: {{ $nim }}</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>: {{ $tanggal }}</td>
            </tr>
        </table>
    </h5>   
</div>

@endsection