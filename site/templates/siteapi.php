<?php

$projects = page('projects')->children();

$json = [
  'projects' => [],
];

foreach($projects as $project) {
  $json['projects'][] = [
    'id' => (string)$project->uid(),
    'title' => (string)$project->title(),
    'url' => (string)$project->url(),
    'apiUrl' => "{$site->url()}/api/project?id={$project->uid()}"
  ];
}

header('Content-type: application/json; charset=utf-8');
echo json_encode($json);

?>