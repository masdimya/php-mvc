<div class="container">
	<div class="row">
		<div class="col-6">
			<h3> Daftar Mahasiswa</h3>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary mt-5 mb-2" data-toggle="modal" data-target="#exampleModal">
			  Launch demo modal
			</button>
			<ul class="list-group">
			  	<?php foreach ($data['mhs'] as $mhs) : ?>
			  	<li class="list-group-item"><?=$mhs['nama'];  ?>
			  		<a href="<?=BASEURL;  ?>/mahasiswa/detail/<?= $mhs['id'];  ?>" class="badge badge-primary">detail</a>	
			  	</li>
				<?php endforeach;?>


			</ul>
			
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       <form action="<?=BASEURL;  ?>/mahasiswa/tambahdata" method="post">
			  <div class="form-group">
			    <label for="label">Nama</label>
			    <input type="text" class="form-control" id="nama" nama="nama" placeholder="masukkan nama">
			    <label for="label">Umur</label>
			    <input type="text" class="form-control" id="umur" nama="umur" placeholder="masukkan umur">
			    <label for="label">Pekerjaan</label>
			    <select class="form-control" id="pekerjaan" nama="pekerjaan">
				  <option value="Programmer">Programmer</option>
				  <option value="Dosen">Dosen</option>
				  <option value="Dokter">Dokter</option>
				</select>
			  </div>

	     	</div>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Tambah Data</button>
	        </form>
	      </div>
	  		
	    </div>
	  </div>
	</div>
</div>