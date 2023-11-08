// $(document).ready(function () {
//     rollDice();
// });
var point = 0;
var winnings = 50;
var bet = 0;
var minBet = 5;
var maxBet = winnings;

function checkRoll(roll){
    if(point == 0){
        if(roll == 7 || roll == 11){
            endRound(true);
        } else if(roll == 2 || roll == 3 || roll == 12){
            endRound(false);
        } else {
            $("#point").text(roll);
            point = roll;
        }
    } else {
        if(roll == 7){
            endRound(false);
        } else if(roll == point){
            endRound(true);
        }
    } 
}

function validateBetet(){
    bet = parseInt($("#bet").val());

    console.log("Bet: " + bet);

    if(isNaN(bet) || bet < minBet || bet > maxBet){
        return false;
    }

    $("#bet").prop("disabled", true);
    return true;
}

function endRound(){
    if(win){
        $("#message").text("$" + winnings);
    } else {
        $("#message").text("$" + winnings);
    }

    console.log("Winning: " + winnings);

    $("#point").text("X");
    $("#bet").val("");
    $("#bet").prop("disabled", false);
    $("#winnings").text("$" + winnings);

    bet = 0;
    point = 0;
}

function rollDice(){
    if (point > 0 || validateBet()){
        $(".pip").css("visibility", "hidden");

        var roll1 = rollDie(1);
        var roll2 = rollDie(2);
        var total = roll1 + roll2;

        console.log("Total: " + total);

        checkRoll(total);
    } else {
        //psvm
    }
}

function rollDie(dieNum) {

    var roll = Math.ceil(Math.random() * 6);
    console.log(roll);

    if (roll == 1) {
        $("#d" + dieNum + "p4").css("visibility", "visible");
    } else if (roll == 2) {
        $("#d" + dieNum + "p1, #d" + dieNum + "p7").css("visibility", "visible");
    } else if (roll == 3) {
        $("#d" + dieNum + "p1, #d" + dieNum + "p4, #d" + dieNum + "p7").css("visibility", "visible");
    } else if (roll == 4) {
        $("#d" + dieNum + "p1, #d" + dieNum + "p2, #d" + dieNum + "p6, #d" + dieNum + "p7").css("visibility", "visible");
    } else if (roll == 5) {
        $("#d" + dieNum + "p1, #d" + dieNum + "p2, #d" + dieNum + "p4, #d" + dieNum + "p6, #d" + dieNum + "p7").css("visibility", "visible");
    } else  {
        $("#d" + dieNum + "p1, #d" + dieNum + "p2, #d" + dieNum + "p3, #d" + dieNum + "p5, #d" + dieNum + "p6, #d" + dieNum + "p7").css("visibility", "visible");
    }
    
    return roll;
}

function validateBetet(){
    bet = parseInt($("#bet").val());

    console.log("Bet: " + bet);

    if(isNaN(bet) || bet < minBet || bet > maxBet){
        return false;
    }

    $("#bet").prop("disabled", true);
    return true;
}