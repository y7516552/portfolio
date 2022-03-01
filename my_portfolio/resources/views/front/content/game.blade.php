@extends('front.portfolio')
@section('title','色盲遊戲')
 
@section('css')
    <style>
        *{
    box-sizing: border-box;
}
body{
    margin: 0;
    min-width: 765px;
    min-height: 760px;
    display: flex;
    padding: 80px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: rgb(0, 0, 0);
}
.start{
    width: 100px;
    height: 100px;
    background-color: rgba(109, 106, 101, 0.863);
    color: #fff;
    border-radius: 10px;
    line-height: 100px;
    text-align: center;
    font-size: 30px;
    cursor: pointer;
}
.score{
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    justify-content: center;
    align-items: center;
    width: 100px;
    height: 100px;
    background-color: rgba(109, 106, 101, 0.863);
    color: #fff;
    border-radius: 10px;
}
.container{
    display: none;
    flex-wrap: wrap;
    padding: 10px;
    margin-top: 50px;
    width: 520px;
    height: 520px;
    background-color: #ddd;
    border-radius: 10px;
}
.box{
    border: 5px solid #ddd;
    border-radius: 10px;
}
.time{
    display: none;
    justify-content: center;
    align-items: center;
    position: absolute;
    right: 0;
    top: 0;
    width: 100px;
    height: 100px;
    font-size: 24px;
    color: #fff;
    background-color: rgba(109, 106, 101, 0.863);
    border-radius: 10px;
}
.level{
    display: none;
    position: absolute;
    top: 0;
    width: 300px;
    height: 100px;
    background-color: rgba(109, 106, 101, 0.863);
    border-radius: 10px;
    text-align: center;
}
.level h3{
    color: #fff;
    font-size: 24px;
    line-height: 50px;
}
.note{
    margin-top:100px;
    font-size: 30px;
    color: #fff;
    text-align: center;
}
    </style>
@endsection

@section('content')
<span class="score" >0</span> 
<div class="start">start</div>
<div class="container"></div>
<span class="time">60</span>
<span class="level"></span>
<div class="note"></div>
@endsection

@section('js')
    <script>
        let containerEle =document.querySelector('.container');
        let startEle =document.querySelector('.start');
        let scoreEle =document.querySelector('.score');
        let boxEle =document.querySelector('.box');
        let timeEle =document.querySelector('.time');
        let levelEle =document.querySelector('.level');
        let noteEle = document.querySelector('.note');
        let score =0;
        let sideLength =2; //level
        let total =sideLength**2 ;//盒子數量
        let boxWidth = 100/sideLength;
        let opacity = 1-(boxWidth/100);
        function createBox(){
            let answer =  Math.floor(Math.random()*total);//0123
            let r = Math.floor(Math.random()*215); //0~255
            let g = Math.floor(Math.random()*215);
            let b = Math.floor(Math.random()*215);
            let style =` style=" width: ${boxWidth}%; height: ${boxWidth}%; background-color:rgb(${r},${g},${b});"`;
            let style2 =`style=" opacity: ${opacity}; width: ${boxWidth}%; height: ${boxWidth}%; background-color:rgb(${r},${g},${b});"`
            let boxes ='';
            for(let i=0; i<total; i++){ 
                if(i == answer){
                    boxes += `<div class=" box active" ${style2}></div>`; //答案
                }else{
                    boxes += `<div class=" box" ${style}></div>`;
                }
            }
            containerEle.innerHTML = boxes ;
            levelEle.innerHTML =`<h3>Lv-${sideLength - 1 }</h3>`
        }
        //加分
        function scoreAdd(){
            score+=1;
            scoreEle.textContent = `${score}分`;
        }
        //增加難度
        function levelAdd(){
            //限制最高難度
            if(sideLength<9){
                sideLength+=1;
                boxWidth = 100/sideLength;
                total =sideLength**2 ;
                opacity = 1-(boxWidth/80);
            }else{
                boxWidth = 100/sideLength;
                total =sideLength**2 ;
                opacity = 1-(boxWidth/80);
            }
        }
        //答案設定
        function answerSetting1(){
            const answerEle =document.querySelector('.box.active');
            answerEle.addEventListener('click',function(){
                createBox();
                answerSetting2();
                levelAdd();
                scoreAdd();
            });
        }
        //lv2
        function answerSetting2(){
            const answerEle =document.querySelector('.box.active');
            answerEle.addEventListener('click',function(){
                createBox();
                answerSetting3();
                scoreAdd();
            });
        }
        //lv3
        function answerSetting3(){
            const answerEle =document.querySelector('.box.active');
            answerEle.addEventListener('click',function(){
                let translateX = Math.floor(Math.random()*150);
                let translateY = Math.floor(Math.random()*50);
                createBox();
                answerSetting4();
                scoreAdd();
            });
        }
        //4
        function answerSetting4(){
            const answerEle =document.querySelector('.box.active');
            answerEle.addEventListener('click',function(){
                let translateX = Math.floor(Math.random()*150);
                let translateY = Math.floor(Math.random()*50);
                createBox();
                answerSetting1();
                scoreAdd();
            });
        }
        
        //初始化遊戲 等級-時間-分數
        function updateGame(){
            createBox();
            answerSetting1();
            scoreAdd();
        }
        //倒數計時
        function timeCount(time){
            var counter = null;
            counter =setInterval(function(){
                if(time>0){
                    time = time - 1;
                    timeEle.textContent = time;
                }else{
                    clearInterval(counter);
                    close();
                }
            },1000)
        }
        //開
        function open(){
            containerEle.style.display ="flex";
            startEle.style.display="none";
            scoreEle.style.display="flex";
            timeEle.style.display="flex";
            levelEle.style.display="block";
            noteEle.style.display="none";
            containerEle.style.transform = "";
        }
        //關
        function close(){
            containerEle.style.display ="none";
            startEle.style.display="block";
            noteEle.style.display="block";
            scoreEle.style.display="none";
            timeEle.style.display="none";
            startEle.textContent="Restart?";
            if(score>40){
                noteEle.textContent="高手";
            }else if(score>30){
                noteEle.textContent="優秀";
            }else if(score>20){
                noteEle.textContent="普通";
            }else{
                noteEle.textContent="該檢查眼睛了...";
            }
        }
        startEle.addEventListener('click',function(){
            open();
            score =0;
            sideLength =2;
            total =sideLength**2 ;
            boxWidth = 100/sideLength;
            opacity = 1-(boxWidth/100);
            noteEle.textContent="";
            updateGame();
            timeCount(60);
        })
    </script>
@endsection
