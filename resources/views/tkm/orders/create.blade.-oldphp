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
                <form class="form-material m-t-40" method="POST" action="/dashboard/tkm/orders">
                    @csrf
                    <div class="form-group">
                        <label>Artikelbezeichnung <span style="color:red">*</span></label>
                        <select name="name"  class="form-control {{ $errors->has('name') ? 'error-i' : ''}}">
                            <option value=" " selected></option>
                            <option value="SchutzfolieNovacell">SchutzfolieNovacell (protectfoil)</option>
                            <option value="SchutzfolieNitto">SchutzfolieNitto (protectfoil)</option>
                            <option value="Fremdfolie">Fremdfolie</option>
                            <option value="PapierMünskjo">PapierMünskjo</option>
                            <option value="Papphülsen">Papphülsen</option>
                            <option value="Papphülsen">Seidenpapier</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="example-email">Artikelnummer</label>
                        <select name="item_no" class="form-control">
                            <option value="  " selected ></option>
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
                        <label>VPE <span style="color:red">*</span></label>
                        <select name="unit" class="form-control {{ $errors->has('unit') ? 'error-i' : ''}}">
                             <option value=" " selected></option>
                            <option>Rolle (coil)</option>
                            <option>Stück (piece)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Menge</label>
                        <input name="menge" type="text" class="form-control" >
                    </div>
              
                    <div class="form-group">
                        <label>Breite <span style="color:red">*</span></label>
                        <input name="width" type="text" class="form-control {{ $errors->has('width') ? 'error-i' : ''}}" >
                    </div>
                    <div class="form-group">
                        <label>lfm</label>
                        <input name="rm" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Innendurchmesser</label>
                        <select name="Innendurchmesser" class="form-control">
                            <option value="NULL" selected> </option>
                            <option value='300'>300</option>
                            <option value='400'>400</option>
                            <option value='500'>500</option>
                            <option value='600'>600</option>
                        </select>                    </div>
                    <div class="form-group">
                        <label>Hub-Art <span style="color:red">*</span></label>
                        <select name="hub_art" class="form-control {{ $errors->has('hub_art') ? 'error-i' : ''}}">
                            <option value='Kombination' selected>Kombination</option>
                            <option value='Lagervorrat'>Lagervorrat</option>
                        </select>
                    </div>
                    <div name="Kombi-Nr" class="form-group">
                        <label>Kombi-Nr.</label>
                        <input name="kombi_nr" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Maschine</label>
                        <select name="maschine" class="form-control">
                        <option value="NULL" selected></option>
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
                        <option value="NULL"></option>
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
                        <label>Technisch Notwendig</label>
                        <select name="technisch_notwendig" class="form-control">
                            <option value='nein' selected>nein</option>
                            <option value='ja'>ja</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Bemerkung</label>
                        <input name="bemerkung" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">Gewünschter Liefertermin <span style="color:red">*</span></label>
                        <input name="deliveryDate" required id="datepicker" class="form-control" >
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