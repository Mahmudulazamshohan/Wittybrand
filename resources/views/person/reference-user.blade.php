@extends('layouts.person')
@section('section')

  @if($count > 0)
   <div class="row">
 	@foreach($reference as $rf)
 
 	   <div class="col-md-4">
                  <div class="text-center card-box">

                                    <div class="member-card pt-2 pb-2">
                                        <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                            @if(!is_null($rf->profile))
                                            <img src="{{route('person.image-views',explode('/', $rf->profile->profile_image_location)[1]) }}" class="rounded-circle img-thumbnail" alt="profile-image">
                                            @else
                                             <img src="{{asset('assets/images/user-avatar.png')}}" class="rounded-circle img-thumbnail" alt="profile-image">
                                            @endif
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">{{$rf->users->name}}</h4>
                                            <p class="text-muted">@ID <span> | </span> <span> <a href="#" class="text-pink">({{$rf->user_id}}) </a> </span></p>
                                        </div>

                                        <ul class="social-links list-inline m-t-20">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" 
                                                 @if(!is_null($rf->profile) && ($rf->profile->fb_is_visible == 1))
                                                  href="https://{{$rf->profile->fb_profile}}"
                                                @else
                                                  href=""
                                                @endif
                                                 data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" 
                                                 @if(!is_null($rf->profile) && ($rf->profile->twitter_is_visible == 1))
                                                   href="https://{{$rf->profile->twitter_profile}}"
                                                @else
                                                  href=""
                                                @endif
                                                data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" 
                                                @if(!is_null($rf->profile) && ($rf->profile->instagram_is_visible == 1))
                                                 href="https://{{$rf->profile->instagram_profile}}"
                                                @else
                                                  href=""
                                                @endif 

                                                data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>

                                        <button type="button" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">
                                        	<i class="fa fa-user"></i>
                                        </button>

                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">{{$rf->totalUser()}}
                                                        </h4>
                                                        <p class="mb-0 text-muted">Referral User</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">5000</h4>
                                                        <p class="mb-0 text-muted">Points</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">Rank</h4>
                                                        <p class="mb-0 text-muted">10</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            @endforeach
                            
                           
 </div>
  @else
    <div class="row">
     <div class="col-12">
         <div class="text-center card-box">
             <h1 style="color: #434959;"> Not Found Any Referral User</h1>
         </div>
     </div>
    </div>
    @endif


   <div class="row">
     <div class="col-12">
     	 <div class="text-right float-right">
     	 	 {{ $reference->links() }}
     	 </div>
     </div>
    </div>
@endsection
