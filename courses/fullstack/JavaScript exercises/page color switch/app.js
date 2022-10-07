document.body.style.transition = "all 2s";

const button = document.querySelector('button');
const h1 = document.querySelector('h1');
const btnStart = document.querySelector("#start");
const btnStop = document.querySelector("#end");
let intervalId;

const setNewColor = () => {
  const newColor = makeRandColor();
  document.body.style.backgroundColor = newColor;
  h1.innerText = newColor;
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







