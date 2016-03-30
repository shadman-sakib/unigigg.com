<div class="padsmall" >
  <h4>Your Skills</h4>
  @if(count($skill)>0)

    @foreach ($skill as $skills)
      <p>
        <table class="table table-bordered table-responsive " style="text-align:center;">
          <thead>
            <th>
              Skill
            </th>
            <th>
              Level
            </th>
            <th>
              Experience
            </th>

            <th>
              Show Skill Work

              <sub>  <small>Add a project link</small></sub>

            </th>
            <th>
              Skill Proof
            </th>
            <th>
              Verification
            </th>
            <th>
              Delete
            </th>

          </thead>
          <tbody>
            <tr>
              <td>
                {{$skills->skill_name}}

              </td>
              <td>
                {{$skills->skill_level}}

              </td>
              <td>
                {{$skills->skill_experience}} Years
              </td>

              <td>

                <form class="" action="{{url('skills',$skills->skill_id)}}" method="POST">


                  {!! csrf_field() !!}
                  <div class="form-group">
                    {!! Form::label('skill_proof', 'Add Project URL:', ['class' => 'control-label']) !!}
                    {!! Form::text('skill_proof', 'http://', ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::submit('Add/Update', ['class' => 'btn btn-primary btn-sm']) !!}
                  </div>
                  @if($errors->any())
                    <div class="alert alert-danger">
                      @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                      @endforeach
                    </div>
                  @endif

                </td>
                @if(count($skills->skill_proof)>0)
                  <td>
                    <a href="{{$skills->skill_proof}}" target="_blank">{{$skills->skill_name}}</a>
                  </td>
                @else
                  <td>
                    Not added
                  </td>
                @endif
                @if($skills->varified===0)
                  <td>
                    Not Verified
                  </td>
                @else
                  <td>
                    Verified
                  </td>
                @endif
                <td>
                  <form action="{{url('skill',$skills->skill_id)}}" method="POST">
                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-danger">
                      <i class="fa fa-cross"></i> Delete
                    </button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
        </p>

      @endforeach
    @else
      <h4>Nothing added</h4>

    </div>

  @endif
  <!-- Modal ends -->
