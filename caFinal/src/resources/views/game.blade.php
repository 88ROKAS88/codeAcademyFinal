<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @vite(['resources/css/styles.css'])
    <title>Meow! (Alfa version)</title>
</head>

<body>
    <div class="border">
        <div class="background wrap"></div>
        <div class="world wrap" id="world">
            <canvas id="player"></canvas>
            <!-- <div id="env-test"></div> -->
        </div>
    </div>
    @vite(["resources/js/collision.js", "resources/js/mapFunctions.js", "resources/js/staticMaps.js", "resources/js/mapExec.js", "resources/js/main.js", "resources/js/animate.js", "resources/js/inputs.js"])
</body>

</html>