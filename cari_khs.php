<?php 
    include 'koneksi.php';
?>

<h3>Form Pencarian DATA KHS Dengan PHP </h3>

<form action="" method="get">
    <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
</form>

<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
            echo "<b>Hasil pencarian : ".$cari."</b>";
    }
?>

<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Kode MK</th>
        <th>Nilai</th>
    </tr>

<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $sql="select * from khs where nim like'%".$cari."%'";
        $tampil = mysqli_query($con,$sql);
    }
    else{
        $sql="select * from khs";
        $tampil = mysqli_query($con,$sql);
    }
        $no = 1;
    while($r = mysqli_fetch_array($tampil)){
?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $r['nim']; ?></td>
        <td><?php echo $r['kode']; ?></td>
        <td><?php echo $r['nilai']; ?></td>
    </tr>
<?php 
    } ?>
</table>

<?php 
    include 'koneksi.php';
?>

<h3>Form Pencarian DATA KHS Dengan PHP </h3>

<form action="" method="get">
    <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
</form>

<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
            echo "<b>Hasil pencarian : ".$cari."</b>";
    }
?>

<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Kode MK</th>
        <th>Mata Kuliah</th>
        <th>Nilai</th>
    </tr>

<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $sql="select mahasiswa.nim, mahasiswa.nama_mhs, khs.kode, khs.nilai, 
        matakuliah.nama from mahasiswa inner join khs on mahasiswa.nim = khs.nim 
        inner join matakuliah on matakuliah.kode = khs.kode where mahasiswa.nim='$cari'";
        $tampil = mysqli_query($con,$sql);
    }
    else{
        $sql="select mahasiswa.nim, mahasiswa.nama_mhs, khs.kode, khs.nilai, 
        matakuliah.nama from mahasiswa inner join khs on mahasiswa.nim = khs.nim 
        inner join matakuliah on matakuliah.kode = khs.kode";
        $tampil = mysqli_query($con,$sql);
    }
        $no = 1;
    while($r = mysqli_fetch_array($tampil)){
?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $r['nim']; ?></td>
        <td><?php echo $r['nama_mhs']; ?></td>
        <td><?php echo $r['kode']; ?></td>
        <td><?php echo $r['nama']; ?></td>
        <td><?php echo $r['nilai']; ?></td>
    </tr>
<?php 
    } ?>
</table>
