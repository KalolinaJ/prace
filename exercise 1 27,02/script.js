let canvas = document.querySelector("#canvas");
let context = canvas.getContext("2d");

let positionY = 100;
let positionX = 100;
let velocity = 0;
let jump = -3;
let gravity = 0.05;
let move = 600;

let yeti = new Image();
let background = new Image();
let przeszkoda = new Image();

yeti.src = "images/yeti.png";
background.src = "images/background.png";
przeszkoda.src = "images/przeszkoda.png";

function draw() {
    requestID = requestAnimationFrame(draw);
    context.drawImage(background, 0, 0);
    context.drawImage(yeti, positionX, positionY);
    context.drawImage(przeszkoda, move, 350);

    if (
        positionX > move &&
        positionY > 350
        
      ) {
        cancelAnimationFrame(requestID);
      }
    velocity += gravity;

    if (positionY>background.height-yeti.height || positionY<0){
        positionY = 100;
      }
      positionY = positionY + velocity;
      
          move -= 5;
        
      if (move == -35){
          move = 600;
      }
    
    requestAnimationFrame(draw);
  }

  document.addEventListener("keydown", function(e) {
	console.log(e,e.key);
	if(e.key == "ArrowUp") {
		velocity = velocity + jump;
	}

	
});
document.addEventListener("keydown", function(e) {
            if(e.key == "ArrowDown") {
                velocity = velocity - jump;
            }
            });
draw();

 