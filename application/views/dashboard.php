<div class="container-fluid">
<div class="row">
<?php foreach ($barang as $brg) : ?>

    <div class="card" style="width: 16rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
        <small><?php echo $brg->keterangan ?></small> <br>
            <span class="badge badge-pill bg-success text-white">Rp. <?php echo $brg->harga ?></span><br>
        <a href="#" class="btn btn-sm btn-primary">Tambah Ke Kerancang</a>
        <a href="#" class="btn btn-sm btn-succes">Tambah Ke Kerancang</a>

    </div>
    </div>

    <?php endforeach; ?>
</div>

</div>