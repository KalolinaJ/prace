import {game_state, $container, $enemyDOM, game_width, game, enemy} from './global.js'
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
export function updateEnemy(){
 const dx = Math.sin(game_state.lastTime /1000)*50;
 const dy = Math.cos(game_state.lastTime / 1000) *10;
 game_state.enemies.map(enemy=>{
     let x = enemy.x + dx;
     let y = enemy.y + dy;
     set_position(enemy, $enemyDOM, x, y)
 })
 game_state.enemies = game_state.enemies.filter(enemy=> !enemy.isDead);

}

export function destroyEnemy($container, enemy){
    $container.removeChild(enemy, $enemyDOM);
    enemy.isDead = true;
}

export function createEnemiesArmy() {
    const enemySpacing = game_width - enemy.horizontal_padding * 2) / (enemy.per_row)
    let j, i, x, y;
    for(j = 0; j< enemy.rows; j++) {
        y = enemy.vertical_padding + j * enemy.vertical_spacing;
    for (i=0; i< enemy.per_row; i++){
        x = enemySpacing * i + enemy.horizontal_padding;
        createEnemy(x, y);
    }   
 }
}

