@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="form">
            <form action="{{ route('login') }}" class="login-form" method="post">
                @csrf

                <input type="email" class="@error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required
                       autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="password" name="password" placeholder="Password">

                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
@endsection
