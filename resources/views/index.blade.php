<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Github - {{ $name }}</title>
    <style>
        #logout{
            padding: 15px;
            border: none;
            text-decoration: none;
            font-size: 1.3rem;
            font-weight: bold;
            background: #000;
            color: #fff;
            margin-top: 10px;
        }

        .logout{
            margin: auto;
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="card-main" style="margin: auto; width: 45%; height: 80vh; background: #ddd; display: flex; align-items: center; flex-direction: column">
        <img src="{{ $avatar }}" alt="" style=" width: 40%; height:
        45%; border-radius: 50%; margin: 4%;">
        <h2>{{$name}}</h2>
        <p>{{$bio}}</p>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <a href="/repos" style="margin: 0 10px;"><h4>Repositorios Públicos: {{$public_repos}}</h4></a>
            <h4 style="margin: 0 10px">{{$location}}</h4>
        </div>
    </div>
    <div class="logout">
        <a href="/logout" id="logout">Sair</a>
    </div>
</body>
</html>
