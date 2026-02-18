<!DOCTYPE html>
<html>
<head>
    <title>Toko Pegadaian Syariah</title>
</head>
<body>

<h2>Toko Pegadaian Syariah</h2>

<form action="proses_pegadaian.php" method="POST">
    
    <label>Besaran Pinjaman :</label><br>
    <input type="number" name="pinjaman" required><br><br>

    <label>Besar Bunga (%) :</label><br>
    <input type="number" name="bunga" required><br><br>

    <label>Lama Angsuran (bulan) :</label><br>
    <input type="number" name="lama" required><br><br>

    <label>Keterlambatan (hari) :</label><br>
    <input type="number" name="terlambat" required><br><br>

    <input type="submit" value="Proses">

</form>

</body>
</html>
