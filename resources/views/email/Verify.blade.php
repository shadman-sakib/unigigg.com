<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link href="https://bootswatch.com/paper/bootstrap.min.css" rel="stylesheet">
</head>

<style media="screen">
body{
  font-family: 'Raleway';
  background-color: 	#f7f7f7;
  font-size: 16px;
  padding-top: 100px;
}
.center{
  text-align:center;;
}
</style>
<body>
  <div class="col-md-6 center">

    <h3>Hello Admin  !<h3>
    I am {{$user->name}},
    I would like to verify my profile.
    My Email is   : {{$user->email}}
    MY User ID is : {{$user->id}}

  </div>




</body>
</html>
