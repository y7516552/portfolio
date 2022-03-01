@extends('layouts.template')

@section('title','阿德的個人作品集')

@section('css')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('main')
	<section class="loading">
		
		<h2>Loading....</h2>
	</section>
    <!-- 輪播區 -->
		<section id="banner">
			<!-- Swiper -->
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">
				  <div class="swiper-slide slide-1">
					  <img src="./img/b-1.jpg" alt="">
					  <div class="swiper-text">
						<h2>Hi  I'm Steven</h2>
						<h3>Web Developer</h3>
						<p>scroll down to see more</p>
					  </div>
				  </div>
				  <div class="swiper-slide slide-2">
					<img src="https://picsum.photos/id/873/1800/1200" alt="">
				  </div>
				  <div class="swiper-slide slide-3">
					<img src="./img/b-3.jpg" alt="">
				  </div>
				  
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-pagination"></div>
			  </div>
		</section>
		<!-- 自介區 -->
		<section id="introduce">
			<div class="container-fluid w-75">
				<div class="row">
					<div class="col mb-5 d-flex justify-content-center">
						<div class="text-center mt-5 pt-5  ">
							<div class="avatar"></div>

							<h2 class="text-center font-weight-normal ">鍾耀德 Steven Zhong</h2>
							<p>
								經歷疫情衝擊，重新探索自己，偶然發現對網頁程式的興趣，進而朝向前端工程師發展，樂於學習新知，虛心接受指教。
							</p>
						</div>
					</div>
				</div>
				

			</div>
		</section>
		<!-- 技能區 -->
		<section id="skill">
			<div class="container-fluid ">
				<div class="row py-5 text-center">
					<div class="col">
						<h3>技能</h3>
					</div>
					<div class="col">
						<h3>Skill</h3>
					</div>
				</div>
				<div class="row p-5">
					<div class="skill-tag d-flex justify-content-around">
						<span class="tag ">Front-end</span>
						<span class="tag ">Back-end</span>
						<span class="tag ">Others</span>
					</div>
					<div class="col-6 col-lg-4 mt-5">
						<div class="mycard active" data-tag="Front-end">
							<div class="img  mx-auto" >
								<i class="fab fa-html5"></i>
							</div>
							<h5 class="text-center mt-4">Html</h5>
							<li class=" text-center "> Html  5</li>
							
							
						</div>
					</div>
					<div class="col-6 col-lg-4 mt-5 ">
						<div class="mycard active " data-tag="Front-end">
							<div class="img mx-auto" >
								<i class="fab fa-css3-alt"></i>
							</div>
							<h5 class="text-center mt-4">CSS/SCSS</h5>
							<li class=" text-center ">CSS  3</li>
							<li class=" text-center ">RWD響應式設計</li>
							<li class=" text-center ">CSS Animation</li>
							
							
						</div>
					</div>
					<div class="col-6 col-lg-4  mt-5">
						<div class="mycard active" data-tag="Front-end">
							<div class="img mx-auto" >
								<i class="fab fa-js"></i>
							</div>
							<h5 class="text-center mt-4">Javascript</h5>

							<li class=" text-center ">ES  6</li>
							<li class=" text-center ">ajax/json串接</li>
							
							
						</div>
					</div>
					<div class="col-6 col-lg-4 mt-5">
						<div class="mycard active" data-tag="Front-end">
							<div class="img  mx-auto" >
								<i class="fab fa-bootstrap"></i>
							</div>
							<h5 class="text-center mt-4">Boostrap</h5>
							<li class=" text-center ">bootstrap  4</li>
							<li class=" text-center ">bootstrap  5</li>
							
							
						</div>
					</div>
					<div class="col-6 col-lg-4 mt-5">
						<div class="mycard active" data-tag="Back-end">
							<div class="img  mx-auto" >
								<i class="fab fa-laravel"></i>
							</div>
							<h5 class="text-center mt-4">Laravel</h5>
							<li class=" text-center ">Laravel  8</li>
							<li class=" text-center ">小型電商後台建置</li>
							
							
						</div>
					</div>
					<div class="col-6 col-lg-4 mt-5">
						<div class="mycard active" data-tag="Others">
							<div class="img  mx-auto" >
								<i class="fab fa-github"></i>
							</div>
							<h5 class="text-center mt-4">Github</h5>
							<li class=" text-center ">版本控制</li>
							
							
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- 作品區 -->
		<section id="portfolio">
			<div class="container w-75 ">
				<div class="row py-5 text-center">
					<div class="col">
						<h3>個人作品</h3>
					</div>
					<div class="col">
						<h3>My portfolio</h3>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-12 col-sm-6 col-lg-5 ">
						<div class="portfolio-img img-1"></div>
					</div>
					<div class="col-12 col-sm-6 col-lg-7 ">
						<div class="card-body">
							<h5><a href="{{route('fitness')}}"> 一頁式形象網站</a></h5>
							<div class="card-text">
								<ul>
									<li>Parallax  設計</li>
									<li>RWD 響應式網站設計</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-7 ">
						<div class="card-body">
							<h5> <a href="{{route('weather')}}"> 天氣小卡</a></h5>
							<div class="card-text">
								<ul>
									<li>RWD 響應式網站設計</li>
									<li>靜態API 串接</li>
									<li>tilt.js  套件</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-5 ">
						<div class="portfolio-img img-2"></div>

					</div>
					<div class="col-12 col-sm-6 col-lg-5 ">
						<div class="portfolio-img img-3"></div>

					</div>
					<div class="col-12 col-sm-6 col-lg-7 ">
						<div class="card-body">
							<h5> <a href="{{route('info')}}"> 簡易疫情資訊</a></h5>
							<div class="card-text">
								<ul>
									<li>靜態API 串接</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-7 ">
						<div class="card-body">
							<h5> <a href="{{route('game')}}"> 色弱遊戲</a></h5>
								<div class="card-text">
									<ul>
										<li>JS小遊戲</li>
										
									</ul>
								</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-5 ">
						<div class="portfolio-img img-4"></div>

					</div>
					<div class="col-12 col-sm-6 col-lg-5 ">
						<div class="portfolio-img img-5"></div>

					</div>
					<div class="col-12 col-sm-6 col-lg-7 ">
						<div class="card-body">
							<h5><a href="https://steven-store-laravel.herokuapp.com/"> 小型電商網站</a></h5>
								<div class="card-text">
									<ul>
										<li>Laravel  框架</li>
										<li>RWD 響應式網站設計</li>
									</ul>
								</div>
						</div>
					</div>
				</div> 
				
			</div>
		</section>


		<!-- 交流區 -->
		<section id="contact">
			<div class="background"></div>
			<div class="container">
				<div class="card feedback py-3">
					<div class="card-body">
						<h5 class="card-title text-center">聯絡我</h5>
						<p class="card-text">樂於交流、虛心接受建議，歡迎留下訊息。</p>
						<form action="{{asset('/contact')}}" method="POST" >
							@csrf
							<input style="display: none;" name="time" id="time" >
							<div class="form-group">
								<label for="name">名稱 </label>
								<input type="name" name="name" class="form-control" id="name" required>
							</div>
							<div class="form-group">
								<label for="email">Email </label>
								<input type="email" name="email" class="form-control" id="email" required>
							</div>
							<div class="form-group">
								<label for="content">內容</label>
								<textarea class="form-control" name="content" id="content" rows="3" required></textarea>
							</div>
							<div id="check-box"></div>
							<button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary w-100">Send</button>
						</form>
					</div>
				</div>
			</div>
		</section>
@endsection

@section('js')
    <script src="{{asset('js/index.js')}}"></script>
@endsection

    
