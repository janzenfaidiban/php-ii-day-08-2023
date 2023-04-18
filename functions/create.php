 <?php 

if(isset($_POST['proses']) && $_POST['proses'] != ''){
    // echo "data tidak kosong";

    $nama_lengkap   = $_POST['nama_lengkap'];
    $alamat_email   = $_POST['alamat_email'];
    $nomor_hp       = $_POST['nomor_hp'];

    echo "Nama Lengkap : " . $nama_lengkap . "<br>"; 
    echo "Alamat Email : " . $alamat_email . "<br>"; 
    echo "Nomor HP : " . $nomor_hp . "<br>"; 

} else {
    echo "data belum terisi";
}