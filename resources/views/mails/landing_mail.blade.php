Hi There,
<br><br>

Here is the lead generated from the Klean Keepers website,
<br>
Lead details
<br><br>
@foreach($data as $key=>$value)

    @if($key !== '_token')
    {{$key}} : {{$value}} <br>
    @endif

@endforeach

<br>
Thanks,
Automated message