<?php
/**
 * Title: The Hour of Widows Sons page
 * Slug: ws-europe/page-hour-of-widows-sons
 * Categories: text
 * Description: The yearly worldwide charity initiative of Widows Sons, every 18 February at 9:00 local time.
 * Keywords: charity, hour, 18 February
 * Post Types: page
 */

$ws_charity = get_page_by_path( 'charity' );
$ws_back    = $ws_charity ? get_permalink( $ws_charity ) : home_url( '/charity/' );
$ws_logo    = get_stylesheet_directory_uri() . '/assets/hour-of-widows-sons.jpg';
?>
<!-- wp:html -->
<p class="ws-back-link"><a href="<?php echo esc_url( $ws_back ); ?>">&larr; Back to Charity &amp; Community</a></p>
<!-- /wp:html -->

<!-- wp:html -->
<div class="ws-hour-intro">
	<img class="ws-hour-intro__logo" src="<?php echo esc_url( $ws_logo ); ?>" alt="The Hour of Widows Sons logo" width="800" height="600">
	<div>
		<p class="ws-card__kicker">Every 18 February · 9:00 local time</p>
		<p class="ws-hour-intro__motto">One Brotherhood. One Hour. One Purpose.</p>
		<p class="ws-lead-dark">Once a year, every Widows Sons chapter in the world shares one charity story at the same local hour. As the Earth turns, the Hour travels from country to country: a continuous chain of good deeds around the globe.</p>
	</div>
</div>
<!-- /wp:html -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Why 18 February</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Widows Sons Masonic Riders Association was founded in Chicago, Illinois, USA, on 18 February 1998. To honour that founding and our commitment to charity, the International Round Table agreed on a simple idea: rather than another event, ride or fundraiser, one moment each year that unites every Widows Sons chapter around the world, and reminds us who we are.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Whatever country we live in, whatever language we speak, and however large our chapter is, three things connect us all. We ride. We are Freemasons. And we serve.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">How it works</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<div class="ws-value-grid">
	<div class="ws-card">
		<p class="ws-card__kicker">01</p>
		<h3 class="ws-card__title">One charity story</h3>
		<p>Each chapter prepares one example of the good its brothers have done for their community. It does not have to happen on the day: an activity from the previous days or weeks counts.</p>
	</div>
	<div class="ws-card">
		<p class="ws-card__kicker">02</p>
		<h3 class="ws-card__title">Shared at 9:00</h3>
		<p>On 18 February the story is published at 9:00 local time. As the sun moves from east to west, 9:00 travels around the world, and with it the next Widows Sons charity story.</p>
	</div>
	<div class="ws-card">
		<p class="ws-card__kicker">03</p>
		<h3 class="ws-card__title">One worldwide chain</h3>
		<p>For twenty-four hours the world can follow a chain of good deeds from every continent. One post may seem small; hundreds together say: this is who we are.</p>
	</div>
</div>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p>The Hour is not about doing the same activity. It is about sharing the same moment. Chapters support children, vulnerable families, hospitals and orphanages, elderly people, humanitarian causes, and safety and education. Different communities, different acts of service, one Brotherhood. Not to promote ourselves, and not to compete over who gave more, but to show that Widows Sons is about much more than motorcycles.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">The first Hour: 18 February 2026</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Chapters in 20 countries on five continents took part, and the Hour followed the sunrise from east to west:</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="ws-hour-route">Philippines → Finland → Estonia → Latvia → Romania → Bulgaria → South Africa → Italy → Austria → Germany → Switzerland → Luxembourg → Belgium → Britain → Costa Rica → Guatemala → Colombia → United States → Mexico → Brazil</p>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p>Every chapter told a different story: children's hospitals, orphanages, children with special needs, elderly care homes, humanitarian aid for Ukraine, grief support, music education, school supplies and toys, motorcycle helmet safety, warm meals for the vulnerable, rural healthcare and women's support organisations, as well as fundraising for the families of fallen Brothers and for Alzheimer's research. Each activity was shared on the Widows Sons Public Group on Facebook, our face to the world.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Our thanks go to every chapter that sent photos, every brother who helped collect information, and every volunteer who prepared and published the posts.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Looking ahead: help make it a tradition</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Hour is meant to become an annual worldwide tradition, every 18 February at 9:00 local time. Today it depends on a handful of volunteers who collect activities, make sure nothing is missed, and prepare and schedule the posts. To grow, it has to belong to all of us.</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list">
<li><strong>Chapters:</strong> prepare one charity story for 18 February and share it at 9:00 local time.</li>
<li><strong>Coordinators:</strong> one or two brothers per region who contact neighbouring chapters, collect their activities and help prepare everything before 18 February.</li>
<li><strong>Public Group administrators:</strong> more brothers to help run the Widows Sons Public Group, where every activity of the Hour is published.</li>
</ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>If you or one of your brothers would like to help, please <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">contact us</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<blockquote class="ws-hour-quote"><p>The engines may rest. The commitment never does.</p></blockquote>
<p class="ws-hour-values">Brotherhood without borders · Charity without expectation · Service with purpose</p>
<p class="ws-back-link"><a href="<?php echo esc_url( $ws_back ); ?>">&larr; Back to Charity &amp; Community</a></p>
<!-- /wp:html -->
