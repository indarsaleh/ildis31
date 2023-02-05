<?php

?>



<?php if (!empty($peraturan)) : ?>
	<table class="table table-bordered table-striped ">
		<thead>
			<tr>
				<th>Jenis Peraturan</th>
				<th>Jumlah Koleksi</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($peraturan as $data) { ?>
				<tr>
					<td><?= $data->name ?></td>
					<td><?= $data->getJumlahKoleksi($data->singkatan) ?></td>

				</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php endif; ?>