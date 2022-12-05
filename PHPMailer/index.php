<!DOCTYPE html>
<html lang="en">
<head>
	<title>API MAILER CWA</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
		<div class="col-lg-8">
			<div class="page-header">
				<br>
				<h3>API Mailler CWA</h3>
			</div>
			<form action="proses.php" method="post">
				<div class="form-group">
					<label>Email Tujuan</label>
                    <input type="email" name="email" id="email" class="form-control"><br><br>
				</div>
				<div class="form-group">
					<label>Subjek</label>
                    <input type="text" name="judul" id="judul" class="form-control"><br><br>
				</div>
				<div class="form-group">
                    <textarea name="pesan" id="pesan" rows="8" cols="20" class="form-control"></textarea><br><br>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary">Kirim Email!</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>