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
                                <td class="text-right"><strong>Innendurchmesser:</strong></td>
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
        printWindow.document.write(
            '<html><head><style> .code128{width:61mm !important;height:26mm !important;} @media print {body, html, p {margin:0pt !important;  overflow: hidden !important; max-height: 100%; padding: 0pt !important;}@page {margin: 0pt !important;padding: 0pt !important;}}@media print {.header, .hide { visibility: hidden }} @media print {#Header, #Footer { display: none !important; }} @media print {size: 234.33070866px 109.60629921px;} @page { margin: 0mm; }} </style>'
            );
        printWindow.document.write('</head><body  >');
        printWindow.document.write(panel.innerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        setTimeout(function () {
            printWindow.print();
          //  printWindow.close();
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
