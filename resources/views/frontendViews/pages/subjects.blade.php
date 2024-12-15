
@extends('layouts.frontend-master')

@section('content')
<div class="container">
    <!-- Tab buttons -->
    <div class="tab">
        @foreach($subjects as $subject)
            <button class="tablinks" onclick="openCity(event, '{{ $subject->subject_name }}')"
                @if($loop->first) id="defaultOpen" @endif>
                {{ $subject->subject_name }}
            </button>
        @endforeach
    </div>

    <!-- Tab content -->
    @foreach($subjects as $subject)
        <div id="{{ $subject->subject_name }}" class="tabcontent">
            <h2>{{ $subject->subject_name }}</h2>
            <div>{!! $subject->content !!}</div> <!-- Display the dynamic content from the database -->
        </div>
    @endforeach
</div>
@endsection

@section('scripts')
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        // Hide all elements with class="tabcontent"
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Automatically click the default tab
    document.getElementById("defaultOpen").click();
</script>

