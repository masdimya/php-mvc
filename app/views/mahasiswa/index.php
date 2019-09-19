<div class="container">
	<div class="row">
		<div class="col-6">
			<h3> Daftar Mahasiswa</h3>
			<?php foreach ($data['mhs'] as $mhs) : ?>
			<ul>
				<li>
					<?= $mhs['nama']; ?>
				</li>
				<li>
					<?= $mhs['umur']; ?>
				</li>
				<li>
					<?= $mhs['pekerjaan']; ?>
				</li>

			</ul>
			<?php endforeach;?>
		</div>
	</div>
</div>