@extends('layouts.dashboard')

@section('content')
<style>
table.dataTable td, table.dataTable th {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    max-width: 24px;
}
.dataTables_filter{display:none;}
.gy .form-control {
    padding: 1px !important;
    color: #67757c;
    height: 24px !important; 

     min-height: 0px !important; 
    display: initial;
}
table.dataTable td, table.dataTable th input{    width: 120px !important;}
</style>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                    <div class="form-row mt-2">
    <div class="col">
    <input id="date" placeholder="Von Datum" class="form-control">
    </div>
    <div class="col">
    <input id="dateto" placeholder="Bis Datum " class="form-control">
    </div>
    <div class="col">
    <button id="printDate" class="btn bg-dark text-white">Lieferzeitraum auswählen</button>
    <button id="dd" class="btn bg-dark text-white">Ausgewählte drucken</button>
    </div>
    </div>
                    <table  class=" table-hover  table display  " style="width:100%; overflow:hidden" id="orders" >
                            <thead>
                                <tr>
                                <th  style="width:24px !important;">Bestellung </th>
                                <th>Artikelbezeichnung</th>
                                <th>Artikelnummer</th>
                                <th style="width:35px !important;">Breite</th>
                                <th  style="width:35px !important;">Kombinummer</th>
                                <th style="width:35px !important;">Maschine</th>
                                <th>gewünschter Liefertermin</th>
                                <th style="width:35px !important;">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)                                
                                <tr>
                                <td style="width:24px !important;"><a href="/dashboard/was/orders/{{$order->id}}">Order #{{$order->id}}</a></td>
                                <td  style="width:30px !important;">{{$order->name}}</td>
                                <td>{{$order->item_no}}</td>
                                <td style="width:35px !important;">{{$order->width}}</td>
                                <td style="width:35px !important;">{{$order->kombi_nr}}</td>
                                <td style="width:30px !important;">{{$order->maschine}}</td>
                                <td><span class="text-muted"><i class="far fa-clock"></i> {{$order->DeliveryDate}}</span> </td>

                                    <td  style="width:35px !important;">
                                  
                                        @if($order->status == 1)
                                        <div class="label label-table label-info">In Bearbeitung</div>
                                        @endif

                                        @if($order->status == 2)
                                        <div class="label label-table label-success">Geliefert</div>
                                        @endif

                                        @if($order->status == 3)
                                        <div class="label label-table label-danger">Nicht im Bestand</div>
                                        @endif
<!--                                        <form action="/was/status/"  method="POST" class="gy" style="display:inline-block;">-->
<form action="/was/status" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        
                                        <input name="id" type="hidden" value={{$order->id}}>
                                        
                                            <select name="status" class="form-control input-sm"  onchange="this.form.submit()">
                                            <option value="2" {{$order->status == 2 ? 'selected="selected"' : '' }} >  Geliefert
                                            </option>
                                            <option value="3" {{$order->status == 3 ? 'selected="selected"' : '' }}>   Nicht im Bestand
                                            </option>
                                            </select>
                                        <input type="submit">
                                        </form>
                                    </td>
                             

                                </tr>

                                @endforeach
                                
                            </tbody>
                                  <tfoot>
                                <tr>
                                    <th>Bestellung </th>
                                <th>Artikelbezeichnung</th>
                                <th>Artikelnummer</th>
                                <th>Breite</th>
                                <th>Kombinummer</th>
                                <th>Maschine</th>
                                <th>gewünschter Liefertermin</th>
                                <th>Status</th>
            </tr>
        </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
