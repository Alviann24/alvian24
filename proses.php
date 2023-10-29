<?php
echo "Nama Pengirim : ".$_POST["name"];
echo "<br>";
echo "<br>";
echo "Alamat email : ".$_POST["email"];
echo "<br>";
echo "<br>";
echo "Pesan : ".$_POST["pesan"];
header("Location:index.html")
?>