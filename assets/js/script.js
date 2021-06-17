function myFunction(x){
    x.classList.toggle('change');
}


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.padding = "0px 0px";
    var num = '25px';
    var height = document.getElementById("logo-img").height = num;
    console.log('Bajando ' + height)
  } else {
    document.getElementById("navbar").style.padding = "20px 0px";
    // document.getElementById("logo-img").style.backgroundSize = "35px";  
    var num = '80px';
    var height = document.getElementById("logo-img").height = num;
    console.log('Top ' + height)
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