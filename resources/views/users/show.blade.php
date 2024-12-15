@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
    <div class="bg-light p-4 rounded">


        <div class="container mt-4">
            <h1>Show user</h1>
        <div class="lead">

        </div>
            <div>
                Name: {{ $user->name }}
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
            <div>
                Username: {{ $user->username }}
            </div>


            <div class="mt-4">
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
                <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
            </div>
        </div>

    </div>

@endsection
