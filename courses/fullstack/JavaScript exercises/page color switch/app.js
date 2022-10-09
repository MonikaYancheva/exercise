const button = document.querySelector('button');
const h1 = document.querySelector('h1');
const btnStart = document.querySelector("#start");
const btnStop = document.querySelector("#end");
let intervalId;

const setNewColor = () => {
  const newGradient = `linear-gradient(45deg, ${makeRandColor()}, ${makeRandColor()})`;
  document.body.style.background = newGradient; 
  
  h1.innerText = newGradient;
  // const newColor = makeRandColor();
  // document.body.style.backgroundColor = newColor;
}

const makeRandColor = () => {
  const r = Math.floor(Math.random() * 255);
  const g = Math.floor(Math.random() * 255);
  const b = Math.floor(Math.random() * 255);

  return `rgb( ${r}, ${g}, ${b})`
}

button.addEventListener('click', setNewColor);

btnStart.addEventListener('click', () => {
   intervalId = setInterval(setNewColor, 3000);
})
btnStop.addEventListener('click', function() {
  clearInterval(intervalId);
})







