function canDrive() {


    var getAge = prompt("Please enter how old are you?");


    !(getAge < 18) ? "You can drive" : "You can't drive yet"


    var getP = document.getElementById("p-1");
    function changeText() {
        if(getAge < 18) {
            getP.innerText = "You can't drive yet";}

    }

    changeText();
}






canDrive();





canDrive();
