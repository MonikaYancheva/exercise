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

```js
let classes = 'header';
classes += isLargeScreen() ? '' : item.isCollapsed ? ' icon-expander' : ' icon-collapser';

// With a template literal but without nesting, you could do this:
let classes = 'header';
classes += isLargeScreen() ? '' : item.isCollapsed ? ' icon-expander' : ' icon-collapser';

// With nesting of template literals, you can do this:
const classes = `header ${isLargeScreen() ? '' : `icon-${item.isCollapsed ? 'expander' : 'collapser'}`}`;
```

## Null and Undefined

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

```js

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
```

### Conditional statements

## If...Else

-The if statement executes a statement if a specified condition is truthy. If the condition is falsy, another statement in the optional else clause will be executed.

```js
function checkValue(a, b) {
  if (a === 1) {
    if (b === 2) {
      console.log('a is 1 and b is 2');
    } else {
      console.log('a is not 1');
    }
  }
}
```

## Switch

```js
const day = 3;
switch (day) {
  case 1:
    console.log('Monday');
    break;
  case 2:
    console.log('Tuesday');
    break;
  case 3:
    console.log('Wednesday');
    break;
  case 4:
    console.log('Thursday');
    break;
  case 5:
    console.log('Friday');
    break;
  case 6:
    console.log('Saturday');
    break;
  case 7:
    console.log('Sunday');
    break;
  default:
    console.log("I don't know that!");
}
```

### JavaScript Array Methods and Properties

Name Description `concat()` Joins arrays and returns an array with the joined arrays constructor Returns the function that created the Array object's prototype `copyWithin()` Copies array elements within the array, to and from specified positions `entries()` Returns a key/value pair Array Iteration Object `every()` Checks if every element in an array pass a test `fill()` Fill the elements in an array with a static value `filter()` Creates a new array with every element in an array that pass a test `find()` Returns the value of the first element in an array that pass a test `findIndex()` Returns the index of the first element in an array that pass a test `forEach()` Calls a function for each array element `from()` Creates an array from an object `includes()` Check if an array contains the specified element `indexOf()` Search the array for an element and returns its position isArray() Checks whether an object is an array `join()` Joins all elements of an array into a string `keys()` Returns a Array Iteration Object, containing the keys of the original array `lastIndexOf()` Search the array for an element, starting at the end, and returns its position length Sets or returns the number of elements in an array `map()` Creates a new array with the result of calling a function for each array element `pop()` Removes the last element of an array, and returns that element prototype Allows you to add properties and methods to an Array object `push()` Adds new elements to the end of an array, and returns the new length

## The JavaScript Array Object

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

## for...of

The for...of statement creates a loop iterating over iterable objects, including: built-in String, Array, array-like objects (e.g., arguments or NodeList), TypedArray, Map, Set, and user-defined iterables. It invokes a custom iteration hook with statements to be executed for the value of each distinct property of the object.

## JavaScript Demo: Statement - For...Of

```js
const array1 = ['a', 'b', 'c'];

for (const element of array1) {
  console.log(element);
}

// expected output: "a"
// expected output: "b"
// expected output: "c"

for (variable of iterable) {
  statement;
}
```

## variable

On each iteration a value of a different property is assigned to variable. variable may be declared with const, let, or var.

iterable
Object whose iterable properties are iterated.

# Examples

```js
const iterable = [10, 20, 30];

for (const value of iterable) {
  console.log(value);
}
// 10
// 20
// 30
```

## The return statement ends function execution and specifies a value to be returned to the function caller.

```js
function isShortsWeather(temperature) {
  if (temperature >= 75) {
    return true;
  } else {
    return false;
  }
}

function lastElement(someArray) {
  if (someArray.length === 0) {
    return null;
  } else {
    return someArray[someArray.length - 1];
  }
}

function capitalize(string) {
  return string[0].toUpperCase() + string.slice(1).toLowerCase();
}
```

## SCOPE

The scope is the current context of execution in which values and expressions are "visible" or can be referenced. If a variable or expression is not in the current scope, it will not be available for use. Scopes can also be layered in a hierarchy, so that child scopes have access to parent scopes, but not vice versa.

JavaScript has the following kinds of scopes:

Global scope: The default scope for all code running in script mode.
Module scope: The scope for code running in module mode.
Function scope: The scope created with a function.
In addition, variables declared with let or const can belong to an additional scope:

Block scope: The scope created with a pair of curly braces (a block).
A function creates a scope, so that (for example) a variable defined exclusively within the function cannot be accessed from outside the function or within other functions. For instance, the following is invalid:

```js
function exampleFunction() {
  const x = 'declared inside function'; // x can only be used in exampleFunction
  console.log('Inside function');
  console.log(x);
}

console.log(x); // Causes error

const x = 'declared outside function';

exampleFunction();

function exampleFunction() {
  console.log('Inside function');
  console.log(x);
}

console.log('Outside function');
console.log(x);
```

### EXERCISES

Define an object called square, which will hold methods that have to do with the geometry of squares. It should contain two methods, area and perimeter

area should accept the length of a side (all sides are the same in a square) and then return the side squared.

perimeter should accept the length of a side and return that side multiplied by 4.

```js
square.area(10); //100
square.perimeter(10); //40

const square = {
  area(side) {
    return side * side;
  },
  perimeter(side) {
    return side * 4;
  }
};
```

## Egg Laying Exercise

Define an object called hen. It should have three properties:

name should be set to 'Helen'

eggCount should be set to 0

layAnEgg should be a method which increments the value of eggCount by 1 and returns the string "EGG". You'll need to use this.

```js
const hen = {
  name: 'Helen',
  eggCount: 0,
  layAnEgg() {
    this.eggCount += 1;
    return 'EGG';
  }
};
```

## try...catch

     the try...catch statement is comprised of a try block and either a catch block, a finally block, or both. The code in the try block is executed first, and if it throws an exception, the code in the catch block will be executed. The code in the finally block will always be executed before control flow exits the entire construct.

```js
try {
  nonExistentFunction();
} catch (error) {
  console.error(error);
  // expected output: ReferenceError: nonExistentFunction is not defined
  // Note - error messages will vary depending on browser
}
```

### JavaScript try and catch

The try statement allows you to define a block of code to be tested for errors while it is being executed.

The catch statement allows you to define a block of code to be executed, if an error occurs in the try block.

The JavaScript statements try and catch come in pairs:

```js
try {
  Block of code to try
}
catch(err) {
  Block of code to handle errors
}
```

## map() method

The `map()` method creates a new array populated with the results of calling a provided function on every element in the calling array.

Define a variable named firstNames and assign it to the result of mapping over the existing array, fullNames, so that firstNames contains only the first names of the Harry Potter characters from the fullNames array.

e.g.,

console.log(firstNames); // ['Albus', 'Harry', 'Hermione', 'Ron', 'Rubeus', 'Minerva', 'Severus']

Please note:

The fullNames array is an array of objects with each object containing properties for the first and last names of each character. You may need to click the "Reset code" link if you do not see the fullNames array pre-loaded into the exercise's index.js file.

This exercise has been updated, you may see Q&A threads from this lecture that relate to the original exercise which no longer exists. They can be ignored.

```js
const fullNames = [
  { first: 'Albus', last: 'Dumbledore' },
  { first: 'Harry', last: 'Potter' },
  { first: 'Hermione', last: 'Granger' },
  { first: 'Ron', last: 'Weasley' },
  { first: 'Rubeus', last: 'Hagrid' },
  { first: 'Minerva', last: 'McGonagall' },
  { first: 'Severus', last: 'Snape' }
];

const firstNames = fullNames.map(function (name) {
  return name.first;
});
```

# Write an arrow function expression called greet. It should accept a single string argument, representing a person's name. It should return a greeting string as shown below:

```js
greet("Hagrid") //"Hey Hagrid!"
greet("Luna") //"Hey Luna!"
Be sure to use arrow function syntax!


const greet = (name) => {
    return `Hey ${name}!`;
};

greet("Hagrid");
greet("Luna");
```

## The `filter()` method creates a shallow copy of a portion of a given array, filtered down to just the elements from the given array that pass the test implemented by the provided function.

Let's get some practice using the filter method. Write a function called validUserNames that accepts an array of usernames (strings). It should return a new array, containing only the usernames that are less than 10 characters. For example:

```js
validUserNames(['mark', 'staceysmom1978', 'q29832128238983', 'carrie98', 'MoanaFan']);
// => ["mark", "carrie98", "MoanaFan"]\

or if you want to get fancy with an arrow function:

const validUserNames = usernames => // your code here;





function validUserNames(usernames) {
  return usernames.filter(function(el) { return el.length < 10 } );
}

console.log(validUserNames(['mark', 'staceysmom1978', 'q29832128238983', 'carrie98', 'MoanaFan']));
~~~

The every() method tests whether all elements in the array pass the test implemented by the provided function. It returns a Boolean value.

Define a function called allEvens that accepts a single array of numbers.  If the array contains all even numbers, return true.  Otherwise, return false.  Use some or every to help you do this!  (only one of them is actually useful here)
~~~js
allEvens([2,4,6,8]) //true
allEvens([1,4,6,8]) //false
allEvens([1,2,3]) //false

function allEvens(arr) {
return arr.every(val => val % 2 === 0)
};
```

## The `reduce()` method executes a user-supplied "reducer" callback function on each element of the array, in order, passing in the return value from the calculation on the preceding element. The final result of running the reducer across all elements of the array is a single value.

The first time that the callback is run there is no "return value of the previous calculation". If supplied, an initial value may be used in its place. Otherwise the array element at index 0 is used as the initial value and iteration starts from the next element (index 1 instead of index 0).
The reducer walks through the array element-by-element, at each step adding the current array value to the result from the previous step (this result is the running sum of all the previous steps) — until there are no more elements to add.
The `reduce()` method takes two arguments: a callback function and an optional initial value. If an initial value is provided, `reduce()` calls the "reducer" callback function on each element in the array, in order. If no initial value is provided, `reduce()` calls the callback function on each element in the array after the first element.
returns the value that is returned from the callback function on the final iteration of the array.

`reduce()` is a central concept in functional programming, where it's not possible to mutate any value, so in order to accumulate all values in an array, one must return a new accumulator value on every iteration. This convention propagates to JavaScript's `reduce()`: you should use spreading or other copying methods where possible to create new arrays and objects as the accumulator, rather than mutating the existing one. If you decided to mutate the accumulator instead of copying it, remember to still return the modified object in the callback, or the next iteration will receive undefined.

Perhaps the easiest-to-understand case for `reduce()` is to return the sum of all the elements in an array:

```js
var myArray = [1, 3, 6, 7, 8];

var sum = myArray.reduce((sum, currentMyArrayItem) => {
  console.log(sum);

  var result = sum + currentMyArrayItem;

  return result;
}, 0);

const array1 = [1, 2, 3, 4];

// 0 + 1 + 2 + 3 + 4
const initialValue = 0;
const sumWithInitial = array1.reduce((previousValue, currentValue) => previousValue + currentValue, initialValue);

console.log(sumWithInitial);
// expected output: 10
```

## Default function parameters allow named parameters to be initialized with default values if no value or undefined is passed.

```js
function greet(name, greeting, message = `${greeting} ${name}`) {
  return [name, greeting, message];
}

greet('David', 'Hi'); // ["David", "Hi", "Hi David"]
greet('David', 'Hi', 'Happy Birthday!'); // ["David", "Hi", "Happy Birthday!"]
```

# SPREAD

Spread syntax `(...)` allows an iterable, such as an array or string, to be expanded in places where zero or more arguments (for function calls) or elements (for array literals) are expected. In an object literal, the spread syntax enumerates the properties of an object and adds the key-value pairs to the object being created.

Spread syntax looks exactly like rest syntax. In a way, spread syntax is the opposite of rest syntax. Spread syntax "expands" an array into its elements, while rest syntax collects multiple elements and "condenses" them into a single element. See rest parameters and rest property.
Spread syntax can be used when all elements from an object or array need to be included in a new array or object, or should be applied one-by-one in a function call's arguments list. There are three distinct places that accept the spread syntax:

# Spread in function calls!!!

```js
function myFunction(x, y, z) {}
const args = [0, 1, 2];
myFunction(...args);
```

# Spread in array literals

A more powerful array literal
Without spread syntax, to create a new array using an existing array as one part of it, the array literal syntax is no longer sufficient and imperative code must be used instead using a combination of `push()`, `splice()`, `concat()`, etc. With spread syntax this becomes much more succinct:

```js
const parts = ['shoulders', 'knees'];
const lyrics = ['head', ...parts, 'and', 'toes'];
//  ["head", "shoulders", "knees", "and", "toes"]
```

Just like spread for argument lists, `...` can be used anywhere in the array literal, and may be used more than once.

