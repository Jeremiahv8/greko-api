<?php
  echo "please";
  $response = [ 'message' => 'No command was selected!' ];
  $data = [ 'response' => $response ];

  header('Content-type: application/json');
  echo json_encode( $data );
?>
