export const key_code_left = 37;
export const key_code_right = 39;
export const key_code_space = 32;

export const game_width = 640;
export const game_height = 480;

export const player_width = 20;

export const laser_max_speed = 100;
export const laser_cooldown = 0.5;

export const game_state = {
    lastTime : Date.now(),
    leftPressed: false,
    rightPressed: false,
    spacePressed: false,
    playerX: 0,
    playerY: 0,
    lasers: [],
    enemies: []
};

export const $playerDOM = document.createElement('img');
export const $laserDOM = document.createElement('img');
export const $container = document.querySelector('.game');
export const $enemyDOM = document.createElement('img');
