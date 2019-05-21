
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

import { onKeyDown, onKeyUp} from './controls.js'

import {create_player,
    updatePlayer } from './player.js'


import {clamp, set_position} from './tools.js'

export function createLaser($container, x, y){
    const $laserDOM = document.createElement("img");
    $laserDOM.src = "images/spaceMissiles_040.png";
    $laserDOM.className = "laser";
    $container.appendChild($laserDOM);
    const laser = {
        x, y, $laserDOM
    }
    game_state.lasers.push(laser)
    set_position(laser.$laserDOM, laser.x, laser.y);
}

export function updateLaser(dt){
    const lasers = game_state.lasers;
    lasers.map(laser => {
        laser.y -= laser_max_speed * dt;
        set_position(laser.$laserDOM, laser.x, laser.y)

    })
}