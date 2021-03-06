const key_code_left = 37;
const key_code_right = 39;
const key_code_space = 32;

const game_width = 640;
const game_height = 480;

const player_width = 20;

const laser_max_speed = 100;
const laser_cooldown = 0.5;

const game_state = {
    lastTime : Date.now(),
    leftPressed: false,
    rightPressed: false,
    spacePressed: false,
    playerX: 0,
    playerY: 0,
    lasers: []
}
function clamp(v, min, max){
    if (v<min){
        return min
    }else if(v>max){
        return max
    } else {
        return v
    }
    
}

function set_position($element, x, y){
    $element.style.transform = `translate(${x}px, ${y}px)`
}
// player
function crate_player($container){
    game_state.playerX = game_width/2;
    game_state.playerY = game_height-50;

    const $player = document.createElement('img');
    $player.src = "images/spaceShips_004.png";
    $player.className = 'player';
    $container.appendChild($player);
    $player.style.transform = "translate(100px, 400px)";
    set_position($player, game_state.playerX, game_state.playerY);
}

function updatePlayer(){
    if (game_state.leftPressed){
        game_state.playerX -=5;
    }
    if (game_state.rightPressed){
        game_state.playerX +=5;
    }
    game_state.playerX = clamp(game_state.playerX, player_width, game_width-player_width);

    if(game_state.spacePressed){
        createLaser($container, game_state.playerX, game_state.playerY);
    }

    const $player = document.querySelector('.player');
    set_position($player, game_state.playerX, game_state.playerY);
}

// end player


// laser
function createLaser($container, x, y){
    const $laser = document.createElement("img");
    $laser.src = "images/spaceMissiles_040.png";
    $laser.className = "laser";
    $container.appendChild($laser);
    const laser = {
        x, y, $laser
    }
    game_state.lasers.push(laser)
    set_position($laser, x, y);
}

function updateLaser(){
    const lasers = game_state.lasers;
    // for (let i = 0; i<lasers.length; i++){
    //     laser = lasers[i];
    //     console.log(laser);
    // }
    lasers.map(laser => {
        laser.y -= laser_max_speed * dt;
        

    })
}
// end laser

function update(){
    const currentTime = Date.now();
    const dt = (currentTime - game_state.lastTime);
    updatePlayer();
    updateLaser();
    game_state.lastTime = currentTime;
    window.requestAnimationFrame(update);
}

function init(){
    $container = document.querySelector('.game');
    crate_player($container);
}
init()

function onKeyDown(e) {
   
    if (e.keyCode === key_code_left){
        game_state.leftPressed = true;
        // game_state.playerX -= 5;
        // const $player = document.querySelector('.player');
        // set_position($player, game_state.playerX, game_state.playerY);

    } else if(e.keyCode === key_code_right) {
        game_state.rightPressed = true;
        // game_state.playerX += 5;
        // const $player = document.querySelector('.player');
        // set_position($player, game_state.playerX, game_state.playerY);
    } else if (e.keyCode === key_code_space){
        game_state.spacePressed = true;
    }
}

function onKeyUp(e) {
    if (e.keyCode === key_code_left){
        game_state.leftPressed = false;
       
    } else if(e.keyCode === key_code_right) {
        game_state.rightPressed = false;
     
    } else if (e.keyCode === key_code_space){
        game_state.spacePressed = false;
    }
}

window.addEventListener('keydown', onKeyDown);
window.addEventListener('keyup', onKeyUp);
window.requestAnimationFrame(update);