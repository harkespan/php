				    <div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
    <div class="active item"><img src="http://localhost/silab/assets/img/lab/lab1.jpg"/></div>
    <div class="item"><img src="http://localhost/silab/assets/img/lab/lab2.jpg"/></div>
    <div class="item"><img src="http://localhost/silab/assets/img/lab/lab3.jpg"/></div>
    <div class="item"><img src="http://localhost/silab/assets/img/lab/lab4.jpg"/></div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>

		<div class="row">
		  <div class="row"> 
		  <div class="span6"> 
  <p class="teks" align = "justify" >
Selamat datang di website Laboratorium Kesehatan UDINUS

Sistem Informasi Laboratorium ini dikembangkan untuk menampung, melakukan pencarian serta mengetahui informasi lainnya yang terkait dengan laboratorium seperti jadwal pemakaian laboratorium, dan peminjaman alat.

Semoga websites ini dapat memberikan manfaat kepada mahasiswa UDINUS, terutama mahasiswa Fakultas Kesehatan.</p>


		  </div>
		  <div class="row"> 
			<div class="span3">   <right> <p>Pencarian</p>
				<form id="form1" name="form1" method="post" action="http://localhost/silab/utility/search">
					<select name="t" onchange="getTerm(this.value)">
						<option selected disabled>- Pilh Pencarian- </option>
						<option value="1">Alat</option>
						<option value="2">Dosen</option>
						<option value="3">Larutan</option>
						<option value="4">Pendaftaran</option>
						<option value="5">Praktikum</option>
						<option value="6">Reagen</option>
					</select>
					<div id="term">
					</div>
					<input class="btn btn-success" type="submit" value="Cari">
					</div>
					
				</div>
			 </div>
			  
			  <!-- Example row of columns -->
			

			  <hr/>
				</div>	
		</div>