
<?php if (!empty($putusan)) : ?>
	<table class="table table-bordered table-striped ">
		<thead>
			<tr>
				<th>Jenis Putusan</th>
				<th>Jumlah Koleksi</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($putusan as $data) { ?>
				<tr>
					<td><?= $data->name ?></td>
					<td><?= $data->getJumlahKoleksi($data->singkatan) ?></td>

				</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php endif; ?>