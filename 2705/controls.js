import { GAME_STATE, KEY,BtnGameOver, $container } from "./global.js";
import { createPlayer } from "./player.js";
import { init } from "./scripts.js";



export function onKeyDown(e) {
  if (e.keyCode === KEY.LEFT) {
    GAME_STATE.leftPressed = true;
  } else if (e.keyCode === KEY.RIGHT) {
    GAME_STATE.rightPressed = true;
  } else if (e.keyCode === KEY.SPACE) {
    GAME_STATE.spacePressed = true;
  }
}

export function onKeyUp(e) {
  if (e.keyCode === KEY.LEFT) {
    GAME_STATE.leftPressed = false;
  } else if (e.keyCode === KEY.RIGHT) {
    GAME_STATE.rightPressed = false;
  } else if (e.keyCode === KEY.SPACE) {
    GAME_STATE.spacePressed = false;
    GAME_STATE.shoot = true;
  }
}



window.addEventListener("keydown", onKeyDown);
window.addEventListener("keyup", onKeyUp);
BtnGameOver.addEventListener("click", () => {
  GAME_STATE.gameOver = false;
  init();
})