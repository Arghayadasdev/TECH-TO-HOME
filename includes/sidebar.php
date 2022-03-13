<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Most Viewed Today</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>
<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Categories</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM category");
					$stmt->execute();
					foreach($stmt as $row){
					  echo "
						<li><a href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
					  ";                  
					}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>

<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Follow us on Social Media</b></h3>
	  	</div>
	  	<div class='box-body'>
	    	<a href="https://www.facebook.com/arghaya.dasdev" class="btn btn-social-icon btn-facebook"><i class="fa-brands fa-facebook-square"></i></a>
	    	<a href="https://www.instagram.com/code_with_arghaya/" class="btn btn-social-icon btn-instagram"><i class="fa-brands fa-instagram-square"></i></a>
	    	<a href="https://facebook.com/" class="btn btn-social-icon btn-twitter"><i class="fa-brands fa-twitter-square"></i></a>
	    	<a href="https://google.com/" class="btn btn-social-icon btn-google"><i class="fa-brands fa-google"></i></a>
	    	<a href="https://youtube.com/" class="btn btn-social-icon btn-linkedin"><i class="fa-brands fa-youtube-square"></i></a>
			<a href="https://in.linkedin.com/in/arghaya-das-dev-a33699202" class="btn btn-social-icon btn-linkedin"><i class="fa-brands fa-linkedin"></i></a>
			<a href="https://www.reddit.com/user/arghayadas" class="btn btn-social-icon btn-linkedin"><i class="fa-brands fa-reddit-square"></i></a>
	  	</div>
	</div>
</div>


	  	
	</div>
</div>
