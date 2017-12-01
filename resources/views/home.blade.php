@extends('layouts.app')

@section('content')
<div class="container-flute">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   {{-- {{ Auth::user()->role_id }} --}}
                   @if(Auth::user()->role_id =='1')
                   Admin
                   @endif You are logged in!
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
