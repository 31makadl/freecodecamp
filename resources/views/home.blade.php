@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <!-- <div class="col-3 p-5">
            <img src="/Users/avnimakwana/Documents/IMP/Avni/Snapchat-455492621.jpg" alt="" class="rounded-circle">
        </div> -->
        <div class="col-9 pt-5">
            <div><h1>Freecodecamp</h1></div>
            <div class="d-flex">
                <div class="pr-5"><Strong>153</Strong>posts</div>
                <div class="pr-5"><strong>23k</strong>followers</div>
                <div class="pr-5"><strong>212</strong>following</div>
            </div>
        </div>
        
    </div>
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
