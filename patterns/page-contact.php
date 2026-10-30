<?php
/**
 * Title: Contact page
 * Slug: ws-europe/page-contact
 * Categories: text
 * Description: How to reach Widows Sons Europe and individual Grand Chapters.
 * Keywords: contact
 * Post Types: page
 */
?>
<!-- wp:paragraph {"className":"ws-lead-dark"} -->
<p class="ws-lead-dark"><?php echo esc_html__( 'Whether you are a Masonic rider looking to connect with a local chapter, a chapter representative sharing an event, or a potential charity partner, start with the relevant contact below.', 'ws-europe' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="ws-value-grid">
	<div class="ws-card">
		<p class="ws-card__kicker"><?php echo esc_html__( 'Find your local brotherhood', 'ws-europe' ); ?></p>
		<h3 class="ws-card__title"><?php echo esc_html__( 'Find and Contact a Chapter', 'ws-europe' ); ?></h3>
		<p><?php echo esc_html__( 'Membership and local chapter enquiries are managed by the relevant national organization or chapter. Use the directory to find the appropriate contact.', 'ws-europe' ); ?></p>
		<p><a href="[ws_chapters_url]"><?php echo esc_html__( 'Explore chapters', 'ws-europe' ); ?> →</a></p>
	</div>
	<div class="ws-card ws-card--join">
		<p class="ws-card__kicker"><?php echo esc_html__( 'Membership', 'ws-europe' ); ?></p>
		<h3 class="ws-card__title"><?php echo esc_html__( 'Join Widows Sons', 'ws-europe' ); ?></h3>
		<p><?php echo esc_html__( 'Are you a Master Mason who rides? Choose the chapter closest to you and send your application: it goes straight to that chapter.', 'ws-europe' ); ?></p>
		<p><a class="ws-btn-gold" href="[ws_page_url slug=join]"><?php echo esc_html__( 'Apply', 'ws-europe' ); ?></a></p>
	</div>
	<div class="ws-card">
		<p class="ws-card__kicker"><?php echo esc_html__( 'Website and cooperation enquiries', 'ws-europe' ); ?></p>
		<h3 class="ws-card__title"><?php echo esc_html__( 'European Website Contact', 'ws-europe' ); ?></h3>
		<p><?php echo wp_kses_post( __( 'For questions about the website, cooperation between chapters, or your personal data, write to <a href="mailto:info@wseurope.org">info@wseurope.org</a>.', 'ws-europe' ) ); ?></p>
	</div>
</div>
<!-- /wp:html -->
