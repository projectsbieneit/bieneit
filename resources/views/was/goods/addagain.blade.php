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
                    <h4 class="card-title">Artikel hinzufügen</h4>
                    <form class="form-material m-t-40" method="POST" action="/dashboard/was/goods">
                        @csrf
                        <input type="hidden" name="idold" class="form-control" value="{{$good->id}}" readonly>
                        <input type="hidden" name="addagain" class="form-control" value="yes" readonly>
                        <input type="hidden" name="oldwidth" class="form-control" value="{{$good->width}}" readonly>

                        <div class="form-group">
                            <label>Artikelbezeichnung</label>
                            <input type="text" name="name" class="form-control" value="{{$good->name}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="example-email">Artikelnummer</label>
                            <input type="text"  name="item_no" class="form-control" value="{{$good->item_no}}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <input type="text"  name="unit" class="form-control" value="{{$good->unit}}" readonly>
                        </div>
                        <div class="form-group" >
                            <label>Anzahl der vom ursprünglichen Artikel geschnittenen Teile</label>
                            <input name="cutit" type="text"  value="{{$good->cutit}}" id="input" placeholder="Zwischen 1 und 250"class="form-control"style="background-color: aliceblue !important;">
                             <span id='error_cut' class="text-danger"></span>
                        </div>
                        <div class="form-group" >
                            <label>Breite je geschnittenem Teil</label>
                            <input name="width" type="text" value="{{$good->width}}" id="newwdith" class="form-control"style="background-color: aliceblue !important;">
                        </div>
                        <div class="form-group">
                            <label>lfm</label>
                            <input name="rm" type="text" value="{{$good->rm}}" readonly class="form-control" readonly >
                        </div>
                        <div class="form-group">
                            <label>Innendurchmesser</label>
                            <select name="innendurchmesser" class="form-control " readonly>
                            <option value=' ' ></option>
                            <option value='300' {{$good->innendurchmesser == '300' ? 'selected="selected"' : '' }} >300</option>
                            <option value='400'{{$good->innendurchmesser== '400' ? 'selected="selected"' : '' }} >400</option>
                            <option value='500'{{$good->innendurchmesser == '500' ? 'selected="selected"' : '' }} >500</option>
                            <option value='600'{{$good->innendurchmesser== '600' ? 'selected="selected"' : '' }} >600</option>

                        </select>
                        </div>
                        <div class="form-group">
                            <label>Hub-Art</label>
                            <input name="hub_art"  type="text" value="{{$good->hub_art}}"  class="form-control" readonly >
                        </div>
                        <div class="form-group">
                            <label>Barcode</label>
                            <input type="hidden" name="oldBarcode" value="{{$good->barcode}}" readonly class="form-control text-blue" >

                            <input type="text" name="barcode" value="{{$barCode1}}" readonly class="form-control text-blue" id="barcode">
                            <br>
                            <div id='se'>
                            <svg id="code128"></svg></div>
                            <!-- <button class="btn btn-primary" type="button" onclick="PrintBarcode();">Barcode drucken</button> -->
                        </div>
                        <div class="form-group">
                            <label>Serial No.</label>
                            <input type="text" name="serial_no" readonly value="{{$serialTime}}" class="form-control">
                        </div>
                        <div class="form-row">
                        <div class="col-md-2 form-group">
                        <label>Reihe</label>
                        <input type="text" name="Reihe" readonly value="{{$good->loc_row}}" class="form-control text-danger">
                        </select>
                        </div>
                        <div class="col-md-2">
                        <label>Höhe</label>
                        <input type="number"  name="Höhe" min="1" max="4" readonly value="{{$good->loc_height}}"  placeholder="Höhe"  class="form-control text-danger">
                        </div>
                        <div class="col-md-2">
                        <label>Stellplatz</label>
                        <input type="number"  name="Stellplatz" min="0" max="60" readonly value="{{$good->loc_rack}}"   placeholder="Stellplatz"  class="form-control text-danger">
                        </div>
                        </div>
                        <div name="Kombi-Nr" class="form-group">
                            <label>Kombi-Nr.</label>
                            <input name="kombi_nr" readonly value="{{$good->kombi_nr}}" type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Maschine</label>
                            <input name="maschine" readonly value="{{$good->maschine}}" type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Fremd-Hub</label>
                            <input name="fremd_hub" readonly value="{{$good->fremd_hub}}" type="text" class="form-control" >
                            <p>{{$good->FremdSomeText}}</p>
                        </div>
                        <div class="form-group">
                            <label>Kommission</label>
                            <input name="kommission" value="{{$good->kommission}}" readonly type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Multiartikel</label>
                            <input name="multiartikel" value="{{$good->multiartikel}}" readonly type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Kunde (nur bei Fremd-HUB)</label>
                            <input name="kunde" value="{{$good->kunde}}" type="text" class="form-control" >
                        </div>
                        <!-- <div class="form-group">
                            <label for="">WE-Datum </label> -->
                            <input name="datetime" value="{{$good->created_at}}"  readonly type="hidden" class="form-control" >
                        <!-- </div> -->
                        <div class="form-group">
                            <input type="submit" value="Schneiden bestätigen" class="right btn btn-success">
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
const totalBarcodes = [];
$(function() {
    clear();
    $("#saveSelected").on("click", function() {
        $('#locationSelect').modal('hide');
});
$("#close").on("click", function() {
    $(".grid").removeClass("selectedLoc");
    $("#dd").attr('value'," ");
   $('#locationSelect').modal('hide');
});

$('#input').blur(function(){
        var value2= $(this).val();
        var getwidth= $('#newwdith').val();
        var check =oldwidth-getwidth*value2;
        var oldwidth= {{$good->width}};
        if(check<0){
            $('#error_cut').append("Please enter correct value");
       }
});});
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
// function generate() {
//     var f=0;
//     var tens=10;
//         var value = 6;
//         var content = "";
//         var num = 1;
//         for (var i = 1; i <= value; i++) {
//             for (var j = 1; j <= value+12; j++) {
//                 fact=getNum(j);
//                 if (j === 1) {
//                     content += "<div class='row'><div class='grid' data-portion='"+fact+'-'+(i-1)+'1/'+tens+"'>" +fact+'-'+(i-1)+'1/'+tens+"</div>";
//                 } else if (j === value+12) {
//                     content += "<div class='grid' data-portion='"+fact+'-'+(i-1)+'1/'+tens+"'>"  +fact+'-'+(i-1)+'1/'+tens+"</div></div>";
//                 } else {
//                     content += "<div class='grid' data-portion='"+fact+'-'+(i-1)+'1/'+tens+"'>"  +fact+'-'+(i-1)+'1/'+tens+"</div>";
//                 }
//                 num++;
                
