<input class="text" type="{{$type}}" value="{{$value}}" name="{{$name}}"
       placeholder="{{$placeholder}}" {{ $attributes }}>
<x-validation-error field="{{$name}}"/>