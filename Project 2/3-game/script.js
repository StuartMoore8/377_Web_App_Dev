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

var cardnum;
var playerCardNum = 3;
var dealerCard;
var dCardNum;
var win;
var totalCardsSoFar;
var playAgain;
var gamblingAddiction;
var playMore;

function play(){
    playMore = 'yes';
    total = 0;
    if(playAgain == 1){
        playMore = prompt("Are you sure you want to play again?");
    }

    if(playMore == 'yes' || playMore == 'Yes' || playMore == 'YES'){
        gamblingAddiction = prompt("Do you have a gambling addiction?");
        
    }

    if(gamblingAddiction == 'no'){
        prompt("Wanna bet?");
    }
    validateBet();
}

function hideCards(){
    for(var i = 0; i <= 8; i++){
        $("#dealer_card" + i).css("visibility", "hidden");
        $("#player_card" + i).css("visibility", "hidden");
    }
    $("place_card").css("visibility", "visible");
}

function dealerSuitAndNum() {
    var numValues = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
    var suitValues = ['Hearts', 'Diamonds', 'Spades', 'Clubs'];

    if(num == 1){
        num = 'A';
    } else if (num > 1 && num <= 13) {
      num = numValues[num - 1];
      dCardNum = num + 'Of';
      if(suit == 1){
        suit = 'Hearts'
      }
      if (suit >= 1 && suit <= 4) {
        suit = suitValues[suit - 1];
      } else {
        suit = 'Clubs';
      }
    }

    return {
        suit : suit,
        num : num
    };
  }
  
  function playerSuitAndNum() {
    var numValues = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
    var suitValues = ['Hearts', 'Diamonds', 'Spades', 'Clubs'];
  
    if (num >= 1 && num <= 13) {
      num = numValues[num - 1];
      if (suit >= 1 && suit <= 4) {
        suit = suitValues[suit - 1];
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
    hideCards();
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

    dealersCards();
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

    return {
        dealerValue,
        suit,
        num,
    };
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

function dealersCards(){
    dealerTotal = 0;
    dealCardDealer();

    cardnum = 1;
    
    dealerTotal += dealerValue;
    t1 = dealerTotal;
    console.log(dealerTotal);
    console.log("Dealer: " + dealerTotal + ": " + num + " of " + suit);
    
    var imageElement = document.getElementById("dealer_card1");
    var newHref = "fronts/" + suit + "/" + num + "Of" + suit + ".svg";
    imageElement.setAttribute("href", newHref);
    cardnum += 1;

    $("#dealer_card1").css("visibility", "visible");
    
    dealCardDealer();
    dealerTotal += dealerValue;
    console.log("Dealer: " + dealerTotal + ": " + num + " of " + suit);
    console.log(dealerTotal);

    // $("#dealer_card2").css("visibility", "visible");

    cardnum += 1;

    imageElement = document.getElementById("dealer_card2");
    var newHref = "fronts/" + suit + "/" + num + "Of" + suit + ".svg";
    imageElement.setAttribute("href", newHref);

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
        var imageElement = document.getElementById("dealer_card" + cardnum);
        var newHref = "fronts/" + suit + "/" + num + "Of" + suit + ".svg";
        imageElement.setAttribute("href", newHref);
        cardnum += 1;
    }

    if(dealerTotal > 21){
        $("#message_Dealer").text("Dealer: " + dealerTotal + " you win.");
        winnings += bet;
        done();
    }
}

function playersCards(){
    total = 0;
    dealCardPlayer();
    total += value;
    console.log("Player: " + total + ": " + num + " of " + suit);
    console.log(total);

    var imageElement = document.getElementById("player_card1");
    var newHref = "fronts/" + suit + "/" + num + "Of" + suit + ".svg";
    imageElement.setAttribute("href", newHref);
    $("#player_card1").css("visibility", "visible");


    dealCardPlayer();
    total += value;
    console.log("Player: " + total + ": " + num + " of " + suit);
    console.log(total);

    var imageElement = document.getElementById("player_card2");
    var newHref = "fronts/" + suit + "/" + num + "Of" + suit + ".svg";
    imageElement.setAttribute("href", newHref);
    $("#player_card2").css("visibility", "visible");

    $("#message_You").text("You: " + total);

    totalCardsSoFar = 2;
}

function hit(){
    totalCardsSoFar += 1;
    if(total >= 2){
        dealCardPlayer();
        total += value;
        console.log("Player: " + total + ": " + num + " of " + suit);
        $("#message_You").text("You: " + total);
        console.log(total);

        var imageElement = document.getElementById("player_card" + playerCardNum);
        var newHref = "fronts/" + suit + "/" + num + "Of" + suit + ".svg";
        imageElement.setAttribute("href", newHref);
        $("#player_card" + playerCardNum).css("visibility", "visible");
        playerCardNum += 1;


    } else {
        $("#message_You").text("You: You cant do that yet.");
    }

    if(total > 21){
        $("#message_You").text("You: lose with " + total);
        $("#message_Dealer").text("Dealer: wins with " + dealerTotal);
        win = 1;
        winner();
    }
}

function winner(){
    if(total > 21){
        $("#message_Dealer").text("Dealer: wins with " + dealerTotal);
        $("#message_You").text("You: went over and lost with " + total);
        winnings -= bet;
        win = 1;

    } else if(total == 21 && totalCardsSoFar == 2){
        $("#message_Dealer").text("Dealer: went over and loses with " + dealerTotal);
        $("#message_You").text("You: win with blackjack");
        bet *= 1.5;
    } else if (dealerTotal > 21){
        $("#message_Dealer").text("Dealer: went over and loses with " + dealerTotal);
        $("#message_You").text("You: win with " + total);
        playersCards();
        winner();

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
    if(win > 0){
        alert("You cant do that!")
    } else {
        winner();
        win = 1;
        $("#place_card").css("visibility", "hidden");
        for(var i = 0; i < cardnum; i++){
            $("#dealer_card" + i).css("visibility", "visible");
        }
    }
}

function reset(){
    playAgain = 1;
    if(win == 1){
        $("#message_Dealer").text("Dealer: ");
        $("#message_Bet").text("Bet: ");
        $("#message_You").text("You: ");

        for(var i = 1; i < 8; i++){
            var imageElement = document.getElementById("player_card" + i);
            var newHref = "backs/black_back.svg";
            imageElement.setAttribute("href", newHref);
            $("#player_card" + i).css("visibility", "visible");
        }

        for(var i = 1; i < 8; i++){
            var imageElement = document.getElementById("dealer_card" + i);
            var newHref = "backs/black_back.svg";
            imageElement.setAttribute("href", newHref);
            $("#dealer_card" + i).css("visibility", "visible");
        }
        win = 0;

        var betBox = document.getElementById("bet");
        betBox.value = '';
        betBox.setAttribute("bet", betBox.value);
        $("#bet").prop("disabled", false);

    } else {
        alert("You cant do that!")
    }
}