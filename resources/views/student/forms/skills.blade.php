

<div class="panel panel-default">
    <div class="panel-heading">Add Skills</div>

      <div class="panel-body">
        <p>

        </p>
    {!! Form::open(array('url' => '/skillstore')) !!}


    <div class="form-group">
      {!! Form::label('skill_name', 'Skill Name:', ['class' => 'control-label']) !!}
      <input name="skill_name" id='skill_name' class="awesomplete form-control" data-multiple  />

      <small class="text-danger">required</small>
      <script type="text/javascript">
        var major = document.getElementById("skill_name");
        var autocomplete=new Awesomplete(skill_name, {
        minChars: 1,
        autoFirst: true
        });
        autocomplete.list =['C', 'C++', 'JavaScript','MS-Office','Accounting','Python','Php','Laravel','NodeJs','HTML','Django','Java', 'ASP.NET','Marketing','Finance','Writing','Graphic Design','Web Design','Adobe Photoshop','Adobe After Effect','Adobe Illustrator','3D Modeling']

      </script>
    </div>
    <div class="form-group">
      <label for="skill_level" class="control-label">Skill Level</label>
      <select class="form-control" name="skill_level" id="select">
          <option value="Beginner">Beginner</option>
          <option value="Amature">Amature</option>
          <option value="Expert">Expert</option>
      </select>
      <small class="text-danger">required</small>
    </div>
    <div class="form-group">
      <label for="skill_experience" class="control-label">Skill Experience <sub>in years</sub></label>
      <select class="form-control" name="skill_experience" id="select">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="5+">5+</option>
      </select>
      <small class="text-danger">required</small>
    </div>
    <div class="form-group">
      {!! Form::label('skill_proof', 'Please provide a sample of your work for validation:"', ['class' => 'control-label']) !!}
      {!! Form::text('skill_proof', null, ['class' => 'form-control']) !!}

      <small>Please note that without a sample of your work you will be able to apply to jobs or verify your profile</small><br>
      <small class="textb">Upload your skill proof to dropbox/ googledrive/ ondrive and share the link here</small><br>
      <small class="textb">i,e You have MS-powerpoint skill. So do a good powerpoint slide upload it in the cloud and share it</small>
      <small class="textb">If your skill is a soft skill like Negotiation, Communication, just put your facebook profile link or linkedinlink</small>
    </div>


    {!! Form::submit('Add', ['class' => 'btn btn-success btn-sm btn-raised']) !!}

 {!! Form::close() !!}



</div>
</script>
<script type="text/javascript">
$.ajaxSetup({
 headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
$(document).ready(function(){
  $('.send-btn').click(function(){
    $.ajax({
      url: 'form',
      type: "post",
      data: {'email':$('input[name=email]').val(), '_token': $('input[name=_token]').val(),'password':$('input[name=password]').val()},
      success: function(response){
        toastr.success(response);
      }
    });
  });
});
</script>

</div>
