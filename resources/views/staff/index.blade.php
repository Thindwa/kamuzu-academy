@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                <div class="container">
                    <h1>Staff Members</h1>
                    <div class="lead">
                        Manage your staff members here.
                        <a href="{{ route('staff.create') }}" class="btn btn-primary btn-sm float-right">Add new staff</a>
                    </div>

                    <div class="mt-2">
                        @include('layouts.partials.messages')
                    </div>

                    <table class="table table-striped table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col" width="1%">#</th>
                                <th scope="col" width="15%">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col" width="10%">Position</th>
                                <th scope="col" width="1%" colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staffMembers as $member)
                                <tr>
                                    <th scope="row">{{ $member->id }}</th>
                                    <td>
                                        @php
                                            // Check if the name is a JSON string or an array
                                            $name = $member->name;

                                            if (is_string($name)) {
                                                // Attempt to decode JSON
                                                $decoded = json_decode($name, true);
                                                // Check if it is an array after decoding
                                                if (is_array($decoded)) {
                                                    // If it's an array, join the elements
                                                    $displayName = implode(', ', $decoded);
                                                } else {
                                                    // Not an array, use the original string
                                                    $displayName = $name;
                                                }
                                            } else {
                                                // Not a string, use the original value
                                                $displayName = $name;
                                            }
                                        @endphp

                                        {{ $displayName }}
                                    </td>
                                    <td>{{ $member->category }}</td>
                                    <td>{{ $member->position }}</td>
                                    <!--<td><a href="{{ route('staff.show', $member->id) }}" class="btn btn-warning btn-sm">Show</a></td>-->
                                    <td><a href="{{ route('staff.edit', $member) }}" class="btn btn-info btn-sm">Edit</a></td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE','route' => ['staff.destroy', $member->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
