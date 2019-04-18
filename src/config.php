<?php
/**
 * Configuration file.
 *
 * @author  Mayeenul Islam
 * @package Maintenance Notice Feature
 */

/**
 * ------------------------------
 * SET TIMEZONE
 * ------------------------------
 *
 * For applicable parameter value consult:
 * https://www.php.net/manual/en/timezones.php
 * ------------------------------
 */
date_default_timezone_set('Asia/Dhaka');

/**
 * ------------------------------
 * MAINTENANCE SCHEDULED
 * ------------------------------
 *
 * Change the configuration here to display a notice
 * on the front end, for an upcoming maintenance.
 *
 * Please don't misunderstand the fact that,
 * this is a Pre-Maintenance notice, only.
 *
 * During maintenance always use the artisan command:
 * php artisan down --message="Deployment in Progress"
 *
 * For caution, the notice won't display when it exceeds
 * the 'end_date' and 'end_time'.
 *
 * But still the 'maintenance_scheduled' boolean is kept
 * for an extra layer of control.
 * ------------------------------
 */
const IS_MAINTENANCE   = true; // an extra layer of caution
const MAINTENANCE_TIME = array(
	'start_date' => '2019-04-18',  // eg. 2019-04-18
	'start_time' => '16:06:56',    // eg. 23:59:59
	'end_date'   => '2019-04-18',  // eg. 2019-04-18
	'end_time'   => '19:30:56'     // eg. 23:59:59
);
