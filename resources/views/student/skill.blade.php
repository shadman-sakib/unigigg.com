@extends('layouts.app')

@section('content')
  <script type="text/javascript">
  (function ($) {
    $('#skill').smoothState();
 }) (jQuery);

  </script>
  <div class="container padtop" id="skill">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-7">

        <ul class="nav nav-pills panel whiteproper">
          <li ><a href="{{url('userinfo')}}">Basic Information</a></li>
          <li ><a href="{{url('image')}}">Profile Pic</a></li>
          <li ><a href="{{url('edu')}}">Education</a></li>
          <li class="active" ><a href="{{url('skill')}}">Skills</a></li>
          <li ><a href="{{url('experience')}}">Experience</a></li>
          <li ><a href="{{url('refs')}}">Reference</a></li>
          <li ><a href="{{url('excc')}}">Extra-Curricular</a></li>
          <li ><a href="{{url('interest')}}">Upload CV</a></li>
          <li><a href="{{url('fun')}}">About You</a></li>
            <li ><a href="{{url('hobby')}}">Cover Letter</a></li>
          <li><a href="{{url('vdoprofile')}}">Video Profile</a></li>
        </ul>


          <div class="well">

            @if(count($errors)>0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
                @endforeach
              </div>
            @endif
            @if (notify()->ready())
            <script>
          swal({
              title: "{!! notify()->message() !!}",
              text: "{!! notify()->option('text') !!}",
              type: "{{ notify()->type() }}",
              @if (notify()->option('timer'))
                  timer: {{ notify()->option('timer') }},
                  showConfirmButton: false
              @endif
          });
      </script>
  @endif


            @include('student.forms.skills')


      </div>
    </div>
    <div class="col-md-2 card raised whiteproper">
      <h5 class="textb">Skills you added</h5>
      @foreach($skill as $skills)

        <ul class="list-group">
          <li class="list-group-item">{{$skills->skill_name}}</li>
        </ul>
      @endforeach

    </div>
  </div>
</div>


@endsection
