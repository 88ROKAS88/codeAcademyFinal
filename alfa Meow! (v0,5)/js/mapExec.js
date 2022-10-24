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
