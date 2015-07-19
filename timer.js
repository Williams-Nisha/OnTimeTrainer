  var totalTime = 0;
function calculate() {
    //get values
    var a1 = parseInt(document.getElementById("arriveH").value);
    var a2 = parseInt(document.getElementById("arriveM").value);
    var l1 = parseInt(document.getElementById("leaveH").value);
    var l2 = parseInt(document.getElementById("leaveM").value);
    
    //subtract inputs
    var c1 = a1 - l1;
    var c2 = a2 - l2;
    
    //display inputs
    document.getElementById("r1").innerHTML = c1;
    document.getElementById("r2").innerHTML = c2;

    totalTime = (c1 * 60 *60) + (c2 *60);
    //display values based on calculation
    document.getElementsByClassName("firstTime")[0].innerHTML = c1 + ":" + c2;
    document.getElementsByClassName("halfWayTime")[0].innerHTML = (c1 / 2) + ":" + (c2 / 2);
    document.getElementsByClassName("tenMinutesTime")[0].innerHTML = c1 + ":" + (c2 - 10);
    document.getElementsByClassName("fiveMinutesTime")[0].innerHTML = c1 + ":" + (c2 - 5);
    document.getElementsByClassName("leaveTime")[0].innerHTML = c1 + ":" + c2;
    
}
function getTimer() {
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
                }
else
        {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
xmlhttp.onreadystatechange = function ()
        {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
                {
                document.getElementsByTagName("BODY")[0].innerHTML = xmlhttp.responseText;
                     startTimer();
                        }
        };
xmlhttp.open("GET", "/description.php", true);
        xmlhttp.send();
}
function startTimer() {
    var duration = totalTime;
    var timer = duration, minutes, seconds;

    setInterval(function () {

        var display = document.querySelector('#time');
    
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);
        
        minutes = minutes < 10 ? minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}



/*function setTimer(){
var time = 10;
var initialOffset = '640';
var i = 1;
var interval = setInterval(function() {
    $('.circle_animation').css('stroke-dashoffset', initialOffset-(i*(initialOffset/time)));
    $('h2').text(i);
    if (i === time) {
        clearInterval(interval);
    }
    i++;  }, 1000);
}*/