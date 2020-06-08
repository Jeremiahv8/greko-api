<?php
  $metadata = [ 'status' => 'success' ];
  $response = [ 'token' => '123' ];
  $data = [ 'metadata' => $metadata, 'response' => $response ];

  header('Content-type: application/json');
  echo json_encode( $data );


?>
