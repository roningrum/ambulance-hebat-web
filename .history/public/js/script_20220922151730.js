
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

mapboxgl.accessToken = 'pk.eyJ1Ijoicm9uaW5ncnVtIiwiYSI6ImNsODlwdGd1ZjAzYmgzb2xmc2phd2hvdWMifQ.DPSlo2KGxIkxeh9JThpSlw';
const map = new mapboxgl.Map({
container: 'map', // container ID
style: 'mapbox://styles/mapbox/streets-v11', // style URL
center: [-74.5, 40], // starting position [lng, lat]
zoom: 9, // starting zoom
projection: 'globe' // display the map as a 3D globe
});
map.on('style.load', () => {
map.setFog({}); // Set the default atmosphere style
});


