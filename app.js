var scrollTop;
var item;
window.onload = function(){
    scrollTop = document.querySelector('.scroll-top');
};

window.addEventListener("scroll",scrollFunction);


function scrollFunction(){
    if(window.pageYOffset > 300){
        scrollTop.classList.add('show');
    }else{
        item = scrollTop.classList.item(1);
        scrollTop.classList.remove(item);
    }
}


