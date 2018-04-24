<h2>Formulir Update Data</h2>

<hr>

<?php

include "koneksi.php";



$koneksiObj = new Koneksi();

$koneksi = $koneksiObj->getKoneksi();



if($koneksi->connect_error) {

    echo "Gagal koneksi : " . $koneksi->connect_error;

}



$query = "select * from data_mahasiswa where nim='" . 

    $_GET["nim"] . "'";

$data = $koneksi->query($query);

$Nama = "";

$jurusan = "";

if($data->num_rows <= 0) {

    echo "Mas/Mba, kalo isi data sesuai prosedur yah!";

} else {

    while($row = $data->fetch_assoc()) {

        $Nama = $row["Nama"];

        $nim = $row["nim"];

    }

}

?>

<form action="update.php" method="post">

    <table>

        <tr>

            <td>nim </td>

            <td>: <input type="text" name="nim" readonly="true"

                value=<?php echo $_GET["nim"]; ?> ></td>

        </tr>

        <tr>

            <td>NAMA</td> 

            <td>: <input type="text" name="Nama" 

                value=<?php echo $Nama; ?>></td>

        </tr>

        <tr>

            <td>nim</td>

            <td> : <input type="text" name="nim"

                value=<?php echo $nim; ?>></td>

        </tr>

    </table>

    <input type="submit" value="Simpan">

</form>