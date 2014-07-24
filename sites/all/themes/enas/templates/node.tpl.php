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
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="posted">
      <?php if ($user_picture): ?>
        <?php print $user_picture; ?>
      <?php endif; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);
  ?>

  <?php if (!empty($content['field_tags']) && !$is_front): ?>
    <?php print render($content['field_tags']) ?>
  <?php endif; ?>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
	<?php else: ?>
  <p>Access to this content is restricted to logged-in users. Click <a href="/user/login?destination=node/<?php print $node->nid; ?>">here</a> to log in or register.</p>
  <?php endif; ?>
</article>
