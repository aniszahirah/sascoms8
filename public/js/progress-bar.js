// const  previousBtn  =  document.getElementById('prevBtn');
// const  nextBtn  =  document.getElementById('nextBtn');
// const  finishBtn  =  document.getElementById('finishBtn');
// const  content  =  document.getElementById('content');
// const  bullets  =  [...document.querySelectorAll('.number')];

// const MAX_STEPS = 4;
// let currentStep = 1;

// nextBtn.addEventListener('click',  ()  =>  {
// 	bullets[currentStep  -  1].classList.add('completed');
// 	currentStep  +=  1;
// 	previousBtn.disabled  =  false;
// 	if  (currentStep  ===  MAX_STEPS)  {
// 		nextBtn.disabled  =  true;
// 		finishBtn.disabled  =  false;
// 	}
// 	content.innerText  =  `Step Number ${currentStep}`;
// });


// prevBtn.addEventListener('click',  ()  =>  {
// 	bullets[currentStep  -  2].classList.remove('completed');
// 	currentStep  -=  1;
// 	nextBtn.disabled  =  false;
// 	finishBtn.disabled  =  true;
// 	if  (currentStep  ===  1)  {
// 		previousBtn.disabled  =  true;
// 	}
// 	content.innerText  =  `Step Number ${currentStep}`;
// });

// finishBtn.addEventListener('click',  ()  =>  {
// 	location.reload();
// });

// --------------------------------------------------------------------

const allBars = document.querySelectorAll('.green')
const allNumbers = document.querySelectorAll('.number')
const previousBtn = document.getElementById('previousBtn')
const nextBtn = document.getElementById('nextBtn')
// const finishBtn = document.getElementById('finishBtn')

let i = 0;
let index = 0;

function growBar(bar){
    if(i === 0){
        i = 1
        let width = 1;
        let interval = setInterval((frame, 5))

        function frame(){
            if(width >= 100){
                clearInterval(interval)
                i = 0
            }
            else{
                width++
                bar.style.width = width + "%"
            }
        }
    }
}

function decreaseBar(bar){
    if (i === 0){
        i = 1
        let width = 1
        let interval = setInterval((frame, 5))

        function frame(){
            if(width <= 0){
                clearInterval(interval)
                i = 0
            }
            else{
                width--
                bar.style.width = width + "%"
            }
        }
    }
}

nextBtn.addEventListener("click", function(e){
    if(e){
        nextBtn.disabled = true
    }

    previousBtn.disabled = false

    if(index >= 2){
        index = 2
    }

    let bar = allBars[index]
    growBar(bar)
})