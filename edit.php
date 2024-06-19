<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "UPDATE produk SET nama='$nama', harga='$harga', stok='$stok' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
        <label>Harga:</label><br>
        <input type="text" name="harga" value="<?php echo $row['harga']; ?>"><br>
        <label>Stok:</label><br>
        <input type="text" name="stok" value="<?php echo $row['stok']; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
