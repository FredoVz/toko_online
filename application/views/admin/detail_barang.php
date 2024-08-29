<!-- ?php

$channel_id = 'UCQ7dUY53AOGGTYl_Myiurlw';

$you_tube_data_api_key = 'AIzaSyB8BebgNKm0gqjCjLATijYo378Ze3EkYOw';

$api_url = 'https://www.googleapis.com/youtube/v3/search?key=' . $you_tube_data_api_key . '&channelId=' . $channel_id . '&part=snippet,id&order=date';

$youtube_videos = file_get_contents($api_url);

if(!empty($youtube_videos)){
	$youtube_videos_arr = json_decode($youtube_videos, true);
	if(!empty($youtube_videos_arr['items'])){
	?>
	<table>
		< ?php
		foreach($youtube_videos_arr['items'] as $ytvideo){
			if($ytvideo['id']['kind'] == 'youtube#video'){
				?
				<tr><td><img src="< ?=$ytvideo['snippet']['thumbnails']['high']['url']?>" /><td>< ?=$ytvideo['snippet']['title'] ?> </td></tr>
				< ?php
		} 
	}
	?
	</table>
	< ?php  
}
}
? -->

<div class="container-fluid">
	<div class="content-wrapper">
		<section class="content">
			<h4><strong>DETAIL DATA BARANG</strong></h4>

			<table class="table">
				<tr>
					<th>Nama Lengkap</th>
					<td><?php echo $detail->nama_barang ?></td>
				</tr>
				<tr>
					<th>NIM</th>
					<td><?php echo $detail->keterangan ?></td>
				</tr>
				<tr>
					<th>Tanggal Lahir</th>
					<td><?php echo $detail->kategori ?></td>
				</tr>
				<tr>
					<th>Jurusan</th>
					<td><?php echo $detail->harga ?></td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td><?php echo $detail->stok ?></td>
				</tr>
				<tr>
					<td>
						<img src="<?php echo base_url(); ?>/uploads/<?php echo $detail->gambar; ?>" width="90" height="110">
					</td>
				</tr>
			</table>

			<a href="<?php echo base_url('admin/data_barang'); ?>" class="btn btn-danger btn-sm mt-3">Kembali</a>
		</section>
	</div>
</div>
