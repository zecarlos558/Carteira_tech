<input type="password" {{ $attributes->merge(['class' => 'form-control']) }} onclick="{{$onclick}}" value="{{ $value ? $value : ''  }}" name="{{$name}}" id="{{$id}}" placeholder="{{ $placeholder ? $placeholder : ''   }}">
