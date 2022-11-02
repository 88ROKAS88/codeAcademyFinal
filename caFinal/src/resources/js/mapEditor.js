// DISPLAY MAP AS ARRAY FOR FUNCTION

function jsOutArrF(cubeId) {
  cubeId = cubeId.replace("cube", "");
  mapFunctions += cubeId + ",";
  jsOutDSP.innerHTML = mapFunctions;
}

// AUTOMATIC OBJECT GENERATION IN MAP INTERFACE
const jsOutDSP = document.getElementById("jsOut");
const father = document.querySelector(".world");
const numberOfCubes = 170;
console.log(father);

function createCubeEditor(count) {
  const element = document.createElement("div");
  element.className = "cube";
  element.id = "cube" + count;
  element.innerHTML = count;
  father.appendChild(element);
}

for (let i = 0; i < numberOfCubes; i++) {
  createCubeEditor(i);
}

father.addEventListener("click", (e) => {
  const id = e["explicitOriginalTarget"]["id"];
  document.getElementById(id).style.backgroundColor = "blue";

  jsOutArrF(id);
});

// MAP
var map = [];
map = generateMap();
let mapFunctions = "[";

// console.log(21 % 10);
