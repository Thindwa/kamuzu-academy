@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Leadership Team</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a></li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white" href="{{ URL::to('/boarding') }}">Leadership Team</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

  <section class="section">
    <div class="container">
        <div class="row">
            <h4 class="ka-text lead text-center pb-5">Leadership Team</h4>
            @foreach($leaderships as $leader)
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/' . $leader->image) }}" alt="Card image">
                        <div class="card-body">
                            <h6 class="card-title">{{ $leader->name }}</h6>
                            <p class="card-text">{{ $leader->position }}</p>

                            @if($leader->message)
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#messageModal{{ $leader->id }}">
                                    See message
                                </button>
                            @endif
                            
                              @if($leader->bio)
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bioModal{{ $leader->id }}">
                                See Bio
                            </button>
                            @endif

                           
                        </div>
                    </div>
                </div>

                <!-- Modal for message -->
                @if($leader->message)
                    <div class="modal fade" id="messageModal{{ $leader->id }}" tabindex="-1" aria-labelledby="messageModalLabel{{ $leader->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="messageModalLabel{{ $leader->id }}">{{ $leader->name }}’s Message</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>{!! nl2br(e($leader->message)) !!}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Modal for bio -->
                <div class="modal fade" id="bioModal{{ $leader->id }}" tabindex="-1" role="dialog" aria-labelledby="bioModalLabel{{ $leader->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="bioModalLabel{{ $leader->id }}">Bio of {{ $leader->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>{!! nl2br(e($leader->bio)) !!}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>




   @endsection
