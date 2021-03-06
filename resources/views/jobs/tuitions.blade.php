@extends('layouts.app')
@section('content')
  <div class="container padtop">
    <div class="row ft ">
      <a href="{{url('home')}}"><h4 class="text-primary"><i class="fa fa-arrow-left"></i> Go Back </h4></a>
      <div >
            <ul class="nav nav-pills panel whiteproper nav-justified">
              <li ><a href="{{url('eccentricJobs')}}">All</a></li>
              <li class="active" ><a href="{{url('tuitions')}}">Tutions</a></li>
              <li ><a href="{{url('assignements')}}">Assignments</a></li>
              <li ><a href="{{url('others')}}">Others</a></li>
              <li>@include('search.search',['url'=>'search'])</li>
            </ul>
      </div>
      @if(count($tuitions)>0)

        @foreach($tuitions as $jobs)
          <div class="col-md-3 col-md-offset-1 textb whiteproper panel padsmall">
          <fieldset>
              <h6>{{$jobs->title}}</h6>

            <div class="textb">
              <strong>{{$jobs->type}}</strong>
              <p>
                {{$jobs->description}}
              </p>
              <strong>{{$jobs->offering}}</strong>/
              <strong>{{$jobs->area}}</strong>



              @if(Auth::user()->id!=$jobs->user_id)
                <form class="form-inline" action="{{url('apply/eccentric')}}" method="post">
                  {!! csrf_field() !!}
                  <div class="form-group">
                      <input type="hidden" name="applied_for_odd_id" value="{{$jobs->odd_id}}">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  </div>
                  @if(Auth::user()->type===2)
                      <small class="text-warning">  Sorry Recruiters cannot apply to jobs</small>
                  @else


                  @if(count($applicable)>0)
                        <button type="submit" name="button" class="btn btn-success btn-sm">Apply</button>
                  @else
                    <p class="text-danger">
                      Please fill profile information to apply
                    </p>
                  @endif
                  @endif



                  <p>

                  @if($jobs->user_id===Auth::user()->id)
                    You posted this job
                  @else

                    Posted By  {{$jobs->user_id}}
                  @endif
                  </p>
                </form>
            @endif



            </div>
          </fieldset>
          </div>
        @endforeach

      @endif


    </div>
  </div>
@endsection
