document.addEventListener("keydown", (event) => {
    if (event.key == "d") {
        move = "l";
        characterPos = "l";
    }
    if (event.key == "a") {
        move = "r";
        characterPos = "r";
    }
    if (event.key == " ") {
        jumpActive = true;
    }
    if (event.key == " ") {
        jump = 0;
    }
});

document.addEventListener("keyup", (event) => {
    if (event.key == "d") {
        move = false;
    }
    if (event.key == "a") {
        move = false;
    }
});

console.log("inputs work");
