@extends('layouts.default')

@section('title', $page->title)

@section('content')
    <section class="prose lg:prose-xl container">
        <h1>
            {{ $page->title }}
        </h1>
        {!! $page->content !!}
    </section>
@endsection
