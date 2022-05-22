@extends('layouts.frontbase')

@section('header')

@include('home.header')
@endsection

@section('content')
<header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 mt-5">
                    <h1>Log In</h1>
                   <p>You don't have a password? Then please <a class="white" href="sign-up.html">Sign Up</a></p>
                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <form  method="POST" action="{{ route('loginCheck') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email"  name="email" >
                                <label class="label-control" for="lemail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password">
                                <label class="label-control" for="lpassword">Password</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <button type="submit" class="form-control-submit-button">LOG IN</button>

                        </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
@endsection