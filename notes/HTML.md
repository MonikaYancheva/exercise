# HTML

Таг `main`-по-добре семантично написан код!Веднага след `body`

Стъпка нагоре `sup`  
Стъпка надолу `sub`   

```html
     <h2>I like H<sub>2</sub>O</h2>
    
     <p>
        <sup>1</sup>/<sub>2+</sub>1<sub>/<sub>3</sub>
     </p>

<sup>Hello world!</sup>
<sub>Hello world!</sub>
<main></main>

```
За падащо меню:
<select name="pets" id="pet-select">
<option></option>
Например:
 <p>
    <label for="animal">Please select an animal</label>
        <select name="pets" id="pets">
           <option value="" >Please choose an option</option> 
           <option value="fish" selected>Fish</option>
           <option value="cat">Cat</option>
           <option value="dog">Dog</option>
           <option value="horse">Horse</option>
        </select>
    </p>  



Плъзгач:
```html
<div>
      <input type="range" name="volume" id="volume" min="0" max="11">
      <label for="volume">Volume</label>
    </div>

required = Задължително! За валидиране на форма!

<input type="email" name="email" id="email" placeholder="Email" required /> 
```