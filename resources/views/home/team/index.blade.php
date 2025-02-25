@extends('layoutPages')

@section('title', 'Home Page')

@section('content')
<div class="mt-120">
    <div class="breadcrumb flat">
        <a href="/" class="active">HOME</a>
        <a href="{{ route('new_experience.list') }}">New Experience</a>
    </div>
    <div class="list-new_experience">
       
    </div>
</div>

@endsection