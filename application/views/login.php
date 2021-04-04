<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan Masyarakat</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/ef42c96630.js" crossorigin="anonymous"></script>
	<style type="text/css">
		.navbar{
			height: 50px;
		}
		.card{
			margin: auto;
			width: 50%;
			box-shadow: 5px 5px;
		}
		.container{
			padding-top: 20px;
		}
	</style>
</head>
<body>

	<!-- navbar -->
	<nav class="navbar navbar-dark bg-dark">
	  	<div class="container-fluid">
	    	<span class="navbar-brand mb-0 h1" style="font-family: cursive;">adu.in</span>
	  	</div>
	</nav>
	<!-- navbar -->

	<div class="container">
		<div class="card">
			<div class="card-header bg-dark text-light">
				<h1 class="text-center">Login</h1>
			</div>
			<div class="card-body">
				<form method="post" action="<?= site_url('login/cek'); ?>">
					<label for="username" class="form-label">Username</label>
					<div class="input-group mb-3">
    					<span class="input-group-text"><i class="fas fa-user"></i></span>
						<input type="text" class="form-control" placeholder="Username" id="username" name="username">
					</div>
					<label for="password" class="form-label">Password</label>
					<div class="input-group mb-3">
    					<span class="input-group-text"><i class="fas fa-lock"></i></span>
						<input type="password" class="form-control" placeholder="Password" id="password" name="password">
					</div>
					<button class="btn btn-primary" type="submit">Login</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>