var x = 1;
var y = 2;

switch (x) {
  case 0:
    x > 2;
    console.log('numberOne is bigger than numberTwo');
    break;
  case 1:
    x < 2;
    console.log('numberTwo is bigger than numberOne');
    break;

  case 2:
    x == 2;

    console.log('numberTwo is equeal with numberOne');
    break;

  default:
    console.log('Something whent wrong');
}
