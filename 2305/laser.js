
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
    $container,
    game
} from './global.js'

import { onKeyDown, onKeyUp} from './controls.js'

import {create_player,
    updatePlayer } from './player.js'


import {clamp, set_position, rectIntersect} from './tools.js'
import { destroyEnemy } from './enemies.js';

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
        set_position(laser.$laserDOM, laser.x, laser.y);
        if (laser.y < 0) {
            destroyLaser($container, laser);
        }

        const r1 = laser.$laserDOM.getBoundingClientRect ();
        game_state.enemies.map(enemy => {
            const r2 = enemy.$playerDOM.getBoundingClientRect ();
            if (rectIntersect (r1, r2)) {
                destroyEnemy ($container, enemy);
                destroyLaser ($container, laser);
            }
        })

    })
    game_state.lasers = game_state.lasers.filter(laser=>!laser.isDead);
}

function destroyLaser($container, laser) {
    $container.removeChild( laser, $laserDOM);
    laser.isDead = true;
}