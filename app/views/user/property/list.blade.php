@extends('layouts.master')

@section('content')
    <h1>List Properties</h1>

{{ Session::get('message') }}



@foreach($properties as $property)
Title: {{ $property->title }} <br />
Description: {{ $property->description }} <br />
No. of rooms: {{ $property->no_of_rooms }} <br />
Monthly Rent: {{ $property->monthly_rent }} <br />
Date Added: {{ $property->created_at }} <br /> <br />

{{ link_to('property/view/'.$property->id, 'View') }} 
---
{{ link_to('property/edit/'.$property->id, 'Edit') }} 
---
{{ link_to('property/delete/'.$property->id,'Delete') }}

<hr />

@endforeach

@stop