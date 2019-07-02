@extends('layouts.dashboard') @section('content') <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                </h4>
                <div class="table-responsive">
                    <table id="goods" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Seriennummer</th>
                                <th>Artikelbezeichnung</th>
                                <th>Artikelnummer</th>
                                <th>Breite</th>
                                <th>Laufmeter</th>
                                <th>Barcode</th>
                                <th>Stellplatz</th>
                                <th>Datum</th>
                            </tr>
                        </thead>
                        <tbody> @foreach ($goods as $good) <tr>
                                <td><a href="/dashboard/tkm/goods/{{$good->id}}">{{$good->serial_no}}</a></td>
                                <td><span class="text-muted">{{$good->name}}</span></td>
                                <td><span class="text-muted">{{$good->item_no}}</span></td>
                                <td><span class="text-muted">{{$good->loc_row}},{{$good->loc_height}},{{$good->loc_rack}}</span></td>
                                <td><span class="text-muted">{{$good->width}}</span></td>
                                <td><span class="text-muted">{{$good->rm}}</span></td>
                                <td><span class="text-muted">{{$good->barcode}}</span></td>
                                <td><span class="text-muted"><i class="far fa-clock"></i> {{$good->created_at}}</span> </td>
                            </tr> @endforeach </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#goods').on('search.dt', function () {
        var tabletocheck = $('#goods').DataTable();
        var filteredrows = $("#goods").dataTable()._('tr', {
            "filter": "applied"
        });
        if (filteredrows.length == 0) {
            $(".dt-button").hide();
        } else {
            $(".dt-button").show();
        }
    });
    $(document).ready(function () {
        $(document).ready(function () {
            var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November",
                "December"
            ];
            var d = new Date();
            $('#goods').DataTable({
                language: {
                    search: "Suchen",
                    "infoEmpty": "No entries to show",
                    "info": "Zeige _END_ von _TOTAL_ Einträgen",
                    "paginate": {
                        "next": "Nächste",
                        "previous": "Vorherige"
                    }
                },
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'print',
                    text: 'Seite drucken',
                    messageTop: 'Castramax R-Control | Biene IT GmbH | Ludwigsburg | +49 7141 309 72 70 | info@bieneit.de',
                    messageBottom: 'Print Date' + ':' + d.getDate() + '-' + months[d.getMonth()] + '-' + d.getFullYear()
                }],
            });
        });
    });

</script> @endsection
