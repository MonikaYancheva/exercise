String
String template literals
`string text line 1
 string text line 2`

`string text ${expression} string text`

// Tagged, this calls the function "tagFunction" with the template as the
// first argument and substitution values as subsequent arguments:
tagFunction`string text ${expression} string text`
With template literals, you can avoid the concatenation operator — and improve the readability of your code — by using placeholders of the form ${expression} to perform substitutions for embedded expressions:

const a = 5;
const b = 10;
console.log(`Fifteen is ${a + b} and
not ${2 * a + b}.`);
// "Fifteen is 15 and
// not 20."
Note that there's a mild difference between the two syntaxes. Addition would coerce the expression to a primitive, which calls valueOf() in priority; on the other hand, template literal would coerce the expression to a string, which calls toString() in priority. If the expression has a @@toPrimitive method, string concatenation calls it with "default" as hint, while template literals use "string". This is important for objects that have different string and primitive representations — such as Temporal, whose valueOf() method throws.

const t = Temporal.Now.instant();
"" + t; // Throws TypeError
`${t}`; // '2022-07-31T04:48:56.113918308Z'
Nesting templates
In certain cases, nesting a template is the easiest (and perhaps more readable) way to have configurable strings. Within a backtick-delimited template, it is simple to allow inner backticks by using them inside an ${expression} placeholder within the template.

For example, without template literals, if you wanted to return a certain value based on a particular condition, you could do something like the following:

let classes = 'header';
classes += (isLargeScreen() ?
  '' : item.isCollapsed ?
    ' icon-expander' : ' icon-collapser');
With a template literal but without nesting, you could do this:

let classes = 'header';
classes += (isLargeScreen() ?
  '' : item.isCollapsed ?
    ' icon-expander' : ' icon-collapser');
With nesting of template literals, you can do this:

const classes = `header ${ isLargeScreen() ? '' :
  `icon-${item.isCollapsed ? 'expander' : 'collapser'}` }`;
Null and Undefined
null /en-US/docs/Web/JavaScript/Reference/Operators/null

…with a literal: null. null is not an identifier for a property of the global object, like undefined can be.… …// "undefined" null === undefined // false null == undefined // true null === null // true null == null… …null // true isNaN(1 + null) // false isNaN(1 + undefined) // true undefined NaN void operator…

undefined /en-US/docs/Web/JavaScript/Reference/Global_Objects/undefined

…also checks whether x is null, while strict equality doesn't.… …This is because null is not equivalent to undefined. See comparison operators for details.… …declared before if (y === void 0) { // throws Uncaught ReferenceError: y is not defined } JavaScript's primitive types null…

Null /en-US/docs/Glossary/Null

…The meaning of a null reference varies among language implementations.… …JavaScript data types The JavaScript global object: null Null pointer on Wikipedia Glossary JavaScript string number bigint… …boolean null undefined symbol…

undefined /en-US/docs/Glossary/undefined

…undefined is a primitive value automatically assigned to variables that have just been declared, or to formal arguments for… …actual arguments. var x; //create a variable but assign it no value console.log("x's value is ", x) //logs "x's value is undefined… …" Undefined value on Wikipedia JavaScript data types and data structures…


The JavaScript Math object allows you to perform mathematical tasks on numbers.
Math Properties (Constants)
The syntax for any Math property is : Math.property.

JavaScript provides 8 mathematical constants that can be accessed as Math properties:

Math.E        // returns Euler's number
Math.PI       // returns PI
Math.SQRT2    // returns the square root of 2
Math.SQRT1_2  // returns the square root of 1/2
Math.LN2      // returns the natural logarithm of 2
Math.LN10     // returns the natural logarithm of 10
Math.LOG2E    // returns base 2 logarithm of E
Math.LOG10E   // returns base 10 logarithm of E
Math Methods
The syntax for Math any methods is : Math.method(number)

Number to Integer There are 4 common methods to round a number to an integer:

Math.round(x)	Returns x rounded to its nearest integer
Math.ceil(x)	Returns x rounded up to its nearest integer
Math.floor(x)	Returns x rounded down to its nearest integer
Math.trunc(x)	Returns the integer part of x (new in ES6)
Conditional statements
If...Else
-The if statement executes a statement if a specified condition is truthy. If the condition is falsy, another statement in the optional else clause will be executed.

