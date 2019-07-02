@extends('layouts.dashboard')

@section('content')
<style>
table.dataTable td, table.dataTable th {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    max-width: px;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="button-group">
                            <a href="/dashboard/was/goods/create" type="button" class="btn waves-effect waves-light btn-rounded btn-success"> <i class="fa fa-plus"></i> &nbsp; Neuen Artikel hinzufügen</a>
                        </div>
                    </h4>
                    <div id="editor"></div>
                    <div class="table-responsive">
                    <table id="goods" class=" table-hover  table display  " style="width:100%; overflow:hidden">
                            <thead>
                                <tr>
                                    <th style="max-width:70px !important">Seriennummer</th>
                                    <th>Artikelbezeichnung</th>
                                    <th style="max-width:50px !important">Artikelnummer</th>
                                    <th>Breite</th>
                                    <th>Laufmeter</th>
                                    <th>Barcode</th>
                                    <th>Stellplatz</th>
                                    <th>Datum</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($goods as $good)
                                <tr>
                                <td><a href="/dashboard/tkm/goods/{{$good->id}}" style="max-width:70px !important">{{$good->serial_no}}</a></td>
                                    <td><span class="text-muted">{{$good->name}}</span></td>
                                    <td style="max-width:50px !important"><span class="text-muted">{{$good->item_no}}</span></td>
                                    <td><span class="text-muted">{{$good->width}}</span></td>
                                    <td><span class="text-muted">{{$good->rm}}</span></td>
                                    <td><span class="text-muted">{{$good->barcode}}</span></td>
                                    <td><span class="text-muted">{{$good->loc_row}},{{$good->loc_height}},{{$good->loc_rack}}</span></td>
                                <td><span class="text-muted"><i class="far fa-clock"></i> {{$good->created_at}}</span> </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>        
    <script src="https://cdn.jsdelivr.net/jsbarcode/3.3.20/JsBarcode.all.min.js"></script>
    <script>
    $('#goods').on('search.dt', function() {
        var tabletocheck = $('#goods').DataTable();
        var filteredrows = $("#goods").dataTable()._('tr', {"filter": "applied"});
        if(filteredrows.length==0)
        {
            $(".dt-button").hide();
        }
        else{
            $(".dt-button").show();
        }
     });
     $(document).ready(function() {
     
        $(document).ready(function() {
            var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var d = new Date();

    $('#goods').DataTable( {
        columnDefs: [
            { width: 10, targets: 0 }
        ],
        ordering:false,
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
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                text:'Seite drucken',
                messageTop: 'Castramax R-Control | Biene IT GmbH | Ludwigsburg | +49 7141 309 72 70 | info@bieneit.de',
                messageBottom: 'Print Date'+':'+ d.getDate()+'-'+months[d.getMonth()]+'-'+d.getFullYear(),
                customize: function(win)
            {
 
                var last = null;
                var current = null;
                var bod = [];
 
                var css = '@page { size: landscape; }',
                    head = win.document.head || win.document.getElementsByTagName('head')[0],
                    style = win.document.createElement('style');
 
                style.type = 'text/css';
                style.media = 'print';
 
                if (style.styleSheet)
                {
                  style.styleSheet.cssText = css;
                }
                else
                {
                  style.appendChild(win.document.createTextNode(css));
                }
                head.appendChild(style);
         }
            }
        ],
    });
} );
} ); 
    </script>
   
@endsection