@extends('layouts.dashboard')

@section('content')
<style>
@media (min-width: 992px){
.modal-lg {
    max-width: 1467px;
}}
.grid {
    background: #aaaab1;
    color: #FFFFFF;
    border: 1px solid #555563;
    border-radius: 5px;
    flex: 1;
    text-align: center;
    font-size: 11px;
    padding: 18px;
    padding-bottom: 32px;
    padding-top: 32px;
}
</style>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @php
        $d = 0
        @endphp
            @foreach ($errors->all() as $error)
            @if($d==0)
                <li>{{ $error }}</li>
            @endif
            @php
            $d+=1;@endphp
            @endforeach
        </ul>
        </div>
        @endif
                    <h4 class="card-title">Artikel hinzufügen </h4>
                    <form class="form-material m-t-40" method="POST" action="/updatetit/{{$good->id}}">
                        @csrf
                        <div class="form-group">
                            <label>Artikelbezeichnung</label>
                            <select name="name" class="form-control {{ $errors->has('name') ? 'error-i' : ''}}" >
                                <option value="SchutzfolieNovacell" {{ $good->name == 'SchutzfolieNovacell' ? 'selected="selected"' : '' }}>SchutzfolieNovacell (protectfoil)</option>
                                <option value="SchutzfolieNitto" {{ $good->name == 'SchutzfolieNitto' ? 'selected="selected"' : '' }}>SchutzfolieNitto (protectfoil)</option>
                                <option value="Fremdfolie" {{ $good->name == 'Fremdfolie' ? 'selected="selected"' : '' }}>Fremdfolie</option>
                                <option value="PapierMünskjo" {{ $good->name == 'PapierMünskjo' ? 'selected="selected"' : '' }}>PapierMünskjo</option>
                                <option value="Papphülsen" {{$good->name == 'Papphülsen' ? 'selected="selected"' : '' }}>Papphülsen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-email">Artikelnummer</label>
                            <select name="item_no" class="form-control ">
                            <option value="" ></option>
                            <option value="4224" {{$good->item_no == '4224' ? 'selected="selected"' : '' }}>4224</option>
                                <option value="4324" {{$good->item_no == '4324' ? 'selected="selected"' : '' }}>4324</option>
                                <option value="4204" {{$good->item_no == '4204' ? 'selected="selected"' : '' }}>4204</option>
                                <option value="4228_REF" {{$good->item_no == '4228_REF' ? 'selected="selected"' : '' }}> 4228_REF</option>
                                <option value="4805" {{$good->item_no == '4805' ? 'selected="selected"' : '' }}>4805</option>
                                <option value="4105" {{$good->item_no == '4105' ? 'selected="selected"' : '' }}>4105</option>
                                <option value="4241" {{$good->item_no == '4241' ? 'selected="selected"' : '' }}>4241</option>
                                <option value="4318_REM" {{$good->item_no == '4318_REM' ? 'selected="selected"' : '' }}>4318_REM</option>
                                <option value="9371" {{$good->item_no == '9371' ? 'selected="selected"' : '' }}>9371</option>
                                <option value="SPV224 Blau" {{$good->item_no == 'SPV224 PR-M Blau' ? 'selected="selected"' : '' }}>SPV224 Blau</option>
                                <option value="SPV224 PR-M Blau" {{$good->item_no == 'SPV224 PR-M Blau' ? 'selected="selected"' : '' }}>SPV224 PR-M Blau</option>
                                <option value="SPV 30804" {{$good->item_no == 'SPV 30804' ? 'selected="selected"' : '' }}>SPV 30804</option>
                                <option value="SPV 3067 M"{{$good->item_no == 'SPV 3067 M' ? 'selected="selected"' : '' }}>SPV 3067 M</option>
                                <option value="SPV 6065 E5"{{$good->item_no == 'SPV 6065 E5' ? 'selected="selected"' : '' }}>SPV 6065 E5</option>
                                <option value="SPV 6065 E7"{{$good->item_no == 'SPV 6065 E7' ? 'selected="selected"' : '' }}>SPV 6065 E7</option>
                                <option value="SPV FKT5 DD2"{{$good->item_no == 'SPV FKT5 DD2' ? 'selected="selected"' : '' }}>SPV FKT5 DD2</option>
                                <option value="SPVLC00H33_78"{{$good->item_no == 'SPVLC00H33_78' ? 'selected="selected"' : '' }}>SPVLC00H33_78</option>
                                <option value="6707 AP7"{{$good->item_no == '6707 AP7' ? 'selected="selected"' : '' }}>6707 AP7</option>
                                <option value="4213"{{$good->item_no == '4213' ? 'selected="selected"' : '' }}>4213</option>
                                <option value="4271"{{$good->item_no == '4271' ? 'selected="selected"' : '' }}>4271</option>
                                <option value="FIL3072LA5X1250"{{$good->item_no == 'FIL3072LA5X1250' ? 'selected="selected"' : '' }}>FIL3072LA5X1250</option>
                                <option value="4294"{{$good->item_no == '4294' ? 'selected="selected"' : '' }}>4294</option>
                                <option value="4224_RE"{{$good->item_no == '4224_RE' ? 'selected="selected"' : '' }}>4224_RE</option>
                                <option value="9309"{{$good->item_no == '9309' ? 'selected="selected"' : '' }}>9309</option>
                                <option value="4501"{{$good->item_no == '4501' ? 'selected="selected"' : '' }}>4501</option>
                                <option value="4504"{{$good->item_no == '4501' ? 'selected="selected"' : '' }}>4504</option>
                                <option value="4503"{{$good->item_no == '4501' ? 'selected="selected"' : '' }}>4503</option>
                                <option value="4505"{{$good->item_no == '4501' ? 'selected="selected"' : '' }}>4505</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <input type="text"  name="unit" class="form-control" value="{{$good->unit}}" >
                        </div>
                        <div class="form-group" >
                            <label>Breite</label>
                            <input name="widthq" type="text" value="{{$good->width}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>lfm</label>
                            <input name="rm" type="text" value="{{$good->rm}}"  class="form-control"  >
                        </div>
                        <div class="form-group">
                            <label>Innendurchmesser</label>
                            <select name="innendurchmesser" class="form-control">
                            <option value=' ' ></option>
                            <option value='300' {{$good->innendurchmesser == '300' ? 'selected="selected"' : '' }} >300</option>
                            <option value='400'{{$good->innendurchmesser== '400' ? 'selected="selected"' : '' }} >400</option>
                            <option value='500'{{$good->innendurchmesser == '500' ? 'selected="selected"' : '' }} >500</option>
                            <option value='600'{{$good->innendurchmesser== '600' ? 'selected="selected"' : '' }} >600</option>

                        </select>
                        </div>
                        <div class="form-group">
                            <label>Hub-Art</label>
                            <input name="hub_art"  type="text" value="{{$good->hub_art}}"  class="form-control"  >
                        </div>

                        <div class="form-group">
                            <label>Barcode</label>
                            <input type="text" name="barcode"  readonly value="{{$good->barcode}}"  class="form-control text-blue" id="barcode">
                            <br>
                            <svg id="code128"></svg>
                        </div>

                        <div class="form-group">
                            <label>Serial No.</label>
                            <input type="text" name="serial_no"  value="{{$good->serial_no}}" readonly class="form-control">
                        </div>
                        <div class="form-row">
                        <div class="col-md-2 form-group">
                        <label>Reihe</label>
                        <select name="Reihe" class="form-control text-danger">
                        <option value="21" {{ $good->loc_row == 21 ? 'selected="selected"' : '' }} >21</option>
                        <option value="20"{{ $good->loc_row == 20 ? 'selected="selected"' : '' }}>20</option>
                        <option value="19"{{ $good->loc_row == 19 ? 'selected="selected"' : '' }}>19</option>
                        <option value="18"{{ $good->loc_row == 18 ? 'selected="selected"' : '' }}>18</option>
                        <option value="17" {{ $good->loc_row == 17 ? 'selected="selected"' : '' }}>17</option>
                        <option value="16" {{ $good->loc_row == 16 ? 'selected="selected"' : '' }}>16</option>
                        <option value="15" {{ $good->loc_row == 15 ? 'selected="selected"' : '' }}>15</option>
                        <option value="14" {{ $good->loc_row == 14 ? 'selected="selected"' : '' }}>14</option>
                        <option value="10" {{ $good->loc_row == 10 ? 'selected="selected"' : '' }}>10</option>
                        <option value="9"  {{ $good->loc_row == 9 ? 'selected="selected"' : '' }}>9</option>
                        <option value="8"  {{ $good->loc_row == 8 ? 'selected="selected"' : '' }}>8</option>
                        <option value="7"  {{ $good->loc_row == 7 ? 'selected="selected"' : '' }}>7</option>
                        <option value="6"  {{ $good->loc_row == 6 ? 'selected="selected"' : '' }}>6</option>
                        <option value="5"  {{ $good->loc_row == 5 ? 'selected="selected"' : '' }}>5</option>
                        <option value="4"  {{ $good->loc_row == 4 ? 'selected="selected"' : '' }}>4</option>
                        <option value="3"  {{ $good->loc_row == 3 ? 'selected="selected"' : '' }}>3</option>
                        <option value="2" {{ $good->loc_row == 2 ? 'selected="selected"' : '' }}>2</option>
                        <option value="1" {{ $good->loc_row == 1 ? 'selected="selected"' : '' }}>1</option>
                        </select>
                        </div>
                        <div class="col-md-2">
                        <label>Höhe</label>
                        <select name="Höhe"  placeholder="Höhe"  class="form-control text-danger">
                        <option value="1" {{ $good->loc_height == 1 ? 'selected="selected"' : '' }}>1</option>
                        <option value="2"  {{ $good->loc_height == '2' ? 'selected="selected"' : '' }}>2</option>
                        <option value="3"  {{ $good->loc_height == 3 ? 'selected="selected"' : '' }}>3</option>
                        <option value="4"  {{ $good->loc_height == 4 ? 'selected="selected"' : '' }}>4</option>
                        <select>
                        </div> 
                        <div class="col-md-2">
                        <label>Stellplatz</label>
                        <input type="number"  name="Stellplatz" min="0" max="60"  value="{{$good->stellplatz}}" placeholder="Stellplatz"  class="form-control text-danger">
                        </div>
                        </div>
                        <div name="Kombi-Nr" class="form-group">
                            <label>Kombi-Nr.</label>
                            <input name="kombi_nr"  value="{{$good->kombi_nr}}" type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Maschine</label>
                            <select name="maschine" class="form-control {{ $errors->has('maschine') ? 'error-i' : ''}}">
                                <option value=' '> </option>
                                <option value='M01' {{ $good->maschine == 'M01' ? 'selected="selected"' : '' }}>M01</option>
                                <option value='M02' {{ $good->maschine == 'M02' ? 'selected="selected"' : '' }}>M02</option>
                                <option value='M03' {{ $good->maschine == 'M03' ? 'selected="selected"' : '' }}>M03</option>
                                <option value='M04' {{ $good->maschine == 'M04' ? 'selected="selected"' : '' }}>M04</option>
                                <option value='M06' {{ $good->maschine == 'M06' ? 'selected="selected"' : '' }}>M06</option>
                                <option value='M07' {{ $good->maschine == 'M07' ? 'selected="selected"' : '' }}>M07</option>
                                <option value='M12' {{ $good->maschine == 'M12' ? 'selected="selected"' : '' }}>M12</option>
                                <option value='M16' {{ $good->maschine == 'M16' ? 'selected="selected"' : '' }}>M16</option>
                                <option value='M17' {{ $good->maschine == 'M17' ? 'selected="selected"' : '' }}>M17</option>
                                <option value='M21' {{ $good->maschine == 'M21' ? 'selected="selected"' : '' }}>M21</option>
                                <option value='M22' {{ $good->maschine == 'M22' ? 'selected="selected"' : '' }}>M22</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Fremd-Hub</label>
                            <input name="fremd_hub"  value="{{$good->fremd_hub}}" type="text" class="form-control" >
                            <p>{{$good->FremdSomeText}}</p>
                        </div>
                        <div class="form-group">
                            <label>Kommission</label>
                            <input name="kommission" value="{{$good->kommission}}"  type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Multiartikel</label>
                            <input name="multiartikel" value="{{$good->multiartikel}}"  type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Kunde (nur bei Fremd-HUB)</label>
                            <input name="kunde" value="{{$good->kunde}}" type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="">WE-Datum </label>
                            <input name="we_datum" readonly value="{{$good->we_datum}}" id="date" type="text" class="form-control" readonly >
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Bearbeiten bestätigen" class="right btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>        
  <div class="modal fade  " id="locationSelect" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Location   Selected Shelf : <span id="gets" style="color:#c62d2d"></span> </h5>
        <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="grids"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="saveSelected">Save</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/jsbarcode/3.3.20/JsBarcode.all.min.js"></script>
