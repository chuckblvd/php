<?php
include('config.php');	
include(PATH_LIBRARIES.'libraries.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		$values = array(
			'last_name' => 'Gorospe'
		);

		$retrieve_ids = $db->get_results("SELECT id FROM list_table");

		foreach($retrieve_ids as $ids){
			$db->update('list_table',$values,'id',$ids->id);
		}

		// $update = $db->update('list_table',$values,'id','10');
	?>

	<!-- GET RESULTS SAMPLE -->
	<?php
	$list_table = $db->get_results('SELECT * FROM list_table');

	foreach($list_table as $list_table_val){
		echo $list_table_val->first_name . " " . $list_table_val->middle_name . " " . $list_table_val->last_name . "<br>";

	}
	?>
	<!-- ###################### -->

	<br>

	<!-- GET ROW SAMPLE -->
	<?php
	$var = $db->get_row('SELECT * FROM list_table WHERE id = 1');

	echo $var->first_name . " " . $var->middle_name . " " . $var->last_name
	?>
	<!-- ###################### -->

	<br><br>

	<!-- SHOW RAW QUERY -->
	<?php
	$tbl_name = 'list_table';

	$query = $db->raw_query("SELECT * FROM $tbl_name WHERE last_name = '$var->last_name'");

	echo $query;
	?>
	<!-- ###################### -->


	

</body>
</html>