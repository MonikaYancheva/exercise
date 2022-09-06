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



hhhhhk
uygjgj
kjhgjhgjh
juy
jghghhg
ghghghg
hjhkhk
jfgfghfghfjhfghfhg
hjgjgjhjjgj

Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
