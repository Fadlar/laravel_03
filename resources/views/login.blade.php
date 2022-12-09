@extends('template')
@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card rounded-4 overflow-hidden">
                <div class="card-header bg-white border-bottom-0">
                    Login
                </div>
                <div class="card-body rounded-0">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email" placeholder="Email" />
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password" placeholder="Password" />
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="remember">
                                Remember Me
                            </label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