## Copy an array

```js
const arr = [1, 2, 3];
const arr2 = [...arr]; // like arr.slice()

arr2.push(4);
//  arr2 becomes [1, 2, 3, 4]
//  arr remains unaffected
```

# Spread in object literals

Shallow-cloning (excluding prototype) or merging of objects is possible using a shorter syntax than `Object.assign()`.

```js
const obj1 = { foo: 'bar', x: 42 };
const obj2 = { foo: 'baz', y: 13 };

const clonedObj = { ...obj1 };
// Object { foo: "bar", x: 42 }

const mergedObj = { ...obj1, ...obj2 };
// Object { foo: "baz", x: 42, y: 13 }
```

# Rest parameters

The rest parameter syntax allows a function to accept an indefinite number of arguments as an array, providing a way to represent variadic functions in JavaScript.

```js
function sum(...theArgs) {
  let total = 0;
  for (const arg of theArgs) {
    total += arg;
  }
  return total;
}

console.log(sum(1, 2, 3));
// expected output: 6

console.log(sum(1, 2, 3, 4));
// expected output: 10
```

## Description

A function definition's last parameter can be prefixed with `...` (three U+002E FULL STOP characters), which will cause all remaining (user supplied) parameters to be placed within a standard JavaScript array. Only the last parameter in a function definition can be a rest parameter.

```js
function myFun(a, b, ...manyMoreArgs) {
  console.log('a', a);
  console.log('b', b);
  console.log('manyMoreArgs', manyMoreArgs);
}

myFun('one', 'two', 'three', 'four', 'five', 'six');

// Console Output:
// a, one
// b, two
// manyMoreArgs, ["three", "four", "five", "six"]
```

Quick reference
A function definition can have only one `...`restParam.

```js

foo(...one, ...wrong, ...wrong)
The rest parameter must be the last parameter in the function definition.

foo(...wrong, arg2, arg3)
foo(arg1, arg2, ...correct)
```

The difference between rest parameters and the arguments object
There are three main differences between rest parameters and the arguments object:

- The arguments object is not a real array, while rest parameters are Array instances, meaning methods like `sort()`, `map()`, `forEach()` or `pop()` can be applied on it directly.
- The arguments object has additional functionality specific to itself (like the callee property).
- The `...`restParam bundles all the extra parameters into a single array, therefore it does not contain any named argument defined before the `...`restParam. Whereas the arguments object contains all of the parameters — including the parameters in the `...`restParam array — bundled into one array-like object.
  From arguments to an array
  Rest parameters were introduced to reduce the boilerplate code that was commonly used for converting a set of arguments to an array.

Before rest parameters, arguments need to be converted to a normal array before calling array methods on them:

```js
function fn(a, b) {
  const normalArray = Array.prototype.slice.call(arguments);
  // — or —
  const normalArray2 = [].slice.call(arguments);
  // — or —
  const normalArrayFrom = Array.from(arguments);

  const first = normalArray.shift(); // OK, gives the first argument
  const firstBad = arguments.shift(); // ERROR (arguments is not a normal array)
}
```

Now, you can easily gain access to a normal array using a rest parameter:

```js
function fn(...args) {
  const normalArray = args;
  const first = normalArray.shift(); // OK, gives the first argument
}
```

Examples
Using rest parameters
In this example, the first argument is mapped to a and the second to b, so these named arguments are used as normal.

However, the third argument, manyMoreArgs, will be an array that contains the third, fourth, fifth, sixth, …, nth — as many arguments that the user includes.

```js
function myFun(a, b, ...manyMoreArgs) {
  console.log('a', a);
  console.log('b', b);
  console.log('manyMoreArgs', manyMoreArgs);
}

myFun('one', 'two', 'three', 'four', 'five', 'six');

// a, "one"
// b, "two"
// manyMoreArgs, ["three", "four", "five", "six"] <-- notice it's an array
```

Below, the third argument isn't provided, but manyMoreArgs is still an array (albeit an empty one).

```js
// using the same function definition from example above

myFun('one', 'two');

// a, "one"
// b, "two"
// manyMoreArgs, [] <-- yip, still an array
```

Argument length
Since theArgs is an array, a count of its elements is given by the length property.

```js
function fun1(...theArgs) {
  console.log(theArgs.length);
}

fun1(); // 0
fun1(5); // 1
fun1(5, 6, 7); // 3
```

Using rest parameters in combination with ordinary parameters
In the next example, a rest parameter is used to collect all parameters after the first parameter into an array. Each one of the parameter values collected into the array is then multiplied by the first parameter, and the array is returned:

```js
function multiply(multiplier, ...theArgs) {
  return theArgs.map(element => multiplier * element);
}

const arr = multiply(2, 15, 25, 42);
console.log(arr); // [30, 50, 84]
```

Rest parameters are real arrays; the arguments object is not
Array methods can be used on rest parameters, but not on the arguments object:

```js
function sortRestArgs(...theArgs) {
  const sortedArgs = theArgs.sort();
  return sortedArgs;
}

console.log(sortRestArgs(5, 3, 7, 1)); // 1, 3, 5, 7

function sortArguments() {
  const sortedArgs = arguments.sort();
  return sortedArgs; // this will never happen
}

console.log(sortArguments(5, 3, 7, 1));
// throws a TypeError (arguments.sort is not a function)
```

To use Array methods on the arguments object, it must be converted to a real array first.

```js
function sortArguments() {
  const args = Array.from(arguments);
  const sortedArgs = args.sort();
  return sortedArgs;
}
console.log(sortArguments(5, 3, 7, 1)); // 1, 3, 5, 7
```

```js
function raceResult(gold, silver, ...everyoneElse) {
  console.log('Gold medal goes to: ${gold}');
  console.log('Silver medal goes to: ${silver}');
  console.log('And thanks to everyone else: ${everyoneElse}');
}
return raceResults('Tamy', 'Tod', 'Nina', 'Regina', 'Tomas');
```

# DESTRUCTURING

```js
const [, secondElement] = [1, 2, 3]; // 2

//Can be also used with a DEFAULT value:
const { name: newNameVar, position, age = 55 } = user;
```

## Destructuring assignment

The destructuring assignment syntax is a JavaScript expression that makes it possible to unpack values from arrays, or properties from objects, into distinct variables.

```js
let a, b, rest;
[a, b] = [10, 20];

console.log(a);
// expected output: 10

console.log(b);
// expected output: 20

[a, b, ...rest] = [10, 20, 30, 40, 50];

console.log(rest);
// expected output: Array [30,40,50]
```

## Syntax

```js
const [a, b] = array;
const [a, , b] = array;
const [a = aDefault, b] = array;
const [a, b, ...rest] = array;
const [a, , b, ...rest] = array;
const [a, b, ...{ pop, push }] = array;
const [a, b, ...[c, d]] = array;

const { a, b } = obj;
const { a: a1, b: b1 } = obj;
const { a: a1 = aDefault, b = bDefault } = obj;
const { a, b, ...rest } = obj;
const { a: a1, b: b1, ...rest } = obj;
const { [key]: a } = obj;

let a, b, a1, b1, c, d, rest, pop, push;
[a, b] = array;
[a, , b] = array;
[a = aDefault, b] = array;
[a, b, ...rest] = array;
[a, , b, ...rest] = array;
[a, b, ...{ pop, push }] = array;
[a, b, ...[c, d]] = array;

({ a, b } = obj); // brackets are required
({ a: a1, b: b1 } = obj);
({ a: a1 = aDefault, b = bDefault } = obj);
({ a, b, ...rest } = obj);
({ a: a1, b: b1, ...rest } = obj);
```

## Description

The object and array literal expressions provide an easy way to create ad hoc packages of data.

```js
const x = [1, 2, 3, 4, 5];
```

The destructuring assignment uses similar syntax, but on the left-hand side of the assignment to define what values to unpack from the sourced variable.

```js
const x = [1, 2, 3, 4, 5];
const [y, z] = x;
console.log(y); // 1
console.log(z); // 2
```

## Default value

Each destructured property can have a default value. The default value is used when the property is not present, or has value undefined. It is not used if the property has value null.

```js
const [a = 1] = []; // a is 1
const { b = 2 } = { b: undefined }; // b is 2
const { c = 2 } = { c: null }; // c is null
```

The default value can be any expression. It will only be evaluated when necessary.

```js
const { b = console.log('hey') } = { b: 2 };
// Does not log anything, because `b` is defined and there's no need
// to evaluate the default value.
```

## Array destructuring

```js
const foo = ['one', 'two', 'three'];

const [red, yellow, green] = foo;
console.log(red); // "one"
console.log(yellow); // "two"
console.log(green); // "three"
```

Destructuring with more elements than the source
In an array destructuring from an array of length N specified on the right-hand side of the assignment, if the number of variables specified on the left-hand side of the assignment is greater than N, only the first N variables are assigned values. The values of the remaining variables will be undefined.

```js
const foo = ['one', 'two'];

const [red, yellow, green, blue] = foo;
console.log(red); // "one"
console.log(yellow); // "two"
console.log(green); // undefined
console.log(blue); //undefined
```

## Object destructuring

```js
const user = {
  id: 42,
  isVerified: true
};

const { id, isVerified } = user;

console.log(id); // 42
console.log(isVerified); // true
```

Assigning to new variable names
A property can be unpacked from an object and assigned to a variable with a different name than the object property.

```js
const o = { p: 42, q: true };
const { p: foo, q: bar } = o;

console.log(foo); // 42
console.log(bar); // true
```

Here, for example, const { p: foo } = o takes from the object o the property named p and assigns it to a local variable named foo.

Assigning to new variable names and providing default values
A property can be both

Unpacked from an object and assigned to a variable with a different name.
Assigned a default value in case the unpacked value is undefined.

```js
const { a: aa = 10, b: bb = 5 } = { a: 3 };

console.log(aa); // 3
console.log(bb); // 5
```

Unpacking properties from objects passed as a function parameter
Objects passed into function parameters can also be unpacked into variables, which may then be accessed within the function body. As for object assignment, the destructuring syntax allows for the new variable to have the same name or a different name than the original property, and to assign default values for the case when the original object does not define the property.

Consider this object, which contains information about a user.

```js
const user = {
  id: 42,
  displayName: 'jdoe',
  fullName: {
    firstName: 'John',
    lastName: 'Doe'
  }
};
```

Here we show how to unpack a property of the passed object into a variable with the same name. The parameter value { id } indicates that the id property of the object passed to the function should be unpacked into a variable with the same name, which can then be used within the function.

```js
function userId({ id }) {
  return id;
}

console.log(userId(user)); // 42
```

EXECUTION CONTEXT & CALL STACK
Every JS code runs in an environment called Execution Context.

By default every code is in the Global (Default) Execution Context (GEC)
Inside GEC all code that is not wrapped in a function gets executed
A new function gets its new Execution Context
Call Stack - a collection of all Execution Contexts, where they pile up for each function call and are removed when the function returns. At the bottom is the GEC.

Execution Context Object contains 3 properties:
Variable Object - contains function arguments, inner variable declarations, function declarations
Scope chain - contains the current variable objects, as well as variable objects of all its parents
this keyword/variable - a var that each execution context gets

Execution Context Object PHASES:
Creation phase:
creation of the variable object
the arguments object is created, containing all the arguments passed to the function
next is HOISTING:
code is scanned for function declarations and for each one, a property is created in the variable object, pointing to its function, sofunctions are made available before the execution phase starts
code is scanned for variable declarations and for each a property is created in the variable object and set to undefined, and will be defined in the execution phase
creation of the scope chain
determine the value of the this variable
Execution phase - the code of the function that was generated by the current execution context is ran line by line

Scoping
Scope - space/environment where a certain variable is declared and can be accessed

Lexical Scoping - scoping is controlled by the placement of functions and blocks in the code

Global scope - outside of any function or block. Variables declared in it are global
Function / Local scope - each function creates a scope and the variables declared there are only accessible in it
Block scope - from ES6, blocks `{...}` create a scope also
`let` and `const` variables (block scoped), declared in a Block scope, are accessible only inside it
vars (function scoped) though are scoped to the current Function or Global scope
in strict mode all functions are block scoped too

Scope Chain
Variable Lookup - if a variable can't be found in the current scope, the JS engine starts looking for it in the parent scope, then its parent scope, and so on (up in the Scope Chain).

this keyword
in a regular function call: points to the global window object
in a method (fn attached to an object) call:
regular function - points to the object that is calling the method
arrow function - points to the upper context
In a Method Owner -> Object(Which invoked method)
Alone -> Global Object
In a function (Default Mode) -> Global Object
In a function (Strict Mode) -> undefined
In an event -> the target of the event

