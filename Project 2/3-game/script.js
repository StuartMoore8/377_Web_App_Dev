var point = 0;
var winnings = 1000;
var bet = 0;
var minBet = 50;
var maxBet = winnings;
var dealerValue = 0;
var value = 0;
var dealerTotal = 0;
var total = 0;
var t1;
var num;
var suit;

var dc1;
var dc2;
var dc3;
var dc4;

var dealerCard

var dCardNum;

function play(){
    validateBet();
}

function hideCards(){
    // $("dealer_card1").image("visibility", "hidden");
    // $("dealer_card2").image("visibility", "hidden");
    // $("dealer_card3").image("visibility", "hidden");
    // $("dealer_card4").image("visibility", "hidden");

    // $("player_card1").image("visibility", "hidden");
    // $("player_card2").image("visibility", "hidden");
    // $("player_card3").image("visibility", "hidden");
    // $("player_card4").image("visibility", "hidden");
}

function dealerSuitAndNum(){
    var numa = num;
    if(num == 1){
        num = 'Ace';
        dCardNum = "AOf";
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 2){
        dCardNum = "2Of";
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 3){
        dCardNum = "3Of";
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 4){
        dCardNum = "4Of";
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 5){
        dCardNum = "5Of";
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 6){
        dCardNum = "6Of";
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 7){
        dCardNum = "7Of";
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 8){
        dCardNum = "8Of";
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 9){
        dCardNum = "9Of";
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 10){
        dCardNum = "10Of";
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 11){
        dCardNum = "JOf";
        num = 'Jack';
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 12){
        dCardNum = "QOf";
        num = 'Queen';
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 13){
        dCardNum = "KOf";
        num = 'King';
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    }

    // $("#dealer_card1").html(<object data = 'suit + "/" + numa + "Of" + suit + ".svg"' type="image/svg+xml"></object>);

}




function playerSuitAndNum(){
    if(num == 1){
        num = 'Ace';
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 2){
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 3){
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 4){
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 5){
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 6){
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 7){
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 8){
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 9){
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 10){
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 11){
        num = 'Jack';
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 12){
        num = 'Queen';
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    } else if (num == 13){
        num = 'King';
        if(suit == 1){
            suit = 'Hearts';
        } else if(suit == 2){
            suit = 'Diamonds';
        } else if(suit == 3){
            suit = 'Spades';
        } else {
            suit = 'Clubs';
        }
    }
}

function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    suit = Math.floor(Math.random() * (max - min + 1) + min);
}


function validateBet(){
    maxBet = winnings;
    bet = parseInt($("#bet").val());

    console.log("Bet: " + bet);
    
    
    if(isNaN(bet) || bet < minBet || bet > winnings){
        alert("Bet must be within 50 and " + winnings)
        return false;
    } else {
        $("#message_Bet").text("Bet: $" + bet);
        $("#bet").prop("disabled", true);
        $("#message_chips").text("visibility", "hidden");
        dealersCards();
        playersCards();
        return true;
    }
}

function dealCardDealer(){
    getRandomIntInclusive();
    num = Math.ceil(Math.random() * 13);
    suit = Math.ceil(Math.random() * 4);

    if(num >= 10){
        dealerValue = 10;
    } else {
        dealerValue = num;
    }
    dealerSuitAndNum();
    return dealerValue;
}

function dealCardPlayer(){
    getRandomIntInclusive();
    num = Math.ceil(Math.random() * 13);
    suit = Math.ceil(Math.random() * 4);

    if(num >= 10){
        value = 10;
    } else if(num == 1){
        value = 11;
    } else {
        value = num;
    }
    playerSuitAndNum();
    return value;
}

function dealersCards(dc1, dc2, dc3, dc4){
    dealCardDealer();
    dealerTotal += dealerValue;
    t1 = dealerTotal;
    console.log(dealerTotal);
    console.log("Dealer: " + dealerTotal + ": " + num + " of " + suit);
    $("#message_Dealer" + dc1).css("visibility", "visible");
    dealCardDealer();
    dealerTotal += dealerValue;
    console.log("Dealer: " + dealerTotal + ": " + num + " of " + suit);
    console.log(dealerTotal);

    if(dealerTotal == 21){
        $("#message_Dealer").text("Dealer has BlackJack! " + dealerTotal);
    } else {
        $("#message_Dealer").text("Dealer: " + t1);
    }
    
    while(dealerTotal < 17){
        dealCardDealer();
        console.log("Dealer: " + dealerTotal + ": " + num + " of " + suit);
        dealerTotal += dealerValue;
        console.log(dealerTotal);
    }

    if(dealerTotal > 21){
        $("#message_Dealer").text("Dealer: " + dealerTotal + " you win.");
        done();
    }
}

function playersCards(){
    dealCardPlayer();
    total += value;
    console.log("Player: " + total + ": " + num + " of " + suit);
    console.log(total);
    dealCardPlayer();
    total += value;
    console.log("Player: " + total + ": " + num + " of " + suit);
    console.log(total);

    $("#message_You").text("You: " + total);
}

function hit(){
    if(total >= 2){
        dealCardPlayer();
        total += value;
        console.log("Player: " + total + ": " + num + " of " + suit);
        $("#message_You").text("You: " + total);
        console.log(total);
    } else {
        $("#message_You").text("You: You cant do that yet.");
    }

    if(total > 21){
        $("#message_You").text("You: lose with " + total);
        $("#message_Dealer").text("Dealer: wins with " + dealerTotal);
    }
}

function winner(){
    if(total > 21){
        $("#message_Dealer").text("Dealer: wins with " + dealerTotal);
        $("#message_You").text("You: went over and lost with " + total);
        winnings -= bet;

    } else if (dealerTotal > 21){
        $("#message_Dealer").text("Dealer: went over and loses with " + dealerTotal);
        $("#message_You").text("You: win with " + total);
        winnings += bet;

    } else {
        if(dealerTotal > total){
            $("#message_Dealer").text("Dealer: wins with " + dealerTotal);
            $("#message_You").text("You: lose with " + total);
            winnings -= bet;
        } else if (total > dealerTotal){
            $("#message_Dealer").text("Dealer: loses with " + dealerTotal);
            $("#message_You").text("You: win with " + total);
            winnings += bet;
        } else {
            $("#message_Dealer").text("Dealer: ties with " + dealerTotal);
            $("#message_You").text("You: tie with " + total);
            winnings = winnings;
        }
    }
    

    $("#winnings").text("$" + winnings);
}

function done(){
    winner();
}