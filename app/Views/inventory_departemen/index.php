<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Barang</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('/inventory_departemen/create'); ?>" class="btn btn-primary">Tambah</a>
            <form>
                <div class="input-group my-1">
                    <input name="cari" type="search" class="form-control" placeholder="Search" value="<?= $cari; ?>"/>
                    <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Merk</th>
                    <th>Jumlah</th>
                    <th>Departemen</th>
                    <th>Kondisi</th>
                    <th>Catatan</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($barang as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->kode_barang; ?></td>
                        <td><?= $row->nama_barang; ?></td>
                        <td><?= $row->merk_barang; ?></td>
                        <td><?= $row->jumlah_barang; ?></td>
                        <td><?= $row->nama_departemen; ?></td>
                        <td><?= $row->kondisi_barang; ?></td>
                        <td><?= $row->catatan; ?></td>
                        <td>
                            <a title="Edit" href="<?= base_url("inventory_departemen/edit/$row->kode_barang"); ?>" class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("inventory_departemen/delete/$row->kode_barang") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>