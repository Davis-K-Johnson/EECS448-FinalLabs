function checkForm(ev){

    var rightInput = true;
    if(document.getElementById("username").invalid){
        rightInput = false;
        console.log("username works.");
    }
    if(document.getElementById("password").value == ""){
        rightInput = false;
        console.log("password works.");
    }
    if((document.getElementById("item1").value < 0) || (document.getElementById("item2").value < 0) || (document.getElementById("item3").value < 0)){
        rightInput = false;
        console.log("items work.");
    }

    if(rightInput == false){

        alert("One or more inputs are invalid!");
        ev.preventDefault();
    }
}