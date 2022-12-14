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
    <div class="ctg-border">
        <div class="ctg-display">
            <div class="ctg-background ctg-wrap"></div>
            <div class="ctg-world ctg-wrap" id="ctg-world">
                <canvas id="ctg-player"></canvas>
                <canvas id="ctg-pigin"></canvas>
                <!-- <div id="env-test"></div> -->
            </div>
        </div>
        <div class="ctg-hud">
            <div>Time left</div>
            <div id="ctg-timer">300</div>
            <div id="ctg-level-score-display"></div>
        </div>
    </div>
    @vite(["resources/js/allin1.js"])
</body>

</html>