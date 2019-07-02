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
 <style type="text/css">
 
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
                    <h4 class="card-title">Artikel hinzufügen</h4>
                    <form class="form-material m-t-40" method="POST" action="/dashboard/was/goods">
                        @csrf
                        <div class="form-group">

                            <label>Artikelbezeichnung</label>
                            <select name="name" class="form-control {{ $errors->has('name') ? 'error-i' : ''}}" >
                                <option value="SchutzfolieNovacell">SchutzfolieNovacell (protectfoil)</option>
                                <option value="SchutzfolieNitto">SchutzfolieNitto (protectfoil)</option>
                                <option value="Fremdfolie">Fremdfolie</option>
                                <option value="PapierMünskjo">PapierMünskjo</option>
                                <option value="Papphülsen">Papphülsen</option>
                                <option value="Seidenpapier">Seidenpapier</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-email">Artikelnummer</label>
                            <select name="item_no" class="form-control ">
                                <option value=" "></option>
                                <option value="4223">4223</option>
                                <option value="4223-ohne Streifen">4223-ohne Streifen</option>
                                <option value="4224-ohne Streifen">4224-ohne Streifen</option>
                                <option value="4224">4224</option>
                                <option value="4324">4324</option>
                                <option value="4204">4204</option>
                                <option value="4228_REF">4228_REF</option>
                                <option value="4805">4805</option>
                                <option value="4105">4105</option>
                                <option value="4241">4241</option>
                                <option value="4318_REM">4318_REM</option>
                                <option value="9371">9371</option>
                                <option value="SPV224 Blau">SPV224 Blau</option>
                                <option value="SPV224 PR-M Blau">SPV224 PR-M Blau</option>
                                <option value="SPV 30804">SPV 30804</option>
                                <option value="SPV 3067 M">SPV 3067 M</option>
                                <option value="SPV 6065 E5">SPV 6065 E5</option>
                                <option value="SPV 6065 E7">SPV 6065 E7</option>
                                <option value="SPV FKT5 DD2">SPV FKT5 DD2</option>
                                <option value="SPVLC00H33_78">SPVLC00H33_78</option>
                                <option value="6707 AP7">6707 AP7</option>
                                <option value="4213">4213</option>
                                <option value="4271">4271</option>
                                <option value="FIL3072LA5X1250">FIL3072LA5X1250</option>
                                <option value="4294">4294</option>
                                <option value="4224_RE">4224_RE</option>
                                <option value="9309">9309</option>
                                <option value="4501">4501</option>
                                <option value="4504">4504</option>
                                <option value="4503">4503</option>
                                <option value="4505">4505</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <select name="unit" class="form-control {{ $errors->has('unit') ? 'error-i' : ''}}">
                                <option>Rolle (coil)</option>
                                <option>Stück (piece)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Breite</label>
                            <input name="width" type="text" class="form-control {{ $errors->has('width') ? 'error-i' : ''}}" >
                        </div>
                        <div class="form-group">
                            <label>lfm</label>
                            <input name="rm" type="text" class="form-control " >
                        </div>
                        <div class="form-group">
                            <label>Innendurchmesser</label>
                            <select name="innendurchmesser" class="form-control">
                            <option value=' ' selected></option>
                            <option value='300'>300</option>
                            <option value='400'>400</option>
                            <option value='500'>500</option>
                            <option value='600'>600</option>

                        </select>
                        </div>
                        <div class="form-group">
                            <label>Hub-Art</label>
                            <select name="hub_art" class="form-control {{ $errors->has('hub_art') ? 'error-i' : ''}}">
                            <option value='Kombination' selected>Kombination</option>
                            <option value='Lagervorrat'>Lagervorrat</option>
                        </select>
                        </div>

                        <div class="form-group">
                            <label>Barcode</label>
                            <input type="text" name="barcode" value="{{$barCode1}}" readonly class="form-control  text-blue" id="barcode">
                            <br>
                            <div id='se'>
                            <svg class="code128"></svg></div>
                            <div id="imgbar"></div>
                            <button class="btn btn-primary" type="button" onclick="PrintBarcode();">Barcode drucken</button>
                        </div>

                        <div class="form-group">
                            <label>Seriennummer.</label>
                            <input type="text" name="serial_no" readonly value="{{$serialTime}}"class="form-control">
                        </div>
                        <div class="form-row">
                        <div class="col-md-2 form-group">
                        <label>Reihe</label>
                        <select name="Reihe" class="form-control text-danger {{ $errors->has('Reihe') ? 'error-i' : ''}}">
                        <option value="21" selected>21</option>
                        <option value="20">20</option>
                        <option value="19">19</option>
                        <option value="18">18</option>
                        <option value="17">17</option>
                        <option value="16">16</option>
                        <option value="15">15</option>
                        <option value="14">14</option>
                        <option value="10">10</option>
                        <option value="9">9</option>
                        <option value="8">8</option>
                        <option value="7">7</option>
                        <option value="6">6</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        </select>
                        </div>
                        <div class="col-md-2">
                        <label>Höhe</label>
                        <select name="Höhe"  placeholder="Höhe"  class="form-control text-danger {{ $errors->has('Höhe') ? 'error-i' : ''}}">
                        <option value="1" selected> 1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <select>
                        </div>
                        <div class="col-md-2">
                        <label>Stellplatz</label>
                        <input type="number"  name="Stellplatz" min="0" max="60"  placeholder="Stellplatz"  class="form-control {{ $errors->has('Stellplatz') ? 'error-i' : ''}} text-danger">
                        </div>
                        </div>
                        <div name="Kombi-Nr" class="form-group">
                        <label>Kombi-Nr.</label>
                        <input name="kombi_nr" type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Maschine</label>
                            <select name="maschine" class="form-control ">
                                <option value=' '> </option>
                                <option value='M01'>M01</option>
                                <option value='M02'>M02</option>
                                <option value='M03'>M03</option>
                                <option value='M04'>M04</option>
                                <option value='M06'>M06</option>
                                <option value='M07'>M07</option>
                                <option value='M12'>M12</option>
                                <option value='M16'>M16</option>
                                <option value='M17'>M17</option>
                                <option value='M21'>M21</option>
                                <option value='M22'>M22</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Fremd-Hub</label>
                            <select name="fremd_hub" class="form-control">
                                <option value='Kombination'>Kombination</option>
                                <option value='Aleris Duffel'>Aleris Duffel</option>
                                <option value='Constellium (F)'>Constellium (F)</option>
                                <option value='Hydro'>Hydro</option>
                                <option value='STS'>STS</option>
                                <option value='KME'>KME</option>
                                <option value='TAD'>TAD</option>
                                <option value='Arconic'>Arconic</option>
                                <option value='API'>API</option>
                            </select>
                            <textarea class="form-control" name="FremdSomeText"rows="2" col="3"></textarea>

                        </div>
                        <div class="form-group">
                            <label>Kommission</label>
                            <input name="kommission" type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Multiartikel</label>
                            <input name="multiartikel" value="" type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Kunde (nur bei Fremd-HUB)</label>
                            <input name="kunde" type="text" class="form-control" >
                        </div>
                        <!-- <div class="form-group">
                            <label for="">WE-Datum </label>
                            <input name="we_datum" type="text" id="date" class="form-control" >
                        </div> -->
                        <div class="form-group">
                            <input type="submit" value="Speichern" class="right btn btn-success">
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
        <button type="button" class="btn btn-primary" id="saveSelected">Speichern</button>
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
// var MyDate=new Date();

