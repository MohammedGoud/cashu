@extends('layouts.default')

@section('content')
<form method="GET" action="{{url('/login')}}">
    <button class="button-primary">Login with Google</button>
</form>
@stop