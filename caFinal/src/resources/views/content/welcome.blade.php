@extends('layouts.main')
@section('title','Welcome CA2-FINAL')
@section('content')
<div>
    <h1 class="text-center">Welcome CA2-FINAL</h1>
    <hr>
    <h5>Why Cat Game ?</h5>
    <p>This website/webapp(it ounly holds one game) is made as my Code Academy Full Stack Course final work. <br />
        I decided to make it - because video games are funn (cats are awesome) and it allows me to use many things i learned in this course: </p>
    <h6>Programing/scripting languages:</h6>
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
                        <li>highscore </li>
                        <li>credits </li>
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
            </ul>
        </li>
        <li>api <ul>
                <li>CatgameController / newscore</li>
            </ul>
        </li>
    </ul>
    <hr>
    <h5>Cat Game</h5>
    <h6>Game play</h6>
    <p>It is a tiny game with 3 maps. Game objective is to catch a bird. You can do it by using buttons "A" and "D" to walk and "SPACEBAR" to jump. <br />
        Game has a 300 seconds time limit to get thru all 3 maps. And after doing it website drops you to the highscore section so you can see your resullt and compare it with the other users.</p>
</div>
@endsection