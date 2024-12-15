<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>kamuzu Academy</title>
    <!-- Custom fonts for this template-->
    <link href="{!! url('vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .float-right {
            float: right;
        }

        .note-editor {
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .note-editor .note-toolbar {
            background-color: #f8f9fa;
            border-bottom: 1px solid #ccc;
        }

        .note-editor .note-statusbar {
            background-color: #f8f9fa;
            border-top: 1px solid #ccc;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    <link href="{!! url('css/sb-admin-2.min.css') !!}" rel="stylesheet" />




</head>

<body>

    @include('layouts.partials.navbar')

    <div class="container-fluid-lg pt-4 py-2">

        @yield('content')
    </div>

    @include('layouts.partials.backend-footer')


    <script src="{!! url('vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! url('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{!! url('vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{!! url('js/sb-admin-2.min.js') !!}"></script>


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote(
                {
                    
                callbacks: {
                    onPaste: function (e) {
                        // Prevent default paste behavior
                        e.preventDefault();
                        // Get the text content from the clipboard
                        var text = (e.originalEvent || e).clipboardData.getData('text/plain');
                        // Insert the plain text into the editor
                        document.execCommand('insertText', false, text);
                    },

                } 
                    
                }
                
                
                );
            
        });
    </script>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @section('scripts')

    @show
</body>

</html>
