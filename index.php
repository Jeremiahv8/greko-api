<?php
  $response = [ 'message' => 'No command was selected!' ];
  $data = [ 'response' => $response ];

  header('Content-type: application/json');
  echo json_encode( $data );

  print( "<script>console.log('" . $data . "');</script>");

?>
