window.onload = function () {
    //window.addEventListener(window.addEventListener('onload', () => {

    // MAP
    startMap();

    // GAME ENGINE

    setInterval(() => {
        if (move) {
            if (move == "l") {
                collisionXY(10, 0);
            }
            if (move == "r") {
                collisionXY(-10, 0);
            }
        }

        if (jump !== false) {
            if (jump < 10) {
                collisionXY(0, 20);
                jump += 1;
            }
            if (jump == 10) {
                jump = false;
            }
        } else {
            collisionXY(0, -10);
        }
        player.style.bottom = bottom + "px";
        player.style.left = left + "px";
    }, 1000 / 30);
};
console.log("main works");
