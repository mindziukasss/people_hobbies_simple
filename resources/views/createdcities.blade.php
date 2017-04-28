

{!! Form::open(['url' => route('cities.create')]) !!}
    {{ Form::label('city', 'City')}}
    {{ Form::text('city') }}
    {{ Form::submit('OK') }}
{!! Form::close() !!}


@if(isset($name))

    <div style="background: green"> Citi create: {{ $name }}</div>

@endif
