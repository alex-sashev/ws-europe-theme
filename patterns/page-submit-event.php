<?php
/**
 * Title: Submit an event page
 * Slug: ws-europe/page-submit-event
 * Categories: text
 * Description: Form to add an event to the calendar: published at once for signed-in members, reviewed first for visitors.
 * Keywords: event, submit
 * Post Types: page
 */
?>
<!-- wp:paragraph {"className":"ws-lead-dark"} -->
<p class="ws-lead-dark"><?php echo esc_html__( 'Organising a ride, gathering or charity event? Send it in. Signed-in members\' events appear in the event calendar straight away; events sent by visitors appear once an admin has reviewed them.', 'ws-europe' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
[ws_event_submit]
<!-- /wp:html -->
