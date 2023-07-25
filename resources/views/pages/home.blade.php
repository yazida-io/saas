@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <x-home.hero />
    <x-home.features />
    <x-home.integration />
    <x-home.content />
    <x-home.call-to-action />
@endsection
