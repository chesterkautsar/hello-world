<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CRUD Codeigniter 3.03</title>

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
      <div class="row">
      <h1><a href="<?php echo site_url('crud/create'); ?>" class="btn btn-primary">Tambah</a></h1>
      <p>Training CRUD with framework Codeigniter 3.03</p>
      <table class="table table-bordered">
        <tr>
          <th class="col-md-1 text-center">No</th>
          <th class="col-md-2 text-center">Nama</th>
          <th class="col-md-3 text-center">Skill</th>
          <th class="col-md-3 text-center">Experience</th>
          <th class="col-md-3 text-center">Action</th>
        </tr>

        <?php foreach ($team as $team_view) { ?>
       
        <tr>
          <td class="text-center"><?php echo $team_view['id']; ?></td>
          <td class="text-center"><?php echo $team_view['nama']; ?></td>
          <td class="text-center"><?php echo $team_view['skill']; ?></td>
          <td><?php echo $team_view['experience']; ?></td>
          <td class="text-center">
              <a href="<?php echo site_url('crud/update/'.$team_view['id']); ?>" class="btn btn-success">Update</a> 
              <a href="<?php echo site_url('crud/delete/'.$team_view['id']); ?>" class="btn btn-default">Delete</a>
          </td>
        </tr>

         <?php } ?>

      </div>
      </table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="style/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="style/js/bootstrap.min.js"></script>
  </body>
</html>