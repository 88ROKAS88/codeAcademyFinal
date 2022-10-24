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
