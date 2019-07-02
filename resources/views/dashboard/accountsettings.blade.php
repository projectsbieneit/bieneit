@extends('layouts.dashboard')

@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
           
                <div class="card-body">
                <div class="col-md-6">
            @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        </div>
                    <h4 class="card-title">Change Your Password</h4>
                    <form class="form-material m-t-40" method="POST" action="changePassword">
                        @csrf
                        <div class="form-group">
                            <label>Current Password</label>
                            <input name="current-password" type="password" class="form-control">
                            @if ($errors->has('current-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                    @endif
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input name="new-password" type="password" class="form-control">
                            @if ($errors->has('new-password'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                    @endif
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input name="new-password_confirmation" type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Save" class="right btn btn-success">
                        </div>
                    </form>
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