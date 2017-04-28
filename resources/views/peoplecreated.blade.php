




{!! Form::open(['url' => route('people.create')]) !!}
    {{ Form::label('name', 'Name')}}
    {{ Form::text('name') }}
    {{ Form::label('surname', 'Surname')}}
    {{ Form::text('surname') }}
    {{ Form::label('phone_number', 'PH number')}}
    {{ Form::text('phone_number') }}
    {{ Form::select('city',$cities) }}
    





{{--{{ Form::checkbox('City', 'city'); }}--}}

    {{--{{ Form::label('bobbies', 'Hobbies')}}--}}
    {{--{{ Form::text('hobbies') }}--}}

    {{ Form::submit('OK') }}
{!! Form::close() !!}


{{--@if(isset($name))--}}

    {{--<div style="background: green"> Citi create: {{ $name }}</div>--}}


{{--@endif--}}