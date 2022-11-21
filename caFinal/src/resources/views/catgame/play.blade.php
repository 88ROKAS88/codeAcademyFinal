@extends('layouts.main')
@section('title','Play Cat Game')
@section('content')
<h1>Play cat game CA2-FINAL</h1>
<div>
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


</div>
@endsection