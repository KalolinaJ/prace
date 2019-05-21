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

import {updateLaser} from './laser.js'

import {clamp, set_position} from './tools.js'
import { createEnemy, updateEnemy } from './enemies.js';


function update(){
    const currentTime = Date.now();
    const dt = (currentTime - game_state.lastTime)/1000;
    updatePlayer();
    updateLaser(dt);
    updateEnemy();
    game_state.lastTime = currentTime;
    window.requestAnimationFrame(update);
}

function init(){
    create_player($container);
    for(let j=1; j<3; j++)
    for(let i=1; i<10; i++){
        const x = 100 + i * 50;
        const y = 10+j*40;
        createEnemy(x, y);

    }
}
init()

window.addEventListener('keydown', onKeyDown);
window.addEventListener('keyup', onKeyUp);
window.requestAnimationFrame(update);