function checkValue(a, b) {
  if (a === 1) {
    if (b === 2) {
      console.log("a is 1 and b is 2");
    } else {
      console.log("a is not 1");
    }
  }
}


* Switch
  
  ``` js 
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
JavaScript Array Methods and Properties
Name Description concat() Joins arrays and returns an array with the joined arrays constructor Returns the function that created the Array object's prototype copyWithin() Copies array elements within the array, to and from specified positions entries() Returns a key/value pair Array Iteration Object every() Checks if every element in an array pass a test fill() Fill the elements in an array with a static value filter() Creates a new array with every element in an array that pass a test find() Returns the value of the first element in an array that pass a test findIndex() Returns the index of the first element in an array that pass a test forEach() Calls a function for each array element from() Creates an array from an object includes() Check if an array contains the specified element indexOf() Search the array for an element and returns its position isArray() Checks whether an object is an array join() Joins all elements of an array into a string keys() Returns a Array Iteration Object, containing the keys of the original array lastIndexOf() Search the array for an element, starting at the end, and returns its position length Sets or returns the number of elements in an array map() Creates a new array with the result of calling a function for each array element pop() Removes the last element of an array, and returns that element prototype Allows you to add properties and methods to an Array object push() Adds new elements to the end of an array, and returns the new length

The JavaScripty Array Object
The Array object is used to store multiple values in a single variable:

const cars = ["Saab", "Volvo", "BMW"];

Array indexes are zero-based: The first element in the array is 0, the second is 1,and so on.

Nested JavaScript Objects and Arrays
<script>
let x = "";
const myObj = {
  name: "John",
  age: 30,
  cars: [
    {name:"Ford", models:["Fiesta", "Focus", "Mustang"]},
    {name:"BMW", models:["320", "X3", "X5"]},
    {name:"Fiat", models:["500", "Panda"]}
  ]
}

for (let i in myObj.cars) {
  x += "<h2>" + myObj.cars[i].name + "</h2>";
  for (let j in myObj.cars[i].models) {
    x += myObj.cars[i].models[j] + "<br>";
  }
}

document.getElementById("demo").innerHTML = x;
</script>

</body>
</html>

# for...of
The for...of statement creates a loop iterating over iterable objects, including: built-in String, Array, array-like objects (e.g., arguments or NodeList), TypedArray, Map, Set, and user-defined iterables. It invokes a custom iteration hook with statements to be executed for the value of each distinct property of the object.
## JavaScript Demo: Statement - For...Of
 ~~~js
 const array1 = ['a', 'b', 'c'];

for (const element of array1) {
  console.log(element);
}

// expected output: "a"
// expected output: "b"
// expected output: "c"

for (variable of iterable) {
  statement
}
js

variable
On each iteration a value of a different property is assigned to variable. variable may be declared with const, let, or var.

iterable
Object whose iterable properties are iterated.
# Examples

~~~ js
const iterable = [10, 20, 30];

for (const value of iterable) {
  console.log(value);
}
// 10
// 20
// 30
js


## The return statement ends function execution and specifies a value to be returned to the function caller.


~~~ js

function isShortsWeather (temperature) {
    if (temperature >= 75) {
        return true;
    }
    
    else {
        return false;
    }
}


function lastElement (someArray) {
     if(someArray.length === 0){
        return null; 
     }else {
        return someArray[someArray.length-1];
     }
}

function capitalize (string) {
   return string[0].toUpperCase() + string.slice(1).toLowerCase(); 
}
 js

 ## SCOPE

 The scope is the current context of execution in which values and expressions are "visible" or can be referenced. If a variable or expression is not in the current scope, it will not be available for use. Scopes can also be layered in a hierarchy, so that child scopes have access to parent scopes, but not vice versa.

JavaScript has the following kinds of scopes:

Global scope: The default scope for all code running in script mode.
Module scope: The scope for code running in module mode.
Function scope: The scope created with a function.
In addition, variables declared with let or const can belong to an additional scope:

Block scope: The scope created with a pair of curly braces (a block).
A function creates a scope, so that (for example) a variable defined exclusively within the function cannot be accessed from outside the function or within other functions. For instance, the following is invalid:

~~~ js

function exampleFunction() {
  const x = "declared inside function";  // x can only be used in exampleFunction
  console.log("Inside function");
  console.log(x);
}

console.log(x);  // Causes error


const x = "declared outside function";

exampleFunction();

function exampleFunction() {
  console.log("Inside function");
  console.log(x);
}

console.log("Outside function");
console.log(x);
js
 

 ##EXERCISES

Define an object called square, which will hold methods that have to do with the geometry of squares. It should contain two methods, area and perimeter 

area should accept the length of a side (all sides are the same in a square) and then return the side squared. 

perimeter should accept the length of a side and return that side multiplied by 4.

square.area(10) //100
square.perimeter(10) //40
  
js
  const square = {
    area(side) {
      return side * side;
    },
    perimeter(side) {
      return side * 4;
    },
};



## Egg Laying Exercise
Define an object called hen.  It should have three properties:

name should be set to 'Helen'

eggCount should be set to 0

layAnEgg should be a method which increments the value of eggCount by 1 and returns the string "EGG".  You'll need to use this.

```
  const hen = {
    name:"Helen",
    eggCount:0,
    layAnEgg(){
        this.eggCount +=1;
        return "EGG";
    
    }
}


 ## try...catch

     the try...catch statement is comprised of a try block and either a catch block, a finally block, or both. The code in the try block is executed first, and if it throws an exception, the code in the catch block will be executed. The code in the finally block will always be executed before control flow exits the entire construct.

  js
       try {
  nonExistentFunction();
} catch (error) {
  console.error(error);
  // expected output: ReferenceError: nonExistentFunction is not defined
  // Note - error messages will vary depending on browser
}





 ### JavaScript try and catch
