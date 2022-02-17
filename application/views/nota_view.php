<h2>TOGAMEDIA</h2>
	<h4>
		<p>
			No Nota : <?=$tampil_nota->kodetransaksi?> | 
			Nama Pembeli : <?=$tampil_transaksi->namapembeli?>	<br><br>
			Tanggal Beli : <?=$tampil_transaksi->tanggalbeli?>	| Admin : <?=$tampil_transaksi->namauser?>	
		</p>
	</h4>
<table border="1px" >
	<thead>
		<th>No</th>
		<th>Nama Barang</th>
		<th>Kategori</th>
		<th>Harga</th>
		<th>Qty</th>
		<th>Subtotal</th>
	</thead>
	<tbody>
		<?php $i=0;foreach ($detail_nota as $nota):$i++; ?>
			<tr>
				<td><?=$i?></td>
				<td><?=$nota->judulbuku?></td>
				<td><?=$nota->namakategori?></td>
				<td><?=$nota->harga?></td>
				<td><?=$nota->jumlah?></td>
				<td><?=$nota->jumlah*$nota->harga?></td>
			</tr>
		<?php endforeach ?>
		<tr>
			<td colspan="5">Grandtotal</td><td><?=$tampil_transaksi->total?></td>
		</tr>
	</tbody>
</table>
<script type="text/javascript">
	window.print();
	// location.href="<?=base_url('index.php/transaksi')?>";
</script>