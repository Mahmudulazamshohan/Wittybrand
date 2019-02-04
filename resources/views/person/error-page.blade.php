@extends('layouts.person')
@section('section')

                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-6 offset-3">
                                <div class="text-center mt-5">
                                    <h1 class="text-error">404</h1>
                                    <h4 class="text-uppercase text-danger mt-3">Page Not Found</h4>
                                    <p class="text-muted mt-3">It's looking like you may have taken a wrong turn. Don't worry... it
                                        happens to the best of us. Here's a
                                        little tip that might help you get back on track.</p>

                                    <a class="btn btn-md btn-custom waves-effect waves-light mt-3" href="{{route('person.dashboard')}}"> Return Home</a>
                                </div>

                            </div>
                        </div>
                     

                    </div>

                </div> 
@endsection
