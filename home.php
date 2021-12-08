<?php
  $resyol="pic/film.jpg";  $rekyol="pic/P.gif";
  $filmyol="play.php";
  
		$Filmkart= '</br>  <div class="card bg-secondary text-white">
			<a class="text-white" href='.$filmyol.'>
			  <img class="card-img-top" src='.$resyol.' alt="Card image">
			  <div class="card-img-overlay">
				<h4 class="card-title">FİLM ADI</h4>
				<p class="card-text">FEB 25, 2021</p>
			  </div>
		    </a>
		  </div></br> ';
		  
		  
		$reklam='</br>  <div class="card bg-secondary text-white">
			<a class="text-white" href='.$filmyol.'>
			  <img class="card-img-top" src='.$rekyol.' alt="Card image">
			  <div class="card-img-overlay">
				<h4 class="card-title"></h4>
				<p class="card-text"></p>
			  </div>
		    </a>
		  </div></br> ';
		 
		 
?>



<div class="container" style="margin-top:30px">
	  <div class="row">
		<div class="col-sm-3">
		<?php
		  echo $Filmkart;echo $reklam;echo $Filmkart;echo $Filmkart;echo $Filmkart;
		  ?>
			  
		</div> 
	<div class="col-sm-3">
		  <?php
		  echo $Filmkart;echo $reklam;echo $Filmkart;echo $Filmkart;echo $Filmkart;
		  ?>
		</div>
	<div class="col-sm-3">
		 <?php
		  		  echo $Filmkart;echo $Filmkart;echo $Filmkart;echo $reklam;echo $Filmkart;

		  ?>
	</div> 
	<div class="col-sm-3 mr-auto">
	 <?php
		  		  echo $reklam;echo $Filmkart;echo $Filmkart;echo $Filmkart;echo $Filmkart;

		  ?>
	</div>
	</div>	  
  </div>
</div>
