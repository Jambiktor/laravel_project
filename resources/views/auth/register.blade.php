@extends("layouts.default")
@section("title", "Register" )
@section("content")
<div class="container-fluid d-flex justify-content-center align-items-center vh-100">
    <div class="w-50 border p-3 ">
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
        <h1>Register <h6>(di pwede magcode si jm)</h6>
        </h1>
        <div class="card-body border-0">
            <form class="row g-3" method="POST" action="{{route("register.post")}}">
                @csrf
                <div class="col-md-12">
                    <label for="name" class="form-label">Fullname</label>
                    <input type="text" class="form-control" placeholder="Full name" id="name" name="name" autofocus>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email')}}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('password')}}</span>
                    @endif
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-dark">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection