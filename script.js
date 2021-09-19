var img = document.getElementById("popcat1");
var count = document.getElementById("score");
// var malaysiaScore = document.getElementById('my_score');
var MyScore = 0;
var score;
var audio = new Audio('pop.mp3');

// mouseclick event
img.addEventListener("mousedown", function(){
    increaseScore();
    if(score>100){
        img.src = './src/image/popcat2.png';
        audio.play();
    }else
    if(score>80){
        img.src = './src/image/2vaccine2.png';
        audio.play();
    }else
    if(score>50){
        img.src = './src/image/catvaccine2.png';
        audio.play();
    }else
    if(score>30){
        img.src = './src/image/catmask2.png';
        audio.play();
    }else
    {
        img.src = './src/image/maincat2.png';
        audio.play();
    }
});
    
img.addEventListener("mouseup", function(){
    if(score>100){
        img.src = './src/image/popcat1.png';
        audio.play();
    }else
    if(score>80){
        img.src = './src/image/2vaccine1.png';
        audio.play();
    }else
    if(score>50){
        img.src = './src/image/catvaccine1.png';
        audio.play();
    }else
    if(score>30){
        img.src = './src/image/catmask1.png';
        audio.play();
    }else
    {
        img.src = './src/image/maincat1.png';
        audio.play();
    }
});

// touch event
img.addEventListener("touchstart", function(){
    increaseScore();
    img.src = './src/image/popcat2.png';
    audio.play();
});

img.addEventListener("touchmove", function(){
    img.src = './src/image/popcat1.png';
     audio.play();
});

function UPDATE_ID_0(Index){
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", `./src/updateValue/UPDATE_ID_${Index}.php`, true);
    xhttp.send();
}
function increaseScore(){
    score++;
    count.innerHTML = score;
    document.cookie =`count=${score}`
    const sb = document.querySelector('#majar');
    const Index = sb.selectedIndex;
    UPDATE_ID_0(Index);
}

