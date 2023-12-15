<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- My CSS -->
     <link rel="stylesheet" href="{{asset('/assets/css/my.css')}}" />
    <title>Giriş Sayfası</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="inner-login">
            <div class="imgcontainer">
                <img src="{{asset('assets/images/gider-paylasim.png')}}" height="38" alt="GiderPaylasim Logo" /> 
                <!-- <img src="{{asset('assets/images/gider-paylasim.png')}}" height="38" alt="GiderPaylasim Logo" />  -->

            </div>
            <form action="{{route('login')}}" method="POST">
            @csrf
                <label class="label">Kullanıcı Adı</label>
                <input type="text" name="username">
                <label class="label">Şifre</label>
                <input type="password" name="password">
                <button type="submit">Giriş</button> 
            </form>
            </div>
        </div>
    </div>
</body>
</html>