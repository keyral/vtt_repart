<?php
print render($content);
if($node->nid == '5'){
    print render(drupal_get_form('form_contact_form'));
}
?>
