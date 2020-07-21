<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width initial-scale=5.0">
	<title>NEC'6</title>
	<link rel="icon"  href="tkjcuy.png">
	<style type="text/css">
	body{
	margin: 0px;
	padding: 0px;
	background-image : url(gerbang.bin);
	background-size: 1900px 1650px;
	background-repeat: no-repeat;
	background-attachment: fixed;
	font-family: Tahoma ,sans serif;


	}h4{
		color: white	;
		margin-top: -3px;
		font-size: 16px;
	
	}

	.form{
box-shadow: 5px 5px 5px black,-5px -5px 5px black;
	position: absolute;
	top: 45%;#50%;
	left: 50%;#50%;
	transform: translate(-50%,-50%);
	width: 500px;
	height: 820px;#710;
	box-sizing: border-box;
	background-image: url(pemandangan.bin);
	/*background: transparent;*/
	/*rgba(0, 0, 0,.5 )*/
	padding: 25px;

	}
	h3{
		margin: 0;
		padding: 0 0 10px;
		font-weight: bold;
		color: white;
		font-family: lucida console;
		font-size: 32px;
		margin-top: 10px;

	}
	.form p{

	margin-left: 10;
	padding: 0;
	font-weight: bold;
	color: #ffffff;


	}.img{
		background-image: transparent;
		margin-left: 370px;
		margin-top: -70px;
		marker-mid: 50px;
		margin-right: 20px;

	}.jam{
		margin-top: -70px;
		margin-left: 0px;
	}
	.form input,select{

	margin-bottom: 20px;
	width: 100%;

	}

	.form input[type=text],
	.form input[type=INT],
	.form a{

		border: none;
		border-bottom: 1px solid #ffffff;
		background-color: transparent;
		outline: none;
		height: 25px;
		color: #ffffff;
		display: 16px;



	}
	::placeholder{

	color: #ffffff;


	}
	.form select{


		margin-top: 20px;
		padding: 10px 0;
	}
	.form input[type=submit]{
		
		border:none;
		height: 40px;
		outline: none;
		color: #ffffff;
		font-size: 20px;
		background-color: blue;
		cursor: pointer;
		border-radius: 30px;


	}
	.form input[type=submit]:hover{


		background-color: cyan;
		color: #ffffff;
	}
	.form {

	color: #ffffff;
	text-decoration: none;
	font-size: 14px;
	font-weight: bold;

	}.mans{
		margin-left: 210px;
		margin-top: -10px;	
		font-size: 15px;
		font-color:blue;
	}.mangc{
		margin-left: 185px;
		margin-top: -12px;	
		font-size: 15px;

	}.form input[type=checkbox]{
		margin-top: 10px;
		margin-left: -213px;
		size: 20px;
	}.cuy{
		margin-top: -37.3px;
		margin-left: 20px;
		font-size: 14px;
		color: white;
		font-family: Tahoma ,sans serif;
	}.hag{
		margin-top: 10px;
	}textarea{
		width: 450px;
		height: 50px;
		background-color: transparent;
		color: white;
		border-color: white;
	}.uhuy{
		margin-top: 0px;
		color: white;
	}.uhuy1{
		margin-top: 20px;
	}h2{
		font-size: 20px;
			color: cyan;
			margin-top: 0px;
		}input[type="file"]
{  outline: none;
 	color: white;
   border-radius: 3px;
  /*padding: 8px 22px;*/
  /*cursor: pointer;*/
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
  margin-top: 20px;
  margin-left: 5px;

}
/*.qw{*/
		/*width: 500px;*/
		/*height: 105px;*/
		/*background-color: black;*/
		/*margin-left: 24%;*/
		/*margin-top: 39%;*/
	/*}h1{*/
		/*color:  blue;*/
		/*font-size:45px;*/
		/*margin-top: -80px;*/
		/*margin-left: 140px;*/
		/*}.jpg{*/
			/*margin-top: 0px;*/
		/*}*/
		form .yu{
			outline: none;
			border: none;
			background-color: transparent;
			color: white;
			border-bottom: 1px solid #ffffff;
			font-size: 15px;
			margin-top: -10px;

		}option{
			background-color: black;
			width: 20px;
		}ul{
		margin-left: -50px;
	}
	a{
		font-size: 30px;
		color:white;
		outline: red;
		margin-left: 20px;
		font-family: lucida sans ;
		text-decoration: none;
		font-weight: lighter;
		/*font-style: italic;*/
		font letter-spacing: 15px;

	}.mang{
		width: 600px;
		height: 40px;
		background-color: transparent;
		margin-top: 150px;
		margin-left: 205px;
		/*margin-top: 100px;	*/
		font-size: 15px;
		font-color:blue;
	}
	</style>
</head>
<body>
	<div class="mang">
<ul>
	<a href="admin">Admin</a>
	<a href="http://nec6.epizy.com">Daftar</a>
	<a href="nampil" >Data Pendaftar</a>
	<a href="keluhan" >Keluhan</a>
	
</ul>
</div>
	<!-- <div class="qw"> -->
<!-- <marquee> -->
	<!-- <div class="jpg">		 -->
	<!-- <img src="T_JAM.jpg" width="105" height="105"> -->
	<!-- </div> -->
	<!-- <h1>Welcome</h1></marquee> -->
<!-- </div> -->
	<div class="form">
		<marquee><h2>Welcome TO Recuitment</h2></marquee>
		<center><h3 style="">DAFTAR</h3></center>
