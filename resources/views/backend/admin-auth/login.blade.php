<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin login</title>
    <!-- Bootstrap -->
    <link href="{{url('backend-assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('backend-assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

        body {
            font-family: 'Open Sans', sans-serif;
            background: #f9faff;
            color: #3a3c47;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-top: 48px;
        }

        form {
            background: #fff;
            max-width: 360px;
            width: 100%;
            padding: 58px 44px;
            border: 1px solid # #e1e2f0;
            border-radius: 4px;
            box-shadow: 0 0 5px 0 rgba(42, 45, 48, 0.12);
            transition: all 0.3s ease;
        }

        .row {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .row label {
            font-size: 13px;
            color: #8086a9;
        }

        .row input {
            flex: 1;
            padding: 13px;
            border: 1px solid #d6d8e6;
            border-radius: 4px;
            font-size: 16px;
            transition: all 0.2s ease-out;
        }

        .row input:focus {
            outline: none;
            box-shadow: inset 2px 2px 5px 0 rgba(42, 45, 48, 0.12);
        }

        .row input::placeholder {
            color: #C8CDDF;
        }

        button {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            background: #15C39A;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-family: 'Open Sans', sans-serif;
            margin-top: 15px;
            transition: background 0.2s ease-out;
        }

        button:hover {
            background: #55D3AC;
        }

        @media (max-width: 458px) {

            body {
                margin: 0 18px;
            }

            form {
                background: #f9faff;
                border: none;
                box-shadow: none;
                padding: 20px 0;
            }

        }
    </style>
</head>
<body>
<h1>Login</h1>
@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif

<form action="{{route('admin-login')}}" method="post">
    @csrf
    <div class="row">
        <label for="username">Username:
            <a style="color: red;text-decoration: none">{{$errors->first('username')}}</a>
        </label>
        <input type="text" name="username" value="{{old('username')}}" autocomplete="off" id="username">
    </div>
    <div class="row">
        <label for="password">Password:
            <a style="color: red;text-decoration: none">{{$errors->first('password')}}</a>
        </label>
        <input type="password" name="password" id="password">
    </div>
    <button type="submit">Login</button>
</form>

</body>
</html>
