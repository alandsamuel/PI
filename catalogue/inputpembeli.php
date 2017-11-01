<html>
<head>
<script type="text/javascript">
	function validasi() {
		if(document.form1.namapembeli.value == "")
	   {
		 alert( "Masukkan nama Anda!" );
		 document.form1.namapembeli.focus() ;
		 return false;
	   }
	   
	   if(document.form1.alamatpembeli.value == "")
	   {
		 alert( "Masukkan alamat Anda!" );
		 document.form1.alamatpembeli.focus() ;
		 return false;
	   }
	   
	   if(document.form1.kontakpembeli.value == "")
	   {
		 alert( "Masukkan no telepon/HP Anda!" );
		 document.form1.kontakpembeli.focus() ;
		 return false;
	   }
	   
		if(document.form1.kontakpembeli.value == "")
	   {
		 alert( "Masukkan no telepon/HP Anda!" );
		 document.form1.kontakpembeli.focus() ;
		 return false;
	   }	   
	}
</script>
</head>
<body>

<h3>..::Silahkan Masukkan Data Anda::..</h3>
<form  action='home.php?target=selesaibeli' method='post' name="form1" onsubmit="return(validasi());">
	<form class="form-horizontal" role="form">
		<div class="form-group">
		  <label class="control-label col-sm-2" for="namapembeli">Nama Anda :</label>
		  <div class="col-sm-8">
			<input type="text" name="namapembeli" class="form-control" id="namapembeli" placeholder="Masukkan nama">
		  </div>
		</div>
		<br>
		<br>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="steamuser">USER ID STEAM :</label>
		  <div class="col-sm-8">          
			<input type="text" name="steamuser" class="form-control" id="steamuser" placeholder="Masukkan Alamat Steam Anda">
		  </div>
		</div>
		<br>
		<br>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="kontakpembeli">Telepon/HP :</label>
		  <div class="col-sm-8">          
			<input type="text" name="kontakpembeli" class="form-control" id="kontakpembeli" placeholder="Masukkan telepon">
		  </div>
		</div>
		<br>
		<br>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="cara">Cara Bayar :</label>
			<div class="col-sm-4">          
				  <select name='cara'>
						<option value='ATM'>ATM</option>";
						<option value='CASH'>Cash</option>
						<option value='COD'>Cash On Delivery</option>
				  </select>
			</div>
		</div><!-- /btn-group -->
		<BR>
		<br>
		<div class="well">
		<h3> No. Rekening yang tersedia : </h3><BR>
		<p><b>Mandiri</b><BR>
		No. Rekening : 900-00-2121-669-3<BR>
		Atas Nama : Aland Samuel Tiwa<BR><BR>
		<b>BCA</b><BR>
		No. Rekening : 3030460641<BR>
		Atas Nama : Aland Samuel Tiwa<BR>
		<BR>
		<B> NOMOR REKENING SAYA HANYA 2 NOMOR DIATAS.<BR> JANGAN PERNAH TRANSFER KE NOMER REKENING LAIN SELAIN YANG DI ATAS</div>
		</div>

		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-8">
			<button name="tombol" type="submit" class="btn btn-primary">Input</button>
		  </div>
		</div>
		<BR>
		<BR>
	</form>
</form>

</body>
</html>
