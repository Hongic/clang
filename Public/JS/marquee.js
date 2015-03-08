/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var speed = 30; // 滚动的速度
var tab = document.getElementById("demo");
var tab1 = document.getElementById("demo1");
var tab2 = document.getElementById("demo2");
tab2.innerHTML = tab1.innerHTML;
function Marquee() {
    if (tab2.offsetWidth - tab.scrollLeft <= 0)
        tab.scrollLeft -= tab1.offsetWidth
    else {
        tab.scrollLeft++;
    }
}
var MyMar = setInterval(Marquee, speed);
tab.onmouseover = function() {
    clearInterval(MyMar)
};
tab.onmouseout = function() {
    MyMar = setInterval(Marquee, speed)
};
