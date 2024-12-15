@extends('layouts.app-master')

@section('content')

<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
    <div class="bg-light p-4 rounded">


        <div class="container mt-4">
            <h1>{{ ucfirst($role->name) }} Role</h1>
            <div class="lead">

            </div>
            <h3>Assigned permissions</h3>

            <table class="table table-striped table-responsive-sm">
                <thead>
                    <th scope="col" width="20%">Name</th>
                    <th scope="col" width="1%">Guard</th>
                </thead>

                @foreach($rolePermissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                    </tr>
                @endforeach
            </table>
            <div class="mt-4">
                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info">Edit</a>
                <a href="{{ route('roles.index') }}" class="btn btn-default">Back</a>
            </div>
        </div>

    </div>
        </div>
    </div>

@endsection
