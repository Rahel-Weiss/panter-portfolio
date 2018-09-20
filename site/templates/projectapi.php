<?php

$query = kirby()->request()->query();

$id = htmlspecialchars( $query->id() );

$page = $pages->children()->findBy('id', "projects/{$id}");

if (!$page) {
  header('HTTP/1.0 404 Not Found');
  exit;
}

$images = $page->images();

$json = [
  'id'     => $page->uid(),
  'title'  => (string)$page->title(),
  'images' => [],
];

function getThumb($image, $width, $height) {
  return thumb(
      $image,
      array(
        'width' => $width,
        'height' => $height,
      )
    )->url();
}

foreach($images as $image) {
  $json['images'][] = [
    'url'     => array(
      'small' => getThumb($image, 200, 200),
      'medium' => getThumb($image, 400, 400),
      'large' => getThumb($image, 800, 800),
      'original' => $image->url(),
    ),
    'caption' => (string)$image->caption(),
  ];
}

header('Content-type: application/json; charset=utf-8');
echo json_encode($json);

?>