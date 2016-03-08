<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Update!</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('style/css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
  <br><br><br><br>
  <div class="row">
  <div class="col-md-4 col-md-offset-4">
  <h2>Update!</h2>
          <?php echo validation_errors(); ?>
          <?php echo form_open('crud/update/'.$team_view['id']); ?>
              <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" value="<?php echo $team_view['nama']; ?>" name="nama" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="Skill">Skill</label>
                <input type="text" class="form-control" value="<?php echo $team_view['skill']; ?>" name="skill" placeholder="Skill">
              </div>
              <div class="form-group">
                <label for="expe">Experience</label>
                <input type="text" class="form-control" value="<?php echo $team_view['experience']; ?>" name="expe" placeholder="Experience">
              </div><br>
              <button type="submit" href="" class="btn-lg btn btn-success">Save!</button>
              <a href="<?php echo site_url('crud'); ?>" class="btn btn-lg btn-default">Batal</a>
          <?php echo form_close(); ?>
</div>
</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="style/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="style/js/bootstrap.min.js"></script>
  </body>
</html>