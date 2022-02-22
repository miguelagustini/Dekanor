let navbar = document.querySelector('.navbar');


document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}







// contadores
let nums = document.querySelectorAll(".num");
let section = document.querySelector(".three");
const number100 = document.getElementById('num100');
const number10 = document.getElementById('num10');

let cont10 = 0;
let cont100 = 0;

function showText () {

	let scrollTop = window.innerHeight;
	let topNumber = section.getBoundingClientRect().top;

	if(topNumber <= scrollTop / 1.3 ){

  if (cont10 == 0 && cont100 == 0) {
    
    let count = setInterval(() => {
      cont100 += 1;

      number100.textContent = `+ ${cont100} K` ;
    
      if (cont100 >= 99) {
          clearInterval(count);
  }
  
   }, 2000 / 100);

       let count10 = setInterval(() => {
         cont10 += 1;

         number10.textContent = `+ ${cont10}` ;
    
         if (cont10 >= 9) {
              clearInterval(count10);
        }
      }, 2000 / 10);
    }
	}

  else {
    cont10 = 0;
    cont100 = 0;

  }
}

window.addEventListener('scroll', showText);



//slider

const slider = document.querySelector (".contenedor-imagenes");
let imagenes = document.querySelectorAll(".imagen-carrusel");
let imagenesLast = imagenes[imagenes.length - 1];

slider.insertAdjacentElement('afterbegin', imagenesLast);

function Next() {
	let sliderSectionFirst = document.querySelectorAll(".imagen-carrusel")[0];
	slider.style.marginLeft = "-200%";
	slider.style.transition = "all 6s ease";
	setTimeout( function(){
		slider.style.transition = "none";
		slider.insertAdjacentElement('beforeend', sliderSectionFirst);
		slider.style.marginLeft = "-100%";
	}, 5000);
}

setInterval(function(){
	Next();
}, 7000);