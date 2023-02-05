
<?php if (!empty($artikel)) : ?>
	<table class="table table-bordered table-striped ">
		<thead>
			<tr>
				<th>Jenis artikel</th>
				<th>Jumlah Koleksi</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($artikel as $data) { ?>
				<tr>
					<td><?= $data->name ?></td>
					<td><?= $data->getJumlahKoleksi($data->singkatan) ?></td>

				</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php endif; ?>