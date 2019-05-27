@extends('index')

@section('content')
    @component('partials.title')
        {{ $page->title }}
    @endcomponent

    @include('partials.nav')
@endsection