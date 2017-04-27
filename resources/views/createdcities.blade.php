





<form method="POST" action="{{ route('cities.create') }}" >
    <input type="text" name="city" value=""  placeholder="City Name" />
    <br/>
    <input type="submit" value="Submit"/>

    {{ csrf_field() }}
</form>