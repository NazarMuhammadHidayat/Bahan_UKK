<section class="page-section bg-ligh" id="login">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Jenis Kamar</h4>
                        <br>
                        <form action="<?= base_url('index.php/j_kamar/proses_tambah_data_jk') ?>" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Nama Jenis Kamar</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_jenis_kamar" id="nama_jenis_kamar"></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="keterangan" id="keterangan" cols="10" rows="6"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="harga" id="harga"></td>
                                </tr>

                                <tr>
                                    <td>Foto</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="foto" id="foto"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-info" value="Simpan">
                             
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>