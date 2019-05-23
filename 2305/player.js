import {game_state, game_width, game_height, $container, $playerDOM, player_width } from './global.js'
import {set_position, clamp} from './tools.js'
import {createLaser} from './laser.js'

export function create_player($container){
    game_state.playerX = game_width/2;
    game_state.playerY = game_height-50;
    $playerDOM.src = "images/spaceShips_004.png";
    $playerDOM.className = 'player';
    $container.appendChild($playerDOM);
    $playerDOM.style.transform = "translate(100px, 400px)";
    set_position($playerDOM, game_state.playerX, game_state.playerY);
}

export function updatePlayer(){
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
    set_position($playerDOM, game_state.playerX, game_state.playerY);
}

