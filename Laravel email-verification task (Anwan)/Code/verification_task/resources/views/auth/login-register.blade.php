<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login | Register</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{URL::asset('css/form.css')}}">
    </head>


    <body>
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://dpu9p9oqlfjw9.cloudfront.net/web/template/assets/img/anwan_main_logo.png" alt="">
                    <h3>Welcome</h3>
                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            @if($errors->get('register_*'))
                            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Login</a>
                            @else
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Login</a>
                            @endif

                        </li>
                        <li class="nav-item">
                            @if($errors->get('register_*'))
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Register</a>
                            @else
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Register</a>
                            @endif

                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @if($errors->get('register_*'))
                        <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
                            @else
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                @endif

                                <h3 class="register-heading">Login</h3>
                                <div class="row register-form">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                @error('email')
                                                <div style="color: red; font-weight:500">{{ $message }}</div>
                                                @enderror
                                                <input type="text" class="form-control" placeholder="Email *"
                                                    name="email" value="{{ old('email') }}" />
                                            </div>
                                            @error('password')
                                            <div style="color: red; font-weight:500">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password *"
                                                    name="password" value="" />
                                            </div>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col text-center ">
                                                        <input type="submit" class="btnRegister" name="login-submit"
                                                            value="Login" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-md-3"></div>
                                </div>
                            </div>


                            @if($errors->get('register_*'))
                            <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                @else
                                <div class="tab-pane fade show" id="profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    @endif
                                    <h3 class="register-heading">Register</h3>
                                    <div class="row register-form">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-group">
                                                    @error('register_name')
                                                    <div style="color: red; font-weight:500">{{ $message }}</div>
                                                    @enderror
                                                    <input type="text" class="form-control" placeholder="Name *"
                                                        name="register_name" value="{{ old('register_name') }}" />
                                                </div>
                                                <div class="form-group">
                                                    @error('register_email')
                                                    <div style="color: red; font-weight:500">{{ $message }}</div>
                                                    @enderror
                                                    <input type="text" class="form-control" placeholder="Email *"
                                                        name="register_email" value="{{ old('register_email') }}" />
                                                </div>
                                                @error('register_password')
                                                <div style="color: red; font-weight:500">{{ $message }}</div>
                                                @enderror
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Password *"
                                                        name="register_password" value="" />
                                                </div>
                                                @error('register_password_confirmation')
                                                <div style="color: red; font-weight:500">{{ $message }}</div>
                                                @enderror
                                                <div class="form-group">
                                                    <input type="password" class="form-control"
                                                        placeholder="Confirm Password *"
                                                        name="register_password_confirmation" value="" />
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col text-center ">
                                                            <input type="submit" class="btnRegister"
                                                                name="register-submit" value="Register" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>

                                </div>
                                <script type="text/javascript"></script>
    </body>

</html>

</body>

</html>
