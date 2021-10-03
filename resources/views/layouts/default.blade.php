<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>LaraBlog</title>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="/css/owl.css">
</head>

<body>
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<section class="top">
    <div class="container">
        <div class="row w-100">
            <div class="col">
                <div class="lang">
                    <a href="#">Рус</a>
                    <a href="#">Укр</a>
                </div>
            </div>
            <div class="col text-right">
                <div class="links">
                    <a href="#">Фото</a>
                    <a href="/about">Команда</a>
                    <a href="#">Подписка</a>
                </div>
            </div>
        </div>
    </div>
</section>
<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/"><h2>Lara <em>Blog</em></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Главная
              <span class="sr-only">(current)</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="/blog">Блог</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">О нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Контакты</a>
          </li>
        </ul>
      </div>
      
    </div>
  </nav>

</header>
<!-- <div class="container">
  <div class="row">
    <div class="input-group rounded">
      <input type="search" class="form-control rounded" placeholder="Поиск" aria-label="Search"
        aria-describedby="search-addon" />
      <span class="input-group-text border-0" id="search-addon">
        <i class="fa fa-search"></i>
      </span>
    </div> 
  </div>
</div> -->




@yield('content')

<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>PC <em>LARA</em> BLOG</h4>
                            <p>Преимущества подписки.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="filled-button">Подписаться!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-content">
                  <h4>Мы в социальных сетях</h4>
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright &copy; 2021 LaraBlog

                         <a rel="nofollow noopener" href="https://DStudio.com" target="_blank">DStudio</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="/js/custom.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/slick.js"></script>
<script src="/js/isotope.js"></script>
<script src="/js/accordions.js"></script>


<script language = "text/Javascript">
	cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
	function clearField(t){                   //declaring the array outside of the
		if(! cleared[t.id]){                      // function makes it static and global
			cleared[t.id] = 1;  // you could use true and false, but that's more typing
			t.value='';         // with more chance of typos
			t.style.color='#fff';
		}
	}
</script>

</body>

</html>
