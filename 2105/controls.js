
import {game_state,
    key_code_left,
    key_code_right,
    key_code_space,
    $playerDOM,
    $laserDOM,
    game_width,
    game_height,
    player_width,
    laser_max_speed,
    laser_cooldown,
    $container 
} from './global.js'

export function onKeyDown(e) {
   
    if (e.keyCode === key_code_left){
        game_state.leftPressed = true;
        
    } else if(e.keyCode === key_code_right) {
        game_state.rightPressed = true;
       
    } else if (e.keyCode === key_code_space){
        game_state.spacePressed = true;
    }
}

export function onKeyUp(e) {
    if (e.keyCode === key_code_left){
        game_state.leftPressed = false;
       
    } else if(e.keyCode === key_code_right) {
        game_state.rightPressed = false;
     
    } else if (e.keyCode === key_code_space){
        game_state.spacePressed = false;
    }
}