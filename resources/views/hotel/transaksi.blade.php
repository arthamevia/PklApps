<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Transaksi</legend>
            <table border="1">
                <tr>
                    <td>No</td>
                    <td>No Transaksi</td>
                    <td>Id Pengunjung</td>
                    <td>Id karyawan</td>
                    <td>jumlah Kamar</td>
                    <td>Tanggal Masuk</td>
                    <td>Tanggal Keluar</td>
                    <td>Lama Nginap</td>
                    <td>Total Harga</td>
                </tr>
                <?php $no=1 ?>
                @foreach($transaksi2 as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data['no_transaksi']}}</td>
                    <td>{{$data['id_pengunjung']}}</td>
                    <td>{{$data['id_karyawan']}}</td>
                    <td>{{$data['jumlah_kamar']}}</td>
                    <td>{{$data['tanggal_masuk']}}</td>
                    <td>{{$data['tanggal_keluar']}}</td>
                    <td>{{$data['lama_nginap']}}</td>
                    <td>{{$data['total_harga']}}</td>
                </tr>
                @endforeach
                </table> <br>
                <table border="1">
                    Pengunjung
                    <tr>
                        <td>No</td>
                        <td>Id Pengunjung</td>
                        <td>Nama Pengunjung</td>
                        <td>Alamat</td>
                        <td>Jenis Kelamin</td>
                        <td>No Telepon</td>
                        <td>No KTP</td>
                    </tr>
                    <?php $no=1 ?>
                    @foreach($pengunjung2 as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data['id_pengunjung']}}</td>
                        <td>{{$data['nama_pengunjung']}}</td>
                        <td>{{$data['alamat']}}</td>
                        <td>{{$data['jenis_kelamin']}}</td>
                        <td>{{$data['no_telpon']}}</td>
                        <td>{{$data['no_ktp']}}</td>
                    </tr>
                    @endforeach
                </table> <br>
                <table border="1">
                    Karyawan
                    <tr>
                        <td>No</td>
                        <td>Id Karyawan</td>
                        <td>Nama Karyawan</td>
                        <td>Jenis Kelamin</td>
                    </tr>
                    <?php $no=1 ?>
                    @foreach($karyawan2 as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data['id_karyawan']}}</td>
                        <td>{{$data['nama_karyawan']}}</td>
                        <td>{{$data['jenis_kelamin']}}</td>
                    </tr>
                    @endforeach
                </table> <br>
                <table border="1">
                    detail Transaksi
                    <tr>
                        <td>No</td>
                        <td>Id Dtl Transaksi</td>
                        <td>No Transaksi</td>
                        <td>No Kamar</td>
                    </tr>
                    <?php $no=1 ?>
                    @foreach($dt2 as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data['id_dtl_transaksi']}}</td>
                        <td>{{$data['no_transaksi']}}</td>
                        <td>{{$data['no_kamar']}}</td>
                    </tr>
                    @endforeach
                </table> <br>
                <table border="1">
                    Kamar
                    <tr>
                        <td>No</td>
                        <td>No Kamar</td>
                        <td>Jenis Kamar</td>
                        <td>Harga</td>
                    </tr>
                    <?php $no=1 ?>
                    @foreach($kamar2 as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data['no_kamar']}}</td>
                        <td>{{$data['jenis_kamar']}}</td>
                        <td>{{$data['harga']}}</td>
                    </tr>
                    @endforeach
                </table>
    </fieldset>
</body>
</html>