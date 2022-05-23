@extends('layouts.welcome')
@section('content')
<body>

    <form action="{{url('post-login')}}" method="POST" id="logForm">
        <h2>Login</h2>
    @csrf
        <div class="box-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Email</label>
                            <input  id="inputEmailAddress" name="email" type="email" placeholder="Enter email address" />
                    </div>
                </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label  for="inputPassword">Password</label>
                        <input  id="inputPassword" type="password" name="password" placeholder="Enter password" />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input  id="rememberPasswordCheck" type="checkbox" />
                        <label  for="rememberPasswordCheck">Remember password</label>
                </div>
            </div>
        </div>
        <a  href="#">Forgot Password?</a>
            <button  type="submit">Login</button>
        </div>
    </form>
    <div>
        <a href="{{url('register')}}">Need an account? Sign up!</a>
    </div>
    </div>
    </body>
    @endsection