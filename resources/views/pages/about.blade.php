@extends('layouts.default')

@section('title', 'About Us')

@section('content')
    <x-about.main/>
    <x-about.mission />
    <x-about.our-values/>
    <x-home.call-to-action />
@endsection
