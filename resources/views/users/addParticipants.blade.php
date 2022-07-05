@extends('layouts.app')
@section('content')
    <div class="container">

        <form method="post" action="{{route('createParticipants')}}">
            @csrf

            <div class="row">
                <div class="col-2">
                    <p>Participant 1</p>
                </div>
                <div class="col-3">
                    <x-form.text name="name1" type="text">Enter Name</x-form.text>
                </div>
                <div class="col-3">
                    <x-form.text name="email1" type="email">Enter Email</x-form.text>
                </div>
                <div class="col-2">
                    <x-form.text name="phone1" type="number">Enter phone</x-form.text>
                </div>
                <div class="col-2">
                    <x-form.text name="dob1" type="date">Enter Dob</x-form.text>
                </div>

            </div>
            <div id="add_content">

            </div>
            <div class="offset-10 col-2">
                <div class="form-group" id="add-more-button-div">
                    <button type="button" id="add-more-button-div" class="btn btn-info" onclick="addConfig()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                             class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                        </svg>
                        &nbsp;Add More participant
                    </button>
                </div>
            </div>

            <input type="submit" class="btn btn-primary">
        </form>
    </div>
    <script>
        let counter = 2;

        function addConfig() {
            let div = document.createElement('div');
            div.innerHTML = ` <div class="row">
                    <div class="col-2">
                        <p>Participant ${counter}</p>
                    </div>
                    <div class="col-3">
                        <x-form.text name="name${counter}" type="text">Enter Name</x-form.text>
                    </div>
                    <div class="col-3">
                        <x-form.text name="email${counter}" type="email">Enter Email</x-form.text>
                    </div>
                <div class="col-2">
                    <x-form.text name="phone${counter}" type="number">Enter phone</x-form.text>
                </div>
                    <div class="col-2">
                        <x-form.text name="dob${counter}" type="date">Enter Dob</x-form.text>
                    </div>
                </div>`


            counter++
            let add_content = document.querySelector('#add_content');
            add_content.appendChild(div)
        }
    </script>
@endsection
