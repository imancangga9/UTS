<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Aplikasi Pemantauan Covid19</title>
        <style>
            html {
                font-family: sans-serif;
            }
            .banner {
                background-color: #99de9f;
            }
            h1, h3 {
                color: #040941;
            }
            form {
                padding-top: 10px;
                color: #040941;
            }
            .php {
                padding: 100px;
            }
        </style>
    </head>
    <body>
        <section>
            <div class="banner">
                <h1>Aplikasi Pemantauan Covid19</h1>
                
            </div>
            <div>
                <h3>Silahkan Input Data Sesuai Form dibawah ini</h3>
                
                <form name="datakasus" method="post">
                    <label for="Namawilayah">Nama Wilayah</label>
                    <select id="namwil" name="namwil">
                    <option value="None">-</option>
                        <option value="DKI Jakarta">DKI Jakarta</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Banten">Banten</option>
                        <option value="Jawa Tengah">Jawa tengah</option>
                    </select>
                    
                    <label for="fname">Jumlah Positif</label>
                    <input type="text" id="jmlpositf" name="jmlpositif" placeholder="">

                    <label for="lname">Jumlah Dirawat</label>
                    <input type="text" id="jmldirawat" name="jmldirawat" placeholder="">
                    
                    <label for="fname">Jumlah Sembuh</label>
                    <input type="text" id="jmlsembuh" name="jmlsembuh" placeholder="">

                    <label for="lname">Jumlah Meninggal</label>
                    <input type="text" id="jmlmeninggal" name="jmlmeninggal" placeholder="">

                    <label for="lname">Nama Oprator</label>
                    <input type="text" id="nmoprator" name="nmoprator" placeholder="">

                    <label for="fname">NIM Mahasiswa</label>
                    <input type="text" id="nim" name="nim" placeholder="">
                                 
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </section>
        <section>
            <div>
                <center>
                    <table style="width:100%">
                        
                        <tr>
                            <th>Positif</th>
                            <th>Dirawat</th>
                            <th>Sembuh</th>
                            <th>Meninggal</th>
                        </tr>
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
                            
                            echo "Data Pemantauan Covid19 Wilayah ";
                            echo "$namwil ";
                            echo "<br>Per"; 
                            echo date(' d-F-Y ');
                            echo date(' h:i:s A ');                            
                            echo  ('Waktu dan Jam Sekarang');
                            echo "<br>$nmoprator";
                            echo "/";
                            echo "<br>$nim";
                            
                            echo "<tr><td>$jmlpositif</td><td>$jmldirawat</td><td>$jmlsembuh</td><td>$jmlmeninggal</td></tr>";
                        ?>
                    </table>
                </center>
            </div>
        </section>
        <footer></footer>
    </body>
</html>