<ul class="spinner3">
			<i class="paperclip2"> </i>
			<li class="spinner_head"><h3>Pinjaman</h3></li>
			<div class="clearfix"> </div>
		  </ul>
		  <div class="berita">
				<div class="table">
				
				<?php 
				echo "<h2>".@$status."</h2>";
				foreach($pimjaman as $p){ ?>
				  <table>
						<tr>
							<th class="short">Jumlah pinjaman :</th>
							<td>Rp <?php echo number_format($p['jumlah_pinjaman'],2,',','.'); ?></td>
						</tr>
						<tr>
							<th class="short">Masa :</th>
							<td><?php echo $p['masa']; ?></td>
						</tr>
						<tr>
							<th class="short">Sekarang :</th>
							<td><?php echo $p['sekarang']; ?></td>
						</tr>
						<tr>
							<th class="short">sisa :</th>
							<td><?php echo $p['sisa']; ?></td>
						</tr>
						<tr>
							<th class="short">Angsuran Pokok :</th>
							<td>Rp <?php echo number_format($p['angsuran_pokok'],2,',','.'); ?></td>
						</tr>
						<tr>
							<th class="short">Sisa Angsuran :</th>
							<td>Rp <?php echo number_format($p['sisa_angsuran'],2,',','.'); ?></td>
						</tr>
						<tr>
							<th class="short">Keterangan :</th>
							<td><?php echo $p['keterangan']; ?></td>
						</tr>
						<tr>
							<th class="short">Tanggal Update :</th>
							<td><?php echo $p['tgl_update']; ?></td>
						</tr>
						</table>
				<?php } ?>
				</div>
				</div>