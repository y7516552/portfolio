let orderItem =document.querySelectorAll('.order-item')
let addBtn = document.querySelectorAll('.add');
let reduceBtn = document.querySelectorAll('.reduce');
let inputCount = document.querySelectorAll('.count-number');
let itemSubtotal = document.querySelectorAll('.item-price')
let unitPrice =document.querySelectorAll('.unit-price');
//下方
let allQty =document.querySelectorAll('.all-qty');
let allPrice =document.querySelectorAll('.all-price');
let shopFee =document.querySelectorAll('.fee');
let allTotal =document.querySelectorAll('.all-total');
//商品總數量
//allQty[0].textContent = orderItem.length;

window.onload = function(){
    calaItemprice();
    calcOrderSum(); 
}
addBtn.forEach(function(elem,index) {
    elem.addEventListener('click' ,function(){
    btnHanle(index , 1);
    })
});
reduceBtn.forEach(function(elem,index) {
    elem.addEventListener('click' ,function(){
    btnHanle(index , -1);
    })
});
inputCount.forEach(function(elem,index) {
    elem.addEventListener('change',function(){
        if(inputCount[index].value<=0){
            inputCount[index].value =1 ;
            itemSubtotal[index].textContent = (unitPrice[index].textContent * 1) * inputCount[index].value ;
            removeOrder(index);
        }
        let inputValue= inputCount[index].value;
        calaItemprice();
    })
})
//按扭事件
function btnHanle(index , num){
    if(inputCount[index].value == 1 && num == -1 ){
        removeOrder(index);
    }
    inputCount[index].value = (inputCount[index].value * 1) + num;
    calaItemprice();
    calcOrderSum();
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
            return;
        }
}

//訂單
function calcOrderSum(){
    let count = 0;
    let subtotal = 0;
    let fee = 60;
    for(let i=0;i < orderItem.length;i++){
        count += inputCount[i].value * 1 ;
        subtotal += itemSubtotal[i].textContent * 1 ;
    }
    //計算運費
    if(subtotal >= 1000){
        fee = 0
    }
    // inputCount.forEach(function(elem,index) {
    //     count+= elem.value *1
    // })
    allQty[0].textContent = count ;
    allPrice[0].textContent = subtotal ;
    shopFee[0].textContent = fee;
    allTotal[0].textContent = subtotal + fee ;
}