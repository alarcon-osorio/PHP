<?php

$data = '{
	"name": "Aragorn",
	"race": "Human"
}';

$datatypes = json_decode($data);
echo $datatypes->name;
echo $datatypes->name;
?>
