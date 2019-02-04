@extends('layouts.person')
@section('style')
 <link href="{{ asset('plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" />
@endsection
@section('section')
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
<div class="card-box">
<div class="mt-4">
<form role="form" action="{{route('person.store-feedback')}}" method="POST">
	@csrf
<div class="form-group">
<input type="text" class="form-control" placeholder="Subject" name="subject">
</div>
<div class="form-group">
<div class="summernote">
</div>
</div>
<div class="form-group m-b-0">
<div class="text-right">
<textarea name="codes" id="codes" hidden="true"></textarea>
<a href="{{route('person.dashboard')}}" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-home"></i></a>
<button class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
</div>
</div>
</form>
</div>
</div>
@endsection
@section('script')
  <script src="{{asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
  <script type="text/javascript" defer>
  	jQuery(document).ready(function(){$(".summernote").summernote({height:250,minHeight:null,maxHeight:null,toolbar:[["style",["bold","italic","underline","clear"]],["font",["strikethrough","superscript","subscript"]],["fontsize",["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["height",["height"]]],focus:!1,callbacks:{onChange:function(e,o){$("#codes").html($(".summernote").summernote("code"))}}})});
  </script>
@endsection