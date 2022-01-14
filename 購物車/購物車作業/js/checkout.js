// 點擊 +， - 按鈕
//會使input內的數量增加
//小計也增加
//input發生變化時
//使小計也發生變化
let orderItem =document.querySelectorAll('.order-item')
let addBtn = document.querySelectorAll('.add');
let reduceBtn = document.querySelectorAll('.reduce');
let inputCount = document.querySelectorAll('.count-number');
let itemSubtotal = document.querySelectorAll('.item-price')
let unitPrice =document.querySelectorAll('.unit-price');
//下方
let allQty =document.querySelectorAll('.all-qty');
let allPrice =document.querySelectorAll('.all-price');
let fee =document.querySelectorAll('.fee');
let allTotal =document.querySelectorAll('.all-total');


//商品總數量
allQty[0].textContent = orderItem.length


allPrice[0].textContent = orderItem.length

//初始化
window.onload = function(){
    calaItemprice();
}
//加
addBtn.forEach(function(elem,index) {
    elem.addEventListener('click' ,function(){
    btnHanle(index , 1);
        // let num = inputCount[index].value * 1;
        // let price = unitPrice[index].textContent * 1;
        // num++;
        // inputCount[index].value = num;
        // itemSubtotal[index].textContent =  price * num;
    })
});
//減
reduceBtn.forEach(function(elem,index) {
    elem.addEventListener('click' ,function(){
    btnHanle(index , -1);
        // let num = inputCount[index].value * 1;
        // let price = unitPrice[index].textContent * 1;
        // num -= 1;
        // inputCount[index].value = num;
        // itemSubtotal[index].textContent =  price * num;
    })
});
//輸入
inputCount.forEach(function(elem,index) {
    elem.addEventListener('change',function(){
        if(inputCount[index].value<=0){
            inputCount[index].value =1 ;
            itemSubtotal[index].textContent = (unitPrice[index].textContent * 1) * inputCount[index].value ;
            removeOrder(index);
        }
        let inputValue= inputCount[index].value;
        //itemSubtotal[index].textContent = (unitPrice[index].textContent * 1) * inputCount[index].value ;
        calaItemprice();
    })
})
//按扭動作
function btnHanle(index , num){
    if(inputCount[index].value == 1 && num == -1 ){
        // //當商品數量=1 使用者又按下- 時
        // let yes = confirm('是否刪除商品?')
        // if (yes){
        //     orderItem[index].remove();
        // }else if(no){
        //     return
        // }
        removeOrder(index);
    }
    inputCount[index].value = (inputCount[index].value * 1) + num;
    //itemSubtotal[index].textContent = (unitPrice[index].textContent * 1) * inputCount[index].value ;
    calaItemprice();
}
//計算單品 小計
function calaItemprice(){
    itemSubtotal.forEach(function(elem,index){
        //單價 * 數量
        itemSubtotal[index].textContent = (unitPrice[index].textContent * 1) * inputCount[index].value ;
    }
)}
//刪除商品
function removeOrder(index){
    let yes = confirm('是否刪除商品?');
        if (yes){
            orderItem[index].remove();
        }else if(no){
            return
        }
}





// $('.add').click(function(){
//     $('.count-number')[0].value *1 ;
// });

//使用 jQuery 語法取元素 取得的是jQuery物件
//console.log($('.add'));
//使用原生 javascript 語法取元素 取得的是原生 javascript物件 (nodelist)
//console.log(addBtn);