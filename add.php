<?php

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'db' . DIRECTORY_SEPARATOR . 'connect.php');

/**
 * Otherwise handle the form submit
 */

# Contains an array with all form fields and their details
$fields = array(
	'first-name' => array(
		'type' => 'string',
		'db-col' => 'ime',
		'value' => '',
	),
	'last-name' => array(
		'type' => 'string',
		'db-col' => 'familiq',
		'value' => '',
	),
	'identifier' => array(
		'type' => 'int',
		'db-col' => 'fak_nomer',
		'value' => '',
	),
	'sex' => array(
		'type' => 'string',
		'db-col' => 'pol',
		'value' => '',
	),
	'specialty' => array(
		'type' => 'string',
		'db-col' => 'specialnost',
		'value' => '',
	),
	'group' => array(
		'type' => 'int',
		'db-col' => 'grupa',
		'value' => '',
	),
	'semester' => array(
		'type' => 'int',
		'db-col' => 'kurs',
		'value' => '',
	)
);

# Contains errors, if such exist
$errors = '';

/**
 * Looping through the fields and filling-in their values, while sanitizing at the same time.
 */
foreach ($fields as $field_name => $field_details) {
	$field_value = trim( mysqli_real_escape_string($db, $_POST[$field_name]) );
	
	if ( empty($field_value) ) {
		$errors = '<p>Please fill in all fields. / <em>Моля, попълнете всички полета.</em></p>';
		break;
	}

	if ($field_details['type'] == 'string') {
		$fields[$field_name]['value'] = "'{$field_value}'";
	} elseif ($field_details['type'] == 'int') {
		$fields[$field_name]['value'] = (int) $field_value; # Stroring the value in the array
	}
}

# Outputing errors
if ( !empty($errors) ) {
	echo $errors;
	exit;
}

/**
 * If no errors were found, add the student
 */
$db_cols = array();
$db_values = array();

/**
 * Building the query cols and values
 *
 * For each element from $fields, we will store the column names in one array and
 * the cell values into another array.
 */
foreach ($fields as $field_name => $field_details) {
	$db_cols[] = '`' . $field_details['db-col'] . '`';
	$db_values[] = $field_details['value']; # Stroring the value in the array
}

/**
 * After that, we will convert both arrays to strings with the appropriate delimiter.
 */
$db_cols = implode(', ', $db_cols);
$db_values = implode(', ', $db_values);

/**
 * After all is set up, we can create the query using the strings above
 */
$query = "INSERT INTO students ({$db_cols}) VALUES ({$db_values})";

/**
 * Trying to execute the query.
 */
if ( mysqli_query($db, $query) ) {
	echo '<p>Affected rows ' . $db->affected_rows . '. / <em>Бяха променени ' .$db->affected_rows. ' ред(а).</em></p>';
} else {
	echo '<p>Error. / <em>Грешка.</em></p>';
}

?>