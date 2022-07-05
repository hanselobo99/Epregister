@extends('layouts.app')
@section('content')

    <div class="container">

        <form method="post" action="{{route('selectAddParticipants')}}">
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
                                    @if (old('event1p1') === $dt->id)
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
                                    @if (old('event1p2') === $dt->id)
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
                                    @if (old('event2p1') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-3">
                    <select name="event2p2" class="form-select">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event2p2') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{--Event 3--}}
            <div class="row">
                <div class="col-2">
                    <label for="event3" class="form-label">Event 3</label>
                </div>
                <div class="col-3">
                    <select class="form-select" name="event3p1" id="event3">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event3p1') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach

                    </select>
                </div>

            </div>
            {{--Event 4--}}
            <div class="row">
                <div class="col-2">
                    <label for="event4" class="form-label">Event 4</label>
                </div>
                <div class="col-3">
                    <select class="form-select" name="event4p1" id="event4">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event4p1') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-3">
                    <select name="event4p2" class="form-select">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event4p2') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{--Event 5--}}
            <div class="row">
                <div class="col-2">
                    <label for="event5" class="form-label">Event 5</label>
                </div>
                <div class="col-3">
                    <select class="form-select" name="event5p1" id="event5">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event5p1') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-3">
                    <select name="event5p2" class="form-select">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event5p2') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{--Event 6--}}
            <div class="row">
                <div class="col-2">
                    <label for="event6" class="form-label">Event 6</label>
                </div>
                <div class="col-3">
                    <select class="form-select" name="event6p1" id="event6">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event6p1') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-3">
                    <select name="event6p2" class="form-select">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event6p2') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{--Event 7--}}
            <div class="row">
                <div class="col-2">
                    <label for="event7" class="form-label">Event 7</label>
                </div>
                <div class="col-3">
                    <select class="form-select" name="event7p1" id="event7">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event7p1') === $dt->id)
                                        selected="selected"
                                @endif
                            >{{ $dt->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-3">
                    <select name="event7p2" class="form-select">
                        @foreach ($data as $dt)
                            <option value="{{ $dt->id }}"
                                    @if (old('event7p2') === $dt->id)
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
