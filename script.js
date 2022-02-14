let navbar = document.querySelector('.navbar');


document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove ('active');
    cartitem.classList.remove ('active');
}



window.onscroll = () =>{
    navbar.classList.remove ('active');
    searchForm.classList.remove ('active');
    cartitem.classList.remove ('active');
}




// contadores
let nums = document.querySelectorAll(".num");
let section = document.querySelector(".three");
let started = false; // Function Started ? No

window.onscroll = function () {
  if (window.scrollY /2 >= section.offsetTop) {
    if (!started) {
      nums.forEach((num) => startCount(num));
    }
    started = true;
  }
};

function startCount(el) {
  let goal = el.dataset.goal;
  let cont = 0;

  let count = setInterval(() => {
    cont += 1;
    if (goal==100) {
        el.textContent = `+ ${cont} K` ;
    }


    else{
        el.textContent = `+ ${cont}`;
    }
    
    if (cont == goal) {
      clearInterval(count);
    }
  }, 2000 / goal);

}


