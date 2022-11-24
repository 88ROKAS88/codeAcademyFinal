@extends('layouts.main')
@section('title','Play Cat Game')
@section('content')
<div class="my-2">
    <div class="myctg-border">
        <div class="myctg-display">
            <div class="myctg-background myctg-wrap"></div>
            <div class="myctg-world myctg-wrap" id="myctg-world">
                <canvas id="myctg-player"></canvas>
                <canvas id="myctg-pigin"></canvas>
                <!-- <div id="env-test"></div> -->
            </div>
        </div>
        <div class="myctg-hud">
            <div>Time left</div>
            <div id="myctg-timer">300</div>
            <div id="myctg-level-score-display"></div>
        </div>
    </div>

    @auth
    <script type="text/javascript">
        var importId = "{{Auth::user()->id}}";
        var importName = "{{Auth::user()->name}}";
    </script>
    @endauth
    @vite(["resources/js/allin1.js"])


</div>
@endsection