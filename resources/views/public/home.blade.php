@extends('layouts.master')

@section('content')
    @include('components.home.hero')
    @include('components.home.our-services')
    {{-- @include('components.home.emergency-case') --}}
    @include('components.home.who-we-are')
    @include('components.home.meet-our-doctors')
    @include('components.home.latest-posts')
    @include('components.home.contact-us')
@endsection