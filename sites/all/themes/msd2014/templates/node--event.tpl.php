<div class="content-white-wrap"><!--white wrap start-->

<?
if (isset($node) && is_object($node)) {

	$node = node_load($node->nid);
		
	$item = field_get_items('node', $node, 'field_image');
	
	if(is_array($item)) {
	
		$image = field_view_value('node', $node, 'field_image', $item[0], 
			array(
		        'type' => 'image',
		        'settings' => array(
		          //'image_style' => ''
		        )
			)
		);
?>
		<div class="content-banner">
	  		<? print render($image); ?>
	  	</div>  
<? 	
	}
} 
?>

<div class="content-left-wrap">

<?php 
$breadcrumb = drupal_get_breadcrumb();
if ($breadcrumb): ?>
	<div class="thecrumb">
		<div id="breadcrumb"><?php print theme('breadcrumb', array('breadcrumb'=>$breadcrumb)); ?></div>
	</div>
<?php endif; ?>
  
  <?php if ($title): ?>
      <h1><?php print $title; ?></h1>
  <?php endif; ?>

  <p>
  <? 
  $item = field_get_items('node', $node, 'field_dates');
  $date = field_view_value('node', $node, 'field_dates', $item[0]);
  echo render($date);
  ?>
  </p>
  
  <?php print render($content['body']); ?>
  
</div>

<div class="content-right-wrap">
	
	<?php
	$block = module_invoke('sharethis_extras', 'block_view', 'sharethis_extras_block');
	print render($block['content']);
	?>
	
	<? if(isset($rightcolumn) && is_array($rightcolumn)) { ?>
	    <div class='right-column'>
	    <? print render($rightcolumn); ?>
	    </div>
    <? } ?>
	
</div>
<div style="clear:both"></div>
  
  <div class="backtop"><a href="#">Back to top</a></div>
  
  
  </div><!--white wrap end-->