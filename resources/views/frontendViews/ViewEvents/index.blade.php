@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <!--page view-->
        <div class="container py-5" id="page-container">
            <div class="row">
                <!--Calendar Display-->
                <div class="col-md-8">
                    <div id="calendar"></div>
                </div>
                <!--Calendar Display End-->

                <!--Event Schedule Form-->
                <div class="col-md-4">
                    <div class="cardt rounded-0 shadow">
                        <div class="card-header bg-gradient bg-primary text-light">
                            <h5 class="card-title">Schedule Form</h5>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <form action="{{ route('events.store') }}" method="post" id="schedule-form">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label for="title" class="control-label">Title</label>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="title"
                                            id="title" value="{{ isset($event) ? $event->title : '' }}">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="start_datetime" class="control-label">Start</label>
                                        <input type="datetime-local" class="form-control form-control-sm rounded-0"
                                            name="start_datetime" id="start_datetime"
                                            value="{{ isset($event) ? $event->start_datetime : '' }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="end_datetime" class="control-label">End</label>
                                        <input type="datetime-local" class="form-control form-control-sm rounded-0"
                                            name="end_datetime" id="end_datetime"
                                            value="{{ isset($event) ? $event->end_datetime : '' }}">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="description" class="control-label">Description</label>
                                        <textarea class="form-control form-control-sm rounded-0" name="description" id="description">{{ isset($event) ? $event->description : '' }}</textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i
                                        class="fa fa-save"></i> Save</button>
                                <button class="btn btn-default border btn-sm rounded-0" type="reset"
                                    form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Event Schedule Form End-->
            </div>
        </div>
        <!--page view End-->

        <!-- Event Details Modal -->
        <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0">
                    <div class="modal-header rounded-0">
                        <h5 class="modal-title">Schedule Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body rounded-0">
                        <div class="container-fluid">
                            <dl>
                                <dt class="text-muted">Title</dt>
                                <dd id="title" class="fw-bold fs-4"></dd>
                                <dt class="text-muted">Start Date</dt>
                                <dd id="start" class=""></dd>
                                <dt class="text-muted">End Date</dt>
                                <dd id="end" class=""></dd>
                                <dt class="text-muted">Description</dt>
                                <dd id="description" class="fw-bold fs-4"></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="modal-footer rounded-0">
                        <div class="text-end">
                            <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete"
                                data-id="">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details Modal -->
    </div>


    <script>
        var events = @json($schedu);
    </script>
    <script>
        // Define a global JavaScript variable to store the delete and update URL
        var deleteURL = "{{ route('events.destroy', '') }}";
        var updateURL = "{{ route('events.update', '') }}";
    </script>

    <!-- Scripts -->
    <script src="{{ asset('js/js/app.js') }}" defer></script>
@endsection