//   var MyDateString = (MyDate.getFullYear()) + '-'
//              + ('0' + (MyDate.getMonth()+1)).slice(-2) + '-'
//              + ('0' + MyDate.getDate()).slice(-2);
// $('#date').datepicker({
//             uiLibrary: 'bootstrap4',
//             format: 'yyyy-mm-dd',
//             value: MyDateString
//         });
       
// });
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
    JsBarcode(".code128", "{{$barCode1}}");
    document.getElementById('barcode').onchange = function () {
        JsBarcode(".code128", document.getElementById('barcode').value);
    }
    function PrintBarcode() {  
//window.print();  
var panel = document.getElementById("se");  
var printWindow = window.open('','','height=600,width=800');  
printWindow.document.write('<html><head><style> @media print {body, html, p {margin:0pt !important;  overflow: hidden !important; max-height: 100%; padding: 0pt !important;}@page {margin: 0pt !important;padding: 0pt !important;}}@media print {.header, .hide { visibility: hidden }} @media print {#Header, #Footer { display: none !important; }} @media print {@page {size: 696px 271px;} @page { margin: 0mm; }} svg{width:auto;height:auto;}</style>');  
printWindow.document.write('</head><body  >');  
printWindow.document.write(panel.innerHTML);  
printWindow.document.write('</body></html>');  
printWindow.document.close();  

setTimeout  
(function () {  
printWindow.print();
printWindow.close();
}, 500);  

return false;  
}   
</script>

@endsection