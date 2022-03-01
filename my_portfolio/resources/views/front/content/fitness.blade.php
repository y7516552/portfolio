@extends('front.portfolio')

@section('title','耀健身')
    

@section('css')

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    html{
        scroll-behavior: smooth;
    }
    body{
        margin: 0;
        height: 100%;
        font-family: sans-serif;
    }
    .full-page{
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        position: relative;
        
    }
    .page-1{
        background-image: url("https://images.pexels.com/photos/5327533/pexels-photo-5327533.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
    }
    .page-2{
        background-image: url("https://cdn.mos.cms.futurecdn.net/yJKZr58XHETxRUKPgkD5KP.jpg");
        height: 50vh;
    }
    .page-3{
        background-image: url("https://www.chimneyrockcrossfit.com/wp-content/uploads/2021/02/210127-CRCFrandolph-7907.jpg");
        height: 50vh;
    }
    .page-4{
        background-image: url("https://jenergise.co.uk/wp-content/uploads/2021/03/iStock-1078958134.jpg");
        height: 50vh;
    }
    #page-6{
        height: 100%;   
        padding-bottom: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        flex-wrap: nowrap;
    }
    #page-6 h3{
        margin-bottom: 50px;
        font-size: 60px;
        color: #ddd;
    }
    #page-6 .laction{
        width: calc(50% - 75px);
        height: 500px;
        margin: 50px;

    }
    .laction iframe{
        margin-top: 60px;
    }
    #page-6 .contact{
        width: calc(50% - 75px);
        height: 500px;
        margin: 50px;
        padding: 20px;
    }
    .contact-info{
        height: 490px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        font-size: 24px;
        color: #fff;
    }
    .nav-bar{
        position: absolute;
        width: 100%;
        height: 80px;
        background-color: rgba(72, 69, 69, 0.487);
        box-shadow: 5px 5px 5px 5px rgba(72, 69, 69, 0.487) ;
        z-index: 2;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }
    .logo{
        position:absolute;
        z-index: 2;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        width: 180px;
        height: 80px;
        margin-left: 20px;
        border-radius: 10px;
    }
    .logo a{
        background-color: #000;
        padding: 15px;
        margin: 25px;
        text-decoration: none;
        color: #ddd;
        font-size: 25px;
        line-height: 70px;
        font-weight:900;
        border-radius: 50%;
    }
    
    .logo:hover a{
        color: #fa0;
    }
    #logo{
        color: #fa0;
        font-size: 40px;
    }
    .logo:hover #logo{
        color: #fff;
    }
    .anchor{
        display: flex;
        align-items: center;
        margin-left: 100px;
        font-size: 0;
    }
    
    
    .anchor a{
        padding: 10px 15px;
        margin-right: 40px;
        color: #ddd;
        font-size: 24px;
        text-decoration: none;
        border-radius: 10px;
    }
    .anchor a:hover {
        background-color: #fff;
        color: #000;
    }
    .anchor .bars{
        display: none;
        margin: 0 10px;
        color: #fff;
        font-size: 30px;
    }
    .bars ul{
        padding: 0;
        margin: 0;
        width: 200px;
        margin-top: 300px;
        display: none;
        justify-content: center;
        align-items: center;
        list-style: none;
        flex-direction: column;
        background-color: #000;
        border-radius: 15px;
    }
    .bars ul li {
        padding: 10px 10px;
    } 
    .bars ul li a{
        text-align: center;
    }
    .bars:hover ul{
        display: flex;
    }
    .social{
        list-style: none;
        display: flex;
        font-size: 30px;
        margin-right: 30px;
    }
    .social li {
        margin: 0 10px;
        color: #fff;
    }
    .social li:hover{
        color: #fa0;
    } 
    .sign{
        width: 100%;
        position: absolute;
        top: 50%;
        left: 0;
        text-align: center;
    }
    .sign h1{
        position: relative;
        z-index: 0;
        margin: 0 auto;
        padding: 20px;
        color: #fa0;
        font-size: 100px;
        font-family:'Courier New', Courier, monospace;
    }
    #small{
        color: rgb(250, 250, 250);
        font-size: 40px;
    }
    .sign h1::before{
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        z-index: -1;
        width: 800px;
        height: 200px;
        background-color: rgba(204, 204, 204, 0.186);
        margin: 0 auto;
        padding: 0;
        filter: blur(10px);
        font-size: 40px;
    }
    .sign h2{
        position: absolute;
        left: 50%;
        transform: translate(-50%,-50%);
        font-size: 120px;
        color: #ddd;
        transition: .5s;
    }
    .sign h2:hover{
        color: #fa0;
    }
    
    .web-info{
        width: 100%;
        padding: 50px 0;
        background-color: #fff;
    }
    .web-info h2,
    .web-info p{
        margin: 0 auto;
        text-align: center;
    }
    .web-info h2{
        font-size: 60px;
        padding-bottom: 30px;
    }
    .web-info p{
        font-size: 20px;
        color: #888;
    }
    footer{
        padding: 20px;
        background-color: #000;
        text-align: center;
        color: #fff;
    }
    @media screen  and (max-width:1284px) {
        #page-6{
            flex-wrap: wrap;
        }
        #page-6 .contact{
        margin-bottom: 160px;
        }
        #page-6 .laction{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sign h2{
            font-size: 80px;
        }
        .web-info h2{
            font-size: 40px;    
        }
    }
    @media screen and (max-width:1024px){
        .anchor .bars{
            display: block;
        }
        .anchor>a{
            display: none;
        }
        
    }
