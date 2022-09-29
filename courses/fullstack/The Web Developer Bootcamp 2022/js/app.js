let age = 18;

if (age <= 5 && age <=65) {
  console.log("You are not a baby or senior!")
}
else {
  console.log("Something went wrong!")
}

const day = 3;

switch (day) {
  case 1:
    console.log("Monday");
    break;

  case 2:
    console.log("Tuesday");
    break;

  case 3:
    console.log("Wednesday");
    break;
    
  case 4:
    console.log("Thursday");
    break;
    
  case 5:
    console.log("Friday");
    break;
    
  case 6:
    console.log("Saturday");
    break;
    
  case 7:
    console.log("Sunday"); 
    break;
    default:
      console.log("I don't know that!") 
    }

  const name = "John 3";  
  const age2 = 23;

  console.log("'name'  + 'is' + 'age2' + 'years old'"  );

console.log(name2 + " is "  + age + " years old.")
console.log(name2 + ` is 

 + age +  years old.`)

function sum(a, b) {
	return a + b
}

console.log(`"${name2s}" is ${age} years old.
		${6 + 9} 
sum 5 + 2 = ${sum(5, 2)}.`)

//Return Value Practice

function multiply (x,y) {
    let num = x * y ;
    
    return num;
}

multiply (2,3);
multiply (9,9);
multiply (5,4);

//Multiple Args Exercise

function isSnakeEyes (numOne,numTwo) {
    if (numOne === 1 && numTwo === 1) { 
        console.log("Snake Eyes!")
        
    }
    else {
        console.log("Not Snake Eyes!")
    }
    
    
}

//Rant Exercise

function rant(message) {
   
 let text = message;
 let result = text.toUpperCase();
  for (let i = 0; i < 3; i++) {
console.log(result);
        }

        const hen = {
    name:"Helen",
    eggCount:0,
    layAnEgg(){
        this.eggCount +=1;
        return "EGG";
    
    }
}

const square = {
    area(side) {
      return side * side;
    },
    perimeter(side) {
      return side * 4;
    },
};

const fullNames = [{first: 'Albus', last: 'Dumbledore'}, {first: 'Harry', last: 'Potter'}, {first: 'Hermione', last: 'Granger'}, {first: 'Ron', last: 'Weasley'}, {first: 'Rubeus', last: 'Hagrid'}, {first: 'Minerva', last: 'McGonagall'}, {first: 'Severus', last: 'Snape'}];

const firstNames = fullNames.map(function(name){
return name.first;
});

const greet = (name) => {
    return `Hey ${name}!`;
};

greet("Hagrid");
greet("Luna");


function validUserNames(usernames) {
  return usernames.filter(function(el) { return el.length < 10 } );
}

console.log(validUserNames(['mark', 'staceysmom1978', 'q29832128238983', 'carrie98', 'MoanaFan']));


function allEvens(arr) {
return arr.every(val => val % 2 === 0)
};


var myArray = [1,3,6,7,8];

var sum = 
myArray.reduce((sum, currentMyArrayItem) => {
  

  console.log (sum)
  
  var result = sum + currentMyArrayItem  ;
  
  return result;
  
}, 0)

function raceResult (gold,silver,...everyoneElse){
  console.log("Gold medal goes to: ${gold}")
  console.log("Silver medal goes to: ${silver}")
  console.log("And thanks to everyone else: ${everyoneElse}")
} 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn</title>
</head>
<body>
    <h1 id="mainheading">I &hearts; unicorns</h1>
    <img src="https://devsprouthosting.com/images/unicorn.jpg" id="unicorn" alt="unicorn">
</body>
</html>
~~~

~~~js
const image = document.getElementById ("unicorn");
const heading = document.getElementById("mainheading");
~~~




<h4>Which Came First?</h4>
<img src="https://devsprouthosting.com/images/egg.jpg" width="200px">
<!-- image source: unsplash.com -->

// The url you need: 'https://devsprouthosting.com/images/chicken.jpg'
document.querySelector('img').src = "https://devsprouthosting.com/images/chicken.jpg";
document.querySelector("img").alt = "chicken";