```js
const obj1 = {
  a: 1,
  b: this.a,
  f1() { console.log(this.a, obj1.a, this.b, this) } // 1 1 undefined {...obj1}
  f2: function() {
    console.log(this) // { ...obj1 }

    function f() { console.log(this) } // function declaration
    f() // it's a regular fn call => Window

    const fn = function() {} // function expression
  },
  f3: () => { console.log(this) }, // Window
}

// method borrowing:
var obj2 = { a: 2 }
obj2.f1 = obj1.f1
obj2.f1() // 2 1 undefined {..obj2s}
```

this is not assigned a value until the function where it is defined is called
A `constructor` is a fn that allows us to create a blueprint, based on which we can create instances using the new keyword. In the `constructor` the this keyword refers to the newly created object.

```js
// construction function should start with a capital letter
const SomeConstructorFn = function (firstProp, secondProp) {
  this.firstProp = firstProp
  this.secondProp = secondProp
}

const obj1 = new SomeConstructorFn('first', 2) // => obj1 { firstProp: "first", secondProp: 2 }
eyeballing this

```

# Primitive and reference types

```js
// these are primitive types too:
typeof undefined; // undefined
typeof null; // object (NB! should be checked with `someVar === null` instead)

typeof someFunction; // function

typeof someArray; // object
typeof someObject instanceof // object
  // BETTER:
  Array instanceof // true
  Object instanceof // true
  Function; // true
// since all the reference types are children of Object, hence Array/Function instanceof Object -> true
```

De-referencing an object - when we remove all pointers to a memory allocated space for an object, then the JS engine will clean it from the memory (garbage collect). This can be done by `obj1 = null`.

Wrapper types for primitive values - JS uses them to allow us to call methods on them like `someString.substring()`. Adds the wrapper when it notices the method call and destroys it immediately, that's why someString instanceof `String === false`

# Equality (===)

== - converts the type of the right part to the left and then compares

=== compares the value and the type

# VARS

- let, const -> scoped in the current context (block-scoped variables), unlike var
- var variables can be redeclared multiple times without causing an error, unlike let and const; they have global and function scopes

# FUNCTIONS

There are 2 ways to define them:

- declaration - `function a() {...}` -> hoisting (js engine pushes it to the top of the scope)
- expression - `const a = function() {...}` -> no hoisting because the js engine doesn't know the name of the function ahead of time
  > arguments - stores all passed params even if they are not declared

> someFunction.length - returns the number of named params

- call() - someFunc.call(objectToPassToThis, ...arguments), no params -> passes the global scope to this. Allows a function to be defined outside of the objects that will invoke it
- apply() - someFunc.call(objectToPassToThis, [...arguments]) - same as call but the only difference is that it accepts an array of arguments instead of passing them one by one
- bind() - const boundFn = fn.bind(obj1, ...args) - returns a function in which this = obj1; args could also be passed to the boundFn

# ARROW FUNCTIONS

anonymous function assigned to a variable

They don't have their own context (this points to the upper enclosing context).
A function becomes a part of the global window context, so with an arrow function this points to it.

Arrow functions handle this in a different way from regular functions:

- Arrow function - this represents the object that defined the arrow function.
- In regular functions this keyword represented the object that called the function (the executer), which could be the window, the document, or whatever.

In short , in arrow function this represents the definition context while in regular function this represents the execution context.

```js
const obj = {
  props: ['prop1', 'prop2'],

  printProps: function () {
    console.log(this); // this -> obj (since the function is part of the object)

    setTimeout(function () {
      console.log(this); // this -> window
    }, 1000);

    setTimeout(() => console.log(this), 2000); // this -> obj
  },

  printPropsA: () => {
    console.log(this); // this -> window

    setTimeout(function () {
      console.log(this); // this -> window
    }, 1000);

    setTimeout(() => console.log(this), 2000); // this -> window
  }
};
```

> Arrow functions CANNOT be used as constructors : This is because of how Arrow Functions use the this keyword. JS will simply throw an error if it sees an arrow function being invoked as a "constructor".

```js
function personCreator(name) {
  this.name = name;
}
const person1 = new personCreator('John'); // personCreator {name: 'John'}
```

The new keyword do some of its magic and makes the this keyword that is inside of personCreator to be initially an empty object instead of referencing the global object. After that, a new property called name is created inside that empty this object, and its value will be 'John'. At the end, the this object is returned.

As we see, the new keyword changed the value of this from referencing the global object to now be an empty object {}.

Arrow functions do not allow their this object to be modified. Their this object is always locked to the value of the this of the scope where they were statically created. This is called Static Lexical Scope. That is why you cannot do operations like bind, apply, or call with arrow functions.

A lexical scope is just the area where a function is created.

- this keywords specifics from above
- Also no arguments keyword
- No new keyword

Arrow functions don't have their own this or arguments binding. Instead, those identifiers are resolved in the lexical scope like any other variable. That means that inside an arrow function, this and arguments refer to the values of this and arguments in the environment the arrow function is defined

# REGULAR (R) VS ARROW (A) FUNCTIONS

- this and arguments:

  - no this and arguments binding in A - they are resolved in the lexical scope like any other variable (the env in which the A is defined). No matter how or where being executed, this value inside of an arrow function always equals this value from the outer function.
  - this in R:
    - during a simple invocation the value of this equals to the global object (or undefined if the function runs in strict mode)
    - during a method invocation the value of this is the object owning the method
    - during an indirect invocation using myFunc.call(thisVal, arg1, ..., argN) or myFunc.apply(thisVal, [arg1, ..., argN]) the value of this equals to the first argument
    - during a constructor invocation using new keyword this equals to the newly created instance

- R are constructible and they can be called with the new keyword
- no duplicate params in A, while R allow it if not in strict mode
  https://dmitripavlutin.com/differences-between-arrow-and-regular-functions/

https://stackoverflow.com/questions/34361379/are-arrow-functions-and-functions-equivalent-interchangeable

# OBJECTS

> obj1.hasOwnProperty('prop1') method - check if a property is present and not inherited

> delete obj.prop - removes a property from an object; if no more references to the same property are held, it is eventually released automatically. returns true for all cases except when the property is an own non-configurable property, in which case, false is returned in non-strict mode

> obj1.propertyIsEnumerable('prop1')- not all props are enumerable (get cycled in loops), can be checked with this method

## Accessors

```js
var a = {
  _name: 'one',
  _second: 'once',
  set name(value) {
    this._name = value;
  },
  get name() {
    return this._name;
  }
};

console.log(a.second); // undefined
console.log(a._name); // one
console.log(a.name); // one
a.name = 'two';
console.log(a.name); // two
```

> If only a getter is defined, then the prop will be read-only.

# DOM (DOCUMENT OBJECT MODEL)

## Document.getElementById()

The Document method getElementById() returns an Element object representing the element whose id property matches the specified string. Since element IDs are required to be unique if specified, they're a useful way to get access to a specific element quickly.

If you need to get access to an element which doesn't have an ID, you can use querySelector() to find the element using any selector.

## Syntax

```js
getElementById(id);
```

## Parameters

The ID of the element to locate. The ID is case-sensitive string which is unique within the document; only one element may have any given ID.

Return value
An Element object describing the DOM element object matching the specified ID, or null if no matching element was found in the document.

Examples

## HTML

```html
<html lang="en">
  <head>
    <title>getElementById example</title>
  </head>
  <body>
    <p id="para">Some text here</p>
    <button onclick="changeColor('blue');">blue</button>
    <button onclick="changeColor('red');">red</button>
  </body>
</html>
```

## JAVASCRIPT

```js
function changeColor(newColor) {
  const elem = document.getElementById('para');
  elem.style.color = newColor;
}
```

Usage notes
The capitalization of "Id" in the name of this method must be correct for the code to function; `getElementByID()` is not valid and will not work, however natural it may seem.

Unlike some other element-lookup methods such as `Document.querySelector()` and Document.`querySelectorAll()`, `getElementById()` is only available as a method of the global document object, and not available as a method on all element objects in the DOM. Because ID values must be unique throughout the entire document, there is no need for "local" versions of the function.

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unicorn</title>
  </head>
  <body>
    <h1 id="mainheading">I &hearts; unicorns</h1>
    <img src="https://devsprouthosting.com/images/unicorn.jpg" id="unicorn" alt="unicorn" />
  </body>
</html>
```

```js
const image = document.getElementById('unicorn');
const heading = document.getElementById('mainheading');
```

# Document.getElementsByTagName()

The getElementsByTagName method of Document interface returns an HTMLCollection of elements with the given tag name.

The complete document is searched, including the root node. The returned HTMLCollection is live, meaning that it updates itself automatically to stay in sync with the DOM tree without having to call document.getElementsByTagName() again.

## Syntax

```js
getElementsByTagName(name);
```

## Parameters

```js
name;
```

A string representing the name of the elements. The special string \* represents all elements.

Return value
A live HTMLCollection of found elements in the order they appear in the tree.

> Note: The latest W3C specification says returned value is an HTMLCollection; however, this method returns a NodeList in WebKit browsers. See bug 14869 for details.

## Examples

In the following example, `getElementsByTagName()` starts from a particular parent element and searches top-down recursively through the DOM from that parent element, building a collection of all descendant elements which match the tag name parameter. This demonstrates both document.`getElementsByTagName()` and the functionally identical Element.`getElementsByTagName()`, which starts the search at a specific element within the DOM tree.

Clicking the buttons uses `getElementsByTagName()` to count the descendant paragraph elements of a particular parent (either the document itself or one of two nested `<div>` elements).

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>getElementsByTagName example</title>
    <script>
      function getAllParaElems() {
        const allParas = document.getElementsByTagName('p');
        const num = allParas.length;
        alert(`There are ${num} paragraph in this document`);
      }

      function div1ParaElems() {
        const div1 = document.getElementById('div1');
        const div1Paras = div1.getElementsByTagName('p');
        const num = div1Paras.length;
        alert(`There are ${num} paragraph in #div1`);
      }

      function div2ParaElems() {
        const div2 = document.getElementById('div2');
        const div2Paras = div2.getElementsByTagName('p');
        const num = div2Paras.length;
        alert(`There are ${num} paragraph in #div2`);
      }
    </script>
  </head>
  <body style="border: solid green 3px">
    <p>Some outer text</p>
    <p>Some outer text</p>

    <div id="div1" style="border: solid blue 3px">
      <p>Some div1 text</p>
      <p>Some div1 text</p>
      <p>Some div1 text</p>

      <div id="div2" style="border: solid red 3px">
        <p>Some div2 text</p>
        <p>Some div2 text</p>
      </div>
    </div>

    <p>Some outer text</p>
    <p>Some outer text</p>

    <button onclick="getAllParaElems();">Show all p elements in document</button><br />

    <button onclick="div1ParaElems();">Show all p elements in div1 element</button><br />

    <button onclick="div2ParaElems();">Show all p elements in div2 element</button>
  </body>
</html>
```

## Notes

> When called on an HTML document, `getElementsByTagName()` lower-cases its argument before proceeding. This is undesirable when trying to match camelCase SVG elements in a subtree in an HTML document. document.`getElementsByTagNameNS()` is useful in that case. See also bug 499656.

> ` document.getElementsByTagName()` is similar to `Element.getElementsByTagName()`, except that its search encompasses the whole document.

<hr>

# Document.getElementsByClassName()

The `getElementsByClassName` method of Document interface returns an array-like object of all child elements which have all of the given class name(s).

When called on the document object, the complete document is searched, including the root node. You may also call `getElementsByClassName()` on any element; it will return only elements which are descendants of the specified root element with the given class name(s).

> Warning: This is a live HTMLCollection. Changes in the DOM will reflect in the array as the changes occur. If an element selected by this array no longer qualifies for the selector, it will automatically be removed. Be aware of this for iteration purposes.

## Syntax

```js
getElementsByClassName(names);
```

## Parameters

### names

A string representing the class name(s) to match; multiple class names are separated by whitespace.

Return value
A live HTMLCollection of found elements.

Examples

Get all elements that have a class of 'test':

```js
document.getElementsByClassName('test');
```

Get all elements that have both the 'red' and 'test' classes:

```js
document.getElementsByClassName('red test');
```

Get all elements that have a class of 'test', inside of an element that has the ID of 'main':

```js
document.getElementById('main').getElementsByClassName('test');
```

Get the first element with a class of 'test', or undefined if there is no matching element:

```js
document.getElementsByClassName('test')[0];
```

We can also use methods of Array.prototype on any HTMLCollection by passing the HTMLCollection as the method's this value. Here we'll find all div elements that have a class of 'test':

```js
const testElements = document.getElementsByClassName('test');
const testDivs = Array.prototype.filter.call(testElements, testElement => testElement.nodeName === 'DIV');
```

Get the first element whose class is 'test'
This is the most commonly used method of operation.

```html
<html lang="en">
  <body>
    <div id="parent-id">
      <p>hello world 1</p>
      <p class="test">hello world 2</p>
      <p>hello world 3</p>
      <p>hello world 4</p>
    </div>

    <script>
      const parentDOM = document.getElementById('parent-id');

      const test = parentDOM.getElementsByClassName('test'); // a list of matching elements, *not* the element itself
      console.log(test); // HTMLCollection[1]

      const testTarget = parentDOM.getElementsByClassName('test')[0]; // the first element, as we wanted
      console.log(testTarget); // <p class="test">hello world 2</p>
    </script>
  </body>
