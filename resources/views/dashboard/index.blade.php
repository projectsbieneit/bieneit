@extends('layouts.dashboard')

@section('content')


<!-- ============================================================== -->
<!-- Stats box -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="m-r-20 align-self-center"><img src="../assets/images/icon/expense.png" alt="Income" /></div>
                    <div class="align-self-center">
                        <h6 class="text-muted m-t-10 m-b-0">Anzahl an Bestellungen</h6>
                        <h2 class="m-t-0 font-medium">{{$order}}</h2></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="m-r-20 align-self-center"><img src="../assets/images/icon/income.png" alt="Income" /></div>
                    <div class="align-self-center">
                        <h6 class="text-muted m-t-10 m-b-0">Anzahl Bestand</h6>
                        <h2 class="m-t-0 font-medium">{{$goods}}</h2></div>
                </div>
            </div>
        </div>
    </div>
   
</div>
<!-- ============================================================== -->
<!-- Sales overview chart -->
<!-- ============================================================== -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Right panel -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->


@endsection