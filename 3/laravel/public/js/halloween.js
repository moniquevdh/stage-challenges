function totalCandy() {
    var vampireKids = parseInt(document.getElementById("vampire").value);
    var vampireCandy = vampireKids * 3;

    var zombieKids = parseInt(document.getElementById("zombie").value);
    var zombieCandy = zombieKids * 4;

    var witchKids = parseInt(document.getElementById("witch").value);
    var witchCandy = witchKids * 5;

    var totalHouses = document.getElementById("house").value;
   
    var totalKids = vampireKids + zombieKids + witchKids;
    var total = vampireCandy + zombieCandy + witchCandy;
    var totalCandy = total * totalHouses;

    var share = totalCandy / totalKids;

    document.getElementById("total").innerHTML = Math.floor(share);
}