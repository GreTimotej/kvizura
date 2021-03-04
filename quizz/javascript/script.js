var question = "one";

function next(){
    if(question == "one"){
        var x = document.getElementById("one");
        x.style.display = "none";
        var y = document.getElementById("two");
        y.style.display = "block";
        question = "two";
        document.getElementById("backBtn").style.display = "block";
    }

    else if(question == "two"){
        var x = document.getElementById("two");
        x.style.display = "none";
        var y = document.getElementById("three");
        y.style.display = "block";
        question = "three";
    }

    else if(question == "three"){
        var x = document.getElementById("three");
        x.style.display = "none";
        var y = document.getElementById("four");
        y.style.display = "block";
        question = "four";
    }

    else if(question == "four"){
        var x = document.getElementById("four");
        x.style.display = "none";
        var y = document.getElementById("five");
        y.style.display = "block";
        question = "five";
    }

    else if(question == "five"){
        var x = document.getElementById("five");
        x.style.display = "none";
        var y = document.getElementById("end");
        y.style.display = "block";
        question = "end";
        document.getElementById("nextBtn").style.display = "none"
    }
}

function back(){
    if(question == "end"){
        var x = document.getElementById("end");
        x.style.display = "none";
        var y = document.getElementById("five");
        y.style.display = "block";
        question = "five";
        document.getElementById("nextBtn").style.display = "block"
    }

    else if(question == "five"){
        var x = document.getElementById("five");
        x.style.display = "none";
        var y = document.getElementById("four");
        y.style.display = "block";
        question = "four";
    }

    else if(question == "four"){
        var x = document.getElementById("four");
        x.style.display = "none";
        var y = document.getElementById("three");
        y.style.display = "block";
        question = "three";
    }

    else if(question == "three"){
        var x = document.getElementById("three");
        x.style.display = "none";
        var y = document.getElementById("two");
        y.style.display = "block";
        question = "two";
    }

    else if(question == "two"){
        var x = document.getElementById("two");
        x.style.display = "none";
        var y = document.getElementById("one");
        y.style.display = "block";
        question = "one";
        document.getElementById("backBtn").style.display = "none";
    }
}