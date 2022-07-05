@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{route('selectAddParticipants')}}">
            @csrf
            <x-form.event1 value="1">
                <x-form.event value="e1p1">1</x-form.event>
                <x-form.event value="e1p2">2</x-form.event>
            </x-form.event1>
            <x-form.event1 value="2">
                <x-form.event value="e2p1">1</x-form.event>
                <x-form.event value="e2p2">2</x-form.event>
            </x-form.event1>
            <x-form.event1 value="3">
                <x-form.event value="e3p1">1</x-form.event>
            </x-form.event1>
            <x-form.event1 value="4">
                <x-form.event value="e4p1">1</x-form.event>
                <x-form.event value="e4p2">2</x-form.event>
            </x-form.event1>
            <x-form.event1 value="5">
                <x-form.event value="e5p1">1</x-form.event>
                <x-form.event value="e5p2">2</x-form.event>
            </x-form.event1>
            <x-form.event1 value="6">
                <x-form.event value="e6p1">1</x-form.event>
                <x-form.event value="e6p2">2</x-form.event>
            </x-form.event1>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>

@endsection
