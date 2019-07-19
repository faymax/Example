<?php

try{
    $pdo = new PDO("mysql:dbname=sim_dev_test;host=vip.shuvar.com;charset=UTF8","sim_dev_test","innShuvar1");
	}catch(PDOException $e){
		$e->getMessage();
			exit;
	}
$query  = "SELECT photo FROM twares WHERE photo LIKE '%*%' ";
    $fetch  = $pdo->query($query);
		$result = $fetch->fetchAll(PDO::FETCH_ASSOC);

		// echo '<pre>';
			// print_r($result);
		// echo '</pre>';




	foreach($result as $value)
	{	
		
			// echo '1---' . $value['photo'] . '---<br>';
					$string = '*';
					$new_string = str_replace('*' , '_', $value['photo']);
					// echo '2---' . $new_string . ' ' . $dir. $value . '   ' . $dir.$new_string .   '<br>';
							// echo rename ( $dir. $value , $dir.$new_string );
								$query  = "UPDATE twares SET photo='{$new_string}' WHERE photo = '{$value['photo']}'";
								echo $query . '<br>';								
// $fetch  = $pdo->query($query);
	
	}


// $query  = "UPDATE twares SET photo='$files1' WHERE photo LIKE '%*%'";
// $fetch  = $pdo->query($query);


	// echo '<pre>';
		// print_r($result);
	// echo '</pre>';