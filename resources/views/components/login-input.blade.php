<div class="wrap-input100 validate-input">
    <input class="input100 direction form-control @error('email') is-invalid @enderror" type="{{$type}}"
           name="{{$name}}" value="{{ $value }}" placeholder="{{ $placeholder }}"  {{ $attributes }}>
    <span class="focus-input100"></span>
    <span class="symbol-input100"></span>
</div>

<x-validation-error field="{{$name}}"/>
