<?php
//Connecting to sql db.
$connect = mysqli_connect("http://default-environment.bmuifanhu3.eu-central-1.elasticbeanstalk.com/","databaza1","databaza1","databaza");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO posts (ime_na_timot, clen_na_timot, dalikakoindividua, dalisizadovolen, dalimisija, daliprocesi, dalipocit, odgovoren_clen_za_pristap)
VALUES ('$_POST[ime_na_timot]', '$_POST[clen_na_timot]', '$_POST[dalikakoindividua]', '$_POST[dalisizadovolen]', '$_POST[dalimisija]', '$_POST[dalipocit]', '$_POST[odgovoren_clen_za_pristap]')";
?>
