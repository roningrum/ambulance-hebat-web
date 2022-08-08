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

$.ajax({
    url: 'example.php',
    success: function(data) {
      let number = new CountUp('number', data.number).start();
      let data = new CountUp('data', data.data).start();
      let test = new CountUp('test', data.test).start();
      let invoice = new CountUp('invoice', data.invoice).start();
    },
    dataType: 'json'
  });


// const counters = document.querySelectorAll('.counter');
// var isAlready = false;
// $(window).scroll(function(){
//     counters.forEach((counter) => {
//         counter.innerHTML = '0';
//         const updateCounter = () => {
//             const target = +counter.getAttribute('data-target');
//             const c = +counter.innerText;
//             const increment = target / 200;
//             console.log(increment);
    
//             if(c < target){
//                 counter.innerText =`${ Math.ceil(c + increment)}`;
//                 setTimeout(updateCounter, 1);
//             } 
//             else if(c==target){
                
//             }
//             else{
//                 counter.innerText = target;
//             }
//         };
//         updateCounter();
        
//     });
    
// });

