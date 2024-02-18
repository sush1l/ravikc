<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
    .modal-content{
			background-color: darkcyan;
            margin: auto;
		}
		.btn-link{
			color:white;
		}
		.modal-heading h2{
			color:#ffffff;
		}

</style>
</head>
<body>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-heading">
            <h2 class="text-center">Login</h2>
        </div>
        <hr />
        <div class="modal-body">
            <form method="POST" action="{{ route('login') }}" role="form">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                        </span>
                        <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror" placeholder="User Name" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: #fff">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                        </span>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />

                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: #fff">{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: #fff">{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-lg">Login</button>

                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>
