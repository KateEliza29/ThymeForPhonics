/* 1- Add sound url to array. 2- Add innerHTML of button to <p> at top. 3- On play, cycle through the array, playing each one. */
var soundArr = [];
var letterArr = [];
    function addSound(letter, id) {
    soundArr.push(letter);
    letterArr.push(id);
    document.getElementById("stackedSoundsDisplay").innerHTML = letterArr.join(" ");
}

var i=0 
var player = document.getElementById("audioPlayer");
function speakWord() {
    if (document.getElementById("kateVoice").checked) {
        player.src = "sounds/"+soundArr[i]+".k.mp3";
    }
    else {
        player.src = "sounds/"+soundArr[i]+".s.mp3";
    }
    if (i !== soundArr.length) {
        i++;
    } else {
        player.pause;
        i=0;
    }
    player.addEventListener('ended', speakWord, false)
}


function playSound(letter) {
    if (document.getElementById("kateVoice").checked) {
        var audio1 = new Audio('sounds/'+letter+'.k.mp3');
    }
    else {
        var audio1 = new Audio('sounds/'+letter+'.s.mp3');
    }
    console.log(audio1);
    audio1.play(); 
}

function clearAll() {
    document.getElementById("stackedSoundsDisplay").innerHTML = " ";
    soundArr = [];
    letterArr = [];
    console.log(soundArr, letterArr);
}