{!! Form::open(['url' => route('hobbies.create')]) !!}
    {{ Form::label('bobbies', 'Hobbies')}}
    {{ Form::text('hobbies') }}
    {{ Form::submit('OK') }}
{!! Form::close() !!}


@if(isset($name))

    <div style="background: green"> Hobbies create: {{ $name }}</div>

@endif