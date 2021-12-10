<?php
function create_contact_form_table() {
// create table
global $wpdb;
global $table_prefix;
$table = $table_prefix.'contact_form';
$sql = "CREATE TABLE IF NOT EXISTS $table (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `subject` varchar(150) NOT NULL,
    `email` varchar(150) NOT NULL,
    `message` varchar(300) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT current_timestamp()
  )";
  $wpdb ->query($sql);
}

function drop_contact_form_table() {
  global $wpdb;
  global $table_prefix;
  $table1 = $table_prefix.'contact_form';
  $sql = "DROP TABLE $table1";
  $wpdb ->query($sql);
}

function save_contact_form_data($contact_form) {
  global $wpdb;
  global $table_prefix;
  $table = $table_prefix.'contact_form';
  $result = $wpdb -> insert($table, $contact_form, $format=NULL);
  return $result;
}


  //Fetching CONTACT_FORM table data
  function get_contact_form() {
    // create table
    global $wpdb;
    global $table_prefix;
    $table = $table_prefix.'contact_form';
    $sql="SELECT * FROM $table ";
    $results = $wpdb->get_results($sql);
    // print_r($results);
    return $results;
}

function insert_contact_form_dump_data() {
  global $wpdb;
  global $table_prefix;
  $table = $table_prefix.'contact_form';
  // echo "inserting insert_contact_form_dump_data data ...";
  $sql ="INSERT INTO $table (`id`, `name`, `subject`, `email`, `message`, `created_at`) VALUES
  (1, 'Ashish Yadhuvanshi', 'sadwasaAWSA', 'ashishkvs@gmail.com', 'qqqqqqqqqqqqQQQQQQQQQQ', '2021-12-04 00:15:52');";
   $wpdb ->query($sql);
}

  ?>