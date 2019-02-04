@extends('layouts.person')
@section('section')
 <div class="row">
 	<div class="col-md-12">
 		 <div class="card-box ribbon-box">
            <div class="ribbon ribbon-success">Time:{{$notification->time}}</div>
            <p class="m-b-0" style="font-family: monospace;font-weight: bold;">{{$notification->notification_string}}</p>
        </div>
 </div>
@endsection
