@extends('templates.main')
@section('title', 'Login')
@section("script")
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@stop
@section("content")
<div class="container">
        <div class="blueBg">
            <div class="box signin">
                <h2>Alredy Have an Account?</h2>
                <button class="signinBtn">Sign in</button>
            </div>
            <div class="box signup">
                <h2>Don't Have an Account?</h2>
                <button class="signupBtn">Sign up</button>
            </div>
        </div>
        <div class="formBx">
            <div class="form signinForm">
                <form>
                    <h3>Sign In</h3>
                    <input type="text" placeholder="Username">
                    <input type="password" placeholder="Password">
                    <input type="submit" value="Login">
                    <a href="#" class="link">Forgot Password</a>
                </form>
            </div>
            <div class="form signupForm">
                <form>
                    <h3>Sign Up</h3>
                    <input type="text" placeholder="Username">
                    <input type="text" placeholder="Email Adress">
                    <input type="password" placeholder="Password">
                    <input type="password" placeholder="Confirm Password">
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
    <script>
        const signinBtn = document.querySelector('.signinBtn');
        const signupBtn = document.querySelector('.signupBtn');
        const formBx = document.querySelector('.formBx');
        const body = document.querySelector('body')

        signupBtn.onclick = function() {
            formBx.classList.add('active')
            body.classList.add('active')
        }

        signinBtn.onclick = function() {
            formBx.classList.remove('active')
            body.classList.remove('active')
        }
    </script>
@stop