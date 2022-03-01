
let loading = document.querySelector('.loading')
window.onload =function(){
  loading.classList.add('none')
}


//swiper
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 0,
    centeredSlides: true,
    autoplay: {
      delay: 8000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
//skill-tag
const tagEles = document.querySelectorAll('.tag');
const skillEles = document.querySelectorAll('.mycard');
tagEles.forEach(function(tagEle,index){
    tagEle.addEventListener('mouseenter',function(){
        if(document.querySelector('.tag.active')){
            document.querySelector('.tag.active').classList.remove('active');
        }
        tagEle.classList.add('active');
        if(document.querySelector('.mycard.active')){
            document.querySelectorAll('.mycard.active').forEach(function(e){
                e.classList.remove('active');
            });
        }
        let tagValue =tagEle.textContent;
        document.querySelectorAll(`[data-tag="${tagValue}"]`).forEach(function(e){
            e.classList.add('active');
        });
    });
    tagEle.addEventListener('mouseout',function(){
        document.querySelector('.tag.active').classList.remove('active');
        skillEles.forEach(function(e){{
            e.classList.add('active');
        }});
    });
});


//form
const scriptUrl ='https://script.google.com/macros/s/AKfycbz0VcRjUw41WuVNEiBoXJe-t5ScB7K48UP_OhLoRCvpI-54PZgNv1zS9ONroHlPcsAxyQ/exec';

const form = document.forms[0]
let createTime = document.querySelector('#time')
let nameEle = document.querySelector('#name')
let emailEle = document.querySelector('#email')
let contentEle = document.querySelector('#content')
let submitBtn = document.querySelector('#submit')

createTime.value = new Date()
// form.addEventListener('submit', e => {
// 	e.preventDefault()
// 	fetch(scriptUrl , { method:'POST',body: new FormData(form)})
// 	.then(response => alert("謝謝你的填寫!!我將盡快回復您。"))
// 	.catch(error => console.error('Error',error.message))
    
// 	nameEle.value ='';
// 	emailEle.value ='';
// 	contentEle.value ='';
// 	submitBtn.style.display = 'none';

// })

var onloadCallback = function() {

    grecaptcha.render('check-box', {
          'sitekey': '6LegSrkdAAAAANL8sRlb1Uy0QiwbVcRxh2SbgOdh',
          'theme': 'light',
          'size': 'normal',
          'callback': verifyCallback,
          'expired-callback': expired,
          // 'error-callback': error
    });

    function verifyCallback(token) {

        let formData = new FormData();
          formData.append('token', token);
        // console.log(formData);

          var uriGAS = "https://script.google.com/macros/s/AKfycbzVvpg6m2fV02F-T5zRK5ckjy97eKhjlhNECyRQ335WZp0FFnmLAaP4JDgeaPDo6F8/exec";
          
          fetch(uriGAS, {
            method: "POST",
            body: formData
          }).then(response => response.json())
        .then(result => {
            submitBtn.style.display = 'block';
              if(result.success) {
                  submitBtn.style.display = 'block';
                  form.addEventListener('submit', e => {
                    e.preventDefault()
                    fetch(scriptUrl , { method:'POST',body: new FormData(form)})
                    .then(response => alert("謝謝你的填寫!!我將盡快回復您。"))
                    .catch(error => console.error('Error',error.message))
    
                    nameEle.value ='';
                    emailEle.value ='';
                    contentEle.value ='';
                    submitBtn.style.display = 'none';

                })
                  
              } else {
                  window.alert(result['error-codes'][0])
              }
        })
        .catch(err => {
            window.alert(err)
        })
              
    }
    function expired() {
          submitBtn.style.display = 'none';
    }

}
