
function rock(){
    var computer = Math.random();
    if(computer < 0.34){
        document.getElementById("computer").innerHTML = "<img src='images/rock.png' /> It's a tie";
    } else if (computer <= 0.67){
        document.getElementById("computer").innerHTML = "<img src='images/paper.png' /> you lost";
    } else if (computer < 1){
        document.getElementById("computer").innerHTML = "<img src='images/scissors.png' /> you won!";
    }
}

function paper(){
    var computer = Math.random();
    if(computer < 0.34){
        document.getElementById("computer").innerHTML = "<img src='images/rock.png' /> you won!";
    } else if (computer <= 0.67){
        document.getElementById("computer").innerHTML = "<img src='images/paper.png' /> It's a tie";
    } else if (computer < 1){
        document.getElementById("computer").innerHTML = "<img src='images/scissors.png' /> you lost";
    }
}

function scissors(){
    var computer = Math.random();
    if(computer < 0.34){
        document.getElementById("computer").innerHTML = "<img src='images/rock.png' /> you lost";
    } else if (computer <= 0.67){
        document.getElementById("computer").innerHTML = "<img src='images/paper.png' /> you won!";
    } else if (computer < 1){
        document.getElementById("computer").innerHTML = "<img src='images/scissors.png' /> It's a tie";
    }
}
