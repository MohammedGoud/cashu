@extends('layouts.default')

@section('content')
<ul>
    <li><a href="{{url('files')}}">List Files</a></li>
    <li><a href="{{url('search')}}">Search File</a></li>
    <li><a href="{{url('upload')}}">Upload File</a></li>
    <li><a href="{{url('logout')}}">Logout</a></li>
</ul>
@stop