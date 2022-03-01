<!DOCTYPE html>
<html lang="zh-TW">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="./img/logo-2.ico" type="image/svg+xml">
	<title>@yield('title')</title>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
	<!-- Bootstrap core css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;700;900&family=Permanent+Marker&family=Bebas+Neue&display=swap" rel="stylesheet">
	<!-- Fontawesome -->
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css'
		integrity='sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=='
		crossorigin='anonymous' />
	<!-- swiper -->
	<link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
	<!-- core css -->
	<link rel="stylesheet" href="{{asset('css/layout.css')}}">
    @yield('css')

</head>

<body>
	<nav id="nav" class="navbar  navbar-expand-lg navbar-light">
		<div class="container-fluid ">
			<a class="navbar-brand ms-5" href="#banner">
				<img class="pe-4" src="{{asset('img/logo-2.ico')}}" alt="logo">阿德的作品集
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
				aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
				<ul id="nav-links" class="navbar-nav me-5 my-2 my-lg-0 navbar-nav ">
					<li class="nav-item mx-3">
						<a class="nav-link active" aria-current="page" href="#banner">首頁</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link" href="#introduce">關於阿德</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link" href="#portfolio">作品集</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link " href="#map" tabindex="-1" aria-disabled="true">聯絡我</a>
					</li>
				</ul>
				
			</div>
		</div>
	</nav>

	<main>
		@yield('main')
	</main>




	<footer  >
		<div class="container-full">
			<div class="footer-links">
				<a href="https://github.com/y7516552"><i class="fab fa-github-square"></i></a>

				<a href="www.linkedin.com/in/StevenZhong-2a0b70231">
					<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" class="global-nav__logo">
					<g>
					  <path d="M34,2.5v29A2.5,2.5,0,0,1,31.5,34H2.5A2.5,2.5,0,0,1,0,31.5V2.5A2.5,2.5,0,0,1,2.5,0h29A2.5,2.5,0,0,1,34,2.5ZM10,13H5V29h5Zm.45-5.5A2.88,2.88,0,0,0,7.59,4.6H7.5a2.9,2.9,0,0,0,0,5.8h0a2.88,2.88,0,0,0,2.95-2.81ZM29,19.28c0-4.81-3.06-6.68-6.1-6.68a5.7,5.7,0,0,0-5.06,2.58H17.7V13H13V29h5V20.49a3.32,3.32,0,0,1,3-3.58h.19c1.59,0,2.77,1,2.77,3.52V29h5Z" fill="currentColor"></path>
					</g>
				  </svg>
				</a>

				<a href="#nav"><i class="fas fa-arrow-up"></i></a>
			</div>
			<div class=" py-3" style="background-color: rgba(87, 87, 87, 0.9);">
				<div class="row justify-content-center" >
					<div class="text-center">
						© 2022 Steve Zhong
					</div>

				</div>

			</div>
		</div>
	</footer>





	<!-- Bootstrap core JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	
	
	@yield('js')

</body>

</html>