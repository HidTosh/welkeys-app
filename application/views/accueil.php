<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css'); ?>"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"> <!-- Resource style -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="<?php echo base_url('assets/js/modernizr.js'); ?>"></script> <!-- Modernizr -->
	<script>
    	var base_url = '<?php echo base_url(); ?>';
	</script>
  	
	<title>Formulaire</title>
</head>
<body>

<div class="container">

	<form id="myfrom" action="/welkeys-app/" class="cd-form floating-labels">
		<fieldset>
			<legend>Mon compte</legend>
			<div class="icon">
				<label class="cd-label" for="cd-name">Nom</label>
				<input class="user error" type="text" name="cd_name" id="cd-name" required>
		    </div> 

		    <div class="icon">
		    	<label class="cd-label" for="cd-company">Prénom</label>
				<input class="user" type="text" name="cd_prenom" id="cd-company">
		    </div> 

		    <div class="icon">
		    	<label class="cd-label" for="cd-email">Email</label>
				<input class="email" type="email" name="cd_email" id="cd-email" required>
		    </div>
			<div>
		      	<input type="submit" value="Envoyer" id="postData">
		    </div>
		</fieldset>
	</form>

	<div class="jumbotron">
		<table class="table" id="table_user">
		    <thead>
		      <tr>
		        <th>Nom</th>
		        <th>Prenom</th>
		        <th>Email</th>
		      </tr>
		    </thead>
		    <tbody>
			<?php foreach ($query as $row) { ?>
		      <tr class="info">
		        <td><?php echo $row->nom;?></td>
		        <td><?php echo $row->prenom;?></td>
		        <td><?php echo $row->email;?></td>
		        <td><a href="#" class="fa fa-trash-o" aria-hidden="true" id="<?php echo $row->id;?>" ></a></td>
		      </tr>    
  			<?php } ?>  
		    </tbody>
		</table>
	</div>

</div>		

<script src="<?php echo base_url('assets/js/jquery-2.1.1.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script> <!-- Resource jQuery -->
<script src="<?php echo base_url('assets/js/main2.js'); ?>"></script> <!-- Resource jQuery -->

<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. 
<?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

</body>
</html>