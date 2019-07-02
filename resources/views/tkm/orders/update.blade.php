@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bestellung aufgeben</h4>
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
                <form class="form-material m-t-40" method="POST"  action="/tkm/updateit/{{$order->id}}">
                    @csrf
                    <div class="form-group">
                        <label>Artikelbezeichnung <span style="color:red">*</span></label>
                        <select name="name"  class="form-control {{ $errors->has('name') ? 'error-i' : ''}}">
                            <option value=" " selected></option>
                            <option value="SchutzfolieNovacell" {{ $order->name == 'SchutzfolieNovacell' ? 'selected="selected"' : '' }}>SchutzfolieNovacell (protectfoil)</option>
                            <option value="SchutzfolieNitto" {{ $order->name == 'SchutzfolieNitto' ? 'selected="selected"' : '' }}>SchutzfolieNitto (protectfoil)</option>
                            <option value="Fremdfolie" {{ $order->name == 'Fremdfolie' ? 'selected="selected"' : '' }}>Fremdfolie</option>
                            <option value="PapierMünskjo" {{ $order->name == 'PapierMünskjo' ? 'selected="selected"' : '' }}>PapierMünskjo</option>
                            <option value="Papphülsen" {{ $order->name == 'Papphülsen' ? 'selected="selected"' : '' }}>Papphülsen</option>
                            <option value="Papphülsen" {{ $order->name == 'Papphülsen' ? 'selected="selected"' : '' }}>Seidenpapier</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="example-email">Artikelnummer</label>
                        <select name="item_no" class="form-control">
                            <option value="  " selected ></option>
                            <option value="4223" {{ $order->item_no == '4223' ? 'selected="selected"' : '' }}>4223</option>
                            <option value="4223-ohne Streifen" {{ $order->item_no == '4223-ohne Streifen' ? 'selected="selected"' : '' }}>4223-ohne Streifen</option>
                            <option value="4224-ohne Streifen" {{ $order->item_no == '4224-ohne Streifen' ? 'selected="selected"' : '' }}>4224-ohne Streifen</option>
                            <option value="4224" {{ $order->item_no == '4224' ? 'selected="selected"' : '' }}>4224</option>
                            <option value="4324" {{ $order->item_no == '4324' ? 'selected="selected"' : '' }}>4324</option>
                            <option value="4204" {{ $order->item_no == '4204' ? 'selected="selected"' : '' }}>4204</option>
                            <option value="4228_REF" {{ $order->item_no == '4228_REF' ? 'selected="selected"' : '' }}>4228_REF</option>
                            <option value="4805" {{ $order->item_no == '4805' ? 'selected="selected"' : '' }}>4805</option>
                            <option value="4105" {{ $order->item_no == '4105' ? 'selected="selected"' : '' }}>4105</option>
                            <option value="4241" {{ $order->item_no == '4241' ? 'selected="selected"' : '' }}>4241</option>
                            <option value="4318_REM" {{ $order->item_no == '4318_REM' ? 'selected="selected"' : '' }}>4318_REM</option>
                            <option value="9371" {{ $order->item_no == '9371' ? 'selected="selected"' : '' }}>9371</option>
                            <option value="SPV224 Blau" {{ $order->item_no == 'SPV224 Blau' ? 'selected="selected"' : '' }}>SPV224 Blau</option>
                            <option value="SPV224 PR-M Blau" {{ $order->item_no == 'SPV224 PR-M Blau' ? 'selected="selected"' : '' }}>SPV224 PR-M Blau</option>
                            <option value="SPV 30804" {{ $order->item_no == 'SPV 30804' ? 'selected="selected"' : '' }}>SPV 30804</option>
                            <option value="SPV 3067 M" {{ $order->item_no == 'SPV 3067 M' ? 'selected="selected"' : '' }}>SPV 3067 M</option>
                            <option value="SPV 6065 E5" {{ $order->item_no == 'SPV 6065 E5' ? 'selected="selected"' : '' }}>SPV 6065 E5</option>
                            <option value="SPV 6065 E7" {{ $order->item_no == 'SPV 6065 E7' ? 'selected="selected"' : '' }}>SPV 6065 E7</option>
                            <option value="SPV FKT5 DD2" {{ $order->item_no == 'SPV FKT5 DD2' ? 'selected="selected"' : '' }}>SPV FKT5 DD2</option>
                            <option value="SPVLC00H33_78" {{ $order->item_no == 'SPVLC00H33_78' ? 'selected="selected"' : '' }}>SPVLC00H33_78</option>
                            <option value="6707 AP7" {{ $order->item_no == '6707 AP7' ? 'selected="selected"' : '' }}>6707 AP7</option>
                            <option value="4213" {{ $order->item_no == '4213' ? 'selected="selected"' : '' }}>4213</option>
                            <option value="4271" {{ $order->item_no == '4271' ? 'selected="selected"' : '' }}>4271</option>
                            <option value="FIL3072LA5X1250" {{ $order->item_no == 'FIL3072LA5X1250' ? 'selected="selected"' : '' }}>FIL3072LA5X1250</option>
                            <option value="4294" {{ $order->item_no == '4294' ? 'selected="selected"' : '' }}>4294</option>
                            <option value="4224_RE" {{ $order->item_no == '4224_RE' ? 'selected="selected"' : '' }}>4224_RE</option>
                            <option value="9309" {{ $order->item_no == '9309' ? 'selected="selected"' : '' }}>9309</option>
                            <option value="4501" {{ $order->item_no == '4501' ? 'selected="selected"' : '' }}>4501</option>
                            <option value="4504" {{ $order->item_no == '4504' ? 'selected="selected"' : '' }}>4504</option>
                            <option value="4503" {{ $order->item_no == '4503' ? 'selected="selected"' : '' }}>4503</option>
                            <option value="4505"  >4505</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>VPE <span style="color:red">*</span></label>
                        <select name="unit" class="form-control {{ $errors->has('unit') ? 'error-i' : ''}}">
                             <option value=" " selected></option>
                            <option value='Rolle (coil)' {{ $order->unit == 'Rolle (coil)' ? 'selected="selected"' : '' }}>Rolle (coil)</option>
                            <option value='Stück (piece)' {{ $order->unit == 'Stück (piece)' ? 'selected="selected"' : '' }}>Stück (piece)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Menge</label>
                        <input name="menge" type="text" class="form-control" value="{{$order->menge}}" >
                    </div>
              
                    <div class="form-group">
                        <label>Breite <span style="color:red">*</span></label>
                        <input name="width" type="text" value="{{$order->width}}" class="form-control  {{ $errors->has('width') ? 'error-i' : ''}}" >
                    </div>
                    <div class="form-group">
                        <label>lfm</label>
                        <input name="rm" type="text" class="form-control"  value="{{$order->rm}}" >
                    </div>
                    <div class="form-group">
                        <label>Innendurchmesser</label>
                        <select name="Innendurchmesser" class="form-control">
                            <option value="NULL" selected> </option>
                            <option value='300' {{ $order->Innendurchmesser == '300' ? 'selected="selected"' : '' }}>300</option>
                            <option value='400' {{ $order->Innendurchmesser == '400' ? 'selected="selected"' : '' }}>400</option>
                            <option value='500' {{ $order->Innendurchmesser == '500' ? 'selected="selected"' : '' }}>500</option>
                            <option value='600' {{ $order->Innendurchmesser == '600' ? 'selected="selected"' : '' }}>600</option>
                        </select>                    </div>
                    <div class="form-group">
                        <label>Hub-Art <span style="color:red">*</span></label>
                        <select name="hub_art" class="form-control {{ $errors->has('hub_art') ? 'error-i' : ''}}">
                            <option value='Kombination'  {{ $order->hub_art == 'Kombination' ? 'selected="selected"' : '' }}>Kombination</option>
                            <option value='Lagervorrat' {{ $order->hub_art == 'Lagervorrat' ? 'selected="selected"' : '' }}>Lagervorrat</option>
                        </select>
                    </div>
                    <div name="Kombi-Nr" class="form-group">
                        <label>Kombi-Nr.</label>
                        <input name="kombi_nr" type="text" class="form-control" value="{{ $order->kombi_nr }}" >
                    </div>
                    <div class="form-group">
                        <label>Maschine</label>
                        <select name="maschine" class="form-control">
                        <option value="NULL" selected></option>
                            <option value='M01' {{ $order->maschine == 'M01' ? 'selected="selected"' : '' }}>M01</option>
                            <option value='M02' {{ $order->maschine == 'M02' ? 'selected="selected"' : '' }}>M02</option>
                            <option value='M03' {{ $order->maschine == 'M03' ? 'selected="selected"' : '' }}>M03</option>
                            <option value='M04' {{ $order->maschine == 'M04' ? 'selected="selected"' : '' }}>M04</option>
                            <option value='M06' {{ $order->maschine == 'M06' ? 'selected="selected"' : '' }}>M06</option>
                            <option value='M07' {{ $order->maschine == 'M07' ? 'selected="selected"' : '' }}>M07</option>
                            <option value='M12' {{ $order->maschine == 'M12' ? 'selected="selected"' : '' }}>M12</option>
                            <option value='M16' {{ $order->maschine == 'M16' ? 'selected="selected"' : '' }}>M16</option>
                            <option value='M17' {{ $order->maschine == 'M17' ? 'selected="selected"' : '' }}>M17</option>
                            <option value='M21' {{ $order->maschine == 'M21' ? 'selected="selected"' : '' }}>M21</option>
                            <option value='M22' {{ $order->maschine == 'M22' ? 'selected="selected"' : '' }}>M22</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Fremd-Hub</label>
                        <select name="fremd_hub" class="form-control">
                        <option value="NULL"></option>
                            <option value='Kombination' {{ $order->fremd_hub == 'Kombination' ? 'selected="selected"' : '' }}>Kombination</option>
                            <option value='Aleris Duffel' {{ $order->fremd_hub == 'Aleris Duffel' ? 'selected="selected"' : '' }}>Aleris Duffel</option>
                            <option value='Constellium (F)' {{ $order->fremd_hub == 'Constellium' ? 'selected="selected"' : '' }}>Constellium (F)</option>
                            <option value='Hydro' {{ $order->fremd_hub == 'Hydro' ? 'selected="selected"' : '' }}>Hydro</option>
                            <option value='STS' {{ $order->fremd_hub == 'STS' ? 'selected="selected"' : '' }}>STS</option>
                            <option value='KME' {{ $order->fremd_hub == 'KME' ? 'selected="selected"' : '' }}>KME</option>
                            <option value='TAD' {{ $order->fremd_hub == 'TAD' ? 'selected="selected"' : '' }}>TAD</option>
                            <option value='Arconic' {{ $order->fremd_hub == 'Arconic' ? 'selected="selected"' : '' }}>Arconic</option>
                            <option value='API' {{ $order->fremd_hub == 'API' ? 'selected="selected"' : '' }}>API</option>
                        </select>
                        <textarea class="form-control" name="FremdSomeText"rows="2" col="3"></textarea>
                    </div>

               

                    <div class="form-group">
                        <label>Kommission</label>
                        <input name="kommission" type="text" class="form-control" value="{{ $order->kommission }}" >
                    </div>
                    <div class="form-group">
                        <label>Technisch Notwendig</label>
                        <select name="technisch_notwendig" class="form-control">
                            <option value='nein'  {{ $order->technisch_notwendig == 'nein' ? 'selected="selected"' : '' }}>nein</option>
                            <option value='ja' {{ $order->technisch_notwendig == 'ja' ? 'selected="selected"' : '' }}>ja</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Bemerkung</label>
                        <input name="bemerkung" type="text" class="form-control" value="{{ $order->bemerkung }}" >
                    </div>
                    <div class="form-group">
                        <label for="">Gewünschter Liefertermin <span style="color:red">*</span></label>
                        <input name="deliveryDate" required id="datepicker" class="form-control" value="{{ $order->deliveryDate }}" >
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Bestellung aufgeben" class="right btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>        
<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
    </script>
@endsection