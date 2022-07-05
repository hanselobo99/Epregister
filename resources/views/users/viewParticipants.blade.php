@extends('layouts.app')
@section('content')

    @if($data)
        @php
            $id=1;
        @endphp
        <table class="table">
            <tr>
                <th>Sl no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Dob</th>
            </tr>
            @foreach($data as $dt)
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$dt->name}}</td>
                    <td>{{$dt->email}}</td>
                    <td>{{$dt->phone}}</td>
                    <td>{{$dt->dob}}</td>
                </tr>
            @endforeach
        </table>
    @else
        <h3>No participant</h3>
    @endif

@endsection
