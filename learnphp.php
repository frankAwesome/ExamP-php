<html>

	<head>
		<title>Text replaced</title>
	</head>
	
	<body>
		
		
		<?php
		
			$usersName = $_POST['username'];
			$streetAddress = $_POST['streetaddress'];
			
			echo '<p>Success</p>';
			
			echo $usersName. ' replaced with </br>';
			echo $streetAddress. ' </br>';
			
			
			

	
			$str=implode("",file('somefile.txt'));

			$fp=fopen('somefile.txt','w');

			$str=str_replace($usersName,$streetAddress,$str);


			fwrite($fp,$str,strlen($str));
			
			
			
			
		?>
		

<textarea cols="60" rows="20"><?php echo htmlspecialchars($str); ?></textarea>
		
	</body>
	
</html>