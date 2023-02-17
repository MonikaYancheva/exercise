var x = 0;
var y = 100;

do {
  document.write(x + '<br>');
  x += 3;
} while (x <= 100);

var a = 0;
var b = 1;
var nextTerm = a + b;
var fibonacciArray = [];

do {
  document.write(nextTerm + '<br>');
  a = b;
  b = nextTerm;
  nextTerm = a + b;
} while (nextTerm <= 1000);
