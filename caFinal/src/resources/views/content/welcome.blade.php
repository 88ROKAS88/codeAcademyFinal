@extends('layouts.main')
@section('title','Welcome CA2-FINAL')
@section('content')
<div>
    <h1 class="text-center">Welcome CA2-FINAL</h1>
    <hr>
    <h5>Why The Cat Game ?</h5>
    <p>This website/webapp (it only holds one game) is made as my Code Academy Full Stack Course final project. <br />
        I decided to make it because video games are fun (cats are awesome) and it allows me to use many things I have learned during this course: </p>
    <h6>Programming/scripting languages:</h6>
    <ul>
        <li>PHP</li>
        <li>Javascript</li>
        <li>Html</li>
        <li>CSS</li>
        <li>SQL</li>
    </ul>
    <h6>Frameworks:</h6>
    <ul>
        <li>Bootstrap</li>
        <li>Laravel</li>
    </ul>
    <h6>Tools:</h6>
    <ul>
        <li>Docker</li>
        <li>Git / Github</li>
    </ul>
    <hr>
    <h5>Website structure</h5>
    <h6>Routing</h6>
    <ul>
        <li>web<ul>
                <li>/ </li>
                <li>games<ul>
                        <li>welcome </li>
                        <li>play </li>
                        <li>highscore (can have parameters) </li>
                        <li>credits </li>
                        <li>newscore </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>api<ul>
                <li>v1<ul>
                        <li>games<ul>
                                <li>catgamescore</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <h6>Controllers / Methods</h6>
    <ul>
        <li>web<ul>
                <li>CatGameController / welcome</li>
                <li>CatGameController / play</li>
                <li>CatGameController / highscore</li>
                <li>CatGameController / credits</li>
                <li>CatGameController / newscore</li>
            </ul>
        </li>
        <li>api <ul>
                <li>CatgameController / newscore</li>
            </ul>
        </li>
    </ul>
    <hr>
    <h5>The Cat Game</h5>
    <h6>Game play</h6>
    <p>It is a tiny game with 3 maps. The game objective is to catch a bird. You can do it by using buttons "A" and "D" to walk and "SPACEBAR" to jump. <br />
        The game has a 300 seconds time limit to get through all 3 maps. And after doing it the website drops you to the highscore section so you can see your result and compare it with other users.</p>
    <h6>Game structure</h6>
    <p>All The Cat Game's logic is in one file (allin1.js)- which is separated in to 10 parts:</p>
    <ol>
        <li>Requests<span class="text-muted"> (sends player's score to server)</span></li>
        <li>Collision<span class="text-muted"> (function to calculate collision)</span></li>
        <li>Map Functions<span class="text-muted"> (functions for map generation from "const allMaps")</span></li>
        <li>Static maps<span class="text-muted"> ("const allMaps" array of objects)</span></li>
        <li>Map exec<span class="text-muted"> (load levels, show curtains)</span></li>
        <li>Main<span class="text-muted"> (time interval which runs everything)</span></li>
        <li>H U D<span class="text-muted"> (user display for score, time left)</span></li>
        <li>Inputs<span class="text-muted"> (event listeners for inputs)</span></li>
        <li>Animate<span class="text-muted"> (cat's animations)</span></li>
        <li>Animate pigin<span class="text-muted"> (pigeon's animations)</span></li>
    </ol>
    <hr>
    <a href="https://github.com/88ROKAS88/codeAcademyFinal">GitHub repository</a>
</div>
@endsection