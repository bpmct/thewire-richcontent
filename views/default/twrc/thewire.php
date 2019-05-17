<?php

$full = elgg_extract('full_view', $vars, FALSE);
$post = elgg_extract('entity', $vars, FALSE);

$post_text = $post->description;

echo elgg_view('twrc/cards', ['text' => $post_text, 'entity_id' => $post->guid]);