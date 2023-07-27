@extends('layouts.default')

@section('title', 'Contact')

@section('content')
    <x-contact.main/>
    <x-contact.addresses />
    <x-contact.form />
@endsection
