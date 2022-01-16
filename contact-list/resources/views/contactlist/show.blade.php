@extends('contactlist.layout')

@section('content')
    <h1>{{ $contact->name }}</h1>
    <h2>{{ $contact->phone }}</h2>
@endsection
