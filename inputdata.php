<?php
include"../koneksi/koneksi.php";

$uname=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];

	switch($_GET['page']){
	
		case"daftar":
		
			mysql_query("insert into anggota(nama,alamat,nohp,username,password,level,status) values('$nm','$almt','$tlp','$uname','$pass','Anggota',1)");
			
			if(!empty($sponsor)){
			mysql_query("insert into pohon(nama,id_pangkat,sponsor) values('$uname',1,'$sponsor')");
			mysql_query("insert into detail_bv(username,tanggal,bv) values('$sponsor','now()',500)");
			}
			
			header('location:pegawai.php?page=beranda');
		
		
		break;
		
		case"beli":

		$a=mysql_fetch_array(mysql_query("select CURDATE() as 'a'"));
			
			if(empty($uname))
				{header('location:pegawai.php?page=beranda');}
				
				$total_beli=$hrg*$bnyk;
				$total_bv=$pvbv*$bnyk;

			mysql_query("insert into detail_pembelian(username,tanggal,nama_produk,harga_produk,jumlah,total_bv,total_beli) values('$uname','$a[a]','$nm_brg','$hrg','$bnyk','$total_bv','$total_beli')");
			mysql_query("insert into detail_bv(username,tanggal,bv) values('$uname','$a[a]','$total_bv')");
				

				$ambil_bonus = mysql_fetch_array(mysql_query("select * from pangkat and"))
			if ($total_beli > 500000) {
				$bonus = 
			}

			header('location:pegawai.php?page=beranda');	
		/*		$query=mysql_query("select * from pohon where sponsor where nama='$uname'");
				$ambil_data=mysql_fetch_array($query);


			mysql_query("select pohon.nama,detail_pembelian.username,detail_pembelian.jumlah from detail_pembelian where detail_pembelian.username=pohon.nama")
		*/

		break;	
	
	}

?>