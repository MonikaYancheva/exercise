// Leave the next' line, the form must be assigned to a variable named 'form' in order for the exercise test to pass
const form = document.querySelector('form');
const product = document.querySelector('#product');
const qty = document.querySelector('#qty');
const list = document.querySelector('#list');

form.addEventListener('submit', function (grocery) {
  grocery.preventDefault()

  const productName = product.value
  const size = qty.value
  const data = `You Bought ${product.value}  ${qty.value} times.`
  const newLi = document.createElement('li')
  
  newLi.innerText = data
  list.appendChild(newLi)
  product.value = ''
  qty.value = ''
})