<h2><?php print $node->title ?></h2>
<?php 
global $language;
if ($language->prefix == 'id') {
    $body = $node->body[LANGUAGE_NONE][0]['value'];
} else {
    $body = $node->field_body_english[LANGUAGE_NONE][0]['value'];
}

print $body; 
?>
