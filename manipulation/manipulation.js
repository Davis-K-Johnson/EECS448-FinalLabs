function Confirm()
{

    var red = document.getElementById("red").value;
    var green = document.getElementById("green").value;
    var blue = document.getElementById("blue").value;
    var width = document.getElementById("width").value;

    var redBack = document.getElementById("redBack").value;
    var greenBack = document.getElementById("greenBack").value;
    var blueBack = document.getElementById("blueBack").value;

    var color = ("#" + red + green + blue);
    document.getElementById("words").style.borderColor = color;
    document.getElementById("words").style.borderWidth = width;

    color = ("#" + redBack + greenBack + blueBack);
    document.getElementById("words").style.backgroundColor = color;
}