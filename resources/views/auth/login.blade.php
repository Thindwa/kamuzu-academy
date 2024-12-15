@extends('layouts.auth-master')

@section('content')
    <div class="card shadow rounded">
        <div class="card-body">
            <form method="post" action="{{ route('login.perform') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <img class="mb-4" src="{!! url('images/logo.png') !!}" alt="" width="250px" height="100px">

                <h1 class="h3 mb-3 fw-normal">Login</h1>

                @if (session('success'))
                    @if (is_array(session('success')))
                        @foreach (session('success') as $msg)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-check"></i>
                                {{ $msg }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-check"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @push('scripts')
                        <script src="{{ asset('js/fade-out-alert.js') }}"></script>
                    @endpush
                @endif


                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                        placeholder="Username" required="required" autofocus>
                    <label for="floatingName">Email or Username</label>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                        placeholder="Password" required="required">
                    <label for="floatingPassword">Password</label>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="remember">Remember me</label>
                    <input type="checkbox" name="remember" value="1">
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                @include('auth.partials.copy')
            </form>
        </div>
    </div>
@endsection
