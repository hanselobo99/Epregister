@extends('layouts.app')
@section('content')

    <div class="container">

        <form method="post" action="{{route('createParticipants')}}">
            @csrf
            {{--Event 1--}}
            <div class="row">
                <div class="col-2">
                    <label for="event1" class="form-label">Event 1</label>
                </div>
                <div class="col-3">
                    <select class="form-select" name="event1p1" id="event1">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event1') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-3">
                    <select name="event1p2" class="form-select">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event1') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach
                    </select>
                </div>


            </div>
            {{--Event 2--}}
            <div class="row">
                <div class="col-2">
                    <label for="event2" class="form-label">Event 2</label>
                </div>
                <div class="col-3">
                    <select class="form-select" name="event2p1" id="event2">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event1') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-3">
                    <select name="event1p2"  class="form-select">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event1') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <input type="submit" class="btn btn-primary">
        </form>
    </div>
@endsection
