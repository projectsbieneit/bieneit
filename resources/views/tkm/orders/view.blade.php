@extends('layouts.dashboard')

@section('content')
<style>
@media print{
   .noprint{
        display: none !important;
   }
}
</style>
    <div class="row">
        <div class="col-12">
            <div class="card">
                @if($order->status == 1)
                 <div class="row justify-content-center">
                    <div class="col-3">
                        <a href="/tkm/update/{{$order->id}}" class="btn btn-primary mx-auto mt-5  d-table noprint">Bearbeiten</a>
                    </div>
                    <div class="col-3">
                        <a href="javascript:void(0)" onclick="confirm1();" class="btn btn-danger text-center mx-auto mt-5  d-table noprint">Löschen</a>
                    </div>
                </div>
                @endif
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-right"><strong>Artikelbezeichnung :</strong></td>
                                    <td>{{$order->name}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Artikelnummer:</strong></td>
                                    <td>{{$order->item_no}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>VPE:</strong></td>
                                    <td>{{$order->unit}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Menge:</strong></td>
                                    <td>{{$order->menge}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Breite:</strong></td>
                                    <td>{{$order->width}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>lfm:</strong></td>
                                    <td>{{$order->rm}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Innendurchmesser:</strong></td>
                                    <td>{{$order->Innendurchmesser }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Hub-Art:</strong></td>
                                    <td>{{$order->hub_art}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Kombi-Nr:</strong></td>
                                    <td>{{$order->kombi_nr}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Maschine:</strong></td>
                                    <td>{{$order->maschine}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Fremd-Hub:</strong></td>
                                    <td>{{$order->fremd_hub}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Use:</strong></td>
                                    <td>{{$order->use}} Foil Coil</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Kommission:</strong></td>
                                    <td>{{$order->kommission}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Technisch Notwendig:</strong></td>
                                    <td>{{$order->technisch_notwendig}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Bemerkung:</strong></td>
                                    <td>{{$order->bemerkung}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Gewünschter Liefertermin:</strong></td>
                                    <td>{{$order->DeliveryDate}}</td>
                                </tr>
                                <tr class="hidestatus">
                                    <td class="text-right"><strong>Status</strong></td>
                                    <td>
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

                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>        
<script>
  
    function confirm1() {
        $('#modal').modal('show');
        return false;
    }
    
    $("#status").change(function(){
            var st = $(this).val();
            //now sending this username to ajax page for geting img saved against this username.
            $.ajax({
                    url:"/status/"+{{$order->id}}+','+st,
            }).done(function(result)
            {
            alert("status Changed");
            })
    });
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
                <p>Wollen sie den löschen</p>
                <a href="/tkm/delete/{{$order->id}}" class="btn btn-danger">Confirm</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> 
@endsection
