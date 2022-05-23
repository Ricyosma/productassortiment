@extends('layouts.welcome')
@section('content')
<body>
            <form action="{{url('post-register')}}" method="POST" id="regForm">
            <h2>Register</h2>
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                        <label>Full Name</label>
                        <input  id="inputFirstName" type="text" name="name" placeholder="Enter Full Name" />
                    </div>  
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input  id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Enter email address" />
                </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                    <label>Password</label>
                    <input  id="inputPassword" type="password" name="password" placeholder="Enter password" />
                    </div>
                </div>
                <div>
                    <button  type="submit">Create Account</button>
                </div>
            </div>
</div>
            </form>
            <div>
                <a href="{{url('login')}}">Have an account? Go to login</a>
            </div>
    </body>
@endsection