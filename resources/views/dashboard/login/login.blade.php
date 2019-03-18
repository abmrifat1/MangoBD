@extends('dashboard.login.master')

@section('form')
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Sign In Now</h2>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
            <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
            <span><input type="checkbox" />Remember Me</span>
            <h6><a href="#">Forgot Password?</a></h6>
            <div class="clearfix"></div>
            <div class="form-group">
                <input type="submit" value="Sign In" name="btn" class="btn btn-success btn-block">
            </div>

        </form>
        <p>Don't Have an Account ?<a href="{{url('/register')}}">Create an account</a></p>
    </div>
</div>
    @endsection()
