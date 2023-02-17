function showMyName(firstName, lastName) {
  return alert(firstName + ' ' + lastName);
}
showMyName('Monika', 'Yancheva');

function car(make, model) {
  return alert(make + ' ' + model);
}

function addNumber(x, y) {
  var result = x + y;
  return alert(result);
}

var getElId = document.getElementById('virtual-btn');

// console.log(getElId);

getElId.addEventListener('click', function () {
  addNumber(50, 100);
});

function sayHello(firstWord, secondWord) {
  return alert(firstWord + ' ' + secondWord);
}
sayHello('Hello', 'World');

// function addSecondNumbers(z, j) {
// 	var result2 = z + j + addNumber(2, 6);

// 	return console.log(result2);
// }

// addSecondNumbers(10, 20);
