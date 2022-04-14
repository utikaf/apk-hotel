<br>
<div class="container">
<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Reservasi Kamar 
                        </h2>
                    </div>
                </div>
                <form action="<?=base_url('Transaksi')?>" method="post">
                <div class="row"> 
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Tamu</label>
                                        <div class="col-sm-10 py-2">
                                          <input list="tamu" name="nama_tamu" id="nama_tamu" placeholder="Nama" class="form-control">
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal cek in</label>
                                        <div class="col-sm-10 py-2">
                                          <input type="date" name="tanggal_cek_in" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal cek out</label>
                                        <div class="col-sm-10 py-2">
                                          <input type="date" name="tanggal_cek_out" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Jenis Kamar</label>
                                        <div class="col-sm-10  py-2">
                                          <input type="text" name="id_jenis" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" name="submit" class="btn btn-primary btn-sm">Cek out sekarang</button>
                                        </div>
                                        <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </form>
                    
    </div>