@extends('Layout.baseview')
@section('title','Login')
@section('style')
<style>
</style>
@endsection
@section('content')
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="card" style="width:25rem">
            <div class="mt-4 mb-2">
                <i class="fa-solid fa-book"></i>
            </div>
            <div class="mt-2 mb-2">
                <h5 class="card-title text-center">Login</h5>
            </div>
            <div class="mt-2 mb-2">
                <p class="card-title text-center">Kindly Provide your Login Credentials</p>
            </div>
            <div class="card-body">
                <form action="{{route('login.authenticate')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mb-3">Login</button>

                    </div>
                    <div class="mb-3">
                        <p class="card-title ">Don't have an account? <a href="{{route('signup')}}" style="text-decoration:none">Click to Signup</a></p>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('customjs')
<script>
</script>
@endsection