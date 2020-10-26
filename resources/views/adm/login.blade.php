<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            background-color: silver;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 100%;
            max-width: 700px;
            background: white;
            padding: 24px;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form img {
            margin-bottom: 64px;
        }

        form label, form input {
            width: 100%;
            max-width: 500px;
        }

        form input {
            height: 32px;
            margin-bottom: 16px;
        }

        form label {
            text-align: left;
        }

        .error {
            width: 100%;
            max-width: 500px;
            background-color: rgba(255,0,0, 0.2);
            padding: 16px;
            color: red;
            margin-bottom: 16px;
            font-size: 18px;
            font-weight: bold;
        }

        button {
            margin-top: 64px;
            padding: 8px 16px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <form action="{{ route('login') }}" method="post">
        @csrf

        <img src="https://sonassets.s3.amazonaws.com/img/logo-top.png" alt="" width="200px">

        @if($errors)
            @foreach($errors->all() as $error)
                <p class="error">{{ $error }}</p>
            @endforeach
        @endif

        <label for="">Email
            <input type="email" name="email" value="{{ old('email') }}">
        </label>
        <label for="">Senha
            <input type="password" name="password">
        </label>
        <button>Entrar</button>
    </form>
</body>
</html>
