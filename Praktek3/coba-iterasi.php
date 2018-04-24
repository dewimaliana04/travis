<h3>Aplikasi Iterasi</h3>
<hr>
<form>
    Iterasi angka dari <input type="text" name="awal">
    sampai <input type="text" name="akhir"><br>
    kelipatan <input type="text" name="kelipatan"><br>
    <input type="submit" value="Jalankan">
</form>

<?php
if(array_key_exists("awal", $_POST) && 
        array_key_exists ("akhir", $_POST)) {
    // for(a; b; c) { d }
    // eksekusi a;
    // cek login b;
    // jalankan d;
    // eksekusi c;
    for($counter=$_POST["awal"]; $counter <= $_POST["akhir"];
             $counter++) {
        echo $counter . "<br>";
    }
} else {
    echo "Maaf, nilai awal dan akhir belum ditentukan";
}
?>