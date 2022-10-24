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
  document.querySelector("#" + id).style.backgroundColor = "rgba(0, 0, 0, 0.6)";
}
