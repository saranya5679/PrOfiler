<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main.php</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col">
	<h3 style="text-align:center">Profile</h3>
		<form action="#" id="login" method="post">
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Email address</label>
			  <input type="email" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>
			<div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">Password</label>
				<input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="enter password">
			</div>
      <div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">Confirm Password</label>
				<input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="enter password">
			</div>
      <div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
			  <input type="Phone" name="Phone" class="form-control" id="exampleFormControlInput1" placeholder="10 digit number">
			</div>
      <div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Username</label>
			  <input type="Phone" name="Phone" class="form-control" id="exampleFormControlInput1" placeholder="Username">
			</div>
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">D.O.B</label>
      <br>
      <input type="date" id="exampleFormControlInput1" name="birthday" class="form-control" placeholder="Date of Birth">
</div>
   <button type="Update" class="btn btn-primary">Update</button>
   <button type="Logout" class="btn btn-primary">Logout</button>

</form>
</body>
</html>