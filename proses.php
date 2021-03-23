<?php 
		$namwil = isset($_POST['namwil']) ? $_POST['namwil'] : '';
        $jmlpositif = isset($_POST['jmlpositif']) ? $_POST['jmlpositif'] : '';
        $jmldirawat = isset($_POST['jmldirawat']) ? $_POST['jmldirawat'] : '';
        $jmlsembuh = isset($_POST['jmlsembuh']) ? $_POST['jmlsembuh'] : '';
        $jmlmeninggal = isset($_POST['jmlmeninggal']) ? $_POST['jmlmeninggal'] : '';
        $nmoprator = isset($_POST['nmoprator']) ? $_POST['nmoprator'] : '';
        $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
        $submit = isset($_POST['submit']) ? $_POST['submit'] : '';
        $datakasus = isset($_POST['datakasus']) ? $_POST['datakasus'] : ''; 


		$data = "\n$namwil|$jmlpositif|$jmldirawat|$jmlsembuh|$jmlmeninggal|$nmoprator|$nim";

		$fh = fopen("datakasus.txt", "w");
		fwrite($fh, $data);

		fclose($fh);
		print("Data Berhasil Tersimpan <br> <a href='index.php'");
?>