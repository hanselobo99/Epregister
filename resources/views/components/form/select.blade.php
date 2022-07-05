<label for="{{$name}}" class="form-label">{{$slot}}</label>
<select name="{{$name}}" id="{{$name}}" class="form-select">
    @foreach ($options as $key => $option)
        <option value="{{ $key }}"
                @if (old($name) === $key)
                    selected="selected"
            @endif
        >{{ $option }}</option>
    @endforeach
</select>

@error($name)
<div class="alert alert-danger">{{ $message }}</div>
@enderror
