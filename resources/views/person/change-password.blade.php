@extends('layouts.person')
@section('section')
<div class="row">

	<div class="col-md-12">

        @if(session()->has('type'))
        @if(session()->get('type') == 'danger')
        <div class="alert alert-danger">
          {{session()->get('message')}}
        </div>
        @endif
         @if(session()->get('type') == 'success')
        <div class="alert alert-success">
         {{session()->get('message')}}
        </div>
        @endif
      @endif
       @if($errors->any())
        @foreach($errors->all() as $e)
       <div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          <strong style="color:#000;">{{$e}}</strong> 
        </div>
       @endforeach
      @endif
		<div class="card border-primary m-b-30">

            <div class="card-body text-success">
                <h5 class="card-title" style="border-bottom: 1px solid #eee;padding-bottom: 10px;">
                	Change Password
                </h5>
                <form action="{{route('person.store-change-password')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                    	<label for="" class="col-md-3">Enter Current Password</label>
                    	<input type="text" class="form-control col-md-4" name="current_password">
                    </div>
                    <div class="form-group row">
                    	<label for="" class="col-md-3">Enter New Password</label>
                    	<input type="text" class="form-control col-md-4" name="password">
                    </div>
                     <div class="form-group row">
                    	<label for="" class="col-md-3">Confirm New Password</label>
                    	<input type="text" class="form-control col-md-4" name="password_confirmation">
                    </div>
                    <div class="form-group row">
                    	<div class="col-md-3">
                    		
                    	</div>
                    	<div class="col-md-9">
                    		<button class="btn btn-success">Change Password</button>
                    	</div>
                    	
                    </div>

                </form>
            </div>
        </div>
	</div>
</div>
@endsection
