@extends('layouts.person')
@section('style')

@endsection
@section('section')
@if($user && $profile)
<div class="row">
	<div class="col-md-12">

        @if(session()->has('type'))
        @if(session()->get('type') == 'danger')
        <div class="alert alert-danger">
          <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
        </div>
        @endif
         @if(session()->get('type') == 'success')
        <div class="alert alert-success">
          <strong>Success!</strong> {{session()->get('message')}}
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
                	Profile
                </h5>
                <form action="{{route('person.store-profile')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row" style="margin-bottom: 4px;">
                	<div class="col-md-4">
                		<label>Name</label>
                	</div>
                	<div class="col-md-6">
                		<input type="text" name="name" class="form-control float-right" value="{{$user->name}}">
                	</div>
                	
                </div>
                <div class="row" >
                    <div class="col-md-4">
                        <label>Images</label>
                    </div>
                    <div class="col-md-6">
                        <img src="{{route('person.image-views',explode('/',$profile->profile_image_location)[1]) }}?w=100 &h=100" class="img-thumbnail" />
                        <div class="form-group" style="margin-top: 4px;">
                           
                            <input type="file" class="form-control" name="images">
                        </div>
                    </div>
                    
                </div>
                 <div class="row" >
                    <div class="col-md-4">
                        <label>Facebook Profile Link</label>
                    </div>
                    <div class="col-md-6">
                     
                        <div class="form-group" style="margin-top: 4px;">
                           <input type="text" class="form-control" name="fb_profile" value="{{$profile->fb_profile}}">
                    
                        </div>
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                  <div class="row" >
                    <div class="col-md-4">
                        <label>Facebook Visiable(Other's)</label>
                    </div>
                    <div class="col-md-6">
                     
                        <div class="form-group" style="margin-top: 4px;">
                            <input type="radio" name="fb_visiable" value="0" 
                             @if($profile->fb_is_visible!=1) 
                               checked=""
                             @endif
                            > OFF<br>
                            <input type="radio" name="fb_visiable" value="1"
                             @if($profile->fb_is_visible!=0) 
                               checked=""
                             @endif
                            > ON<br>
                    
                        </div>
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                <div class="row" >
                    <div class="col-md-4">
                        <label>Twitter Profile Link</label>
                    </div>
                    <div class="col-md-6">
                     
                        <div class="form-group" style="margin-top: 4px;">
                           <input type="text" class="form-control" name="twitter_profile" value="{{$profile->twitter_profile}}">
                    
                        </div>
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                  <div class="row" >
                    <div class="col-md-4">
                        <label>Twitter Visiable(Other's)</label>
                    </div>
                    <div class="col-md-6">
                     
                        <div class="form-group" style="margin-top: 4px;">
                            <input type="radio" name="twitter_visiable" value="0" 
                             @if($profile->twitter_is_visible!=1) 
                               checked=""
                             @endif
                            > OFF<br>
                            <input type="radio" name="twitter_visiable" value="1"
                             @if($profile->twitter_is_visible!=0) 
                               checked=""
                            @endif
                            > ON<br>
                    
                        </div>
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                 <div class="row" >
                    <div class="col-md-4">
                        <label>Instagram Profile Link</label>
                    </div>
                    <div class="col-md-6">
                     
                        <div class="form-group" style="margin-top: 4px;">
                           <input type="text" class="form-control" name="instagram_profile" value="{{$profile->instagram_profile}}">
                    
                        </div>
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                  <div class="row" >
                    <div class="col-md-4">
                        <label>Instagram Visiable(Other's)</label>
                    </div>
                    <div class="col-md-6">
                     
                        <div class="form-group" style="margin-top: 4px;">
                            <input type="radio" name="instagram_visiable" value="0" 
                            @if($profile->instagram_is_visible!=1) 
                               checked=""
                            @endif
                            > OFF<br>
                            <input type="radio" name="instagram_visiable" value="1"
                            @if($profile->instagram_is_visible!=0) 
                               checked=""
                            @endif
                            > ON<br>
                    
                        </div>
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                <div class="row" >
                    <div class="col-md-4">
                      
                    </div>
                    <div class="col-md-6">
                     <button class="btn btn-info">Update</button>
                        
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                </form>
            </div>
          </div>
	</div>
</div>
@else
 <div class="row">
  <div class="col-md-12">
        @if(session()->has('type'))
        @if(session()->get('type') == 'danger')
        <div class="alert alert-danger">
          <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
        </div>
        @endif
         @if(session()->get('type') == 'success')
        <div class="alert alert-success">
          <strong>Success!</strong> {{session()->get('message')}}
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
                  Profile
                </h5>
                <form action="{{route('person.store-profile')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row" style="margin-bottom: 4px;">
                  <div class="col-md-4">
                    <label>Name</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control float-right" value="{{$user->name}}">
                  </div>
                  
                </div>
                <div class="row" >
                    <div class="col-md-4">
                        <label>Images</label>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('assets/images/user-avatar.png')}}" class="img-thumbnail" 
                        style="max-width: 100px; max-height: 100px;"/>
                        <div class="form-group" style="margin-top: 4px;">
                           
                            <input type="file" class="form-control" name="images">
                        </div>
                    </div>
                    
                </div>
                 <div class="row" >
                    <div class="col-md-4">
                        <label>Facebook Profile Link</label>
                    </div>
                    <div class="col-md-6">
                     
                        <div class="form-group" style="margin-top: 4px;">
                           <input type="text" class="form-control" name="fb_profile" value="">
                    
                        </div>
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                  <div class="row" >
                    <div class="col-md-4">
                        <label>Facebook Visiable(Other's)</label>
                    </div>
                    <div class="col-md-6">
                     
                        <div class="form-group" style="margin-top: 4px;">
                            <input type="radio" name="fb_visiable" value="0" 
                            
                            checked> OFF<br>
                            <input type="radio" name="fb_visiable" value="1"
                          
                            > ON<br>
                    
                        </div>
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                <div class="row" >
                    <div class="col-md-4">
                        <label>Twitter Profile Link</label>
                    </div>
                    <div class="col-md-6">
                     
                        <div class="form-group" style="margin-top: 4px;">
                           <input type="text" class="form-control" name="twitter_profile" value="">
                    
                        </div>
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                  <div class="row" >
                    <div class="col-md-4">
                        <label>Twitter Visiable(Other's)</label>
                    </div>
                    <div class="col-md-6">
                     
                        <div class="form-group" style="margin-top: 4px;">
                            <input type="radio" name="twitter_visiable" value="0" 
                           
                               checked=""
                            
                            > OFF<br>
                            <input type="radio" name="twitter_visiable" value="1"
                             
                               checked=""
                      
                            > ON<br>
                    
                        </div>
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                 <div class="row" >
                    <div class="col-md-4">
                        <label>Instagram Profile Link</label>
                    </div>
                    <div class="col-md-6">
                     
                        <div class="form-group" style="margin-top: 4px;">
                           <input type="text" class="form-control" name="instagram_profile" value="">
                    
                        </div>
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                  <div class="row" >
                    <div class="col-md-4">
                        <label>Instagram Visiable(Other's)</label>
                    </div>
                    <div class="col-md-6">
                     
                        <div class="form-group" style="margin-top: 4px;">
                            <input type="radio" name="instagram_visiable" value="0" 
                      
                               checked=""
                         
                            > OFF<br>
                            <input type="radio" name="instagram_visiable" value="1"
                       
                               checked=""
                   
                            > ON<br>
                    
                        </div>
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                <div class="row" >
                    <div class="col-md-4">
                      
                    </div>
                    <div class="col-md-6">
                     <button class="btn btn-info">Update</button>
                        
                    </div>
                    <div class="col-md-2">
                         
                    </div>
                    
                </div>
                </form>
            </div>
          </div>
  </div>
</div>
@endif

@endsection