<script>
$(function() {

    generate();
    clear();
    CheckNumber();
    $("#saveSelected").on("click", function() {
        $('#locationSelect').modal('hide');
});
$("#close").on("click", function() {
    $(".grid").removeClass("selectedLoc");
    $("#dd").attr('value'," ");
   $('#locationSelect').modal('hide');
});
$('#date').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
});
function getNum(i)
{
    if(i==1){return 21;}
    if(i==2){return 20;}
    if(i==3){return 19;}
    if(i==4){return 18;}
    if(i==5){return 17;}
    if(i==6){return 16;}
    if(i==7){return 15;}
    if(i==8){return 14;}
    if(i==9){return 10;}
    if(i==10){return 9;}
    if(i==11){return 8;}
    if(i==12){return 7;}
    if(i==13){return 6;}
    if(i==14){return 5;}
    if(i==15){return 4;}
    if(i==16){return 3;}
    if(i==17){return 2;}
    if(i==18){return 1;}
}
function generate() {
    var f=0;
    var tens=10;
        var value = 6;
        var content = "";
        var num = 1;
        for (var i = 1; i <= value; i++) {
            for (var j = 1; j <= value+12; j++) {
                fact=getNum(j);
                if (j === 1) {
                    content += "<div class='row'><div class='grid' data-portion='"+fact+'-'+(i-1)+'1/'+tens+"'>" +fact+'-'+(i-1)+'1/'+tens+"</div>";
                } else if (j === value+12) {
                    content += "<div class='grid' data-portion='"+fact+'-'+(i-1)+'1/'+tens+"'>"  +fact+'-'+(i-1)+'1/'+tens+"</div></div>";
                } else {
                    content += "<div class='grid' data-portion='"+fact+'-'+(i-1)+'1/'+tens+"'>"  +fact+'-'+(i-1)+'1/'+tens+"</div>";
                }
                num++;
                
            }
            tens+=10;
        }
        $("#grids").html(content);
}

//Event delegation
function CheckNumber() {
    $("#grids").on("click", ".grid", function() {
        var portion = $(this).data("portion");
        $(".grid").removeClass("selectedLoc");
        $(this).addClass("selectedLoc");
        $("#dd").attr('value', portion);
        $("#gets").text(portion);


    });
}

function clear() {
    $("#clearButton").on("click", function() {
        $("#grids").html(" ");
    });
}
</script>
<script>
     $('#selectLoc').click(function () {
        $('#locationSelect').modal('show');
      });
    JsBarcode("#code128", "{{$good->barcode}}");
    document.getElementById('barcode').onchange = function () {
        JsBarcode("#code128", document.getElementById('barcode').value);
    }

</script>


@endsection