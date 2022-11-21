// COLLISION DETECTION

// collision with map on both axes
function collisionXY(varX, varY) {
    if (
        map[left + varX][bottom + varY] == 0 &&
        map[left + varX + 90][bottom + varY] == 0 &&
        map[left + varX][bottom + varY + 90] == 0 &&
        map[left + varX + 90][bottom + varY + 90] == 0
    ) {
        bottom += varY;
        left += varX;
    } else if (
        map[left + varX][bottom + varY] == 2 ||
        map[left + varX + 90][bottom + varY] == 2 ||
        map[left + varX][bottom + varY + 90] == 2 ||
        map[left + varX + 90][bottom + varY + 90] == 2
    ) {
        currentMap++;
        startMap();
        console.log(currentMap);
    }
}
console.log("collision work");

//#################################################
// MAP FUNCTIONS ##################################
// GENERATE EMPTY MAP
// *takes map variable and generates 2d array where keys are x and y axes on the map and variables are 0 - to indicate map in that point is empty

function generateMap() {
    for (let x = 0; x <= 1700; x += 10) {
        for (let y = 0; y <= 1000; y += 10) {
            if (y == 0) {
                map[x] = [];
            }
            map[x][y] = 0;
        }
    }
    return map;
}

// GENERATE OBJECT IN MAP

function generateObjectInMap(fx, fy, sx, sy, objectType) {
    for (let x = fx; x < sx; x += 10) {
        for (let y = fy; y < sy; y += 10) {
            map[x][y] = objectType;
        }
        // console.log(x);
    }
    return map;
}

// AUTOMATIC OBJECT GENERATION FROM ID FUNCTION
// *takes cube id calculates cube cordinates, and put them into - generateObjectInMap function to generate object

function autoGenerate(id, objectType) {
    id = id.replace("cube", "");
    const x = Math.floor(id / 10);
    const y = id % 10;
    // console.log("y= " + y + " x= " + x);
    map = generateObjectInMap(
        x * 100,
        y * 100,
        x * 100 + 100,
        y * 100 + 100,
        objectType
    );
    return map;
}

// MAKE MAP VISUALS
// const jsOutDSP = document.getElementById("jsOut");

function createCube(count) {
    const element = document.createElement("div");
    element.className = "mapCube";
    element.id = "cube" + count;
    // element.innerHTML = count;
    background.appendChild(element);
}

// function createPlayer() {
//   const element = document.createElement("canvas");
//   // box.setAttribute('id', 'player');
//   element.id = "player";
//   // element.innerHTML = count;
//   father.appendChild(element);
// }

// createPlayer();

// MAKE ENDPOINT

function makeEndpoint(number) {
    id = "cube" + number;
    autoGenerate(id, 2);
    document.querySelector("#" + id).style.backgroundColor =
        "rgba(84, 245, 39, 0.5)";
}

// RUN AUTOGENERATEMAP AND MAKE MAP VISUALS

function numberToMapObject(number) {
    id = "cube" + number;
    autoGenerate(id, 1);
    document.querySelector("#" + id).style.backgroundColor =
        "rgba(0, 0, 0, 0.6)";
}

console.log("map function eorks");

//##########################################
//##########################################
//STATIC MAPS
var allMaps = [
    {
        map: [
            0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150,
            160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 159, 149, 139,
            129, 119, 109, 99, 89, 79, 69, 59, 49, 39, 29, 19, 9, 8, 7, 6, 5, 4,
            3, 2, 1, 91, 101, 102, 92, 93, 103, 63, 53, 43, 33, 23, 13, 36, 46,
            56, 66, 76, 86, 96, 95, 94, 104, 105, 106, 116, 126, 136, 133, 143,
            153, 51,
        ],
        player: [200, 200],
        exit: 151,
    },
    {
        map: [
            9, 8, 7, 6, 5, 4, 3, 2, 1, 0, 10, 20, 30, 40, 50, 60, 70, 80, 90,
            100, 110, 120, 130, 140, 150, 160, 161, 162, 163, 164, 165, 166,
            167, 168, 169, 19, 29, 39, 49, 59, 69, 79, 89, 99, 109, 119, 129,
            139, 149, 159, 21, 32, 43, 73, 63, 82, 94, 104, 125, 135, 106, 96,
            67, 77, 57, 47, 37, 101, 122, 132, 154,
        ],
        player: [100, 100],
        exit: 38,
    },
    {
        map: [
            0, 20, 30, 10, 40, 60, 50, 1, 2, 3, 4, 5, 6, 7, 8, 9, 19, 29, 39,
            49, 59, 69, 79, 89, 99, 109, 119, 129, 139, 149, 159, 169, 168, 167,
            166, 165, 163, 164, 162, 161, 160, 150, 140, 130, 120, 110, 100, 90,
            80, 70, 51, 52, 62, 63, 23, 13, 64, 65, 66, 56, 46, 14, 15, 76, 86,
            96, 106, 116, 126, 136, 135, 133, 134, 61, 71, 81, 72, 113, 123,
        ],
        player: [100, 200],
        exit: 124,
    },
];

console.log("static maps works");

//##################################
//#####################################
//MAP EXEC
// VARIABLES
let move = false;
var jump = false;
let bottom = 200;
let left = 200;
var characterPos = "l";

// VARIABLES FOR MAP

const background = document.querySelector(".background");
const numberOfCubes = 170;
const player = document.querySelector("#player");
player.style.position = "relative";

var map = [];
var currentMap = 0;

// OPEN CURRENT MAP

function startMap() {
    //emptys map
    background.innerHTML = "";
    map = generateMap();

    //loads map
    for (let i = 0; i < numberOfCubes; i++) {
        createCube(i);
    }

    allMaps[currentMap]["map"].forEach((element) => {
        numberToMapObject(element);
    });

    //loads starting point
    left = allMaps[currentMap]["player"][0];
    bottom = allMaps[currentMap]["player"][1];

    //loads ending point
    makeEndpoint(allMaps[currentMap]["exit"]);
}

console.log("map exec works");

//####################################
//#####################################
// MAIN JS

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

//#######################################
//######################################
// INPUTS JS

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

//#######################################
//#########################################
//ANIMATE JS

// window.addEventListener(window.addEventListener('load', () => {
//variable for animations
window.onload = () => {
    var characterPos = "l";

    var canvas = document.getElementById("player");
    var ctx = canvas.getContext("2d");
    const width = (canvas.width = 100);
    const height = (canvas.height = 100);

    let frameWidth = 100;
    let frameHeight = 100;

    let frame = 0;
    let count = 0;

    let sheetRow = 0;

    const spriteSheet = new Image();
    spriteSheet.src = "/images/test3.png";

    function animate() {
        ctx.clearRect(0, 0, 100, 100);
        ctx.drawImage(
            spriteSheet,
            0 + frame,
            sheetRow,
            frameWidth,
            frameHeight,
            0,
            0,
            100,
            100
        );
        count++;
        // console.log(count);
        if (characterPos == "r") {
            sheetRow = 100;
        } else {
            sheetRow = 0;
        }
        if (jump != false) {
            sheetRow = 200;
            if (characterPos == "r") {
                frame = 0;
            } else {
                frame = 100;
            }
        } else if (move != false) {
            if (count > 20) {
                count = 0;
                frame += 100;
                if (frame > 300) {
                    frame = 0;
                }
            }
        } else {
            frame = 0;
        }
    }

    animate();

    function myFrame() {
        // context.clearRect(0, 0, width, height);
        animate();
        requestAnimationFrame(myFrame);
    }
    myFrame();
    // });
};

console.log("animete work");
