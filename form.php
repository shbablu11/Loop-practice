<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form</title>

<!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- how to get email and pass -->

<form action="./getpostdata.php" method="GET" class="col-4 mx-auto mt-5">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="user_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="user_pass" type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<!-- check odd even number -->

<form action="./oddeven.php" method="GET" class="col-4 mx-auto mt-5">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Odd Even Number</label>
    <input name="number" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<!-- times table check -->

<form action="./timetable.php" method="GET" class="col-4 mx-auto mt-5">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Timestable</label>
    <input name="timestable" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>





</body>
</html>