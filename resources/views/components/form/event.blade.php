<div class="row">
    <div class="col-2">
        <p>Participant {{$slot}}</p>
    </div>
    <div class="col-3">
        <x-form.text name="name{{$value}}" type="text">Enter Name</x-form.text>
    </div>
    <div class="col-3">
        <x-form.text name="email{{$value}}" type="email">Enter Email</x-form.text>
    </div>
    <div class="col-2">
        <x-form.text name="phone{{$value}}" type="number">Enter phone</x-form.text>
    </div>
    <div class="col-2">
        <x-form.text name="dob{{$value}}" type="date">Enter Dob</x-form.text>
    </div>
</div>
