@extends('layouts.app')

@section('content')
  <div class="container padtop">
    <div class="row">
      <table class="table table-striped">
        <thead>
          <th>
            Name
          </th>
          <th>
            email
          </th>
          <th>
            View Profile
          </th>
          <th>
            Verify
          </th>
        </thead>
        <tbody>
          @foreach($allemployer as $users)
            <tr>
              <td>
                {{$users->name}}
              </td>
              <td>
                {{$users->email}}
              </td>
              <td>
                <form  action="{{url('/employer/profile',$users->id)}}" method="GET">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-user"></i> view profile
                  </button>
                </form>
              </td>
              <td>
                <form  action="{{url('verify/employer',$users->id)}}" method="POST">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-check-circle"></i> Verify
                  </button>
                </form>
              </td>
              @if($users->verified===0)
                <td>
                  <p class="text-danger">
                    Not verified
                  </p>
                </td>
              @else
                <td>
                  <p class="text-success">
                   verified
                  </p>
                </td>
              @endif




            </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>

@endsection