</html>
```

## Multiple Classes Example

document.getElementsByClassName works very similarly to document.querySelector and document.querySelectorAll. Only elements with ALL of the classNames specified are selected.

## HTML

```html
<span class="orange fruit">Orange Fruit</span>
<span class="orange juice">Orange Juice</span>
<span class="apple juice">Apple Juice</span>
<span class="foo bar">Something Random</span>
<textarea id="resultArea" style="width:98%;height:7em"></textarea>
```

## JAVASCRIPT

```js
// getElementsByClassName only selects elements that have both given classes
const allOrangeJuiceByClass = document.getElementsByClassName('orange juice');
let result = "document.getElementsByClassName('orange juice')";
for (let i = 0; i < allOrangeJuiceByClass.length; i++) {
  result += `\n  ${allOrangeJuiceByClass[i].textContent}`;
}

// querySelector only selects full complete matches
const allOrangeJuiceQuery = document.querySelectorAll('.orange.juice');
result += "\n\ndocument.querySelectorAll('.orange.juice')";
for (let i = 0; i < allOrangeJuiceQuery.length; i++) {
  result += `\n  ${allOrangeJuiceQuery[i].textContent}`;
}

document.getElementById('resultArea').value = result;
```

# Document.querySelector()

The Document method querySelector() returns the first Element within the document that matches the specified selector, or group of selectors. If no matches are found, null is returned.

> Note: The matching is done using depth-first pre-order traversal of the document's nodes starting with the first element in the document's markup and iterating through sequential nodes by order of the number of child nodes.

## Syntax

```js
querySelector(selectors);
```

## Parameters

selectors
A string containing one or more selectors to match. This string must be a valid CSS selector string; if it isn't, a SyntaxError exception is thrown. See Locating DOM elements using selectors for more about selectors and how to manage them.

> Note: Characters that are not part of standard CSS syntax must be escaped using a backslash character. Since JavaScript also uses backslash escaping, be especially careful when writing string literals using these characters. See Escaping special characters for more information.

## Return value

An Element object representing the first element in the document that matches the specified set of CSS selectors, or null is returned if there are no matches.

If you need a list of all elements matching the specified selectors, you should use querySelectorAll() instead.

Exceptions
SyntaxError DOMException
Thrown if the syntax of the specified selectors is invalid.

Usage notes
If the specified selector matches an ID that is incorrectly used more than once in the document, the first element with that ID is returned.

CSS pseudo-elements will never return any elements, as specified in the Selectors API.

Escaping special characters
To match against an ID or selectors that do not follow standard CSS syntax (by using a colon or space inappropriately, for example), you must escape the character with a backslash ("\"). As the backslash is also an escape character in JavaScript, if you are entering a literal string, you must escape it twice (once for the JavaScript string, and another time for querySelector()):

```js
<div id="foo\bar"></div>
<div id="foo:bar"></div>

<script>
  console.log("#foo\bar"); // "#fooar" (\b is the backspace control character)
  document.querySelector("#foo\bar"); // Does not match anything

  console.log("#foo\\bar"); // "#foo\bar"
  console.log("#foo\\\\bar"); // "#foo\\bar"
  document.querySelector("#foo\\\\bar"); // Match the first div

  document.querySelector("#foo:bar"); // Does not match anything
  document.querySelector("#foo\\:bar"); // Match the second div
</script>
```

## Examples

Finding the first element matching a class
In this example, the first element in the document with the class "myclass" is returned:

```js
const el = document.querySelector('.myclass');
```

Complex selectors
Selectors can also be really powerful, as demonstrated in the following example. Here, the first <input> element with the name "login" (<input name="login"/>) located inside a <div> whose class is "user-panel main" (<div class="user-panel main">) in the document is returned:

```js
const el = document.querySelector("div.user-panel.main input[name='login']");
```

Negation
As all CSS selector strings are valid, you can also negate selectors:

```js
const el = document.querySelector("div.user-panel:not(.main) input[name='login']");
```

This will select an input with a parent div with the user-panel class but not the main class.

# Document.querySelectorAll()

The Document method querySelectorAll() returns a static (not live) NodeList representing a list of the document's elements that match the specified group of selectors.

## Syntax

```js
querySelectorAll(selectors);
```

## Parameters

selectors
A string containing one or more selectors to match against. This string must be a valid CSS selector string; if it's not, a SyntaxError exception is thrown. See Locating DOM elements using selectors for more information about using selectors to identify elements. Multiple selectors may be specified by separating them using commas.

> Note: Characters which are not part of standard CSS syntax must be escaped using a backslash character. Since JavaScript also uses backslash escaping, special care must be taken when writing string literals using these characters. See Escaping special characters for more information.

## Return value

A non-live NodeList containing one Element object for each element that matches at least one of the specified selectors or an empty NodeList in case of no matches.

> Note: If the specified selectors include a CSS pseudo-element, the returned list is always empty.

## Examples

Obtaining a list of matches
To obtain a NodeList of all of the `<p> `elements in the document:

```js
const matches = document.querySelectorAll('p');
```

This example returns a list of all `<div>` elements within the document with a class of either note or alert:

Here, we get a list of `<p>` elements whose immediate parent element is a `<div>` with the class highlighted and which are located inside a container whose ID is test.

```js
const container = document.querySelector('#test');
const matches = container.querySelectorAll('div.highlighted > p');
```

This example uses an attribute selector to return a list of the `<iframe>` elements in the document that contain an attribute named data-src:

```js
const matches = document.querySelectorAll('iframe[data-src]');
```

Here, an attribute selector is used to return a list of the list items contained within a list whose ID is userlist which have a data-active attribute whose value is 1:

```js
const container = document.querySelector('#userlist');
const matches = container.querySelectorAll("li[data-active='1']");
```

## Accessing the matches

Once the NodeList of matching elements is returned, you can examine it just like any array. If the array is empty (that is, its length property is 0), then no matches were found.

Otherwise, you can use standard array notation to access the contents of the list. You can use any common looping statement, such as:

```js
const highlightedItems = userList.querySelectorAll('.highlighted');

highlightedItems.forEach(userItem => {
  deleteUser(userItem);
});
```

## User notes

`querySelectorAll()` behaves differently than most common JavaScript DOM libraries, which might lead to unexpected results.

## HTML

```html
<div class="outer">
  <div class="select">
    <div class="inner"></div>
  </div>
</div>
```

## JAVASCRIPT

```js
const select = document.querySelector('.select');
const inner = select.querySelectorAll('.outer .inner');
inner.length; // 1, not 0!
```

In this example, when selecting .outer .inner in the context of the `<div>` with the class select, the element with the class .inner is still found, even though .outer is not a descendant of the base element on which the search is performed (.select). By default, `querySelectorAll()` only verifies that the last element in the selector is within the search scope.
The :scope pseudo-class restores the expected behavior, only matching selectors on descendants of the base element:

```js
const select = document.querySelector('.select');
const inner = select.querySelectorAll(':scope .outer .inner');
inner.length; // 0
```

querySelector Practice
I've provided you with some simple markup in index.html. Your task is to use `querySelector` and `querySelectorAll` to select some of those elements.

Select all elements that have the class of "done" and save them in a variable called doneTodos.

Select the one checkbox and save it in a variable called checkbox. Be careful, there is more than one input element on the page! You'll need to select using the type attribute. (if you can't remember the css attribute selector...google it! That's what I would do!)

Write your code in `app.js`. Please do not change any of the elements in index.html

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Todos</title>
  </head>

  <body>
    <h1>Garden Todos</h1>
    <input type="text" placeholder="New Todo" />
    <ul>
      <li>Start Seedlings</li>
      <li class="done">Deadhead Zinnias</li>
      <li class="done">Water Tomatoes</li>
      <li class="done">Harvest Potatoes</li>
      <li>Prune Roses</li>
    </ul>
    <label>Delete All</label>
    <input type="checkbox" id="scales" name="scales" checked />
  </body>
</html>
```

```js
const doneTodos = document.querySelectorAll('.done');
const checkbox = document.querySelector('input[type=checkbox]');
```

# HTMLElement.innerText

The innerText property of the HTMLElement interface represents the rendered text content of a node and its descendants.

As a getter, it approximates the text the user would get if they highlighted the contents of the element with the cursor and then copied it to the clipboard. As a setter this will replace the element's children with the given value, converting any line breaks into `<br>` elements.

> Note: innerText is easily confused with Node.textContent, but there are important differences between the two. Basically, innerText is aware of the rendered appearance of text, while textContent is not.

## Value

A string representing the rendered text content of an element.

If the element itself is not being rendered (for example, is detached from the document or is hidden from view), the returned value is the same as the Node.textContent property.

> Warning: Setting innerText on a node removes all of the node's children and replaces them with a single text node with the given string value.

## Examples

This example compares `innerText` with `Node`.textContent. Note how `innerText` is aware of things like `<br>` elements, and ignores hidden elements.

## HTML

```html
<h3>Source element:</h3>
<p id="source">
  <style>
    #source {
      color: red;
    }
    #text {
      text-transform: uppercase;
    }
  </style>
  <span id="text">
    Take a look at<br />
    how this text<br />
    is interpreted below.
  </span>
  <span style="display:none">HIDDEN TEXT</span>
</p>
<h3>Result of textContent:</h3>
<textarea id="textContentOutput" rows="6" cols="30" readonly>…</textarea>
<h3>Result of innerText:</h3>
<textarea id="innerTextOutput" rows="6" cols="30" readonly>…</textarea>
```

## JavaScript

```js
const source = document.getElementById('source');
const textContentOutput = document.getElementById('textContentOutput');
const innerTextOutput = document.getElementById('innerTextOutput');

textContentOutput.value = source.textContent;
innerTextOutput.value = source.innerText;
```

Manipulating Attributes Practice
Let's get some practice working with DOM element attributes. I've provided you with some very basic markup. Please select the image element and:

change its source to this url: https://devsprouthosting.com/images/chicken.jpg

change its alt text to be "chicken"

```html
<!--DONT CHANGE ANYTHING IN THIS FILE, PLEASE!-->
Egg and Chicken

<h4>Which Came First?</h4>
<img src="https://devsprouthosting.com/images/egg.jpg" width="200px" />
<!-- image source: unsplash.com -->
```

```js
// The url you need: 'https://devsprouthosting.com/images/chicken.jpg'
document.querySelector('img').src = 'https://devsprouthosting.com/images/chicken.jpg';
document.querySelector('img').alt = 'chicken';
```

# Window.getComputedStyle()

The `Window.getComputedStyle()` method returns an object containing the values of all CSS properties of an element, after applying active stylesheets and resolving any basic computation those values may contain.

Individual CSS property values are accessed through APIs provided by the object, or by indexing with CSS property names.

## Syntax

```js
getComputedStyle(element);
getComputedStyle(element, pseudoElt);
```

## Parameters

### element

The `Element` for which to get the computed style.

Magical Forest Circle Exercise
I've provided you with some basic markup in index.html. Please do not change any of the markup directly. Instead, use JavaScript to make the following changes:

Select the div with the id of container. Using JavaScript, set it's text alignment to 'center';

Select the image and use JavaScript to give it a width of 150px and a border radius of 50%

Remember to use camelCased property names in JavaScript! (backgroundColor, not background-color, etc.)

```html
<!DOCTYPE html>

<head>
    <title>Forest</title>
    <!--LEAVE THESE LINES ALONE, PLEASE! THEY MAKE THE LIVE PREVIEW WORK!-->
    <script src="node_modules/babel-polyfill/dist/polyfill.js" type="text/javascript"> </script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

</head>

<body>
   <div id="container">
        <h1>I &hearts; Trees</h1>
        <img src="https://images.unsplash.com/photo-1596328546171-77e37b5e8b3d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="">
    </div>
</body>

</html>
```

```js
const container = document.querySelector('#container');

container.style.textAlign = 'center';

const img = document.querySelector('img');
img.style.width = '150px';
img.style.borderRadius = '50%';
```

# Exercise

I've provided you with an <h1> element which contains 7 individual spans (each holding a single letter).

Please write some JavaScript to make them rainbow-colored!

In app.js you'll find an array of color names called colors. It looks like: ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'].

Your task is to select all spans, iterate over them, and assign them each one of the colors from the colors array. The first span should be red, the second should be orange, etc. Your result should look like this:

