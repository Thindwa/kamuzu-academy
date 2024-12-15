@extends('layouts.frontend-master')

<style>
    #pdf-preview {
        width: 100%;
        height: 500px;
        /* Set the desired height for the preview */
    }
</style>

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">School Calendar</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/boarding') }}">School Calendar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mx-auto">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <h4 class="ka-text py-4 pb-4">Term 1</h4>
                        </div>
                        <div class="col-md-10">
                            @if ($term1Calendar)
                                <p>
                                    <a href="{{ asset('storage/' . $term1Calendar->file_path) }}"
                                        class="btn ka d-none d-block" target="_blank" rel="noopener noreferrer"
                                        id="downloadLink">Download Term 1
                                        Calendar</a>
                                </p>
                                <iframe id="pdf-preview"
                                    src="{{ asset('storage/' . $term1Calendar->file_path) }}?#toolbar=0" width="100%"
                                    height="500px" style="border:none;"></iframe>
                                {{-- <object
                                    data="https://docs.google.com/viewer?url={{ urlencode(asset('storage/' . $term1Calendar->file_path)) }}&embedded=true"
                                    type="application/pdf" width="100%" height="500px">
                                    <p>
                                        <a href="{{ asset('storage/' . $term1Calendar->file_path) }}" class="btn ka"
                                            target="_blank" rel="noopener noreferrer" id="downloadLink">Download Term 1
                                            Calendar</a>
                                    </p>
                                </object> --}}
                            @endif
                        </div>
                    </div>


                </div>

                <div class="col-sm-12 mx-auto py-4">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <h4 class="ka-text py-5 pb-5">Term 2</h4>

                        </div>
                        <div class="col-md-10 ">
                            @if ($term2Calendar)
                                <p> <a href="{{ asset('storage/' . $term2Calendar->file_path) }}" class="btn ka"
                                        target="_blank">Download Term 2 Calendar</a></p>
                                <iframe id="pdf-preview"
                                    src="{{ asset('storage/' . $term2Calendar->file_path) }}?#toolbar=0" width="100%"
                                    height="500px" style="border:none;"></iframe>
                            @endif
                        </div>
                    </div>


                </div>
                <div class="col-sm-12 mx-auto">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <h4 class="ka-text py-5 pb-5">Term 3</h4>

                        </div>
                        <div class="col-md-10 ">
                            @if ($term3Calendar)
                                <p> <a href="{{ asset('storage/' . $term3Calendar->file_path) }}" class="btn ka"
                                        target="_blank">Download Term 3 Calendar</a></p>
                                <iframe id="pdf-preview"
                                    src="{{ asset('storage/' . $term3Calendar->file_path) }}?#toolbar=0" width="100%"
                                    height="500px" style="border:none;"></iframe>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
