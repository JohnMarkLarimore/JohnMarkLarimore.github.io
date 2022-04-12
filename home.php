<html>
	<head>
		<title>
			JL
		</title>
		<style>
			h1 {text-align: center;}
		</style>
	</head>
	<body>
		<h1>
			Welcome! 
		</h1>
		
		
		<h2>
			Under Development! Links: <a href="https://github.com/JohnMarkLarimore">Github</a> 
		</h2>	
		<p>
			Forgoing Wordpress from the very start is scary. There are beautiful templates that are available that can make 
			things look good right off the bat. There are many other benefits are provided by off the shelf webuilding software 
			like Wordpress. 			 
		</p>
		<?php
			echo "Copyright: " . longdate(time()) . " or, you know,  2014 if it was hard coded X years ago.";
			function longdate($timestamp){
				return date("l F jS Y", $timestamp);
			}
		?>
	</body>
</html>

