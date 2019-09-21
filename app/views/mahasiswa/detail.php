<div class="container mt-5">
	
	<div class="card" style="width: 18rem;">
	  <div class="card-header">
	    <?= $data['mhs']['nama']  ?>
	  </div>
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item">Umur : <?= $data['mhs']['umur']  ?> </li>
	    <li class="list-group-item">Pekerjaan : <?= $data['mhs']['pekerjaan']?></li>
	    <a href=" <?=BASEURL;  ?>/mahasiswa" class="card-link">Kembali</a>
	  </ul>
	</div>


</div>