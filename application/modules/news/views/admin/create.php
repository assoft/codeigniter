<?php
$title_data = array(
              'name'        => 'title',
              'id'          => 'title',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
              'class'       => 'big',
            );    

$desc_data = array(
              'name'        => 'description',
              'id'          => 'description',
              'value'       => '',
              'rows'         => '3',
              'class'       => 'wysiwyg',
            ); 
?>
<!-- Box Header: Start -->
<div class="box_top">
    
    <h2 class="icon pages">Create Content</h2>

    
</div>
<!-- Box Header: End -->

<!-- Box Content: Start -->
<div class="box_content padding">
<?= form_open("admin/news/post")?>
<label>Categories</label>
<?=form_dropdown("cat", $categories, "")?>
<label>Title</label>
<?=form_input($title_data) ?>
<label>Description</label>
<?=form_textarea($desc_data)?>
<label>Content</label>
<?=form_textarea("content","", "class=\"wysiwyg\"")?>
<div class="field"><?=form_submit("submit", "Submit")?></div>
<?=form_close()?>
</div>
<!-- Box Content: End -->