<div class="img">
	<img src="necuy.png" width="70px" height="70">
</div>
<div class="jam"><img src="tkjcuy.png" width="70" height="70"></div>		</center>
		<form action="" method="post" enctype="multipart/form-data">
			<p class="uhuy1">Nama Lengkap</p>
			<input type="text" name="nama" placeholder="Enter Your Name" required="">
			<p class="uhuy">Kelas</p>
			<select name="kelas" class="yu">
				<option value="X TKJ 1">X TKJ 1</option>
				<option value="X TKJ 2">X TKJ 2</option>
				<option value="X TKJ 3">X TKJ 3</option>
			</select>
			<p class="uhuy">Jenis Kelamin</p>		
			<select name="jk" class="yu">
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
			<p class="uhuy">Nomor Whatsapp</p>
			<input type="INT" name="wa" placeholder="Your number Whatsapp" required="" pattern="[0-9]{11,30}" maxlength="15" title="input harus berupa number and minlength = 11" >
			<p class="uhuy">Tujuan</p>
			<textarea name="tujuan" required=""	></textarea>
			<input type="checkbox" name="1[]" value="yes">
			<div class="cuy">apakah anda mempunyai laptop</div>

			<input type="file" name="gambar" required="">
			<div class="hag"><input type="submit" name="sbt" value="Daftar"></div>
			

		
		</form>
		<form action="" method="post">
		<input type="submit" name="edit" value="Kembali">
		</form>
		<div class="mans"><h4>data</h4></a></div>
	<div class="mangc"><h4>by crew tkj</h4>
	</div>	
	
	</div>
<div class="img">
	<!-- <img src="T_NEC.png" width="70px" height="70"> -->
</div>
<?php 
	
	//proses.php

	if (isset($_POST['sbt'])) {
	$wa = $_POST['wa'];
	$nama = $_POST['nama'];
	$conn=mysqli_connect('sql102.epizy.com', 'epiz_25566413', 'nyspC3GobCU1Lxe', 'epiz_25566413_login');
if ($conn) {
	//echo "lulus";
	}else{
		//echo "gugur";
	}
	$sql ="SELECT * FROM web WHERE nama='$nama' AND no_whatsapp =$wa";
	$INSERT = mysqli_query($conn,$sql);
	$cek = mysqli_num_rows($INSERT);
	if ($cek > 0 ) {
	echo'
<script type ="text/javascript">
alert ("Nama atau Nomor Whatsapp Tersebut Sudah Terdaftar");
</script>';
}
	else{
$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$jk = $_POST['jk'];
		$wa = $_POST['wa'];
		$tujuan = $_POST['tujuan'];
		$fileName = $_FILES['gambar']['name'];
	$fileSize = $_FILES['gambar']['size'];
	$fileType = $_FILES['gambar']['type'];
	$image = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
		foreach ($_POST['1'] as $value) {
		// $sql = "INSERT INTO web(data) VALUES('$value')";
			}
		date_default_timezone_set("Asia/Jakarta");
		$date =date('d-m-Y');
		$jam = date('H:i a');
		

	$sql = "INSERT INTO web(nama,Kelas,jk,no_whatsapp,file,type,data,tujuan,gambar,nama_gambar,tipe_gambar,ukuran_gambar) VALUES('$nama','$kelas','$jk','$wa','$date','$jam','$value','$tujuan','$image','$fileName','$fileType','$fileSize')";
		$INSERT = mysqli_query($conn,$sql);
	if ($sql) {
				echo'
<script type ="text/javascript">
alert ("Data Tersimpan,Link Grup Whatsapp https://chat.whatsapp.com/D4T14SPZcAPJBiuSzphwFB");
window.location.href="nampil.php";
</script>';		
	 // }
		}else{
			echo'
<script type ="text/javascript">
alert ("Data Failed");
</script>';
		}	
}	
}

	 	// echo'
// <script type ="text/javascript">
// alert ("Your name or class or jenis kelamin or number whatsapp is empty");
// </script>';
	 // }
?>
<?php 
if (isset($_POST['edit'])) {
	echo '<script type="text/javascript">window.location="nampil";</script>';
}
// $conn = mysqli_connect('localhost', 'root', '', 'login');
// if ($conn) {
  // echo "berhasil";
// }else{
  // echo "gagal";
// }
// $nama = $_POST['nama'];

// -- $sql = "SELECT * from web WHERE nama ='$nama'";
// $a= mysqli_query ($conn,$sql);
// $data = mysqli_fetch_array($a);
// if ($data) {
	// $idbar = $data['id'];
	
	// echo "$idbar,$nambar";
	// }
// $id = $idbar;
 // $nama  = $_POST['nama'];
 // $kelas = $_POST['kelas'];
 // $jk = $_POST['jk'];
 // $wa = $_POST['wa'];
 // $value = $_POST['1'];
 // $tujuan = $_POST['tujuan'];
 // date_default_timezone_set("Asia/Jakarta");
 // $tanggal = date('d-m-Y');
 // $jam = date('G:i  A');
// -- $sql= "UPDATE  web set nama='$nama' ,Kelas = '$kelas', jk='$jk' ,no_whatsapp ='$wa', file ='$tanggal' , type ='$jam', data ='$value' ,tujuan = '$tujuan' WHERE id = '$id'";
// $data = mysqli_query($conn,$sql);
// }

 // ?>	
<!-- <!<?php  ?> --> --> --> -->
	

</body>
</html>
