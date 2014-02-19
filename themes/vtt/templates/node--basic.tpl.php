<?php
print render($content);

if($node->nid == 5){
    $form = drupal_get_form('form_contact_form');
    print drupal_render($form);
}
?>
