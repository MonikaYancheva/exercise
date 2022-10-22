const input = document.querySelector('input')

input.addEventListener('input', (e) => {
  const h1 = document.querySelector('h1')

  //   h1.innerText = `Welcome, ${e.target.value}`

  //   if (e.target.value.length === 0) {
  //     h1.innerText = 'Enter Your Username'
  //   }

  const {value} = e.target

  h1.innerText = value.length === 0 ? 'Enter Your Username' : `Welcome, ${e.target.value}`
})
