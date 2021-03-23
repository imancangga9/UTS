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
                <hr>  
                <form name="datakasus" action="proses.php" method="post"> 
                
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
                            $txt_file = file_get_contents("datakasus.txt");
                            $rows = explode("\n", $txt_file);
                            array_shift($rows);
                            $i=1;

                            foreach ($rows as $row => $data) 
                            {
                                $row_data = explode('|', $data);
                   
                                $info[$row]['namwil'] = $row_data[0];
                                $info[$row]['jmlpositif'] = $row_data[1];
                                $info[$row]['jmldirawat'] = $row_data[2];
                                $info[$row]['jmlsembuh'] = $row_data[3];
                                $info[$row]['jmlmeninggal'] = $row_data[4];
                                $info[$row]['nmoprator'] = $row_data[5];
                                $info[$row]['nim'] = $row_data[6];

                                // echo "Baris Ke".$i++."<br>" ;
                                echo "Data Pemantauan Covid19 Wilayah ";
                                echo $info[$row]['namwil'];
                                echo "<br>Per"; 
                                echo date(' d-F-Y ');
                                echo date(' h:i:s A ');                            
                                echo  ('Waktu dan Jam Sekarang');
                                echo "<br>".$info[$row]['nmoprator'];
                                echo "/";
                                echo "<br>".$info[$row]['nim'];
                                

                                echo "<tr>";
                                echo ' <td>'.$info[$row]['jmlpositif'];
                                echo ' <td>'. $info[$row]['jmldirawat'];
                                echo ' <td>' . $info[$row]['jmlsembuh'];
                                echo ' <td>'. $info[$row]['jmlmeninggal'];
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </center>
            </div>
        </section>
        <footer></footer>
    </body>
</html>