function extractContent(s) {
    var span = document.createElement('div');
    span.innerHTML = s;
    return span.textContent || span.innerText;
};
function extractContent_span(s) {
    var span = document.createElement('span');
    span.innerHTML = s;
    return span.textContent || span.innerText;
};

  

       
        $(document).ready(function() {

            var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var d = new Date();

    $('#orders').DataTable( {
        language: {
        search: "Suchen",
        "infoEmpty": "No entries to show",
        "info": "Zeige _END_ von _TOTAL_ Einträgen",
        "paginate": {
      "next": "Nächste",
      "previous":"Vorherige"
    }
         },
        "order": []
    });
    $('#orders tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Filter '+title+'" />' );
    } );
    var table12 = $('#orders').DataTable();
 
 // Apply the search
 table12.columns().every( function () {
     var that = this;

     $( 'input', this.footer() ).on( 'keyup change', function () {
         if ( that.search() !== this.value ) {
             that
                 .search( this.value )
                 .draw();
         }
     } );
 } );

var urlsPrint = [];
var flag=true;

$('#orders tbody').on( 'click', 'tr', function () {
       if ( $(this).hasClass('selected') ) {
           $(this).removeClass('selected');
       } else {
           $(this).addClass('selected');
           $(this).addClass('se');
           var data = $('#orders').DataTable().row('.se').data();
           var href=data[0];
           var m = href.match(/"(.*?)"/);
           urlsPrint.push(m[1]);
           console.log(urlsPrint);
           $(this).removeClass('se');
       }
   });
   $("#dd").click(function(){
       if(urlsPrint.length==0){
    var table1 = $('#orders').DataTable();

    var arrayStatus = table1
     .columns([0,7])
     .data()
     .toArray();
     var lenghtofarray1=arrayStatus[0].length;
     for(var i=0;i<lenghtofarray1;i++){
    var v=arrayStatus[1][i];
    var status1 = extractContent(v);
    if(status1=="In Bearbeitung")
    {
        var href2=arrayStatus[0][i];
        var m1 = href2.match(/"(.*?)"/);
        urlsPrint.push(m1[1]);
    }
    }
    console.log(urlsPrint);
    sessionStorage.setItem("jsArray", JSON.stringify(urlsPrint));
    urlsPrint = [];

    window.open('../../../print', '_blank');
    }
    else{
        sessionStorage.setItem("jsArray", JSON.stringify(urlsPrint));
        var table2 = $('#orders').DataTable();
        table2.rows('.selected').deselect();
        urlsPrint = [];
    window.open('../../../print', '_blank');
    }

});  
} );
$('#dateto').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
$('#date').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
        $("#printDate").click(function(){
        var $datetimepicker = $('#date').val();
        var $datetimepickerTo = $('#dateto').val();
        if($datetimepicker.length==0 || $datetimepicker.length==0){
            alert("Please Select Date");
        }
        else{
        $orderdate =  $datetimepicker.split("-");
        var dateOne = new Date($orderdate[0], $orderdate[1], $orderdate[2]); //Year, Month, Date  
        $orderdateTo =  $datetimepickerTo.split("-");
        var dateOneTo = new Date($orderdateTo[0], $orderdateTo[1], $orderdateTo[2]); //Year, Month, Date  
        var table = $('#orders').DataTable();
     var plainArray = table
     .columns([0,7,6])
     .data()
     .toArray();
     var lenghtofarray=plainArray[0].length;
     var arrayToprint=[];
     for(var i=0;i<lenghtofarray;i++){
  
    var v=plainArray[1][i];
    var status = extractContent(v);
    var datee=plainArray[2][i];
    var datem=extractContent_span(datee);

    $orderdate_get =  datem.split("-");
    // console.log($orderdate_get[1]);
    var dateDB = new Date($orderdate_get[0], $orderdate_get[1], $orderdate_get[2]); //Year, Month, Date 
  
    if(status=="In Bearbeitung" && dateDB<=dateOneTo && dateDB>=dateOne )
    {
        var href1=plainArray[0][i];
        var m = href1.match(/"(.*?)"/);
        arrayToprint.push(m[1]);
    }
}
console.log(arrayToprint);
sessionStorage.setItem("jsArray", JSON.stringify(arrayToprint));

window.open('../../../print', '_blank');}
    }); 

    </script>
@endsection