/**
 * Maintenance JavaScripts
 *
 * @author  Mayeenul Islam
 * @package Maintenance Notice Feature
 */

/**
 * Set Cookie.
 *
 * @param {string}  cookieName   Name of the Cookie
 * @param {mixed}   cookieValue  Value to be stored in Cookie
 * @param {integer} expiryDays   Days in number
 * -------------------------------------------
 */
function setCookie(cookieName, cookieValue, expiryDays) {

	var d = new Date();
	d.setTime( d.getTime() + (expiryDays*24*60*60*1000) );
	var expires = 'expires='+ d.toUTCString();

	document.cookie = cookieName +'='+ cookieValue +';'+ expires +';path=/';

}


/**
 * Get Cookie.
 *
 * @param  {string} cookieName Name of the Cookie
 * @return {mixed}             Content of the Cookie
 * -------------------------------------------
 */
function getCookie(cookieName) {

	var name      	  = cookieName + '=',
	decodedCookie = decodeURIComponent(document.cookie),
	ca            = decodedCookie.split(';');

	for(var i = 0; i <ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) === 0) {
			return c.substring(name.length, c.length);
		}
	}

	return "";

}


/**
 * Check whether the cookie exists or not.
 *
 * @param  {string}  cookieName Name of the Cookie
 * @return {boolean}            True if exists, false otherwise
 * -------------------------------------------
 */
function hasCookie(cookieName) {
	var cookie = getCookie(cookieName);

	return (cookie !== "") ? true : false;
}


/**
 * Maintenance mode management.
 * -------------------------------------------
 */
const sitewide_notice  = document.getElementById('site-wide-notice');
const close_notice_btn = document.getElementById('close-notice');

if( sitewide_notice ) {
	if( hasCookie('sitewide_notice_read') === false ) {
		sitewide_notice.style.display = "block";
	}

	close_notice_btn.addEventListener('click', function() {
		sitewide_notice.style.display = "none";

		if( hasCookie('sitewide_notice_read') === false ) {
			setCookie('sitewide_notice_read', true, 1); // Remember for 1 day
		}
	});
}
