var myColors,
    myColorsList,
    ul,
    li,
    i,
    Ite

var ul = document.createElement("ul");
document.body.appendChild(ul);
console.log(ul);

myColors = [
    "blue",
    "red",
    "green",
    "yellow",
    "pink"
]


for(i = 0;i < myColors.length; i++) {
    li = document.createElement("li");
    ul.appendChild(li);
    li.innerText = "Item";
    li.style.background = myColors[i];

}