</style>
    
@endsection

@section('content')
<nav class="nav-bar">
    <div class="logo">
        <a href="#page-1"> <span id="logo">耀</span>健身</a>
    </div>
    <div class="anchor">
        <a href="#page-2">增肌</a>
        <a href="#page-3">減脂</a>
        <a href="#page-4">銀髮族體適能</a>
        <a href="#page-5">加入我們</a>
        <div class="bars">
            <i class="fas fa-bars"></i>
            <ul>
            <li><a href="#page-2">增肌</a></li>
            <li><a href="#page-3">減脂</a></li>
            <li><a href="#page-4">銀髮族</a></li>
            <li><a href="#page-5">加入我們</a></li>
        </ul>
        </div>
        
        
    </div>
    <ul class="social">
        <li><i class="fab fa-facebook-square"></i></li>
        <li><i class="fab fa-instagram"></i></li>
        <li><i class="fab fa-line"></i></li>
    </ul>
</nav>
<section>
    <div id="page-1" class="full-page page-1">
        <div class="sign">
            <h1> Yao<span id="small">fitness</span> </h1>
        </div>   
    </div>
    <div id="page-text" class="web-info">
        <h2>想健康? <span style="color: #fa0;">耀</span>  健身!</h2>
        <p>想要運動，卻又不知道從哪裡入門嗎?</p>
    </div>
</section>
<section>
    <div id="page-2" class="full-page page-2">
        <div class="sign">
            <h2>增肌</h2>
        </div>
    </div>
    <div class="web-info">
        <h2>想增肌卻增到沒成效?</h2>
        <p>科學化的訓練課表 + 客製化的飲食建議 = 增肌成功</p>
    </div>
</section>
<section>
    <div id="page-3" class="full-page page-3">
        <div class="sign">
            <h2>減脂</h2>
        </div>
    </div>
    <div class="web-info">
        <h2>體態無法<span style="color: #fa0;">維持</span>?</h2>
        <p>規律的運動習慣，幫助你輕鬆維持體態。</p>
    </div>
</section>
<section>
    <div id="page-4" class="full-page page-4">
        <div class="sign">
            <h2>銀髮族體適能</h2>
        </div>
    </div>
    <div class="web-info">
        <h2>活到老，<span style="color: #fa0;">動</span>到老!</h2>
        <p>運動延緩肌力流失，增加骨質密度，加強抵抗力!!</p>
    </div>
</section>
<section>
    <div id="page-5" class="full-page page-1">
        <div class="sign">
            <h1>改變<span id="small">就從</span>加入<span id="small">開始</span></h1>
        </div>
    </div>
</section>
<section>
    <div id="page-6" class="full-page page-1">
    <div class="contact">
        <h3>連絡我們</h3>
        <div class="contact-info"  >
            <label for="">姓名</label>
            <input type="text">
            <label for="">電話</label>
            <input type="text">
            <label for="">Email</label>
            <input type="text">
            <label for="">內容</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <button>送出</button>
        </div>
    </div>
    <div class="laction">
        <h3>地點資訊</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4205.3348450800495!2d120.6294248117387!3d24.17625528160799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1szh-TW!2stw!4v1642129256576!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
</section>

<footer>
    <P>Copyright © 2022 耀健身fitness</P>
</footer>
@endsection

@section('js')
    
@endsection