//             }
//             tens+=10;
//         }
//         $("#grids").html(content);
// }

//Event delegation
// function CheckNumber() {
//     $("#grids").on("click", ".grid", function() {
//         var portion = $(this).data("portion");
//         $(".grid").removeClass("selectedLoc");
//         $(this).addClass("selectedLoc");
//         $("#dd").attr('value', portion);
//         $("#gets").text(portion);

//     });
// }
function PrintBarcode() {  
//window.print();  
var panel = document.getElementById("se");  
var printWindow = window.open('','','height=600,width=800');  
@extends('layouts.dashboard') @section('content') <div class="row">
    <div class="col-12">
        <div class="card"> @if(Auth::user()->role == 2) <div class="row justify-content-center">
                <div class="col-3">
                    <a href="/addagain/{{$good->id}}" class="btn btn-primary mx-auto mt-5 = d-table">Schneiden</a>
                </div>
                <div class="col-3">
                    <a href="/update/{{$good->id}}" class="btn btn-primary mx-auto mt-5  d-table">Bearbeiten</a>
                </div>
                <div class="col-3">
                    <a href="javascript:void(0)" onclick="confirm1();" class="btn btn-danger text-center mx-auto mt-5  d-table">Löschen</a>
                </div>
            </div> @endif <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-right"><strong>Artikelbezeichnung:</strong></td>
                                <td>{{$good->name}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Artikelnummer:</strong></td>
                                <td>{{$good->item_no}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Unit:</strong></td>
                                <td>{{$good->unit}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Seriennummer:</strong></td>
                                <td>{{$good->serial_no}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Barcode:</strong></td>
                                <td>{{$good->barcode}}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <div id='se'>
                                        <svg class="code128"></svg></div> <button class="btn btn-warning" type="button" onclick="PrintBarcode();">Barcode
                                        drucken</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Breite:</strong></td>
                                <td>{{$good->width}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>lfm:</strong></td>
                                <td>{{$good->rm}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>lfm:</strong></td>
                                <td>{{$good->innendurchmesser}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Hub-Art:</strong></td>
                                <td>{{$good->hub_art}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Kombi-Nr:</strong></td>
                                <td>{{$good->kombi_nr}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Maschine:</strong></td>
                                <td>{{$good->maschine}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Fremd-Hub:</strong></td>
                                <td>{{$good->fremd_hub}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Use:</strong></td>
                                <td>{{$good->use}} Foil Coil</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Kommission:</strong></td>
                                <td>{{$good->kommission}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Multiartikel:</strong></td>
                                <td>{{$good->multiartikel}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Kunde:</strong></td>
                                <td>{{$good->kunde}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Anzahl an geschnittenen Teilen:</strong></td>
                                <td>{{$good->cutit}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>WE Datum:</strong></td>
                                <td>{{$good->we_datum}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> @endsection @section('scripts') <script src="https://cdn.jsdelivr.net/jsbarcode/3.3.20/JsBarcode.all.min.js"></script>
<script>
    JsBarcode(".code128", "{{$good->serial_no}}");

    function confirm1() {
        $('#modal').modal('show');
        return false;
    }

    function PrintBarcode() {
        //window.print();  
        var panel = document.getElementById("se");
        var printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write('<html><head><style> @media print {body, html, p {margin:0pt !important;  overflow: hidden !important; max-height: 100%; padding: 0pt !important;}@page {margin: 0pt !important;padding: 0pt !important;}}@media print {.header, .hide { visibility: hidden }} @media print {#Header, #Footer { display: none !important; }} @media print {@page {size: 257px 128px;} @page { margin: 0mm !important; }} </style>');
        printWindow.document.write('</head><body  >');
        printWindow.document.write(panel.innerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        setTimeout(function () {
            printWindow.print();
            printWindow.close();
        }, 500);
        return false;
    }

</script>
<div class="modal" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Löschen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Wollen sie den Artikel löschen</p>
                <a href="/delete/{{$good->id}}" class="btn btn-danger">Confirm</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> @endsection
  
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
    JsBarcode("#code128", "{{$barCode1}}");
    document.getElementById('barcode').onchange = function () {
        JsBarcode("#code128", document.getElementById('barcode').value);
    }
    var BBbarcodes;
    function callModel(thiss){
        console.log(thiss);
        $.ajax({
    url: '/getBarcodeDetails/'+thiss,
    type: 'GET',
    dataType: 'JSON',
    success: function (data) {
        BBbarcodes=data;
        var total =data.length;
        $('#exp').modal('show');  
        $('.de').addClass('show');
        $('.de').addClass('d-block');

    }
        
});
    }
  function callPDF($id) {
    console.log(BBbarcodes[0]['DividedBarcodes']);
    window.open('/PDF/'+BBbarcodes[0]['DividedBarcodes'], '_blank');
    location.href = 'http://ec2-18-185-136-4.eu-central-1.compute.amazonaws.com/dashboard/was/goods';
    }
    $(document).ready(function() {
        
     @if(session()->has('data'))
      callModel({{session('data')}});
      @endif 
  });
</script>
<div class="modal de fade" id="exp" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Barcodes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="location.href = 'http://ec2-18-185-136-4.eu-central-1.compute.amazonaws.com/dashboard/was/goods'">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="d">
      <form >
     <div class="form-group">
    <label for="exampleFormControlSelect1">Successfully created please print barcodes </label>
    <input type='hidden' value='{{session('data')}}' id="valueID">
     </div>
     <button class="btn btn-warning" onclick="callPDF({{session('data')}});"type="button">Generate</button>
     </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href = 'http://ec2-18-185-136-4.eu-central-1.compute.amazonaws.com/dashboard/was/goods'">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection