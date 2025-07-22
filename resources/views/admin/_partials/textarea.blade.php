@php
    $name = str_replace('-','_',$key);
    $rand = rand(111111,999199).date('hisydm');
    if(empty($class)){
        $class = "";
    }
@endphp

<label for="">{{$label}}</label>
<textarea class="form-control {{$class}}" name="{{$name}}" rows="5">{{Key::get($key)}}</textarea>