```html
<!DOCTYPE html>

<head>
    <title>Rainbow</title>
    <!--LEAVE THESE LINES ALONE, PLEASE! THEY MAKE THE LIVE PREVIEW WORK!-->
    <script src="node_modules/babel-polyfill/dist/polyfill.js" type="text/javascript"> </script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

</head>

<body>
    <!--DON'T TOUCH THIS FILE PLEASE!-->
    <h1>
        <span>R</span>
        <span>A</span>
        <span>I</span>
        <span>N</span>
        <span>B</span>
        <span>O</span>
        <span>W</span>
    </h1>
</body>

</html>
```

```js
const colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet']; //PLEASE DON'T CHANGE THIS LINE!

const spans = document.querySelectorAll('h1 span');

//  Solution 1

Array.from(spans).forEach((span, index) => {
  span.style.color = colors[index];
});
//Solution 2

let i = 0;
for (const span of spans) {
  span.style.color = colors[i];
  i++;
}

//Solution 3
for (let i = 0; i < spans.length; i++) {
  spans[i].style.color = colors[i];
}
```

## Exercise

ClassList Practice
In index.html, you'll find 6 <li> elements, two of which have the 'highlight' class applied to them.

Please use JavaScript and the classList property to invert which elements have the highlight class.

Basically iterate over all the <li> elements and toggle the class of 'highlight' on each one. Your end result should look like this:

Please don't touch the markup in index.html! Do this all via JavaScript!

```html
<!DOCTYPE html>

<head>
    <title>ClasList</title>
    <!--LEAVE THESE LINES ALONE, PLEASE! THEY MAKE THE LIVE PREVIEW WORK!-->
    <script src="node_modules/babel-polyfill/dist/polyfill.js" type="text/javascript"> </script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

</head>

<body>
    <!--LEAVE THIS FILE ALONE!-->
    <ul>
        <li>Hello</li>
        <li class="highlight">Hello</li>
        <li>Hello</li>
        <li>Hello</li>
        <li class="highlight">Hello</li>
        <li>Hello</li>
    </ul>
</body>

</html>
```

```css
li {
  background-color: #b10dc9;
}

.highlight {
  background-color: #7fdbff;
}
```

```js
const list = document.querySelectorAll('li');

// Solution 1

for (let i = 0; i < list.lenght; i++) {
  list[i].classList.toggle('highlight');
}

// Solution 2
Array.from(list).forEach(li => {
  li.classList.toggle('highlight');
});
```

# Element.insertAdjacentElement()

The insertAdjacentElement() method of the Element interface inserts a given element node at a given position relative to the element it is invoked upon.

# Syntax

```js
insertAdjacentElement(position, element);
```

# Parameters

position

A string representing the position relative to the targetElement; must match (case-insensitively) one of the following strings:

- `beforebegin`: Before the targetElement itself.
- `afterbegin`: Just inside the targetElement, before its first child.
- `beforeend`: Just inside the targetElement, after its last child.
- `afterend`: After the targetElement itself.
  element
  The element to be inserted into the tree.

## Return value

The element that was inserted, or null, if the insertion failed.

## Examples

```js
beforeBtn.addEventListener('click', () => {
  const tempDiv = document.createElement('div');
  tempDiv.style.backgroundColor = randomColor();
  if (activeElem) {
    activeElem.insertAdjacentElement('beforebegin', tempDiv);
  }
  setListener(tempDiv);
});

afterBtn.addEventListener('click', () => {
  const tempDiv = document.createElement('div');
  tempDiv.style.backgroundColor = randomColor();
  if (activeElem) {
    activeElem.insertAdjacentElement('afterend', tempDiv);
  }
  setListener(tempDiv);
});
```

# Element.insertAdjacentElement()

The `insertAdjacentElement()` method of the Element interface inserts a given element node at a given position relative to the element it is invoked upon.

## Syntax

```js
insertAdjacentElement(position, element);
```

- В квадратни скоби търси `таг`!
- Без нищо `атрубут`!
- С точка `клас`!
- Решетка `id`!

# 100 Button Insanity Exercise

Without touching index.html, please use JavaScript to create exactly 100 new button elements! Add each new button inside the container element provided in index.html. Unfortunately, Udemy's exercise tool does not support to the append method, so you will need to use appendChild. Here are the steps:

Create exactly 100 new button elements

Each button must have some text inside of it (it doesn't matter what)

Each button must be appended inside the container div.

```html
<!DOCTYPE html>

<head>
    <title>100 Buttons!</title>
</head>

<body>
    <!--DO NOT TOUCH THIS FILE PLEASE!-->
    <h1>Look At All My Buttons!</h1>
    <div id="container">

    </div>
</body>

</html>
```

```js
const containerEl = document.querySelector('#container');

for (let i = 0; i < 100; i++) {
  const button = document.createElement('button');
  button.innerText = 'Monika';
  containerEl.appendChild(button);
}
```

# Know Thy Enemy Exercise

In this exercise, I'm asking you to write some inline event handlers WHICH IS NOT SOMETHING I RECOMMEND, but hopefully it will illustrate to you just how annoying it can be. In index.html, you'll find an `<h1>` element and a `<button>`. Please add two inline click handlers directly in the html:

When the h1 is clicked, you should print\* "boo"

When the button is clicked, you should print "clicked"

- "print" = console.log('something here');

```html
<!DOCTYPE html>

<head>
    <title>Inline Events</title>
    <!--LEAVE THESE LINES ALONE, PLEASE! THEY MAKE THE LIVE PREVIEW WORK!-->
    <script src="node_modules/babel-polyfill/dist/polyfill.js" type="text/javascript"> </script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

</head>

<body>
    <h1 onclick="console.log('boo')">Inline Events Suck...</h1>
    <button onclick="console.log('clicked')"id="btn">Click Me</button>
</body>

</html>
```

# Click Events Exercise

Let's get some practice using addEventListener. I've provided you with two buttons, each with an id: 'hello' and 'goodbye'. Your goal is to add a click listener to each button.

When the hello button is clicked, you should console.log "hello"

When the goodbye button is clicked, you should console.log "goodbye"

Make sure to use addEventListener!

```html
<!DOCTYPE html>

<head>
    <title>ClasList</title>
    <!--LEAVE THESE LINES ALONE, PLEASE! THEY MAKE THE LIVE PREVIEW WORK!-->
    <script src="node_modules/babel-polyfill/dist/polyfill.js" type="text/javascript"> </script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

</head>

<body>
    <h1>Click These Buttons</h1>
    <p>And Prepare To Have Your Mind Blown</p>
    <button id="hello">Hello</button>
    <button id="goodbye">Goodbye</button>
</body>

</html>
```

```js
const myHelloBtn = document.querySelector('#hello');
const myGoodbyeBtn = document.querySelector('#goodbye');

myHelloBtn.addEventListener('click', function () {
  console.log('hello');
});

myGoodbyeBtn.addEventListener('click', function () {
  console.log('goodbye');
});
```

# Event.preventDefault()

The `preventDefault()` method of the Event interface tells the user agent that if the event does not get explicitly handled, its default action should not be taken as it normally would be.

The event continues to propagate as usual, unless one of its event listeners calls `stopPropagation()` or `stopImmediatePropagation()`, either of which terminates propagation at once.

As noted below, calling `preventDefault()` for a non-cancelable event, such as one dispatched via `EventTarget.dispatchEvent()`, without specifying cancelable: true has no effect.

## Syntax

```js
event.preventDefault();
```

```html
<!DOCTYPE html>
<html>
  <body>
    <a id="myAnchor" href="https://w3schools.com/">Go to W3Schools.com</a>

    <p>The preventDefault() method will prevent the link above from following the URL.</p>

    <script>
      document.getElementById('myAnchor').addEventListener('click', function (event) {
        event.preventDefault();
      });
    </script>
  </body>
</html>
```

### Example 1

The following code stops a checkbox from executing its default action by using the preventDefault() method.

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>event.preventDefault()</title>
  </head>
  <body>
    <label>A developer?</label>
    <br />
    <input type="checkbox" id="prevent" />Yes

    <script>
      document.getElementById('prevent').addEventListener('click', event => {
        event.preventDefault();
      });
    </script>
  </body>
</html>
```

> Some event actions cannot be prevented using the event.preventDefault(). In order to check if an event can be prevented, you can check its event.cancelable property. This property can either be false or true.

## Example 2

The oninput event on an input element is not cancelable. Therefore, it will still allow a user to input strings of characters. Take a look at the example below. There will be an alert when you input your texts, and you will still be able to input more because the oninput event action is not cancelable.

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>event.preventDefault()</title>
  </head>
  <body>
    <label>Enter any text</label>
    <br />
    <input type="input" id="prevent" />

    <script>
      document.getElementById('prevent').addEventListener('input', e => {
        if (event.cancelable) {
          alert('oninput event is cancelable!');
        } else {
          alert('oninput event is not cancelable!\nSo you can still type!');
        }
      });
    </script>
  </body>
</html>
```

Several events can be fired when we access a website. These events could be a button click, filling out a form and submitting it, closing a tab, clicking a checkbox, or scrolling a page. All of these are events.

In JavaScript, these events’ actions can be canceled. Yes, they can be kept from executing the default action that is associated with it. This is done using the `preventDefault()` method of an event. The `preventDefault()` method of an event is used to stop a cancelable event from executing.

```html
<!DOCTYPE html>

<head>
    <title>Grocery List</title>
    <!--LEAVE THESE LINES ALONE, PLEASE! THEY MAKE THE LIVE PREVIEW WORK!-->
    <script src="node_modules/babel-polyfill/dist/polyfill.js" type="text/javascript"> </script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

</head>

<body>
    <h1>Grocery List</h1>
    <form action="/nowhere">
        <label for="item">Enter A Product</label>
        <input type="text" id="product" name="product">
        <label for="item">Enter A Quantity</label>
        <input type="number" id="qty" name="qty">
        <button>Submit</button>
    </form>

    <ul id="list"></ul>
</body>

</html>
```

```js
// Leave the next' line, the form must be assigned to a variable named 'form' in order for the exercise test to pass
const form = document.querySelector('form');
const product = document.querySelector('#product');
const qty = document.querySelector('#qty');
const list = document.querySelector('#list');

form.addEventListener('submit', function (grocery) {
  grocery.preventDefault();

  const productName = product.value;
  const size = qty.value;
  const data = `You Bought ${product.value}  ${qty.value} times.`;
  const newLi = document.createElement('li');

  newLi.innerText = data;
  list.appendChild(newLi);

  product.value = '';
  qty.value = '';
});
```

### INPUT EVENT

```html
<!DOCTYPE html>

<head>
    <title>Input Event</title>
    <!--LEAVE THESE LINES ALONE, PLEASE! THEY MAKE THE LIVE PREVIEW WORK!-->
    <script src="node_modules/babel-polyfill/dist/polyfill.js" type="text/javascript"> </script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

</head>

<body>
    <h1>Enter Your Username</h1>
    <input type="text" id="username">
</body>

</html>
```

```js
const input = document.querySelector('input');

input.addEventListener('input', e => {
  const h1 = document.querySelector('h1');

  //   h1.innerText = `Welcome, ${e.target.value}`

  //   if (e.target.value.length === 0) {
  //     h1.innerText = 'Enter Your Username'
  //   }

  const { value } = e.target;

  h1.innerText = value.length === 0 ? 'Enter Your Username' : `Welcome, ${e.target.value}`;
});
// ? = if!
//  : = else!
```

# HTTP response status codes

HTTP response status codes indicate whether a specific HTTP request has been successfully completed. Responses are grouped in five classes:

1. Informational responses (100 – 199)
2. Successful responses (200 – 299)
3. Redirection messages (300 – 399)
4. Client error responses (400 – 499)
5. Server error responses (500 – 599)

> Note: If you receive a response that is not in this list, it is a non-standard response, possibly custom to the server's software.

## Information responses

- 100 Continue

This interim response indicates that the client should continue the request or ignore the response if the request is already finished.

- 101 Switching Protocols

This code is sent in response to an Upgrade request header from the client and indicates the protocol the server is switching to.

- 102 Processing (WebDAV)

This status code is primarily intended to be used with the Link header, letting the user agent start preloading resources while the server prepares a response.

## Successful responses

- 200 OK

The request succeeded. The result meaning of "success" depends on the HTTP method:

- - GET: The resource has been fetched and transmitted in the message body.

- - HEAD: The representation headers are included in the response without any message body.
- - PUT or POST: The resource describing the result of the action is transmitted in the message body.
- - TRACE: The message body contains the request message as received by the server.

- 201 Created

The request succeeded, and a new resource was created as a result. This is typically the response sent after POST requests, or some PUT requests.

- 202 Accepted

The request has been received but not yet acted upon. It is noncommittal, since there is no way in HTTP to later send an asynchronous response indicating the outcome of the request. It is intended for cases where another process or server handles the request, or for batch processing.

- 203 Non-Authoritative Information

This response code means the returned metadata is not exactly the same as is available from the origin server, but is collected from a local or a third-party copy. This is mostly used for mirrors or backups of another resource. Except for that specific case, the 200 OK response is preferred to this status.

- 204 No Content

There is no content to send for this request, but the headers may be useful. The user agent may update its cached headers for this resource with the new ones.

- 205 Reset Content
  Tells the user agent to reset the document which sent this request.

- 206 Partial Content
  This response code is used when the Range header is sent from the client to request only part of a resource.

- 207 Multi-Status (WebDAV)
  Conveys information about multiple resources, for situations where multiple status codes might be appropriate.

- 208 Already Reported (WebDAV)
  Used inside a <dav:propstat> response element to avoid repeatedly enumerating the internal members of multiple bindings to the same collection.

- 226 IM Used (HTTP Delta encoding)
  The server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.

## Redirection messages

- 300 Multiple Choices
  The request has more than one possible response. The user agent or user should choose one of them. (There is no standardized way of choosing one of the responses, but HTML links to the possibilities are recommended so the user can pick.)

- 301 Moved Permanently
  The URL of the requested resource has been changed permanently. The new URL is given in the response.

- 302 Found
  This response code means that the URI of requested resource has been changed temporarily. Further changes in the URI might be made in the future. Therefore, this same URI should be used by the client in future requests.

- 303 See Other
  The server sent this response to direct the client to get the requested resource at another URI with a GET request.

- 304 Not Modified
  This is used for caching purposes. It tells the client that the response has not been modified, so the client can continue to use the same cached version of the response.

- 305 Use Proxy Deprecated
  Defined in a previous version of the HTTP specification to indicate that a requested response must be accessed by a proxy. It has been deprecated due to security concerns regarding in-band configuration of a proxy.

- 306 unused
  This response code is no longer used; it is just reserved. It was used in a previous version of the HTTP/1.1 specification.

- 307 Temporary Redirect
  The server sends this response to direct the client to get the requested resource at another URI with same method that was used in the prior request. This has the same semantics as the 302 Found HTTP response code, with the exception that the user agent must not change the HTTP method used: if a POST was used in the first request, a POST must be used in the second request.

- 308 Permanent Redirect
  This means that the resource is now permanently located at another URI, specified by the Location: HTTP Response header. This has the same semantics as the 301 Moved Permanently HTTP response code, with the exception that the user agent must not change the HTTP method used: if a POST was used in the first request, a POST must be used in the second request.

## Client error responses

- 400 Bad Request
  The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing).

