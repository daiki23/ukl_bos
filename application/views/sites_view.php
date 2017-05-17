<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $title; ?></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
<div class="row content">
<div class="col-sm-3 sidenav"> 

<h4> Apotik Coaster </h4>
<ul class="nav nav-pills nav-stacked">
<li class="active"><a href="#section1">Home</a></li>	
<li><a href="#section2">Lihat Barang Apotik</a></li>	
<li><a href="#section3">Lihat Daftar Tersedia</a></li>	
<li><a href="#section4">Pesan Obat</a></li>	
</ul>
<br/>



</div>
</div>
</div>

<!-- end of sidenav -->

<div class="col-md-9">

<div class="form-group">
<label for="usr">Name :</label>
<input type="text" name="user" class="form-control" id="usr">
</div>

<div class="form-group">
<label for="pw">Password :</label>
<input type="Password" name="password" class="form-control" id="pw">
</div>

<div class="form-group">
<label> Submit ?</label> 
<br/>
<button type="button" class="btn btn-success"> SUBMIT </button>
</div>


</div>



</body>
</html>