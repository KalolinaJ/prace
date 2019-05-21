import {game_state, $container, $enemyDOM,} from './global.js'
import { set_position } from './tools.js';
set_position
export  function createEnemy(x, y){ 
    const $enemyDOM = document.createElement('img');
    $enemyDOM.src = "images/spaceShips_007.png"
    $enemyDOM.className = 'enemy';
    $container.appendChild($enemyDOM);
    const enemy = {
        x,
        y,
        $enemyDOM
    }
    game_state.enemies.push(enemy);
    set_position( $enemyDOM, x, y)

}

export  function updateEnemy(){

}