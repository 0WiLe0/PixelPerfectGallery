<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixPerfGallery</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/reg.css ">
</head>
<body>
    <section>
        <div class="brg_t">
            <div class="bgr_t_l">
                <img src="img/bgr_main/ball1.svg" alt="" class="ball1 animate__animated animate__fadeInDownBig animate__delay-1s">
            </div>
            <div class="bgr_t_r">
                <img src="img/bgr_main/camera.png" alt="" class="camera animate__animated animate__fadeInRightBig animate__delay0.5s">
            </div>    
        </div>
        <div class="container">
            <div class="main animate__animated animate__fadeInDownBig animate__delay-0.5s">
                <div class="form main animate__animated animate__fadeInDownBig animate__delay-0.5s">
                    <div class="title">
                        <h2>Регистрация</h2>
                    </div>

                    <form action="{{ route('register')}}" method="post" >
                        @csrf
                        <input value="{{ old('nickname') }}" style="{{$errors->has('nickname')?'border-bottom: 3px solid #bd4040;':'border-bottom:3px solid #161616;'}}" placeholder="Ваш псевдоним" type="text" name="nickname">
                            @error('nickname')
                                <p class='error'>{{$message}}</p>
                            @enderror    
                        <input value="{{ old('fio') }}" style="{{$errors->has('fio')?'border-bottom: 3px solid #bd4040;':'border-bottom:3px solid #161616;'}}" placeholder="ФИО" type="text" name="fio">
                            @error('fio')
                                <p class='error'>{{$message}}</p>
                            @enderror 
                        <input value="{{ old('email') }}" style="{{$errors->has('email')?'border-bottom: 3px solid #bd4040;':'border-bottom:3px solid #161616;'}}" placeholder="Ваш Email" type="email" name="email">
                            @error('email')
                                <p class='error'>{{$message}}</p>
                            @enderror 
                        <input style="{{$errors->has('password')?'border-bottom: 3px solid #bd4040;':'border-bottom:3px solid #161616;'}}" placeholder="Введите пароль" type="password" name="password">
                            @error('password')
                                <p class='error'>{{$message}}</p>
                            @enderror 
                        <input style=" {{$errors->has('password_confirmation') ? 'border-bottom: 3px solid #bd4040;' : 'border-bottom:3px solid #161616;' }} " placeholder="Повторите пароль" type="password" name="password_confirmation">
                            @error('password_confirmation')
                                <p class='error'>{{$message}}</p>
                            @enderror 
                        <button class="btn" type="submit">Зарегистрироваться</button>
                    </form>
                    <p class='nlog'>или<a href="/login">войти</a></p>
                </div>
            </div>
        </div>
        <div class="bgr_b">
            <div class="bgr_b_l">
                <img src="img/bgr_main/photo1.png" alt="" class="photo1 animate__animated animate__backInLeft animate__delay-0.5s">
                <img src="img/bgr_main/photo2.png" alt="" class="photo2 animate__animated animate__backInLeft animate__delay-1s">
                <img src="img/bgr_main/photo3.png" alt="" class="photo3 animate__animated animate__backInLeft animate__delay-2s">
            </div>
            <div class="bgr_b_r">
                <img src="img/bgr_main/ball2.svg" alt="" class="ball2 animate__animated animate__fadeInUpBig animate__delay-1s"> 
            </div>
        </div>
    </section>
</body>
</html>