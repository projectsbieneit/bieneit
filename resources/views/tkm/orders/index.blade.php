@extends('layouts.dashboard')

@section('content')

<style>
table.dataTable td, table.dataTable th {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    max-width: 29px;
}
.dataTables_filter{display:none;}

</style>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="button-group">
                            <a href="/dashboard/tkm/orders/create" type="button" class="btn waves-effect waves-light btn-rounded btn-success"> <i class="fa fa-plus"></i> &nbsp; Neue Bestellung</a>
                        </div>
                    </h4>
                    <div class="table-responsive">
                    <div class="form-row mt-2">
    <div class="col">
    <input id="date" placeholder="Von Datum" class="form-control">
    </div>
    <div class="col">
    <input id="dateto" placeholder="Bis Datum" class="form-control">
    </div>
    <div class="col">
    <button id="printDate" class="btn bg-dark text-white">Nach Liefertermin drucken</button>
    <button id="dd" class="btn bg-dark text-white">Ausgewählte drucken</button>
    </div>
   
  </div>


                    <table id="orders" class=" table-hover  table display  table-bordered" style="width:100%; overflow:hidden">
                            <thead>
                                <tr>
                                <th style="width:20px !important">Bestellung </th>
                                <th>Artikelbezeichnung</th>
                                <th style="width:25px !important">Artikelnummer</th>
                                <th style="width:50px !important">Breite</th>
                                <th style="width:25px !important">Kombinummer</th>
                                <th style="width:50px !important">Maschine</th>
                                <th  style="width:25px !important">gewünschter Liefertermin</th>
                                <th  style="width:20px !important">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                <td style="width:20px !important"><a href="/dashboard/tkm/orders/{{$order->id}}">Order #{{$order->id}}</a></td>
                                <td>{{$order->name}}</td>
                                <td style="width:25px !important">{{$order->item_no}}</td>
                                <td  style="width:50px !important">{{$order->width}}</td>
                                <td style="width:25px !important">{{$order->kombi_nr}}</td>
                                <td style="width:50px !important">{{$order->maschine}}</td>
                                <td  style="width:25px !important" data-sort="{{$order->DeliveryDate}}"><span class="text-muted"><i class="far fa-clock"></i> {{$order->DeliveryDate}}</span> </td>
                                    <td  style="width:20px !important">
                                        @if($order->status == 1)
                                        <div class="label label-table label-info">In Bearbeitung</div>
                                        @endif

                                        @if($order->status == 2)
                                        <div class="label label-table label-success">Geliefert</div>
                                        @endif

                                        @if($order->status == 3)
                                        <div class="label label-table label-danger">Nicht im Bestand</div>
                                        @endif

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
                columnDefs: [
            { width: 10, targets: 0 }
        ],
        fixedColumns: true,
        language: {
        search: "Suchen",
        "infoEmpty": "No entries to show",
        "info": "Zeige _END_ von _TOTAL_ Einträgen",
        "paginate": {
      "next": "Nächste",
      "previous":"Vorherige"
    }
         },
         "order": []    });
    $('#orders tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Filter '+title+'" />' );
    } );
    var tableQ = $('#orders').DataTable();
 
 // Apply the search
 tableQ.columns().every( function () {
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
        if($datetimepicker.length==0 || $datetimepickerTo.length==0){
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
     <style>
    table.dataTable td, table.dataTable th input{    width: 150px !important;}
</style>

@endsection