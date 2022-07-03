<div class="container-fluid">

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					} 

				echo "<h4>Total Belanja Anda : Rp. ".number_format($grand_total, 0,',','.');
				 ?>
			</div><br><br>

			<h3>Input Alamat Pemesanan Dan Pembayaran</h3>

			<form method="post" action="<?php echo base_url('dashboard/pesanan') ?>">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Nomor Telepon</label>
					<input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Jasa Pemesanan</label> 
					<select class="form-control">
						<option>--</option>
						<option>Ke Alamat Langsung</option>
						<option>JNE</option>
						<option>TIKI</option>
						<option>J&T</option>
						<option>Post Indonesia</option>
						<option>GOJEK</option>
						<option>GRAB</option>
						<option>Ninja Expres</option>
					</select>
				</div>

				<div class="form-group">
					<label>Pilih Bank</label> 
					<select class="form-control">
						<option>--</option>
						<option>BCA - XXXXXXXX</option>
						<option>BNI - XXXXXXXX</option>
						<option>BRI - XXXXXXXX</option>
						<option>MANDIRI - XXXXXXXX</option>
					</select>
				</div>

				<button type="submit" class="btn btn-info mb-3">PESAN</button>
				
			</form>

			<?php  
			} else echo "<h4>Keranjang Belanja Anda Masih Kosong"
			?>
		</div>

		<div class="col-md-2"></div>
	</div>
</div>