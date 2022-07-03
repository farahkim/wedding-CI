<div class="container-fluid">
	
	<button class="btn btn-sm btn-warning mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm "></i> Tambah Data</button>

	<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Nama Wedding</th>
		<th>Keterangan</th>
		<th>Kategori</th>
		<th>Harga</th>
		<th>Stok</th>
		<th colspan="3">Aksi</th>
	</tr>
	

	<?php 
	$no=1;
	foreach ($barang as $brg) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $brg->nama_wo ?></td>
			<td><?php echo $brg->keterangan ?></td>
			<td><?php echo $brg->kategori ?></td>
			<td><?php echo $brg->harga ?></td>
			<td><?php echo $brg->stok ?></td>
      <td><?php echo anchor('admin/data_wedding/detail/' .$brg->id_wo, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
			<td><?php echo anchor('admin/data_wedding/edit/' .$brg->id_wo, '<div class="btn btn-info btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
			<td><?php echo anchor('admin/data_wedding/hapus/' .$brg->id_wo, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		</tr>
	<?php endforeach; ?>

	</table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_wedding/tambah_aksi' ; ?>" method="post" enctype="multipart/form-data">
        	
        	<div class="form-grup">
        		<label>Nama Wedding</label>
        		<input type="text" name="nama_wo" class="form-control">
        	</div>
        	<div class="form-grup">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control">
        	</div>
        	<div class="form-grup">
        		<label>Kategori</label>
        		<select class="form-control" name="kategori">
            <option>--</option>
            <option>makeup</option>
            <option>busana</option> 
            <option>dekorasi</option> 
            <option>tempat</option>
            <option>souvenir</option>   
            </select>
        	</div>
        	<div class="form-grup">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>
        	<div class="form-grup">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control">
        	</div>

        	<div class="form-grup">
        		<label>Gambar Produk</label><br>
        		<input type="file" name="gambar" class="form-control">
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Save changes</button>
      </div>

      </form>
    </div>
  </div>
</div>