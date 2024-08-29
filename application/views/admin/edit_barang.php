<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

	<?php foreach($barang as $barang) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">
			
			<div class="form-group">
				<label>Nama Barang</label>
				<input type="text" name="nama_barang" class="form-control" value="<?php echo $barang->nama_barang ?>">
			</div>

			<div class="form-group">
				<label>Keterangan</label>
				<input type="hidden" name="id_barang" class="form-control" value="<?php echo $barang->id_barang ?>">
				<input type="text" name="keterangan" class="form-control" value="<?php echo $barang->keterangan ?>">
			</div>

			<div class="form-group">
				<label>Kategori</label>
				<select name="kategori" class="form-control" value="<?php echo $barang->kategori ?>">
					<option <?php if ($barang->kategori == 'Elektronik') echo 'selected'; ?>>Elektronik</option>    
					<option <?php if ($barang->kategori == 'Pakaian Pria') echo 'selected'; ?>>Pakaian Pria</option>    
					<option <?php if ($barang->kategori == 'Pakaian Wanita') echo 'selected'; ?>>Pakaian Wanita</option>
					<option <?php if ($barang->kategori == 'Pakaian Anak-Anak') echo 'selected'; ?>>Pakaian Anak-Anak</option>
					<option <?php if ($barang->kategori == 'Peralatan Olahraga') echo 'selected'; ?>>Peralatan Olahraga</option>
				</select>
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="number" name="harga" class="form-control" value="<?php echo $barang->harga ?>">
			</div>

			<div class="form-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $barang->stok ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>
			<a href="<?php echo base_url('admin/data_barang'); ?>" class="btn btn-danger btn-sm mt-3">Kembali</a>
		</form>

	<?php endforeach; ?>
</div>