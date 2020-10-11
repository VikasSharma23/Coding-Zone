<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>iDiscuss - Coding Zone</title>

    <style>

      .container{
        min-height: 409px;
      }

      #heading{
        text-decoration: underline;
      }

    /*  #body{
        background-image:"https://source.unsplash.com/?forest,nature" 
      }*/

      #body{
        background-color:lightblue;
      }


    </style>
  </head>
  <body id="body">
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/header.php'; ?>
      
    <div class="container text-center my-4">
        <?php echo '<h1 id="heading">Contact iDiscuss</h1>' ?>
        <div class="container my-5">
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">FIRST NAME</label>
      <input type="text" class="form-control" id="fname" name="fname">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">LAST NAME</label>
      <input type="text" class="form-control" id="lname" name="lname">
    </div>
  </div>
  <div class="form-group">
    <label for="username">USER NAME</label>
    <input type="text" class="form-control" id="username"  name="username">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="msg">MESSAGE</label>
      <textarea class="form-control" id="msg" rows="3"></textarea>
    </div>
      <div class="form-group col-md-6">
        <label for="msg">ADDITIONAL DETAILS</label>
        <textarea class="form-control" id="msg" rows="3"></textarea>
      </div>
  </div>
  <button type="submit" class="btn btn-primary">Send Message</button>
</form>
        </div>
    </div>




    <?php include 'partials/footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>