- 401 Unauthorized
  Although the HTTP standard specifies "unauthorized", semantically this response means "unauthenticated". That is, the client must authenticate itself to get the requested response.

- 402 Payment Required Experimental
  This response code is reserved for future use. The initial aim for creating this code was using it for digital payment systems, however this status code is used very rarely and no standard convention exists.

- 403 Forbidden
  The client does not have access rights to the content; that is, it is unauthorized, so the server is refusing to give the requested resource. Unlike 401 Unauthorized, the client's identity is known to the server.

- 404 Not Found
  The server cannot find the requested resource. In the browser, this means the URL is not recognized. In an API, this can also mean that the endpoint is valid but the resource itself does not exist. Servers may also send this response instead of 403 Forbidden to hide the existence of a resource from an unauthorized client. This response code is probably the most well known due to its frequent occurrence on the web.

- 405 Method Not Allowed
  The request method is known by the server but is not supported by the target resource. For example, an API may not allow calling DELETE to remove a resource.

- 406 Not Acceptable
  This response is sent when the web server, after performing server-driven content negotiation, doesn't find any content that conforms to the criteria given by the user agent.

- 407 Proxy Authentication Required
  This is similar to 401 Unauthorized but authentication is needed to be done by a proxy.

- 408 Request Timeout
  This response is sent on an idle connection by some servers, even without any previous request by the client. It means that the server would like to shut down this unused connection. This response is used much more since some browsers, like Chrome, Firefox 27+, or IE9, use HTTP pre-connection mechanisms to speed up surfing. Also note that some servers merely shut down the connection without sending this message.

- 409 Conflict
  This response is sent when a request conflicts with the current state of the server.

- 410 Gone
  This response is sent when the requested content has been permanently deleted from server, with no forwarding address. Clients are expected to remove their caches and links to the resource. The HTTP specification intends this status code to be used for "limited-time, promotional services". APIs should not feel compelled to indicate resources that have been deleted with this status code.

- 411 Length Required
  Server rejected the request because the Content-Length header field is not defined and the server requires it.

- 412 Precondition Failed
  The client has indicated preconditions in its headers which the server does not meet.

- 413 Payload Too Large
  Request entity is larger than limits defined by server. The server might close the connection or return an Retry-After header field.

- 414 URI Too Long
  The URI requested by the client is longer than the server is willing to interpret.

- 415 Unsupported Media Type
  The media format of the requested data is not supported by the server, so the server is rejecting the request.

- 416 Range Not Satisfiable
  The range specified by the Range header field in the request cannot be fulfilled. It's possible that the range is outside the size of the target URI's data.

- 417 Expectation Failed
  This response code means the expectation indicated by the Expect request header field cannot be met by the server.

- 418 I'm a teapot
  The server refuses the attempt to brew coffee with a teapot.

- 421 Misdirected Request
  The request was directed at a server that is not able to produce a response. This can be sent by a server that is not configured to produce responses for the combination of scheme and authority that are included in the request URI.

- 422 Unprocessable Entity (WebDAV)
  The request was well-formed but was unable to be followed due to semantic errors.

- 423 Locked (WebDAV)
  The resource that is being accessed is locked.

- 424 Failed Dependency (WebDAV)
  The request failed due to failure of a previous request.

- 425 Too Early Experimental
  Indicates that the server is unwilling to risk processing a request that might be replayed.

- 426 Upgrade Required
  The server refuses to perform the request using the current protocol but might be willing to do so after the client upgrades to a different protocol. The server sends an Upgrade header in a 426 response to indicate the required protocol(s).

- 428 Precondition Required
  The origin server requires the request to be conditional. This response is intended to prevent the 'lost update' problem, where a client GETs a resource's state, modifies it and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict.

- 429 Too Many Requests
  The user has sent too many requests in a given amount of time ("rate limiting").

- 431 Request Header Fields Too Large
  The server is unwilling to process the request because its header fields are too large. The request may be resubmitted after reducing the size of the request header fields.

- 451 Unavailable For Legal Reasons
  The user agent requested a resource that cannot legally be provided, such as a web page censored by a government.

## Server error responses

- 500 Internal Server Error
  The server has encountered a situation it does not know how to handle.

- 501 Not Implemented
  The request method is not supported by the server and cannot be handled. The only methods that servers are required to support (and therefore that must not return this code) are GET and HEAD.

- 502 Bad Gateway
  This error response means that the server, while working as a gateway to get a response needed to handle the request, got an invalid response.

- 503 Service Unavailable
  The server is not ready to handle the request. Common causes are a server that is down for maintenance or that is overloaded. Note that together with this response, a user-friendly page explaining the problem should be sent. This response should be used for temporary conditions and the Retry-After HTTP header should, if possible, contain the estimated time before the recovery of the service. The webmaster must also take care about the caching-related headers that are sent along with this response, as these temporary condition responses should usually not be cached.

- 504 Gateway Timeout
  This error response is given when the server is acting as a gateway and cannot get a response in time.

- 505 HTTP Version Not Supported
  The HTTP version used in the request is not supported by the server.

- 506 Variant Also Negotiates
  The server has an internal configuration error: the chosen variant resource is configured to engage in transparent content negotiation itself, and is therefore not a proper end point in the negotiation process.

- 507 Insufficient Storage (WebDAV)
  The method could not be performed on the resource because the server is unable to store the representation needed to successfully complete the request.

- 508 Loop Detected (WebDAV)
  The server detected an infinite loop while processing the request.

- 510 Not Extended
  Further extensions to the request are required for the server to fulfill it.

- 511 Network Authentication Required
  Indicates that the client needs to authenticate to gain network access.

# Game Score Keeper

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Score Keeper</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" />
  </head>

  <body>
    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column is-half is-offset-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure class="image is-2by1">
                  <img src="pingpong.jpg" alt="" />
                </figure>
              </div>

              <header class="card-header">
                <p class="card-header-title">Ping Pong Score Keeper</p>
                <button class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
              </header>

              <div class="card-content">
                <h1 class="title is-1"><span id="p1Display">0</span> to <span id="p2Display">0</span></h1>
                <p class="subtitle">Use the buttons below to keep score</p>
                <label to="playto" class="label is-large is-inline">Playing To</label>
                <div class="select is-rounded">
                  <select name="" id="playTo">
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                  </select>
                </div>
              </div>
              <footer class="card-footer">
                <button id="p1Button" class="is-primary button card-footer-item is-large">+1 Player One</button>
                <button id="p2Button" class="is-info button card-footer-item is-large">+1 Player Two</button>
                <button id="reset" class="is-danger button card-footer-item is-large">Reset</button>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="app.js"></script>
  </body>
</html>
```

```js
const p1Button = document.querySelector('#p1Button');
const p2Button = document.querySelector('#p2Button');
const resetButton = document.querySelector('#reset');
const p1Display = document.querySelector('#p1Display');
const p2Display = document.querySelector('#p2Display');
const winningScoreSelect = document.querySelector('#playTo');

let p1Score = 0;
let p2Score = 0;
let winningScore = 3;
let isGameOver = false;

p1Button.addEventListener('click', function () {
  if (!isGameOver) {
    p1Score += 1;
    if (p1Score === winningScore) {
      isGameOver = true;

      p1Display.classList.add('has-text-success');
      p2Display.classList.add('has-text-danger');
      p1Button.disabled = true;
      p2Button.disabled = true;
    }
    p1Display.textContent = p1Score;
  }
});

p2Button.addEventListener('click', function () {
  if (!isGameOver) {
    p2Score += 1;
    if (p2Score === winningScore) {
      isGameOver = true;
      p2Display.classList.add('has-text-success');
      p1Display.classList.add('has-text-danger');
      p1Button.disabled = true;
      p2Button.disabled = true;
    }
    p2Display.textContent = p2Score;
  }
});

winningScoreSelect.addEventListener('change', function () {
  winningScore = parseInt(this.value);
  reset();
});

resetButton.addEventListener('click', reset);

function reset() {
  isGameOver = false;
  p1Score = 0;
  p2Score = 0;
  p1Display.textContent = 0;
  p2Display.textContent = 0;
  p1Display.classList.remove('has-text-success', 'has-text-danger');
  p2Display.classList.remove('has-text-success', 'has-text-danger');
  p1Button.disabled = false;
  p2Button.disabled = false;
}
```

# ASYNC JS

## An async function is a function declared with the async keyword, and the await keyword is permitted within it. The async and await keywords enable asynchronous, promise-based behavior to be written in a cleaner style, avoiding the need to explicitly configure promise chains.

Promise
The `Promise` object represents the eventual completion (or failure) of an asynchronous operation and its resulting value.

To learn about the way promises work and how you can use them, we advise you to read Using promises first.

Description
A `Promise` is a proxy for a value not necessarily known when the promise is created. It allows you to associate handlers with an asynchronous action's eventual success value or failure reason. This lets asynchronous methods return values like synchronous methods: instead of immediately returning the final value, the asynchronous method returns a promise to supply the value at some point in the future.

A `Promise` is in one of these states:

`pending`: initial state, neither fulfilled nor rejected.
`fulfilled`: meaning that the operation was completed successfully.
`rejected`: meaning that the operation failed.

The eventual state of a pending promise can either be fulfilled with a value or rejected with a reason (error). When either of these options occur, the associated handlers queued up by a promise's then method are called. If the promise has already been fulfilled or rejected when a corresponding handler is attached, the handler will be called, so there is no race condition between an asynchronous operation completing and its handlers being attached.

A `promise` is said to be settled if it is either fulfilled or rejected, but not pending.

Chained Promises
The methods `Promise.prototype.then()`, `Promise.prototype.catch()`, and `Promise.prototype.finally()` are used to associate further action with a promise that becomes settled. As these methods return promises, they can be chained.

The `.then()` method takes up to two arguments; the first argument is a callback function for the fulfilled case of the promise, and the second argument is a callback function for the rejected case. Each `.then()` returns a newly generated promise object, which can optionally be used for chaining; for example:

```js
const myPromise = new Promise((resolve, reject) => {
  setTimeout(() => {
    resolve('foo');
  }, 300);
});

