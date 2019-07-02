@extends('layouts.dashboard') @section('content') <style>
    .grid {
        background: #f1f1f1;
        color: #1f1c1c;
        border: 1px solid #555563;
        border-radius: 0px;
        flex: 1;
        text-align: center;
        padding: 17px;
        padding-top: 68px;
        font-size: 11px;
    }

    .grid:hover {
        border: 1px solid #555563;
        background: #f1f1f1;
        color: #d4cfcf;
        cursor: pointer;
    }

    .Numbers1 {
        color: #615a5a;
    font-size: 11px;
    }

    .Numbers {
        text-align: center;
    position: absolute;
    color: black;
    top: 29px;
    font-weight: 800;
    margin-left: 16px;
    }

</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="padding-top: 58px;">
                <div id="gridss">
                    <div class="row">
                    
                        <div class="grid" data-row="1" data-col="1" onclick='GetContent(21,01,10)'>
                            <p class="Numbers">21</p>
                            <p class="Numbers1">21-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="21-01/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="2" onclick='GetContent(20,01,10)'>
                            <p class="Numbers">20</p>
                            <p class="Numbers1">20-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="20-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="3" onclick='GetContent(19,01,10)'>
                            <p class="Numbers">19</p>
                            <p class="Numbers1">19-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="19-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="4" onclick='GetContent(18,01,10)'>
                            <p class="Numbers">18</p>
                            <p class="Numbers1">18-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="18-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="5" onclick='GetContent(17,01,10)'>
                            <p class="Numbers">17</p>
                            <p class="Numbers1">17-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="17-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(16,01,10)'>
                            <p class="Numbers">16</p>
                            <p class="Numbers1">16-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="16-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(15,01,10)'>
                            <p class="Numbers">15</p>
                            <p class="Numbers1">15-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="15-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(14,01,10)'>
                            <p class="Numbers">14</p>
                            <p class="Numbers1">14-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="14-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(10,01,10)'>
                            <p class="Numbers">10</p>
                            <p class="Numbers1">10-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="10-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6"  onclick='GetContent(9,01,10)'>
                            <p class="Numbers">9</p>
                            <p class="Numbers1">09-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="09-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(8,01,10)'>
                            <p class="Numbers">8</p>
                            <p class="Numbers1">08-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="08-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(7,01,10)'>
                            <p class="Numbers">7</p>
                            <p class="Numbers1">07-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="07-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(6,01,10)'>
                            <p class="Numbers">6</p>
                            <p class="Numbers1">06-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="06-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(5,01,10)'>
                            <p class="Numbers">5</p>
                            <p class="Numbers1">04-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="05-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(4,01,10)'>
                            <p class="Numbers">4</p>
                            <p class="Numbers1">04-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="04-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(3,01,10)'>
                            <p class="Numbers">3</p>
                            <p class="Numbers1">03-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="03-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(2,01,10)'>
                            <p class="Numbers">2</p>
                            <p class="Numbers1">02-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="02-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(1,01,10)'>
                            <p class="Numbers">1</p>
                            <p class="Numbers1">01-01/10</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="01-01/10") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                    </div>
                
                <!-- //Row two -->
                <div class="row">
                    
                    <div class="grid" data-row="1" data-col="1" onclick='GetContent(21,11,20)'>
                        <p class="Numbers">21</p>
                        <p class="Numbers1">21-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="21-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="2" onclick='GetContent(20,11,20)'>
                        <p class="Numbers">20</p>
                        <p class="Numbers1">20-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="20-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="3" onclick='GetContent(19,11,20)'>
                        <p class="Numbers">19</p>
                        <p class="Numbers1">19-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="19-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="4" onclick='GetContent(18,11,20)'>
                        <p class="Numbers">18</p>
                        <p class="Numbers1">18-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="18-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="5" onclick='GetContent(17,11,20)'>
                        <p class="Numbers">17</p>
                        <p class="Numbers1">17-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="17-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(16,11,20)'>
                        <p class="Numbers">16</p>
                        <p class="Numbers1">16-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="16-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(15,11,20)'>
                        <p class="Numbers">15</p>
                        <p class="Numbers1">15-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="15-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(14,11,20)'>
                        <p class="Numbers">14</p>
                        <p class="Numbers1">14-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="14-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(10,11,20)'>
                        <p class="Numbers">10</p>
                        <p class="Numbers1">10-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="10-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6"  onclick='GetContent(9,11,20)'>
                        <p class="Numbers">9</p>
                        <p class="Numbers1">09-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="09-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(8,11,20)'>
                        <p class="Numbers">8</p>
                        <p class="Numbers1">08-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="08-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(7,11,20)'>
                        <p class="Numbers">7</p>
                        <p class="Numbers1">07-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="07-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(6,11,20)'>
                        <p class="Numbers">6</p>
                        <p class="Numbers1">06-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="06-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(5,11,20)'>
                        <p class="Numbers">5</p>
                        <p class="Numbers1">04-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="05-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(4,11,20)'>
                        <p class="Numbers">4</p>
                        <p class="Numbers1">04-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="04-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(3,11,20)'>
                        <p class="Numbers">3</p>
                        <p class="Numbers1">03-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="03-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(2,11,20)'>
                        <p class="Numbers">2</p>
                        <p class="Numbers1">02-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="02-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(1,11,20)'>
                        <p class="Numbers">1</p>
                        <p class="Numbers1">01-11/20</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="01-11/20") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                </div>
                <!-- row three -->
                <div class="row">
                    
                    <div class="grid" data-row="1" data-col="1" onclick='GetContent(21,21,30)'>
                        <p class="Numbers">21</p>
                        <p class="Numbers1">21-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="21-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="2" onclick='GetContent(20,21,30)'>
                        <p class="Numbers">20</p>
                        <p class="Numbers1">20-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="20-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="3" onclick='GetContent(19,21,30)'>
                        <p class="Numbers">19</p>
                        <p class="Numbers1">19-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="19-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="4" onclick='GetContent(18,21,30)'>
                        <p class="Numbers">18</p>
                        <p class="Numbers1">18-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="18-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="5" onclick='GetContent(17,21,30)'>
                        <p class="Numbers">17</p>
                        <p class="Numbers1">17-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="17-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(16,21,30)'>
                        <p class="Numbers">16</p>
                        <p class="Numbers1">16-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="16-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(15,21,30)'>
                        <p class="Numbers">15</p>
                        <p class="Numbers1">15-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="15-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(14,21,30)'>
                        <p class="Numbers">14</p>
                        <p class="Numbers1">14-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="14-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(10,21,30)'>
                        <p class="Numbers">10</p>
                        <p class="Numbers1">10-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="10-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6"  onclick='GetContent(9,21,30)'>
                        <p class="Numbers">9</p>
                        <p class="Numbers1">09-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="09-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(8,21,30)'>
                        <p class="Numbers">8</p>
                        <p class="Numbers1">08-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="08-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(7,21,30)'>
                        <p class="Numbers">7</p>
                        <p class="Numbers1">07-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="07-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(6,21,30)'>
                        <p class="Numbers">6</p>
                        <p class="Numbers1">06-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="06-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(5,21,30)'>
                        <p class="Numbers">5</p>
                        <p class="Numbers1">04-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="05-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(4,21,30)'>
                        <p class="Numbers">4</p>
                        <p class="Numbers1">04-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="04-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(3,21,30)'>
                        <p class="Numbers">3</p>
                        <p class="Numbers1">03-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="03-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(2,21,30)'>
                        <p class="Numbers">2</p>
                        <p class="Numbers1">02-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="02-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(1,21,30)'>
                        <p class="Numbers">1</p>
                        <p class="Numbers1">01-21/30</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="01-21/30") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                </div>
            
            <!-- Row four -->
            <div class="row">
                    
                    <div class="grid" data-row="1" data-col="1" onclick='GetContent(21,31,40)'>
                        <p class="Numbers">21</p>
                        <p class="Numbers1">21-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="21-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="2" onclick='GetContent(20,31,40)'>
                        <p class="Numbers">20</p>
                        <p class="Numbers1">20-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="20-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="3" onclick='GetContent(19,31,40)'>
                        <p class="Numbers">19</p>
                        <p class="Numbers1">19-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="19-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="4" onclick='GetContent(18,31,40)'>
                        <p class="Numbers">18</p>
                        <p class="Numbers1">18-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="18-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="5" onclick='GetContent(17,31,40)'>
                        <p class="Numbers">17</p>
                        <p class="Numbers1">17-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="17-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(16,31,40)'>
                        <p class="Numbers">16</p>
                        <p class="Numbers1">16-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="16-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(15,31,40)'>
                        <p class="Numbers">15</p>
                        <p class="Numbers1">15-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="15-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(14,31,40)'>
                        <p class="Numbers">14</p>
                        <p class="Numbers1">14-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="14-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(10,31,40)'>
                        <p class="Numbers">10</p>
                        <p class="Numbers1">10-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="10-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6"  onclick='GetContent(9,31,40)'>
                        <p class="Numbers">9</p>
                        <p class="Numbers1">09-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="09-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(8,31,40)'>
                        <p class="Numbers">8</p>
                        <p class="Numbers1">08-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="08-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(7,31,40)'>
                        <p class="Numbers">7</p>
                        <p class="Numbers1">07-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="07-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(6,31,40)'>
                        <p class="Numbers">6</p>
                        <p class="Numbers1">06-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="06-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(5,31,40)'>
                        <p class="Numbers">5</p>
                        <p class="Numbers1">04-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="05-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(4,31,40)'>
                        <p class="Numbers">4</p>
                        <p class="Numbers1">04-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="04-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(3,31,40)'>
                        <p class="Numbers">3</p>
                        <p class="Numbers1">03-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="03-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(2,31,40)'>
                        <p class="Numbers">2</p>
                        <p class="Numbers1">02-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="02-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(1,31,40)'>
                        <p class="Numbers">1</p>
                        <p class="Numbers1">01-31/40</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="01-31/40") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                </div>
                       
                  
      <!-- five -->
      <div class="row">
                    
                        <div class="grid" data-row="1" data-col="1" onclick='GetContent(21,41,50)'>
                            <p class="Numbers">21</p>
                            <p class="Numbers1">21-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="21-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="2" onclick='GetContent(20,41,50)'>
                            <p class="Numbers">20</p>
                            <p class="Numbers1">20-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="20-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="3" onclick='GetContent(19,41,50)'>
                            <p class="Numbers">19</p>
                            <p class="Numbers1">19-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="19-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="4" onclick='GetContent(18,41,50)'>
                            <p class="Numbers">18</p>
                            <p class="Numbers1">18-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="18-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="5" onclick='GetContent(17,41,50)'>
                            <p class="Numbers">17</p>
                            <p class="Numbers1">17-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="17-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(16,41,50)'>
                            <p class="Numbers">16</p>
                            <p class="Numbers1">16-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="16-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(15,41,50)'>
                            <p class="Numbers">15</p>
                            <p class="Numbers1">15-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="15-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(14,41,50)'>
                            <p class="Numbers">14</p>
                            <p class="Numbers1">14-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="14-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(10,41,50)'>
                            <p class="Numbers">10</p>
                            <p class="Numbers1">10-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="10-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6"  onclick='GetContent(9,41,50)'>
                            <p class="Numbers">9</p>
                            <p class="Numbers1">09-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="09-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(8,41,50)'>
                            <p class="Numbers">8</p>
                            <p class="Numbers1">08-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="08-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(7,41,50)'>
                            <p class="Numbers">7</p>
                            <p class="Numbers1">07-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="07-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(6,41,50)'>
                            <p class="Numbers">6</p>
                            <p class="Numbers1">06-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="06-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(5,41,50)'>
                            <p class="Numbers">5</p>
                            <p class="Numbers1">04-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="05-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(4,41,50)'>
                            <p class="Numbers">4</p>
                            <p class="Numbers1">04-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="04-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(3,41,50)'>
                            <p class="Numbers">3</p>
                            <p class="Numbers1">03-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="03-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(2,41,50)'>
                            <p class="Numbers">2</p>
                            <p class="Numbers1">02-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="02-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                        <div class="grid" data-row="1" data-col="6" onclick='GetContent(1,41,50)'>
                            <p class="Numbers">1</p>
                            <p class="Numbers1">01-41/50</p>
                            <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="01-41/50") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                                @endif @endforeach </ul>
                        </div>
                    </div>
                  
      <!-- six -->
      
      <div class="row">
                    
                    <div class="grid" data-row="1" data-col="1" onclick='GetContent(21,51,60)'>
                        <p class="Numbers">21</p>
                        <p class="Numbers1">21-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="21-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="2" onclick='GetContent(20,51,60)'>
                        <p class="Numbers">20</p>
                        <p class="Numbers1">20-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="20-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="3" onclick='GetContent(19,51,60)'>
                        <p class="Numbers">19</p>
                        <p class="Numbers1">19-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="19-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="4" onclick='GetContent(18,51,60)'>
                        <p class="Numbers">18</p>
                        <p class="Numbers1">18-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="18-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="5" onclick='GetContent(17,51,60)'>
                        <p class="Numbers">17</p>
                        <p class="Numbers1">17-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="17-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(16,51,60)'>
                        <p class="Numbers">16</p>
                        <p class="Numbers1">16-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="16-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(15,51,60)'>
                        <p class="Numbers">15</p>
                        <p class="Numbers1">15-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="15-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(14,51,60)'>
                        <p class="Numbers">14</p>
                        <p class="Numbers1">14-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="14-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(10,51,60)'>
                        <p class="Numbers">10</p>
                        <p class="Numbers1">10-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="10-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6"  onclick='GetContent(9,51,60)'>
                        <p class="Numbers">9</p>
                        <p class="Numbers1">09-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="09-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(8,51,60)'>
                        <p class="Numbers">8</p>
                        <p class="Numbers1">08-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="08-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(7,51,60)'>
                        <p class="Numbers">7</p>
                        <p class="Numbers1">07-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="07-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(6,51,60)'>
                        <p class="Numbers">6</p>
                        <p class="Numbers1">06-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="06-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(5,51,60)'>
                        <p class="Numbers">5</p>
                        <p class="Numbers1">04-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="05-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(4,51,60)'>
                        <p class="Numbers">4</p>
                        <p class="Numbers1">04-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="04-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(3,51,60)'>
                        <p class="Numbers">3</p>
                        <p class="Numbers1">03-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="03-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(2,51,60)'>
                        <p class="Numbers">2</p>
                        <p class="Numbers1">02-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="02-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                    <div class="grid" data-row="1" data-col="6" onclick='GetContent(1,51,60)'>
                        <p class="Numbers">1</p>
                        <p class="Numbers1">01-51/60</p>
                        <ul class="list-loc"> @foreach($goods_loc as $loc) @if($loc->location=="01-51/60") <li class="list-item"><a href="/dashboard/was/goods/{{$loc->id}}">{{$loc->serial_no}}</a></li>
                            @endif @endforeach </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>
function GetContent(col,two,rack){
    $("#lis").empty();
$("#locationSelect").modal('show');
				var data = {
					"col": col,
					"rack":rack,
				};
				$.ajax({
					type: "POST",
                    url: '/getresults/' + col+ ',' + two + ','+ rack,
                    type: "GET",
                dataType: "json",
                					success: function (data) { 
                                        $.each(data, function (key, value) {
                                        $("#lis").append('<li>'+value.serial_no+'</li>');
                                        });

						// $("#putprogress").html('<div class="circlechart mx-auto"style="width: 170px;" id="progressfill" data-percentage="'+data.replace(/['"]+/g, '')+'" ></div>');
						// $('.circlechart').circlechart();
						// $("#c").html($("#select_cottage_rate option:selected").text());
						// $("#s").html($("#select_season option:selected").text());

					}
				});
}

</script>
 <div class="modal fade" id="locationSelect" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h2>List of Goods in this location</h2>

        <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<ul id="lis">
</ul>      </div>
     
    </div>
  </div>
</div>

 @endsection
