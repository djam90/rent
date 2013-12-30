@extends('layouts.master')

@section('content')
    <h1>Dashboard</h1>

{{ Session::get('message') }}

{{ link_to('property/add','Add Property') }} <br />
{{ link_to('property/list','View Properties') }} <br />
{{ link_to('','User Settings') }} <br />

@stop