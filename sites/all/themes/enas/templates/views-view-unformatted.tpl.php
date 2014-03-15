<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php $i=0; ?>
<?php foreach ($rows as $id => $row): ?>
	<?php
		// add classes to distinguish every third row
		$i++; $three="";
		if($i % 3 == 0) {
			$three = "three";
		}
	?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' '.$three.'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
