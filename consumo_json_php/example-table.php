<?php

$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$datatypes = json_decode($data); // decode the JSON fee

?>
<table>
	<tbody>
		<tr>
			<th>Name</th>
			<th>Race</th>
		</tr>
		<?php foreach ($datatypes as $datos) : ?>
        <tr>
            <td> <?php echo $datos->name; ?> </td>
            <td> <?php echo $datos->race; ?> </td>
        </tr>
		<?php endforeach; ?>
	</tbody>
</table>
