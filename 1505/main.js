const btn1 = document.querySelector('.btn1');
const btn2 = document.querySelector('.btn2');
const btn3 = document.querySelector('.btn3');

const tabA = document.querySelector('.a');
const tabB = document.querySelector('.b');
const tabC = document.querySelector('.c');

const tabs = document.querySelectorAll('.contentTab');

// btn1.addEventListener('click', function(e){
//   console.log(e.target);
//   tabA.className = "contentTab a isActive";
//   tabB.className ="contentTab b";
//   tabC.className = "contentTab c";
// })

// btn2.addEventListener('click', function(e){
//   console.log(e.target);
//   tabB.className = "contentTab b isActive";
//   tabA.className ="contentTab a";
//   tabC.className = "contentTab c";
// })

// btn3.addEventListener('click', function(e){
//   console.log(e.target);
//   tabB.className = "contentTab b";
//   tabA.className = "contentTab a";
//   tabC.className = "contentTab c isActive";
// })

// document.addEventListener('click', function(e){
//   if (e.target.classList[0] == "btn1"){
//     tabA.className = "contentTab a isActive";
//     tabB.className ="contentTab b";
//     tabC.className = "contentTab c";
//   }
//   if (e.target.classList[0] == "btn2"){
//     tabB.className = "contentTab b isActive";
//     tabA.className ="contentTab a";
//     tabC.className = "contentTab c";
//   }
//   if (e.target.classList[0] == "btn3"){
//     tabB.className = "contentTab b";
//     tabA.className = "contentTab a";
//     tabC.className = "contentTab c isActive";
//   }

// })

document.addEventListener('click', function(e){
  if (e.target.classList[0] == "btn1"){
    tabs[0].classList.add('isActive')
    tabs[1].classList.remove('isActive')
    tabs[2].classList.remove('isActive')
  }
  if (e.target.classList[0] == "btn2"){
    tabs[0].classList.remove('isActive')
    tabs[1].classList.add('isActive')
    tabs[2].classList.remove('isActive')
  }
  if (e.target.classList[0] == "btn3"){
    tabs[0].classList.remove('isActive')
    tabs[1].classList.remove('isActive')
    tabs[2].classList.add('isActive')
  }

})