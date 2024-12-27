@extends("layouts.default")
@section("title", "Login")
@section("content")
<div class="container-fluid d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="w-50 border p-4 rounded shadow-lg bg-white">
        @if(session()->has("success"))
        <div class="alert alert-success">
            {{session()->get("success")}}
        </div>
        @endif
        @if(session()->has("error"))
        <div class="alert alert-danger">
            {{session()->get("error")}}
        </div>
        @endif
        <h1 class="text-center mb-4">Login</h1>
        <div class="card-body border-0">
            <form class="row g-3" method="POST" action="{{route("login.post")}}">
                @csrf
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    @if ($errors->has('email'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter your password">
                    @if ($errors->has('password'))
                    <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-dark w-100 py-2">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection