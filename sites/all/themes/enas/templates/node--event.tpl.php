<?php 
global $user; $denied=FALSE;
if($user->uid == 0) {
	if(isset($node->field_logged_in_only['und'][0]['value']) && $node->field_logged_in_only['und'][0]['value'] == 1) {
		$denied=TRUE;
	}
}
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<?php if(!$denied): ?>
      <h2<?php print $title_attributes; ?>><?php print $title; ?><span class="event-date"><?php print render($content['field_date']); ?></span></h2>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);
  ?>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
	<?php else: ?>
  <p>Access to this content is restricted to logged-in users. Click <a href="/user/login?destination=node/<?php print $node->nid; ?>">here</a> to log in or register.</p>
  <?php endif; ?>
</article>