myPromise
  .then(handleFulfilledA, handleRejectedA)
  .then(handleFulfilledB, handleRejectedB)
  .then(handleFulfilledC, handleRejectedC);
```

Processing continues to the next link of the chain even when a `.then()` lacks a callback function that returns a Promise object. Therefore, a chain can safely omit every rejection callback function until the final `.catch()`.

Handling a rejected promise in each `.then()` has consequences further down the promise chain. Sometimes there is no choice, because an error must be handled immediately. In such cases we must throw an error of some type to maintain error state down the chain. On the other hand, in the absence of an immediate need, it is simpler to leave out error handling until a final `.catch()` statement. A `.catch()` is really just a `.then()` without a slot for a callback function for the case when the promise is fulfilled.

```js
myPromise.then(handleFulfilledA).then(handleFulfilledB).then(handleFulfilledC).catch(handleRejectedAny);
```

Using arrow functions for the callback functions, implementation of the promise chain might look something like this:

```js
myPromise
  .then(value => `${value} and bar`)
  .then(value => `${value} and bar again`)
  .then(value => `${value} and again`)
  .then(value => `${value} and again`)
  .then(value => {
    console.log(value);
  })
  .catch(err => {
    console.error(err);
  });
```

> Note: For faster execution, all synchronous actions should preferably be done within one handler, otherwise it would take several ticks to execute all handlers in sequence.

`Promise.prototype.catch()`
Appends a rejection handler callback to the promise, and returns a new promise resolving to the return value of the callback if it is called, or to its original fulfillment value if the promise is instead fulfilled.

`Promise.prototype.then()`
Appends fulfillment and rejection handlers to the promise, and returns a new promise resolving to the return value of the called handler, or to its original settled value if the promise was not handled (i.e. if the relevant handler onFulfilled or onRejected is not a function).

`Promise.prototype.finally()`
Appends a handler to the promise, and returns a new promise that is resolved when the original promise is resolved. The handler is called when the promise is settled, whether fulfilled or rejected.

Constructor
`Promise()`
Creates a new Promise object. The constructor is primarily used to wrap functions that do not already support promises.

Static methods
`Promise.all()`
Wait for all promises to be fulfilled, or for any to be rejected.

If the returned promise fulfills, it is fulfilled with an aggregating array of the values from the fulfilled promises, in the same order as defined in the iterable of multiple promises.

If it rejects, it is rejected with the reason from the first promise in the iterable that was rejected.

`Promise.allSettled()`
Wait until all promises have settled (each may fulfill or reject).

Returns a Promise that fulfills after all of the given promises is either fulfilled or rejected, with an array of objects that each describe the outcome of each promise.

`Promise.any()`
Takes an iterable of Promise objects and, as soon as one of the promises in the iterable fulfills, returns a single promise that fulfills with the value from that promise.

`Promise.race()`
Wait until any of the promises is fulfilled or rejected.

If the returned promise fulfills, it is fulfilled with the value of the first promise in the iterable that fulfilled.

If it rejects, it is rejected with the reason from the first promise that was rejected.

`Promise.reject()`
Returns a new Promise object that is rejected with the given reason.

`Promise.resolve()`
Returns a new Promise object that is resolved with the given value. If the value is a thenable (i.e. has a then method), the returned promise will "follow" that thenable, adopting its eventual state; otherwise, the returned promise will be fulfilled with the value.

Generally, if you don't know if a value is a promise or not, `Promise.resolve(value)`` it instead and work with the return value as a promise.

# async function

An async function is a function declared with the async keyword, and the await keyword is permitted within it. The async and await keywords enable asynchronous, promise-based behavior to be written in a cleaner style, avoiding the need to explicitly configure promise chains.

"async and await make promises easier to write"

> `async` makes a function return a Promise

> `await` makes a function wait for a Promise

## Async Syntax

The keyword `async` before a function makes the function return a promise:

Example

```js
async function myFunction() {
  return 'Hello';
}
```

Is the same as:

```js
function myFunction() {
  return Promise.resolve('Hello');
}
```

# AWAIT

## Description

Async functions can contain zero or more await expressions. Await expressions make promise-returning functions behave as though they're synchronous by suspending execution until the returned promise is fulfilled or rejected. The resolved value of the promise is treated as the return value of the await expression. Use of async and await enables the use of ordinary try / catch blocks around asynchronous code.

> Note: The await keyword is only valid inside async functions within regular JavaScript code. If you use it outside of an async function's body, you will get a SyntaxError.

await can be used on its own with JavaScript modules.

> Note: The purpose of async/await is to simplify the syntax necessary to consume promise-based APIs. The behavior of async/await is similar to combining generators and promises.

Await Syntax
The await keyword can only be used inside an async function.

The await keyword makes the function pause the execution and wait for a resolved promise before it continues:

```js
let value = await promise;
```

# Web APIs

When writing code for the Web, there are a large number of Web APIs available. Below is a list of all the APIs and interfaces (object types) that you may be able to use while developing your Web app or site.

Web APIs are typically used with JavaScript, although this doesn't always have to be the case.

#JSON

JSON (JavaScript Object Notation) е опростен формат за обмяна на данни, удобен за работа както за хората, така и за компютрите. Той е базиран на едно подмножество на езика за програмиране JavaScript, Standard ECMA-262 3rd Edition - от декември 1999. JSON има текстов формат, напълно независим от реализацията на езика, но използва конвенции, които са познати на програмистите на C-подобни езици, включително C, C++, C#, Java, JavaScript, Perl, Python, и много други. Тези свойства правят JSON идеален език за обмяна на данни.

JSON се състои от две структури:

Колекция от двойки име/стойност. В различните езици, това се реализира като обект, запис, структура, речник, хеш таблица, именован списък, или асоциативен масив.
Подреден списък от стойности. В повечето езици, това се реализира чрез масив, вектор, списък или последователност.
Това са универсални структури от данни, които се поддържат от всички модерни езици под една или друга форма. Може да се предположи, че формат, подходящ за обмяна на данни между езиците за програмиране, също ще бъде базиран на тези структури.

В JSON, това изглежда по следния начин:

Един обект е неподреден набор от двойки име/стойност. Обекта започва с {лява фигурна скоба и завършва с }дясна фигурна скоба. След всяко име се поставя :двуеточие, а двойките име/стойност се разделят със ,запетайка.
Един масив е подредена колекция от стойности. Масивът започва с [лява квадратна скоба и завършва с ]дясна квадратна скоба. Стойностите се разделят чрез ,запетайка.
Една стойност може да бъде стринг в двойни кавички, число, истина (true) или лъжа (false), null, обект или масив. Тези структури могат да бъдат вложени.

Един стринг е колекция от от нула или повече Unicode символи, обграден от двойни кавички, използвайки \обратна наклонена черта като escape символ. Символът се представя чрез низ, съдържащ само един символ. Стрингът е подобен на тези в C или Java.
Между двойките може да бъде вмъквано празно пространство (whitespace). С изключение на някои детайли относно кодирането на символите (encoding), това напълно описва езика.

# ASP QueryString Collection

The QueryString collection is used to retrieve the variable values in the HTTP query string.

The HTTP query string is specified by the values following the question mark (?), like this:

`<a href= "test.asp?txt=this is a query string test">Link with a query string</a>`

The line above generates a variable named txt with the value "this is a query string test".

Query strings are also generated by form submission, or by a user typing a query into the address bar of the browser.

Note: If you want to send large amounts of data (beyond 100 kb) the Request.QueryString cannot be used.

Syntax
`Request.QueryString(variable)[(index)|.Count]`

Parameter Description
variable Required. The name of the variable in the HTTP query string to retrieve
index Optional. Specifies one of multiple values for a variable. From 1 to Request.QueryString(variable).Count
Examples
Example 1
To loop through all the n variable values in a Query String:

The following request is sent:

`https://www.w3schools.com/test/names.asp?n=John&n=Susan`
and names.asp contains the following script:

`<%
for i=1 to Request.QueryString("n").Count
  Response.Write(Request.QueryString("n")(i) & "<br>")
next
%>`
The file names.asp would display the following:

John
Susan
Example 2
The following string might be sent:

`https://www.w3schools.com/test/names.asp?name=John&age=30`
this results in the following QUERY_STRING value:

name=John&age=30
Now we can use the information in a script:

Hi, `<%=Request.QueryString("name")%>`.
Your age is `<%= Request.QueryString("age")%>`.
Output:

Hi, John. Your age is 30.
If you do not specify any variable values to display, like this:

Query string is: `<%=Request.QueryString%>`
the output would look like this:

Query string is: name=John&age=30

# Fetch API

The Fetch API provides an interface for fetching resources (including across the network). It will seem familiar to anyone who has used `XMLHttpRequest`, but the new API provides a more powerful and flexible feature set.

## Concepts and usage

Fetch provides a generic definition of `Request` and `Response` objects (and other things involved with network requests). This will allow them to be used wherever they are needed in the future, whether it's for service workers, Cache API, and other similar things that handle or modify requests and responses, or any kind of use case that might require you to generate your responses programmatically (that is, the use of computer program or personal programming instructions).

It also defines related concepts such as CORS and the HTTP Origin header semantics, supplanting their separate definitions elsewhere.

For making a request and fetching a resource, use the `fetch()` method. It is implemented in multiple interfaces, specifically Window and WorkerGlobalScope. This makes it available in pretty much any context you might want to fetch resources in.

The `fetch()` method takes one mandatory argument, the path to the resource you want to fetch. It returns a Promise that resolves to the Response to that request — as soon as the server responds with headers — even if the server response is an HTTP error status. You can also optionally pass in an init options object as the second argument (see Request).

Once a Response is retrieved, there are a number of methods available to define what the body content is and how it should be handled.

You can create a request and response directly using the `Request()` and `Response()` constructors, but it's uncommon to do this directly. Instead, these are more likely to be created as results of other API actions (for example, FetchEvent.respondWith() from service workers).

Differences from jQuery
The fetch specification differs from `jQuery.ajax()` in three main ways:

The `Promise` returned from `fetch()` won't reject on HTTP error status even if the response is an HTTP 404 or 500. Instead, it will resolve normally (with ok status set to false), and it will only reject on network failure or if anything prevented the request from completing.
`fetch()` won't send cross-origin cookies unless you set the credentials init option (to include).
In April 2018, the spec changed the default credentials policy to 'same-origin'. The following browsers shipped an outdated native fetch, and were updated in these versions: Firefox 61.0b13, Safari 12, Chrome 68.
If you are targeting older versions of these browsers, be sure to include credentials: 'same-origin' init option on all API requests that may be affected by cookies/user login state.
Note: Find out more about using the Fetch API features in Using Fetch, and study concepts in Fetch basic concepts.

Aborting a fetch
To abort incomplete `fetch()`, and even `XMLHttpRequest`, operations, use the AbortController and AbortSignal interfaces.

Fetch Interfaces
`fetch()`
The `fetch()` method used to fetch a resource.

Headers
Represents response/request headers, allowing you to query them and take different actions depending on the results.

Request
Represents a resource request.

Response
Represents the response to a request.

## Using the Fetch API

The Fetch API provides a JavaScript interface for accessing and manipulating parts of the protocol, such as requests and responses. It also provides a global `fetch()` method that provides an easy, logical way to fetch resources asynchronously across the network.

This kind of functionality was previously achieved using `XMLHttpRequest`. Fetch provides a better alternative that can be easily used by other technologies such as Service Workers. Fetch also provides a single logical place to define other HTTP-related concepts such as CORS and extensions to HTTP.

The fetch specification differs from `jQuery.ajax()` in the following significant ways:

The Promise returned from `fetch()` won't reject on HTTP error status even if the response is an HTTP 404 or 500. Instead, as soon as the server responds with headers, the Promise will resolve normally (with the ok property of the response set to false if the response isn't in the range 200–299), and it will only reject on network failure or if anything prevented the request from completing.
Unless `fetch()` is called with the credentials option set to include, `fetch()`:
won't send cookies in cross-origin requests
won't set any cookies sent back in cross-origin responses
As of August 2018, the default credentials policy changed to same-origin. Firefox was also modified in version 61.0b13)
A basic fetch request is really simple to set up. Have a look at the following code:

```js
fetch('http://example.com/movies.json')
  .then(response => response.json())
  .then(data => console.log(data));
```

Here we are fetching a JSON file across the network and printing it to the console. The simplest use of `fetch()` takes one argument — the path to the resource you want to fetch — and does not directly return the JSON response body but instead returns a promise that resolves with a Response object.

The Response object, in turn, does not directly contain the actual JSON response body but is instead a representation of the entire HTTP response. So, to extract the JSON body content from the Response object, we use the `json()` method, which returns a second promise that resolves with the result of parsing the response body text as JSON.

Note: See the Body section for similar methods to extract other types of body content.

