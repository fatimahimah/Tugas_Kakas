<html>
<head>
   <title>Rekam Data</title>
</head>
<body>
   <?php
     error_reporting(0);
	 
	 $nama=$_GET['nama'];
     $email=$_GET['email'];
	 $jkel=$_GET['jkel'];
	 $minat1=$_GET['minat1'];
	 $minat2=$_GET['minat2'];
	 $minat3=$_GET['minat3'];
	 $minat4=$_GET['minat4'];
	 
	 if (empty($nama) or empty($email))
	 {
	    print("Nama, Email, dan Komentar harap diisi");
		exit;
	 }
	 
	if (isset($minat1))
	     $kode_minat1="v";
	 else
	     $kode_minat1="_";
	if (isset($minat2))
	     $kode_minat2="v";
	 else
	     $kode_minat2="_";
	if (isset($minat3))
	     $kode_minat3="v";
	 else
	     $kode_minat3="_";
	if (isset($minat4))
	     $kode_minat4="v";
	 else
	     $kode_minat4="_";
		 $kode_minat=$kode_minat1.$kode_minat2.$kode_minat3.$kode_minat4;
		 
	$nfile=fopen("BUKUTAMU.dat", "a");
	fputs($nfile, $nama."\n");
	fputs($nfile, $jkel."\n");
	fputs($nfile, $email."\n");
	fputs($nfile, $kode_minat."\n");
	
	fputs($nfile, "*-*\n");
	
	fclose($nfile);
	print("Halo, $nama. Data Anda sudah direkam <br>");
	print("terima Kasih");
  ?>
</body>
</html>