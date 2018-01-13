<?php
$days = '';
$months ='';
$years = '';
if (isset($_POST['submit'])) {
  $datum = $_POST['start'];
  

$now = time(); // or your date as well
$new = strtotime("$datum");
$datediff = $now - $new;

$days = floor($datediff / (60 * 60 * 24));
$months = floor($datediff /  (60 * 60 * 24 * 30));
$years = floor($datediff / (60 * 60 *24 * 30 *12));
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
<title>DateDiff</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="k.css" type="text/css"> </head>

<body>
  <div class="py-5 gradient-overlay text-center bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-light">Lorem ipsum dolor sit amet</h1>
              <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nibh odio, sed tempus tellus facilisis eu. Maecenas euismod ipsum nibh, sit amet varius massa tincidunt sed. Donec mattis orci nec imperdiet congue. Duis ut facilisis enim. Nunc nec massa nisi. Quisque sollicitudin nulla sit amet iaculis varius. Mauris quis mi eget nisl ultricies hendrerit eu in mi. Aliquam blandit nunc eu urna consectetur, eu tempor nisl lobortis. Fusce aliquam nisi a erat consectetur, in rutrum erat suscipit. Aenean ornare ultrices mi ac ullamcorper. Aliquam accumsan mi quis venenatis vestibulum. Pellentesque hendrerit rutrum vestibulum. In hac habitasse platea dictumst. Nulla facilisi.
e&nbsp;
                <br> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="form-inline" method="post">
            <input type="date" name="start" class="form-control">
            <button type="submit" class="btn btn-primary" name="submit">Calculate</button>
          </form>
          <h2><?php echo "Days $days"?>
             <h2><?php echo "Month/s $months"?>
               <h2><?php echo " Years $years"?>
           </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="bg-primary py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8 my-3">
          <h1 class="display-4 text-white text-md-left text-center">Spread The love</h1>
        </div>
        <div class="col-md-4  text-center align-self-center">
          <a href="https://www.facebook.com/madafakerizhuda" target="madafakerizhuda"><i class="fa fa-fw fa-facebook fa-3x text-white mx-3"></i></a>
          <a href="https://www.instagram.com/cirkann" target="cirkann"><i class="fa fa-fw fa-instagram fa-3x text-white mx-3"></i></a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>