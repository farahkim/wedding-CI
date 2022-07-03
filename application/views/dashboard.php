<div class="container fluid">

	<!-- untuk slide bar -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="<?php echo base_url('assets/img/wedding3.jpg') ?>" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php echo base_url('assets/img/wedding5.jpg') ?>" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php echo base_url('assets/img/wedding4.jpg') ?>" alt="Third slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php echo base_url('assets/img/wedding2.jpg') ?>" alt="Fourth slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php echo base_url('assets/img/wedding1.jpg') ?>" alt="Fifth slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

	<!-- untuk tampilan kotakan barang -->
	<div class="row text-center mt-4">
		<?php foreach ($barang as $brg) : ?>

			<div class="card ml-5 mb-3" style="width: 18rem;">
			  <img class="card-img-top" src="<?php echo base_url().'/uploads/'.$brg->gambar?>" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title mb-1"><?php echo $brg->nama_wo?></h5>
			    <small><?php echo $brg->keterangan?></small><br>
			    <span class="badge badge-success mb-3">Rp. <?php echo $brg->harga ?></span><br>
			    <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_wo, '<div class="btn btn_sm btn-warning">Pilih item</div>') ?>
			    <?php echo anchor('dashboard/detail/' .$brg->id_wo, '<div class="btn btn_sm btn-info">Detail</div>') ?>
			  </div>
			</div>

		<?php endforeach; ?>
	</div>
</div>