The try statement allows you to define a block of code to be tested for errors while it is being executed.

The catch statement allows you to define a block of code to be executed, if an error occurs in the try block.

The JavaScript statements try and catch come in pairs:

~~~ js
try {
  Block of code to try
}
catch(err) {
  Block of code to handle errors
}
js

## map() method
The map() method creates a new array populated with the results of calling a provided function on every element in the calling array.

Define a variable named firstNames and assign it to the result of mapping over the existing array, fullNames, so that firstNames contains only the first names of the Harry Potter characters from the fullNames array.

e.g.,

console.log(firstNames); // ['Albus', 'Harry', 'Hermione', 'Ron', 'Rubeus', 'Minerva', 'Severus']


Please note:

The fullNames array is an array of objects with each object containing properties for the first and last names of each character. You may need to click the "Reset code" link if you do not see the fullNames array pre-loaded into the exercise's index.js file.

This exercise has been updated, you may see Q&A threads from this lecture that relate to the original exercise which no longer exists. They can be ignored.

```js
const fullNames = [{first: 'Albus', last: 'Dumbledore'}, {first: 'Harry', last: 'Potter'}, {first: 'Hermione', last: 'Granger'}, {first: 'Ron', last: 'Weasley'}, {first: 'Rubeus', last: 'Hagrid'}, {first: 'Minerva', last: 'McGonagall'}, {first: 'Severus', last: 'Snape'}];

const firstNames = fullNames.map(function(name){
return name.first;
})

```

#Write an arrow function expression called greet.  It should accept a single string argument, representing a person's name.  It should return a greeting string as shown below:

greet("Hagrid") //"Hey Hagrid!" 
greet("Luna") //"Hey Luna!"
Be sure to use arrow function syntax!

```
const greet = (name) => {
    return `Hey ${name}!`;
};

greet("Hagrid");
greet("Luna");


## The filter() method creates a shallow copy of a portion of a given array, filtered down to just the elements from the given array that pass the test implemented by the provided function.

Let's get some practice using the filter method. Write a function called validUserNames that accepts an array of usernames (strings).  It should return a new array, containing only the usernames that are less than 10 characters. For example:

validUserNames(['mark', 'staceysmom1978', 'q29832128238983', 'carrie98', 'MoanaFan']);
// => ["mark", "carrie98", "MoanaFan"]\

or if you want to get fancy with an arrow function:

const validUserNames = usernames => // your code here;



```

function validUserNames(usernames) {
  return usernames.filter(function(el) { return el.length < 10 } );
}

console.log(validUserNames(['mark', 'staceysmom1978', 'q29832128238983', 'carrie98', 'MoanaFan']));

The every() method tests whether all elements in the array pass the test implemented by the provided function. It returns a Boolean value.

