Universal selector 
```CSS
* {
   color:black;
}
Element selector

h1,h2 {
  color:black;
}

button {
  color:black;
}

ID Selector

#signup {
  background-color:#847881;
  color:white;
 }
  
Class selector

.done {
  color:grey;
 }

 Descendant Selector

 li a {
  color:aqua;
}

Adjacent Selector

h1 + p {
  color:greeen;
}

h2 + button {
background-color:yellow; 

}

div > li {
  color:white;
}

Attribute Selector
Select all input elements where the type attribute is set to "text"

input [type="text"] {
  width: 300px;
  color:yellow;
 } 

 * <a> elements with a title attribute */
a[title] {
  color: purple;
}
/* <a> elements with an href matching "https://example.org" */
a[href="https://example.org"] {
  color: green;
}

/* <a> elements with an href containing "example" */
a[href*="example"] {
  font-size: 2em;
}

/* <a> elements with an href ending ".org" */
a[href$=".org"] {
  font-style: italic;
}

/* <a> elements whose class attribute contains the word "logo" */
a[class~="logo"] {
  padding: 2px;
}

a {
  color: blue;
}

/* Internal links, beginning with "#" */
a[href^="#"] {
  background-color: gold;
}

/* Links with "example" anywhere in the URL */
a[href*="example"] {
  background-color: silver;
}

/* Links with "insensitive" anywhere in the URL,
   regardless of capitalization */
a[href*="insensitive" i] {
  color: cyan;
}

/* Links with "cAsE" anywhere in the URL,
with matching capitalization */
a[href*="cAsE" s] {
  color: pink;
}

/* Links that end in ".org" */
a[href$=".org"] {
  color: red;
}

/* Links that start with "https" and end in ".org" */
a[href^="https"][href$=".org"] {
  color: green;
}


Pseudo-classes

 button:hover {
  background-color: #E40EB6;
 }

 button:active {
  background-color: blueviolet;
 }

/*Всеки 3-ти*/
 .post:nth-of-type(3n) {
  background-color:orange;
 }

/*Само 3-ти*/
 .post:nth-of-type(3) {
  background-color:orange;
 }

  .square {
  width: 100px;
  height: 100px;
  box-sizing: border-box;
  border: 1px solid black;
}

#board {
  display: flex;
  margin: 0 auto;
  width: 500px;
  flex-wrap: wrap;
}

 .square:nth-child(even) {
  background-color: black;
 }

 .square:nth-child(odd) {
  background-color: red;
 }


Pseudo-elements

Specificity
Id>Class>Element

!important;/*Използавам само в редки случаи!Измества другите селектори при разчитане от браузъра!*/

INHERITANCE!!!
/*Inherited properties
When no value for an inherited property has been specified on an element, the element gets the computed value of that property on its parent element. Only the root element of the document gets the initial value given in the property's summary.*/

/* Keyword values */
border-style: none;
border-style: hidden;
border-style: dotted;
border-style: dashed;
border-style: solid;
border-style: double;
border-style: groove;
border-style: ridge;
border-style: inset;
border-style: outset;

/* top and bottom | left and right */
border-style: dotted solid;

/* top | left and right | bottom */
border-style: hidden double dashed;

/* top | right | bottom | left */
border-style: none solid dotted dashed;

/* Global values */
border-style: inherit;
border-style: initial;
border-style: revert;
border-style: revert-layer;
border-style: unset;

#example1 {
  border-radius: 2em / 5em;
}
/* is equivalent to:
border-top-left-radius: 2em 5em;
border-top-right-radius: 2em 5em;
border-bottom-right-radius: 2em 5em;
border-bottom-left-radius: 2em 5em; */

#example2 {
  border-radius: 2em 1em 4em / 0.5em 3em;
}
/* is equivalent to:
border-top-left-radius: 2em 0.5em;
border-top-right-radius: 1em 3em;
border-bottom-right-radius: 4em 0.5em;
border-bottom-left-radius: 1em 3em; */


ctrl+shift+p За IDE-ТО

block

    The element generates a block element box, generating line breaks both before and after the element when in the normal flow.
inline

    The element generates one or more inline element boxes that do not generate line breaks before or after themselves. In normal flow, the next element will be on the same line if there is space
inline elements-display:block и се държат като блокови такива,можем да използваме margin!!!
inline elements-в редица един до друг
block elements- заемат цялия екран!


<article>/*Изисква използването на h2-h6*/</article>
<section>/*Изисква използването на h2-h6*/</section>


The position Property
The position property specifies the type of positioning method used for an element.

There are five different position values:

static
relative
fixed
absolute
sticky


transition-property

    Specifies the name or names of the CSS properties to which transitions should be applied. Only properties listed here are animated during transitions; changes to all other properties occur instantaneously as usual.
transition-duration

    Specifies the duration over which transitions should occur. You can specify a single duration that applies to all properties during the transition, or multiple values to allow each property to transition over a different period of time.
transition-timing-function

    Specifies a function to define how intermediate values for properties are computed. Timing functions determine how intermediate values of the transition are calculated. Most timing functions can be specified by providing the graph of the corresponding function, as defined by four points defining a cubic bezier. You can also choose easing from Easing Functions Cheat Sheet.
transition-delay

    Defines how long to wait between the time a property is changed and the transition actually begins.

The transition shorthand CSS syntax is written as follows:

div {
    transition: <property> <duration> <timing-function> <delay>;
}

Examples
Simple example

This example performs a four-second font size transition with a two-second delay between the time the user mouses over the element and the beginning of the animation effect:

#delay {
  font-size: 14px;
  transition-property: font-size;
  transition-duration: 4s;
  transition-delay: 2s;
}

#delay:hover {
  font-size: 36px;
}

Multiple animated properties example
CSS Content

.box {
    border-style: solid;
    border-width: 1px;
    display: block;
    width: 100px;
    height: 100px;
    background-color: #0000FF;
    transition: width 2s, height 2s, background-color 2s, transform 2s;
}

.box:hover {
    background-color: #FFCCCC;
    width: 200px;
    height: 200px;
    transform: rotate(180deg);
}

```