
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domácí úkol</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

<form method="POST" action="vlozit.php">
     <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Jméno:</label>
    <div class="col-sm-10">
      <input type="text"name="surname">
    </div>
  </div>
   <div class="form-group row">         
    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Vzkaz:</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textarea">
        </textarea>
  </div>
     </div>
  <input type="submit">
 
</form>

</div>



</body>
</html>
