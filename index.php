<?php
  $metadata = [ 'status' => 'success' ];
  $response = [ 'message' => 'No command was selected!' ];
  $data = [ 'metadata' => $metadata, 'response' => $response ];

  header('Content-type: application/json');
  echo json_encode( $data );


?>
