<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <br><br>
<div class="card-body">
    <div class="container">
<div class="col-md-12"> 
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Tamu</th>
                                                <th>Tanggal cek in</th>
                                                <th>Tanggal cek out</th>
                                                <th>Harga Sewa Per Hari</th>
                                                <th>Lama Sewa</th>
                                                <th>Sub Total</th>
                                                <th>Aksi</th>
                                            </tr> 
                                        </thead>
                                        <?php $no = 1; foreach($d_booking as $b) {?>
                                        <tbody>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tbody>
                                        <?php $no++; } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            <script>
                window.print()
            </script>
</body>
</html>

