function Validate()
{
    var first = document.getElementById("pwd").value;
    var last = document.getElementById("confirm").value;
    if((first.length() < 8) || (last.length() < 8)){

        alert("Your password must be at least 8 characters.");
    }
    else if(first != last){

        alert("The two fields don't match.");
    }
}