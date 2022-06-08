const navbar = document.querySelector('nav');
window.addEventListener('scroll', function(){
    console.log(window.scrollY);
    if(this.window.scrollY > 1){
        navbar.classList.replace('bg-transparent', 'nav-color');
    }
    else if(this.window.scrollY <=0){
        navbar.classList.replace('nav-color','bg-transparent');
    }
});

$(document).ready(function(){
    $('html, body').scrollTop(0);
});

const counter = document.querySelector('counter');
counter.forEach(counter =>{
    counter.innerText='0';
    const updateCounter=()=>{
        const target = counter.getAttribute('data-target');
        console.log(typeof target, target);
    };
    updateCounter();
});
//counter
