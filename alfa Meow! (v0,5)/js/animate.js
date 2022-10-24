window.onload = function () {
  var canvas = document.getElementById("player");
  var ctx = canvas.getContext("2d");
  const width = (canvas.width = 100);
  const height = (canvas.height = 100);

  frameWidth = 100;
  frameHeight = 100;

  let frame = 0;
  let count = 0;

  let sheetRow = 0;

  const spriteSheet = new Image();
  spriteSheet.src = "sprites/gridTemplateTest3.png";

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
};
