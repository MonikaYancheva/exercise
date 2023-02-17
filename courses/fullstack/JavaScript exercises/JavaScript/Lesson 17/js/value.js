function getValueData() {
  var getVal = document.getElementById('first-input').value;
  if (!/[^a-zA-Z]/.test(document.getElementById('first-input').value)) {
    var x = document.getElementById('result');
    alert('Your registration name have accepted');
  } else {
    var x = document.getElementById('result');
    alert('Please input letters only!');
  }

  var getVal2 = document.getElementById('second-input').value;
  if (!/[^a-zA-Z@._]/.test(document.getElementById('second-input').value)) {
    var x = document.getElementById('result');
    alert('Your email have accepted');
  } else {
    var x = document.getElementById('result');
    alert('Please input letters only!');
  }

  var getVal3 = document.getElementById('third-input').value;
  if (!/[^0-9+]/.test(document.getElementById('third-input').value)) {
    var x = document.getElementById('result');
    alert('Your phone number have accepted');
  } else {
    var x = document.getElementById('result');
    alert('Please input numbers only!');
  }
}

getValueData();
