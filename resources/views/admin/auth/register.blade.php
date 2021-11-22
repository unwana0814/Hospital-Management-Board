@extends('layouts.app')

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header text-center bg-gradient-to-r from-blue-800 to-pink-500 mt-2 text-white">Add New Admin To Hospital</h5>
                    <div class="card-body">

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="mt-6 items-center ">
    <p class="text-center">Already have an account?
    <a class="" href="{{ route('login') }}" title="login" class="btn btn-primary">Login</a></p>
</div>
@endsection
