<?php
/**
 * get the signed request parameter and decode it to get the user's
 * 'liked' status for the current page
 */

$signed_request = $facebook->getSignedRequest();
$liked = $signed_request['page']['liked'];

<?php 
 if( $liked ):
 include 'views' . DIRECTORY_SEPARATOR . 'pre_liked.php';
 else :
  include 'views' . DIRECTORY_SEPARATOR . 'pre_liked.php';
 endif;

?>
// if (!empty($_REQUEST['signed_request'])) {
//   $signedRequest = $_REQUEST['signed_request'];
//   list($sig, $payload) = explode('.', $signedRequest, 2);
//   $data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);
// }

/**
 * if the user has already 'liked' the page then render the 'liked' view
 * else, render the 'pre liked' view
 */
// if (empty($data['page']['liked'])) {
//   include 'views' . DIRECTORY_SEPARATOR . 'pre_liked.php';
// } else {
//   include 'views' . DIRECTORY_SEPARATOR . 'pre_liked.php';
// }
?>