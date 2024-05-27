<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__top">
                <a href="#" class="logo">
                    <img src="img/Vector.svg" alt="#" >
                </a>
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="item">
                            <a href="" class="menu__link">Информация</a>
                        </li>
                        <li class="item">
                            <a href="" class="menu__link">Продукты</a>
                        </li>
                        <li class="item">
                            <a href="" class="menu__link">Контакты</a>
                        </li>
                        <li class="item">
                            <button href="#" class="menu__btn">Купить</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__content">
                <h1 class="title">
                    <span class="title--air">Air</span><span class="title--pod">Pod</span><span
                        class="title--s">S</span><span class="title--m">M</span><span class="title--ax">AX</span>
                </h1>
                <div class="header__content-imges">
                @foreach ($images as $image)
                    <img class="content-item color--{{ $image->title }}" src="img/airpods-max-{{ $image->title }}.png" alt=""> 
                @endforeach
                    <!-- <img  class="content-item color--black content-item__active" src="img/airpods-max-select-silver-202011 1.png" alt="">
                    <img  class="content-item color--white " src="img/white-hurdpones.png" alt="">
                    <img  class="content-item color--red " src="img/airpods-max-select-silver-202011 1(3).png" alt=""> 
                    <img  class="content-item color--green " src="img/airpods-max-green.png" alt="">
                    <img  class="content-item color--blue  " src="img/airpods-max-blue.png" alt="">  -->
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="choose-color">
            <div class="container">
                <h3 class="choose-color__title">
                    <!-- Выберите свой цвет -->
                    {{$content[0]['title']}}
                </h3>
                <p class="choose-color__text">
                    {{$content[1]['title']}}

                </p>

                <div class="choose-color__list">

                    @foreach ($images as $image)
                        <button class="choose__color-btn" data-button="color--{{$image->title }}">
                            <img src="img/{{ $image->title  }}.png" alt="">
                        </button>
                    @endforeach
                    
                    <!-- <button class="choose__color-btn" data-button="color--white">
                        <img src="img/white.png" alt="">
                    </button>
                    <button class="choose__color-btn" data-button="color--red">
                        <img src="img/red.png" alt="">
                    </button>
                    <button class="choose__color-btn" data-button="color--green">
                        <img src="img/green.png" alt="">
                    </button>
                    <button class="choose__color-btn" data-button="color--blue">
                        <img src="img/blue.png" alt="">
                    </button>
                    <button class="choose__color-btn choose__color-btn--active" data-button="color--black">
                        <img src="img/black.png" alt="">
                    </button> -->
                </div>
            </div>
        </section>
        <section class="composition">
            <div class="container">
                <h2 class="composition__title  main__title">
                {{$content[2]['title']}}
                </h2>
                <p class="composition__text">
                {{$content[3]['title']}}
                </p>
                <div class="composition__liner">
                    <div class="composition__liner-text">
                        <p>
                        {{$content[4]['title']}}
                        </p>
                        <p>
                        {{$content[5]['title']}}
                        </p>
                        <p>
                        {{$content[6]['title']}}
                        </p>
                    </div>
                    @foreach ($images as $image)
                        <img class="content-item color--{{$image->title}} " src="img/imgside-{{$image->title}}.jpg" alt="">
                    @endforeach
                    <!-- <img class="content-item color--blue " src="img/imgside-blue.jpg" alt="">
                    <img class="content-item color--green" src="img/imgside-green.jpg" alt="">
                    <img class="content-item color--white" src="img/imgside-white.jpg" alt="">
                    <img class="content-item color--red" src="img/imgside-red.jpg" alt="">
                    <img class="content-item color--black content-item__active " src="img/side-black.jpg" alt=""> -->
                </div>
            </div>
        </section>
        <section class="case">
            <div class="container">
                <h2 class="case__title main__title">
                {{$content[7]['title']}}
                </h2>
                <p class="case__text">
                {{$content[8]['title']}}
                </p>
                @foreach ($images as $image)
                    <img class="content-item color--{{$image->title}} " src="img/case-{{$image->title}}.jpg" alt="">
                @endforeach
                <!-- <img class="content-item color--black content-item__active "src="img/case-black.jpg" alt="">
                <img class="content-item color--blue " src="img/case-blue.jpg" alt="">
                <img class="content-item color--green " src="img/case-green.jpg" alt="">
                <img class="content-item color--red " src="img/case-red.jpg" alt="">
                <img class="content-item color--white " src="img/case-white.jpg" alt=""> -->
                <h2 class="energy__title main__title">
                {{$content[9]['title']}}
                </h2>
                <p class="energy__num">{{$content[11]['title']}}</p>
                <p class="energy__text">
                {{$content[10]['title']}}
                </p>
            </div>
        </section>
        <section class="audio">
            <div class="container">
            <div class="audio__inner">
                <div class="audio__box">
                    <p class="audio__text">{{$content[12]['title']}}
                    </p>
                    <p class="audio__text">
                    {{$content[13]['title']}}
                    </p>
                    <p class="audio__text">
                        {{$content[13]['title']}}
                    </p>
                    <button class="btn">
                        Купить
                    </button>
                </div> 
            </div>
         </div>
       
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <a href="#" class="footer__link">
                Найдите ближайший к вам магазин
            </a>
           <p class="footer__text">
            Или позвоните по телефону <a href="tel:800 207 758">800 207 758</a>
           </p>
           <a href="#" class="logo">
            <img src="img/Vector-white.svg" alt="#" scr="imges/logo.svg">
        </a>
         <ul class="footer__list">
    
    <li class="footer__item">Авторское право © 2023 Apple Inc</li>
    <li class="footer__item">Все права защищены.

    </li>
    <li class="footer__item">
        <a href="#">Юридические уведомления</a>
    </li>
    <li class="footer__item">
        <a href="#">Карта сайта</a>
    </li>
    <li class="footer__item">
        <a href="#">Политика конфиденциальности</a>
    </li>
        </ul>
    </div>
    <div>

    </div>
</footer>
    <script src="main.js"></script>
</body>

</html>