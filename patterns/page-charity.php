<?php
/**
 * Title: Charity page
 * Slug: ws-europe/page-charity
 * Categories: text
 * Description: Charity and community work of Widows Sons chapters.
 * Keywords: charity, community
 * Post Types: page
 */

$ws_hour = get_page_by_path( 'charity/the-hour-of-widows-sons' );
$ws_hour = $ws_hour ? get_permalink( $ws_hour ) : home_url( '/charity/the-hour-of-widows-sons/' );
?>
<!-- wp:paragraph {"className":"ws-lead-dark"} -->
<p class="ws-lead-dark"><?php echo esc_html__( 'Charitable service is a central expression of our brotherhood. Widows Sons chapters support the families of departed Masonic brothers and contribute to causes that make a difference in their communities.', 'ws-europe' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="ws-value-grid">
	<div class="ws-card">
		<p class="ws-card__kicker">01</p>
		<h3 class="ws-card__title"><?php echo esc_html__( 'Supporting Widows and Orphans', 'ws-europe' ); ?></h3>
		<p><?php echo esc_html__( 'Practical, financial and personal support for the families of departed Masonic brothers, according to local needs and chapter initiatives.', 'ws-europe' ); ?></p>
	</div>
	<div class="ws-card">
		<p class="ws-card__kicker">02</p>
		<h3 class="ws-card__title"><?php echo esc_html__( 'Helping Our Communities', 'ws-europe' ); ?></h3>
		<p><?php echo esc_html__( 'From warm-meal initiatives to volunteering and partnerships, chapters contribute time, resources and care where help is needed.', 'ws-europe' ); ?></p>
	</div>
	<div class="ws-card">
		<p class="ws-card__kicker">03</p>
		<h3 class="ws-card__title"><?php echo esc_html__( 'Riding for a Cause', 'ws-europe' ); ?></h3>
		<p><?php echo esc_html__( 'Charitable rides and gatherings bring people together to support meaningful local causes and strengthen community connections.', 'ws-europe' ); ?></p>
	</div>
</div>
<!-- /wp:html -->

<!-- wp:html -->
<a class="ws-hour-box" href="<?php echo esc_url( $ws_hour ); ?>">
	<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/hour-of-widows-sons.jpg' ); ?>" alt="" width="800" height="600" loading="lazy">
	<span class="ws-hour-box__text">
		<span class="ws-card__kicker"><?php echo esc_html__( 'Every 18 February · 9:00 local time', 'ws-europe' ); ?></span>
		<strong class="ws-hour-box__title"><?php echo esc_html__( 'The Hour of Widows Sons', 'ws-europe' ); ?></strong>
		<span><?php echo esc_html__( 'One Brotherhood. One Hour. One Purpose. Every chapter in the world shares one charity story at the same local hour: a chain of good deeds that travels around the globe with the sun.', 'ws-europe' ); ?></span>
		<span class="ws-hour-box__more"><?php echo esc_html__( 'Discover the Hour', 'ws-europe' ); ?> &rarr;</span>
	</span>
</a>
<!-- /wp:html -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html__( 'Upcoming Charity Events', 'ws-europe' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
[ws_events limit="3" recent="1"]
<p style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem"><a class="ws-btn-gold" href="[ws_events_url]"><?php echo esc_html__( 'Discover Our Events', 'ws-europe' ); ?></a> <a class="ws-btn-gold" href="[ws_news_url]"><?php echo esc_html__( 'Discover Our Activities', 'ws-europe' ); ?></a></p>
<!-- /wp:html -->
