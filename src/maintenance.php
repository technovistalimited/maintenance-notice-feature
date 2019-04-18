<?php
/**
 * --------------------------------
 * SCHEDULED MAINTENANCE NOTICE
 *
 * ******************************
 * * DON'T CHANGE ANYTHING HERE *
 * ******************************
 *
 * Change the configuration in /config.php
 *
 * Read the Documentation for details.
 * --------------------------------
 */
$begin_date = MAINTENANCE_TIME['start_date'];
$begin_time = MAINTENANCE_TIME['start_time'];
$end_date   = MAINTENANCE_TIME['end_date'];
$end_time   = MAINTENANCE_TIME['end_time'];

$strtotime_end        = strtotime("{$end_date} {$end_time}");
$strtotime_date_today = strtotime(date('Y-m-d H:i:s'));

if( IS_MAINTENANCE && ($strtotime_date_today <= $strtotime_end) ) :
	$date_from = date('l, F d, Y', strtotime($begin_date));
	$time_from = date('h:ia', strtotime($begin_time));
	$date_till = date('l, F d, Y', strtotime($end_date));
	$time_till = date('h:ia', strtotime($end_time));

	// if( your language ) {
	// 	$date_from = your_translate($date_from);
	// 	$time_from = your_translate($time_from);
	// 	$date_till = your_translate($date_till);
	// 	$time_till = your_translate($time_till);
	// }
	?>

	<div id="site-wide-notice" role="alert">
		<?php
		if( strtotime($begin_date) == strtotime($end_date) ) :
			printf('<p>Due to the system maintenance the server will be temporarily unavailable from<br><strong>%1$s</strong> at <strong>%2$s</strong>, till <small>%3$s</small>.</p><p>We apologize for any inconvenience and appreciate your understanding during this time.</p>',
				$date_from,
				$time_from,
				$time_till
			);
			// For Bengali language
			// <p>সিস্টেমের রক্ষণাবেক্ষণের প্রয়োজনে সার্ভার সাময়িকভাবে বন্ধ থাকবে <br><strong>%1$s</strong> <strong>%2$s</strong> থেকে <small>%3$s পর্যন্ত</small>।</p><p>এই সময়ে আপনার সাময়িক অসুবিধার জন্য আমরা আন্তরিকভাবে দুঃখিত।</p>
		else :
			printf('<p>Due to system maintenance the server will be temporarily unavailable from<br><strong>%1$s</strong> at <strong>%2$s</strong>, till <small>%3$s by %4$s</small>.</p><p>We apologize for any inconvenience and appreciate your understanding during this time.</p>',
				$date_from,
				$time_from,
				$date_till,
				$time_till
			);
			// For Bengali language
			// <p>সিস্টেমের রক্ষণাবেক্ষণের প্রয়োজনে সার্ভার সাময়িকভাবে বন্ধ থাকবে <br><strong>%1$s</strong> <strong>%2$s</strong> থেকে <small>%3$s %4$s পর্যন্ত</small>।</p><p>এই সময়ে আপনার সাময়িক অসুবিধার জন্য আমরা আন্তরিকভাবে দুঃখিত।</p>
		endif;
		?>

		<button type="button" id="close-notice" class="btn btn-danger text-uppercase">I understood</button>

	</div>

<?php
endif;