Fetch requests are controlled by the connect-src directive of Content Security Policy rather than the directive of the resources it's retrieving.

Supplying request options
The `fetch()` method can optionally accept a second parameter, an init object that allows you to control a number of different settings:

See `fetch()` for the full options available, and more details.

```js
// Example POST method implementation:
async function postData(url = '', data = {}) {
  // Default options are marked with *
  const response = await fetch(url, {
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: {
      'Content-Type': 'application/json'
      // 'Content-Type': 'application/x-www-form-urlencoded',
    },
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: JSON.stringify(data) // body data type must match "Content-Type" header
  });
  return response.json(); // parses JSON response into native JavaScript objects
}

postData('https://example.com/answer', { answer: 42 }).then(data => {
  console.log(data); // JSON data parsed by `data.json()` call
});
```

Note that mode: "no-cors" only allows a limited set of headers in the request:

Accept
Accept-Language
Content-Language
Content-Type with a value of application/x-www-form-urlencoded, multipart/form-data, or text/plain
Sending a request with credentials included
To cause browsers to send a request with credentials included on both same-origin and cross-origin calls, add credentials: 'include' to the init object you pass to the fetch() method.

```js
fetch('https://example.com', {
  credentials: 'include'
});
```

> Note: Access-Control-Allow-Origin is prohibited from using a wildcard for requests with credentials: 'include'. In such cases, the exact origin must be provided; even if you are using a CORS unblocker extension, the requests will still fail.

> Note: Browsers should not send credentials in preflight requests irrespective of this setting. For more information see: CORS > Requests with credentials.

If you only want to send credentials if the request URL is on the same origin as the calling script, add credentials: 'same-origin'.

```js
// The calling script is on the origin 'https://example.com'

fetch('https://example.com', {
  credentials: 'same-origin'
});
To instead ensure browsers don't include credentials in the request, use credentials: 'omit'.

fetch('https://example.com', {
  credentials: 'omit'
})
```

# AXIOS

https://github.com/axios/axios#installing

> Shift + F6 + (Fn) = Rename everywhere in an IDE!
> Ctrl + D = Dublicate ;
> console.table =
> Ctrl + Y = Delete the Row

console.table()
It logs data as a table. Each element in the array (or enumerable property if data is an object) will be a row in the table.

The first column in the table will be labeled (index). If data is an array, then its values will be the array indices. If data is an object, then its values will be the property names. Note that (in Firefox) console.table is limited to displaying 1000 rows (first row is the labeled index).

Note: This feature is available in Web Workers

Collections of primitive types
The data argument may be an array or an object.

// an array of strings

console.table(["apples", "oranges", "bananas"]);s

# PROTOTYPES,CLASSES & OOP

## JavaScript Factory Functions

Summary: in this tutorial, you will learn about the JavaScript factory functions which are functions that return objects.

Introduction to the factory functions in JavaScript
A factory function is a function that returns a new object. The following creates a person object named person1:

```js
let person1 = {
  firstName: 'John',
  lastName: 'Doe',
  getFullName() {
    return this.firstName + ' ' + this.lastName;
  }
};

console.log(person1.getFullName());
```

> Output:

> John Doe

The person1 object has two properties: firstName and lastName, and one method getFullName() that returns the full name.

Suppose that you need to create another similar object called person2, you can duplicate the code as follows:

```js
let person2 = {
  firstName: 'Jane',
  lastName: 'Doe',
  getFullName() {
    return this.firstName + ' ' + this.lastName;
  }
};

console.log(person2.getFullName());
```

Output:

Jane Doe

In this example, the person1 and person2 objects have the same properties and methods.
The problem is that the more objects you want to create, the more duplicate code you have.

To avoid copying the same code all over again, you can define a function that creates the person object:

```js
function createPerson(firstName, lastName) {
  return {
    firstName: firstName,
    lastName: lastName,
    getFullName() {
      return firstName + ' ' + lastName;
    }
  };
}
```

When a function creates and returns a new object, it is called a factory function. The createPerson() is a factory function because it returns a new person object.

The following show how to use the createPerson() factory function to create two objects person1 and person2:

```js
function createPerson(firstName, lastName) {
  return {
    firstName: firstName,
    lastName: lastName,
    getFullName() {
      return firstName + ' ' + lastName;
    }
  };
}

let person1 = createPerson('John', 'Doe');
let person2 = createPerson('Jane', 'Doe');

console.log(person1.getFullName());
console.log(person2.getFullName());
```

By using the factory function, you create any number of the person objects without duplicating code.

When you create an object, the JavaScript engine allocates memory to it. If you create many person objects, the JavaScript engine needs lots of memory spaces to store these objects.

However, each person object has a copy of the same getFullName() method. It’s not efficient memory management.

To avoid duplicating the same getFullName() function in every object, you can remove the getFullName() method from the person object:

```js
function createPerson(firstName, lastName) {
  return {
    firstName: firstName,
    lastName: lastName
  };
}
```

And move this method to another object:

```js
var personActions = {
  getFullName() {
    return this.firstName + ' ' + this.lastName;
  }
};
```

And before calling the getFullName() method on the person object, you can assign the method of the personActions object to the person object as follows:

```js
let person1 = createPerson('John', 'Doe');
let person2 = createPerson('Jane', 'Doe');

person1.getFullName = personActions.getFullName;
person2.getFullName = personActions.getFullName;

console.log(person1.getFullName());
console.log(person2.getFullName());
```

This approach is not scalable if the object has many methods because you have to manually assign them individually. This is why the `Object.create()` method comes into play.

## The Object.create() method

The `Object.create()` method creates a new object using an existing object as the prototype of the new object:

```js
Object.create(proto, [propertiesObject]);
```

So you can use the `Object.create()` as follows:

```js
let person1 = createPerson('John', 'Doe');
let person2 = createPerson('Jane', 'Doe');

console.log(person1.getFullName());
console.log(person2.getFullName());
```

The code works perfectly fine. However, in practice, you will rarely use the factory functions. Instead, you use classes or constructor/prototype patterns.

# CONSTRUCTOR

The constructor method is a special method of a class for creating and initializing an object instance of that class.

> Note: This page introduces the constructor syntax. For the constructor property present on all objects, see Object.prototype.constructor.

## JavaScript Demo: Classes Constructor

```js
class Polygon {
  constructor() {
    this.name = 'Polygon';
  }
}

const poly1 = new Polygon();

console.log(poly1.name);
// expected output: "Polygon"
```

## Syntax

```js

~~~constructor() { /* … */ }
constructor(argument0) { /* … */ }
constructor(argument0, argument1) { /* … */ }
constructor(argument0, argument1, /* … ,*/ argumentN) { /* … */ }
```

## Description

A constructor enables you to provide any custom initialization that must be done before any other methods can be called on an instantiated object.

```js
class Person {
  constructor(name) {
    this.name = name;
  }

  introduce() {
    console.log(`Hello, my name is ${this.name}`);
  }
}

const otto = new Person('Otto');

otto.introduce(); // Hello, my name is Otto
```

```js
constructor() {}
```

If your class is a derived class, the default constructor calls the parent constructor, passing along any arguments that were provided:

```js
constructor(...args) {
  super(...args);
}
```

> Note: The difference between an explicit constructor like the one above and the default constructor is that the latter doesn't actually invoke the array iterator through argument spreading.

That enables code like this to work:

```js
class ValidationError extends Error {
  printCustomerMessage() {
    return `Validation failed :-( (details: ${this.message})`;
  }
}

try {
  throw new ValidationError('Not a valid phone number');
} catch (error) {
  if (error instanceof ValidationError) {
    console.log(error.name); // This is Error instead of ValidationError!
    console.log(error.printCustomerMessage());
  } else {
    console.log('Unknown error', error);
    throw error;
  }
}
```

The ValidationError class doesn't need an explicit constructor, because it doesn't need to do any custom initialization. The default constructor then takes care of initializing the parent Error from the argument it is given.

However, if you provide your own constructor, and your class derives from some parent class, then you must explicitly call the parent class constructor using super(). For example:

```js
class ValidationError extends Error {
  constructor(message) {
    super(message); // call parent class constructor
    this.name = 'ValidationError';
    this.code = '42';
  }

  printCustomerMessage() {
    return `Validation failed :-( (details: ${this.message}, code: ${this.code})`;
  }
}

try {
  throw new ValidationError('Not a valid phone number');
} catch (error) {
  if (error instanceof ValidationError) {
    console.log(error.name); // Now this is ValidationError!
    console.log(error.printCustomerMessage());
  } else {
    console.log('Unknown error', error);
    throw error;
  }
}
```

Using new on a class goes through the following steps:

(If it's a derived class) The constructor body before the `super()` call is evaluated. This part should not access this because it's not yet initialized.
(If it's a derived class) The `super()` call is evaluated, which initializes the parent class through the same process.
The current class's fields are initialized.
The constructor body after the `super()` call (or the entire body, if it's a base class) is evaluated.
Within the constructor body, you can access the object being created through this and access the class that is called with new through new.target. Note that methods (including getters and setters) and the prototype chain are already initialized on this before the constructor is executed, so you can even access methods of the subclass from the constructor of the superclass. However, if those methods use this, the this will not have been fully initialized yet. This means reading public fields of the derived class will result in undefined, while reading private fields will result in a TypeError.

```js
new (class C extends class B {
  constructor() {
    console.log(this.foo());
  }
} {
  #a = 1;
  foo() {
    return this.#a; // TypeError: Cannot read private member #a from an object whose class did not declare it
    // It's not really because the class didn't declare it,
    // but because the private field isn't initialized yet
    // when the superclass constructor is running
  }
})();
```

The constructor method may have a return value. While the base class may return anything from its constructor, the derived class must return an object or undefined, or a TypeError will be thrown.

```js
class ParentClass {
  constructor() {
    return 1;
  }
}

console.log(new ParentClass()); // ParentClass {}
// The return value is ignored because it's not an object
// This is consistent with function constructors

class ChildClass extends ParentClass {
  constructor() {
    return 1;
  }
}

console.log(new ChildClass()); // TypeError: Derived constructors may only return object or undefined
```

If the parent class constructor returns an object, that object will be used as the this value on which class fields of the derived class will be defined. This trick is called "return overriding", which allows a derived class's fields (including private ones) to be defined on unrelated objects.

There can be only one special method with the name constructor in a class. Having more than one occurrence of a constructor method in a class will throw a SyntaxError error. Having a getter or setter called constructor is also a SyntaxError.

The constructor follows normal method syntax, so parameter default values, rest parameters, etc. can all be used.

```js
class Person {
  constructor(name = 'Anonymous') {
    this.name = name;
  }
  introduce() {
    console.log(`Hello, my name is ${this.name}`);
  }
}

const person = new Person();
person.introduce(); // Hello, my name is Anonymous
```

The constructor must be a literal name. Computed properties cannot become constructors.

```js
class Foo {
  // This is a computed property. It will not be picked up as a constructor.
  ['constructor']() {
    console.log('called');
    this.a = 1;
  }
}

const foo = new Foo(); // No log
console.log(foo); // Foo {}
foo.constructor(); // Logs "called"
console.log(foo); // Foo { a: 1 }
```

## Examples

```js
class Square extends Polygon {
  constructor(length) {
    // Here, it calls the parent class' constructor with lengths
    // provided for the Polygon's width and height
    super(length, length);
    // NOTE: In derived classes, `super()` must be called before you
    // can use `this`. Leaving this out will cause a ReferenceError.
    this.name = 'Square';
  }

  get area() {
    return this.height * this.width;
  }

  set area(value) {
    this.height = value ** 0.5;
    this.width = value ** 0.5;
  }
}
```

Calling super in a constructor bound to a different prototype
`super()` calls the constructor that's the prototype of the current class. If you change the prototype of the current class itself, `super()` will call the constructor of the new prototype. Changing the prototype of the current class's prototype property doesn't affect which constructor `super()` calls.

```js
class Polygon {
  constructor() {
    this.name = 'Polygon';
  }
}

class Rectangle {
  constructor() {
    this.name = 'Rectangle';
  }
}

class Square extends Polygon {
  constructor() {
    super();
  }
}

// Make Square extend Rectangle (which is a base class) instead of Polygon
Object.setPrototypeOf(Square, Rectangle);

const newInstance = new Square();

// newInstance is still an instance of Polygon, because we didn't
// change the prototype of Square.prototype, so the prototype chain
// of newInstance is still
//   newInstance --> Square.prototype --> Polygon.prototype
console.log(newInstance instanceof Polygon); // true
console.log(newInstance instanceof Rectangle); // false

// However, because super() calls Rectangle as constructor, the name property
// of newInstance is initialized with the logic in Rectangle
console.log(newInstance.name); // Rectangle
```

# Node JS
