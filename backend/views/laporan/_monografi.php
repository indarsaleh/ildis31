
<?php if (!empty($monografi)) : ?>
	<table class="table table-bordered table-striped ">
		<thead>
			<tr>
				<th>Jenis Monografi</th>
				<th>Jumlah Koleksi</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($monografi as $data) { ?>
				<tr>
					<td><?= $data->name ?></td>
					<td><?= $data->getJumlahKoleksi($data->singkatan) ?></td>

				</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php endif; ?>