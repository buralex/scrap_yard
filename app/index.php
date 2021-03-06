<?php
    require_once __DIR__ . '/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>ПРИЁМЛОМА</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= Site::url() . '/css/main.css' ?>">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <script src="<?= Site::url() . '/js/jquery.min.js' ?>"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>

	<script src="<?= Site::url() . '/js/placemark.js' ?>" type="text/javascript"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" class="loaded">
<div class="icon-load"></div>
    
    
<div class="main-wrapper">
  <header class="main-header">
    <div class="container-fluid wrapper ">
      <div class="row">
        <section class="text-c-center col-c-12 col-xs-5 col-md-3 col-lg-3 ">
          <figure class="logo logo--desktop logo--mob ">
            <a href="#">
              <span class="name">ПРИЁМ<span class="name__half">ЛОМА</span></span>
            </a>
            <figcaption>Прием металлолома в СПБ</figcaption>
          </figure>
        </section>
        
        <section class="info col-c-12 col-xs-7 col-md-4 col-lg-3 col-lg-push-1 text-right">
          <div class="info__content">
            <p class="info__phone text-left"><a class="phone" href="tel:8(812)924-26-06"><span class="phone-icon"></span>8 (812) 924-26-06</a></p>
            <p class="info__hours text-left">Работаем: <br> с 09:00 до 20:00 ежедневно !</p>
          </div>
          <a class="info__call"></a>
        </section>
        
        <!-- CONTACT FORM -->
        
          <section class="col-xs-12 col-md-5 col-lg-5 col-lg-push-1 text-right text-c-left">
            <form id="mainform" class="contact-form" action="" method="post" enctype="multipart/form-data" onsubmit="fbtn.disabled = true; return true;">
              <h3>БЕСПЛАТНАЯ ОЦЕНКА ЛОМА!</h3>
              <p class="small">Вызовите специалиста или пришлите фотографии</p>
              <input type="text" name="name" class="contact-form__name form-control" placeholder="Имя:" value="" required>
              <input type="text" name="phone" class="contact-form__phone form-control" placeholder="Телефон:"  value="" required>
              <div class="attach">
                <span class="attach__val"></span>
                <input name="userfile[]" type="file" class="attach__button" multiple>
              </div>
            <input id="fbtn" class="contact-form__submit btn btn-warning" type="submit" name="submit" value="ОТПРАВИТЬ ЗАПРОС">
            </form>
          </section>
        
        <!--EOF CONTACT FORM  -->
      </div>
    </div>
  </header>    
  
  
  
  <nav id="main-navbar" class="navbar navbar-inverse ">
    <div class="container-fluid wrapper">
      <div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
        </div>
      <div class="row">
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class=""><a href="#">Прием черного металла</a></li>
            <li><a href="#">Прием цветного металла</a></li>
            <li><a href="#">Цены</a></li>
            <li><a href="#">Оборудование</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">Информация</a></li>
            <li><a href="#" class="last">Контакты</a></li>
          </ul>
        </div>
      </div>
      </div>
    </div>
  </nav>
  
  <div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
    
        <!-- Wrapper for slides -->
        <div  class="carousel-inner wrapper main-carousel" role="listbox">
          <div class="item active">
            <img src="img/slider/item1.jpg" alt="New York" width="1200" height="700">
            <div class="carousel-caption">
              <!--<h3>New York</h3>-->
              <!--<p>The atmosphere in New York is lorem ipsum.</p>-->
            </div>      
          </div>
    
          <div class="item">
            <img src="img/slider/item2.jpg" alt="Chicago" width="1200" height="700">
            <div class="carousel-caption">
              <!--<h3>Chicago</h3>-->
              <!--<p>Thank you, Chicago - A night we won't forget.</p>-->
            </div>      
          </div>
        
          <div class="item">
            <img src="img/slider/item3.jpg" alt="Los Angeles" width="1200" height="700">
            <div class="carousel-caption">
              <!--<h3>LA</h3>-->
              <!--<p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>-->
            </div>      
          </div>
        </div>
    </div>
  </div>
  
  <!-- Container () -->

  <div class="container-fluid wrapper text-left">
      
    <div class="row">
      <div class="col-sm-8 prices">
      
        <div class="prices__content ">
          <div class="pseudo-table">
            <h1>ПРИЕМ МЕТАЛЛОЛОМА</h1>
            <div class="prices__left">
              <ul class="prices__metal">
                <li><a class="low">Черный лом</a><i>........................................................</i></li>
                <li><a class="low">Аккумуляторы</a><i>.......................................................</i></li>
                <li><a class="low">Медь</a><i>...............................................................</i></li>
                <li><a class="low">Бронза</a><i>.............................................................</i></li>
                <li><a class="">Латунь</a><i>................................................................</i></li>
                <li><a class="">Алюминий</a><i>..............................................................</i></li>
                <li><a class="">Нержавейка</a><i>............................................................</i></li>
                <li><a class="">Свинец</a><i>................................................................</i></li>
              </ul>
            </div>

            <div class="prices__middle">
              <ul class="prices__value">
                <li>12,5 руб.</li>
                <li>58 руб.</li>
                <li>300 руб.</li>
                <li>185 руб.</li>
                <li>159 руб.</li>
                <li>85 руб.</li>
                <li>59 руб.</li>
                <li>90 руб.</li>
              </ul>
            </div>

            <div class="prices__right">
              <ul class="prices__discount">
                <li><i>....... </i><span>Низкая цена!</span></li>
                <li><i>....... </i><span>Низкая цена!</span></li>
                <li><i>....... </i><span>Низкая цена!</span></li>
                <li><i>....... </i><span>Низкая цена!</span></li>
              </ul>
            </div>
          </div>
  
          <button type="button" class="btn btn-warning prices__btn">ВСЕ ЦЕНЫ</button>
      
        </div>
        <div class="prices__img">
          <svg id="mask-prices" height="380" width="193">
            <polygon points="193,0 20,285 88,380 0,380 0,0" style="fill:#282828;" />
            
            <polyline points="188,-3 13,285 81,380  "
            style="fill:none;stroke:#f5d10a;stroke-width:3" />
          </svg>
        </div>
      
      </div>
      
      <div class="col-sm-4 services">
        <div class="services__content">
          
          <div class="pseudo-table">
            <h1>УСЛУГИ</h1>
            <ul class="services-list">
              <li>
                <a href="#">Оценка</a>
              </li>
              <li>
                <a href="#">Демонтаж</a>
              </li>
              <li>
                <a href="#">Вывоз</a>
              </li>
            </ul>
          </div>
          <button type="button" class="btn btn-warning services__btn">ВСЕ УСЛУГИ</button>
        </div>
        <div class="services__img">
          <svg id="mask-services" height="380" width="193">
            <polygon points="193,0 20,285 88,380 0,380 0,0" style="fill:#282828;" />
            
            <polyline points="188,-3 13,285 81,380  "
            style="fill:none;stroke:#f5d10a;stroke-width:3" />
          </svg>
        </div>
        
      </div>
    </div>
  </div>

  
  <!-- Container () -->

  <div class="container-fluid wrapper">
    <div class="row text-center">
      <div class="col-sm-4 calling ">
        <div class="calling__content text-left">
          <h1>БЕСПЛАТНЫЙ <br> ВЫЗОВ</h1>
          <p><a class="phone-small" href="tel:8(812)924-26-06"><span>8 (812) 924-26-06</span></a> <br> или оставьте свой контактный номер –<br> и мы Вам перезвоним!</p>
          <form id="secondForm" class="contact-form" action="" method="post" enctype="multipart/form-data" onsubmit="fbtn2.disabled = true; return true;">
            <input type="text" name="phone" class="contact-form__phone contact-form__phone--big form-control" placeholder="Телефон:"  value="" required>
            <input id="fbtn2" class="contact-form__submit btn btn-warning" type="submit" name="submit" value="ЗАКАЗАТЬ ЗВОНОК">
          </form>
        </div>
      </div>
      
      <div class="col-sm-8 location">
        <div id="mapYand" class="location__content text-left">
          
          <div class="yanmap">
            <div id="map" style="width:600px; height:600px"></div>
          </div>
          <div class="location-info">
            <h1>ПУНКТ <br> ПРИЕМА МЕТАЛЛА</h1>
            <p>г. Санкт-Петербург, ул. Калинина, 39 <br>(ст. метро «Нарвская»)</p>
            <p class="bottom"><a class="phone-small" href="tel:8(812)924-26-06"><span>8 (812) 924-26-06</span></a> <br> priem-loma@yandex.ru <br> Работаем: ежедневно с 09:00 до 20:00</p>
          </div>
          <div class="mask-container outl">
            <svg id="mask" height="380" width="193">
              <polygon points="193,0 20,285 88,380 0,380 0,0" style="fill:#282828;" />
              
              <polyline points="188,-3 13,285 81,380  "
              style="fill:none;stroke:#f5d10a;stroke-width:3" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>

    
    <!-- Modal -->
    <div class="modal fade" id="contactModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h1>Ваш запрос отправлен!</h1>
            <p>Мы свяжемся с Вами в ближайшее время.</p>
          </div>
        </div>
      </div>
    </div>

  <!-- Footer -->
  <footer class="main-footer text-center">
    <div class="container-fluid wrapper ">
      <div class="row">
        <div class="col-c-12 col-xs-7 col-sm-9 col-lg-10">
          <div class="row">
            <ul class="navbar--foo">
              <li class=""><a href="#">Прием черного металла</a></li>
              <li><a href="#">Прием цветного металла</a></li>
              <li><a href="#">Цены цены на металл</a></li>
              <li><a href="#">Услуги</a></li>
              <li><a href="#">Засоры</a></li>
              <li><a href="#">Информация</a></li>
              <li><a href="#" class="last">Контакты</a></li>
            </ul>
          </div>
        </div>
        <div class="col-c-12 col-xs-5 col-sm-3 col-lg-2">
          <figure class="logo logo--mob logo--foo text-c-center">
            <a href="#">
              <span class="name">ПРИЁМ<span class="name__half">ЛОМА</span></span>
            </a>
            <figcaption>Прием металлолома в СПБ</figcaption>
          </figure>
        </div>
        
        
        
        <div class="col-c-12 col-xs-6 text-left text-c-center">
          <p class="info__phone info__phone--foo"><a class="phone" href="tel:8(812)924-26-06"><span class="phone-icon"></span>8 (812) 924-26-06</a></p>
          <p class="info__hours info__hours--foo">Работаем: <br> с 09:00 до 20:00 ежедневно !</p>
        </div>
        <div class=" col-c-12 col-xs-6 text-right text-c-center">
          <p class="copyright">© 2017 <br>Права защищены</p>
        </div>
      </div>
    </div>
  </footer>
</div>


<script src="<?= Site::url() . '/js/main.js' ?>"></script>
 

<script>
$(document).ready(function(){
  
  stickyFooter(".main-footer", ".main-wrapper");

  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
 
});
  
  

  
  
})
</script>




</body>
</html>
