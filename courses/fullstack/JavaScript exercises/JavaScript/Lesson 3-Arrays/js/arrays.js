var myFirstArray = ['Monika', 'Yancheva', 39, 'Shop manger'];

console.log(myFirstArray);
document.write(myFirstArray[0] + '<br/>' + myFirstArray[1] + '<br/>' + myFirstArray[2] + '<br/>' + myFirstArray[3]);

myFirstArray.splice(3, 3, 'true');
console.log(myFirstArray);

document.write(myFirstArray[0] + '<br/>' + myFirstArray[1] + '<br/>' + myFirstArray[2] + '<br/>' + myFirstArray[3]);
