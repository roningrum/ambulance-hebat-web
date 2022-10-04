
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
    
    const counters = document.querySelectorAll('.counter');
    $(window).scroll(function(){
        counters.forEach((counter) => {
            counter.innerHTML = '0';
            const updateCounter = () => {
                const target = +counter.getAttribute('data-target');
                const c = +counter.innerText;
                const increment = target / 200;
                console.log(increment);
        
                if(c < target){
                    counter.innerText =`${ Math.ceil(c + increment)}`;
                    setTimeout(updateCounter, 1);
                }
                else{
                    counter.innerText = target;
                }
            };
            updateCounter();
            
        });
       
    });
    
})()

let formData = new FormData();
formData.append('username', 'admin');
formData.append('password', 'admin');

fetch('http://119.2.50.173:6006/token/',{
    body: formData,
    method: "post"
}).then((response)=>{
    return response.json();
}).then((data)=>{
    console.log("data", data)
});



