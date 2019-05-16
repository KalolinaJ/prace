const game_width = 640;
const game_height = 480;

const player_width = 20;



function set_position($element, x, y){
    $element.style.transform = `translate(${x}px, ${y}px)`
}

function crate_player(){
    const $player = document.createElement('img');
    $player.src = "images/spaceShips_004.png";
    $player.className = 'player';
    $container.appendChild($player);
    $player.style.transform = "translate(100px, 400px)";
    set_position($player, game_width/2, game_height-50);


}

function init(){
    $container = document.querySelector('.game');
    crate_player($container);
}
init()