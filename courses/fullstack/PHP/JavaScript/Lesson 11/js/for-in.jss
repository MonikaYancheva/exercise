 var person = {
    firstName: "John",
    lastName: "Doe",
    age: 50,
    eyeColor: "blue",
    hairColor: "black",
    profession: "doctor"
  }
  
  for(key in person){
    var index = Object.keys(person).indexOf(key);
    if(index === 1 || index === 3){
      console.log("Key:", key, ", Value:", person[key]);
    }
  }