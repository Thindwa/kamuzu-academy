@if(Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-check"></i>
                {{ $msg }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <script>
                // Fade out the success alert after 1000 milliseconds
                setTimeout(function() {
                    $('.alert-success').fadeOut('slow');
                }, 1000);
            </script>
        @endforeach
    @else
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-check"></i>
            {{ $data }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            // Fade out the success alert after 1000 milliseconds
            setTimeout(function() {
                $('.alert-success').fadeOut('slow');
            }, 2000);
        </script>
    @endif
@endif