Define a function called allEvens that accepts a single array of numbers.  If the array contains all even numbers, return true.  Otherwise, return false.  Use some or every to help you do this!  (only one of them is actually useful here)

allEvens([2,4,6,8]) //true
allEvens([1,4,6,8]) //false
allEvens([1,2,3]) //false

function allEvens(arr) {
return arr.every(val => val % 2 === 0)
};


## The reduce() method executes a user-supplied "reducer" callback function on each element of the array, in order, passing in the return value from the calculation on the preceding element. The final result of running the reducer across all elements of the array is a single value.

The first time that the callback is run there is no "return value of the previous calculation". If supplied, an initial value may be used in its place. Otherwise the array element at index 0 is used as the initial value and iteration starts from the next element (index 1 instead of index 0).
The reducer walks through the array element-by-element, at each step adding the current array value to the result from the previous step (this result is the running sum of all the previous steps) — until there are no more elements to add.
The reduce() method takes two arguments: a callback function and an optional initial value. If an initial value is provided, reduce() calls the "reducer" callback function on each element in the array, in order. If no initial value is provided, reduce() calls the callback function on each element in the array after the first element.

reduce() returns the value that is returned from the callback function on the final iteration of the array.

reduce() is a central concept in functional programming, where it's not possible to mutate any value, so in order to accumulate all values in an array, one must return a new accumulator value on every iteration. This convention propagates to JavaScript's reduce(): you should use spreading or other copying methods where possible to create new arrays and objects as the accumulator, rather than mutating the existing one. If you decided to mutate the accumulator instead of copying it, remember to still return the modified object in the callback, or the next iteration will receive undefined.

Perhaps the easiest-to-understand case for reduce() is to return the sum of all the elements in an array:

~~~js

var myArray = [1,3,6,7,8];

var sum = 
myArray.reduce((sum, currentMyArrayItem) => {
  

  console.log (sum)
  
  var result = sum + currentMyArrayItem  ;
  
  return result;
  
}, 0)


const array1 = [1, 2, 3, 4];

// 0 + 1 + 2 + 3 + 4
const initialValue = 0;
const sumWithInitial = array1.reduce(
  (previousValue, currentValue) => previousValue + currentValue,
  initialValue
);

console.log(sumWithInitial);
// expected output: 10
~~~


## Default function parameters allow named parameters to be initialized with default values if no value or undefined is passed.

~~~js
function greet(name, greeting, message = `${greeting} ${name}`) {
  return [name, greeting, message];
}

greet("David", "Hi"); // ["David", "Hi", "Hi David"]
greet("David", "Hi", "Happy Birthday!"); // ["David", "Hi", "Happy Birthday!"]
~~~


# SPREAD
Spread syntax (...) allows an iterable, such as an array or string, to be expanded in places where zero or more arguments (for function calls) or elements (for array literals) are expected. In an object literal, the spread syntax enumerates the properties of an object and adds the key-value pairs to the object being created.

Spread syntax looks exactly like rest syntax. In a way, spread syntax is the opposite of rest syntax. Spread syntax "expands" an array into its elements, while rest syntax collects multiple elements and "condenses" them into a single element. See rest parameters and rest property.
Spread syntax can be used when all elements from an object or array need to be included in a new array or object, or should be applied one-by-one in a function call's arguments list. There are three distinct places that accept the spread syntax:

# Spread in function calls!!!

~~~js

function myFunction(x, y, z) {}
const args = [0, 1, 2];
myFunction(...args);
~~~

# Spread in array literals
A more powerful array literal
Without spread syntax, to create a new array using an existing array as one part of it, the array literal syntax is no longer sufficient and imperative code must be used instead using a combination of push(), splice(), concat(), etc. With spread syntax this becomes much more succinct:

~~~js
const parts = ['shoulders', 'knees'];
const lyrics = ['head', ...parts, 'and', 'toes'];
//  ["head", "shoulders", "knees", "and", "toes"]
~~~

Just like spread for argument lists, ... can be used anywhere in the array literal, and may be used more than once.

## Copy an array

~~~js
const arr = [1, 2, 3];
const arr2 = [...arr]; // like arr.slice()

arr2.push(4);
//  arr2 becomes [1, 2, 3, 4]
//  arr remains unaffected
~~~

# Spread in object literals
Shallow-cloning (excluding prototype) or merging of objects is possible using a shorter syntax than Object.assign().

Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
