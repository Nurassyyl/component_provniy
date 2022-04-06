<?php
echo $_POST['username'];
echo '<br>';
echo $_POST['rector'];
echo '<br>';
echo $_POST['protocol'];
echo '<br>';
echo $_POST['days'];
echo '<br>';
echo $_POST['word'];
echo '<br>';
echo $_POST['year'];echo '<br>';
echo $_POST['code_and_names_kz'];echo '<br>';
echo $_POST['code_and_names_ru'];echo '<br>';
echo $_POST['code_and_names_en'];echo '<br>';
echo $_POST['program_level'];echo '<br>';
echo $_POST['training_period'];echo '<br>';
echo $_POST['Qualifiction_level'];echo '<br>';

$db = include "database/start.php";
$posts = $db->create('page_one', [
  'username' => $_POST['username'],
  'rector' => $_POST['rector'],
  'protocol' => $_POST['protocol'],
  'days' => $_POST['days'],
  'word' => $_POST['word'],
  'year' => $_POST['year'],
  'code_and_names_kz' => $_POST['code_and_names_kz'],
  'code_and_names_ru' => $_POST['code_and_names_ru'],
  'code_and_names_en' => $_POST['code_and_names_en'],
  'program_level' => $_POST['program_level'], 
  'training_period' => $_POST['training_period'],
  'qualifiction_level' => $_POST['Qualifiction_level']
]);

header('location: index.php');

