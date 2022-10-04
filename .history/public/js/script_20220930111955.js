
(function(){

    const navbar = document.querySelector('nav');
    window.addEventListener('scroll', function(){
        // console.log(window.scrollY);
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

    new PureCounter();
    
})()



