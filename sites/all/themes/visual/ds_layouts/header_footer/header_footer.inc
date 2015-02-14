<?php 

function ds_header_footer() {
    return array(
      'label' => t('Header + Content + Footer'),
      'regions' => array(
        // The key of this region name is also the variable used in
        // the template to print the content of that region.
        'ds_header' => t('Header'),
        'ds_content' => t('Content'),
        'ds_footer' => t('Footer'),
        'ds_extra' => t('Extra region'),
      ),
      // Add this if there is a default css file.
      //'css' => TRUE,
    );
  } 

?>
