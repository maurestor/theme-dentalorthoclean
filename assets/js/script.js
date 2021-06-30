function myFunction(x){
    x.classList.toggle('change');
}


window.onscroll = function() {scrollFunction()}

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    
    document.getElementById("navbar-top").style.visibility = "hidden";
    document.getElementById("navbar").style.padding = "0px 0px";
    document.getElementById("navbar-top").style.height = "0px";
    // var num = '25px';
    // var height = document.getElementById("logo-img").height = num;
    // console.log('Bajando ' + height);
  } else {
    document.getElementById("navbar-top").style.visibility = "visible";
    document.getElementById("navbar-top").style.height = "30px";
    
    document.getElementById("navbar").style.padding = "35px 0px 0px 0px";
    // document.getElementById("logo-img").style.backgroundSize = "35px";  
    
    // var num = '0px';
    // var height = document.getElementById("logo-img").height = num;
    // console.log('Top ' + height);
  }
}

function updateHTML(elmId, value) {
    var elem = document.getElementById(elmId);
    if(typeof elem !== 'undefined' && elem !== null) {
      elem.innerHTML = value;
    }
  }

/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  /* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

  
// Parte del Splider
document.addEventListener( 'DOMContentLoaded', function () {
  new Splide( '#slider-icons',{
    // 'cover': true,
    // 'heightRatio': 0.5,
    type   : 'loop',
    autoplay: true,
    pagination: false,
    interval: 5000,
    arrows:false,
    pauseOnFocus: false,
    speed: 2000, // Velocidad de la transicion.
    rewind: true,
    perPage: 3,
  } ).mount();

  // new Splide( '#slider-galery',{
  //   // 'cover': true,
  //   // 'heightRatio': 0.5,
  //   type   : 'loop',
  //   autoplay: true,
  //   pagination: false,
  //   interval: 5000,
  //   arrows:false,
  //   pauseOnFocus: true,
  //   speed: 1500, // Velocidad de la transicion.
  //   rewind: true,
  //   perPage: 3,
  // } ).mount();


} );
