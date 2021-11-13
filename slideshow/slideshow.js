var count = 1;

function Prev()
{
    count--;
    if(count == 0){

        count = 5;
    }
    SlideDriver();
}

function Next()
{
    count++;
    if(count == 6){

        count = 1;
    }
    SlideDriver();
}

function SlideDriver()
{

    if(count == 1){

        document.getElementById("Img").src = "pic1.png";
    }
    else if(count == 2){

        document.getElementById("Img").src = "pic2.png";
    }
    else if(count == 3){

        document.getElementById("Img").src = "pic3.png";
    }
    else if(count == 4){

        document.getElementById("Img").src = "pic4.png";
    }
    else if(count == 5){

        document.getElementById("Img").src = "pic5.png";
    }
}