<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Title</title>
    <?php 
	echo HTML::style("bower_components/bootstrap/dist/css/bootstrap.min.css");
	echo HTML::style("assets/css/style.css");
    ?>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Save your links here</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="supporting">
   		<div class="container">
    		<div class="row">
				<div class="col-md-4">
					<form action="<?php echo URL::base(); ?>index.php/home" method="post" class="form">
						<div class="form-group">
							<label>Enter title of your site:</label>
							<input type="text" name="title" class="form-control">
						</div>
						<div class="form-group">
							<label>Enter link of your site:</label>
							<input type="text" name="link" class="form-control">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>		
				</div><!-- End of Col-Md-4  -->
				<div class="col-md-8">
					<ul class="ul-links">
						<?php foreach($links as $link) { ?>
						<li>
							<a href="<?php echo URL::base(); ?>index.php/home/delete/<?php echo $link['id']; ?>" class="link-span">
								<span class="glyphicon glyphicon-remove"></span>
							</a>
							<a href="<?php echo $link['link']; ?>" target="_blank" class="link">
								<?php echo $link['title']; ?>
							</a>
						</li>
						<?php } ?>
					</ul>
				</div> <!-- End of Col-Md-8 -->
			</div> <!-- End of Row -->
  				
   		</div> <!-- End of Container -->
	</div> <!-- End of Supporting -->
    
    <?php 
        echo HTML::script("bower_components/jquery/dist/jquery.min.js");
		echo HTML::script("bower_components/bootstrap/dist/js/bootstrap.min.js");
    ?>
</body>
</html>