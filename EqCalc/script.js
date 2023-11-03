function velocity(){
    var num = "";
    var distance = document.forms[0].elements['distance'].value;
    var time = document.forms[0].elements['time'].value;
    var dMeasurement = document.forms[0].elements['distanceForm'].value;
    var tMeasurement = document.forms[0].elements['timeForm'].value;

    document.getElementById("distance").innerHTML;
    document.getElementById("time").innerHTML;
    document.getElementById("distanceForm").innerHTML;
    document.getElementById("timeForm").innerHTML;

    var velocity = distance / time;
    document.getElementById("velocity").innerHTML = "Your velocity is " + velocity + " " + dMeasurement + " per " + tMeasurement;
}

function addWithError(){
    var m1 = document.forms[1].elements['measurement1'].value;
    var m2 = document.forms[1].elements['measurement2'].value;
    var e1 = document.forms[1].elements['error1'].value;
    var e2 = document.forms[1].elements['error2'].value;

    var pm1 = parseInt(m1) + parseInt(m2);
    var error = Math.round(Math.sqrt((parseInt(e1)**2) + (parseInt(e2)**2)));
    var pmTotal = pm1 + "&#177;" + error;

    document.getElementById("addW/Error").innerHTML = pmTotal;
}

function subtractWithError(){
    var m1 = document.forms[2].elements['measurement1'].value;
    var m2 = document.forms[2].elements['measurement2'].value;
    var e1 = document.forms[2].elements['error1'].value;
    var e2 = document.forms[2].elements['error2'].value;

    var pm1 = parseInt(m1) - parseInt(m2);
    var error = Math.round(Math.sqrt((parseInt(e1)**2) + (parseInt(e2)**2)));
    var pmTotal = pm1 + "&#177;" + error;

    document.getElementById("subtractW/Error").innerHTML = pmTotal;
}

function multiplyWithError(){
    var m1 = document.forms[3].elements['measurement1'].value;
    var m2 = document.forms[3].elements['measurement2'].value;
    var e1 = document.forms[3].elements['error1'].value;
    var e2 = document.forms[3].elements['error2'].value;

    var m1a = parseInt(m1) * parseInt(m2);
    var errorPercent = Math.round(Math.sqrt((parseInt((e1/m1) * 100)**2) + (parseInt((e2/m2) *100)**2)));
    var error = m1a * (errorPercent/100) ;
    var mTotal = m1a + "&#177;" + error;

    document.getElementById("multWError").innerHTML = mTotal;
}

function divideWithError(){
    var m1 = document.forms[4].elements['measurement1'].value;
    var m2 = document.forms[4].elements['measurement2'].value;
    var e1 = document.forms[4].elements['error1'].value;
    var e2 = document.forms[4].elements['error2'].value;

    var d1a = parseInt(m1) / parseInt(m2);
    var errorPercent = Math.round(Math.sqrt((parseInt((e1/m1) * 100)**2) + (parseInt((e2/m2) *100)**2)));
    var error = d1a * (errorPercent/100) ;
    var dTotal = d1a + "&#177;" + error;

    document.getElementById("divideWError").innerHTML = dTotal;
}