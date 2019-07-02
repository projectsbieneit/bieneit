@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-right"><strong>Artikelbezeichnung:</strong></td>
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

                    <!-- <div class="row">
                        <div class="col-sm-12">
                            <form action="/was/update/{{$order->id}}" method="POST" style="display:inline-block;">
                                @csrf
                                <button class="btn btn-success" type="submit" name="status" value="2">
                                Geliefert
                                </button>
                            </form>
                            <form action="/was/update/{{$order->id}}" method="POST" style="display:inline-block;">
                                @csrf
                                <button class="btn btn-danger" type="submit" name="status" value="3">
                                Nicht im Bestand
                                </button>
                            </form>
                        </div>
                    </div> -->
                    
                </div>
            </div>
        </div>
    </div>        
  
<script>
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
@endsection
