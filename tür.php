<div class="container" style="margin-top:30px">
  <div class="row">
    
   <div class="col-sm-3">
<?php
$rekyol="pic/P.gif";

function filmliste() {
$resyol="pic/film.jpg"; 
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

   echo $Filmkart;

}

		  
$reklam='</br><div class="card ">
	  <img class="card-img-top" alt="Card image"src='.$rekyol.'>
		 <div class="card-img-overlay">
		   <p class="card-text">REKLAM ALANI</p>
		 </div></div></br>';
		 
echo $reklam;filmliste();filmliste();filmliste();filmliste();
?>
			  
		</div> 
	<div class="col-sm-3">
		  <?php
		 echo $reklam;filmliste();filmliste();filmliste();filmliste();
		 
		  ?>
		  <form action="play.php" method="get">
Name: <input type="text" name="name"><br>
  <input type="submit" value="İZLE">
</form>
		</div>
	<div class="col-sm-3">
		 <?php
		  		  echo $reklam;filmliste();filmliste();filmliste();filmliste();

		  ?>
	</div> 
	<div class="col-sm-3">
	 <?php
		  		  echo $reklam;filmliste();filmliste();filmliste();filmliste();

		  ?>
</div></br></br></div></div>
 
