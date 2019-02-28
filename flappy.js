const canvas = document.querySelector("#canvas");
const ctx = canvas.getContext("2d");

let posY = 100;
let posX = 100;
let velocity = 0;
let gravity = 0.05;
let jump = -3;


let bird = new Image();
let bg = new Image();
let bp = new Image();


bird.src = "bird.png";
bg.src = "bg.png";
bp.scr = "bp.png";

function draw() {
    requestID = requestAnimationFrame(draw);
    ctx.drawImage(bg, 0, 0);
    ctx.drawImage(bird, posX, posY);
    ctx.drawImage(bp, 200, 350);

    velocity += gravity;

    if(posY > bg.height-bird.height || posY < 0) {
        velocity = 0;
        
    };

  {  cancelAnimationFrame(requestID) };

    posY = posY + velocity;

    


     




    
    requestAnimationFrame(draw);
   
};
document.addEventListener("keydown", function(e) {
    if(e.key == "ArrowUp"){
        console.log("object");
        velocity = velocity + jump;
    };

    if(e.key == "ArrowDown"){
        console.log("object");
        velocity = velocity - jump;
    };

    if(e.key == "ArrowRight"){
        console.log("object");
        posX= (posX + velocity)+1;
    };

    if(e.key == "ArrowLeft"){
        console.log("object");
        posX = (posX - velocity)-1;
    };
});
draw();