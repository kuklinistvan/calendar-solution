<?php
/**
* The configuration settings detailed here should probably not appear in most
* people's configuration files, but they can be useful to assist with debugging
* problems. When reporting an issue in the bug tracker or on the mailing list,
* and you need other people's help to understand what's going wrong, please
* include a debug log of the failing request with $c->dbg["ALL"] set, possibly
* also using $c->dbg_filter on busy servers.
*/

/**
* if this is set then any e-mail that would normally be sent by DAViCal will be
* sent to this e-mail address for debugging.
*/
//$c->debug_email = 'davical@example.com'


/**
* If you want to see debug messages in the PHP error log you can set to 1 one
* or several of these variables (there are many more).
* If you want to see every possible log message then $c->dbg["ALL"] can be set,
* and then individual components can be set to 0 to selectively ignore them.
*
* To follow the log, try
*   tail -f /var/log/apache2/error_log   (or wherever your PHP errors are logged)
*
* To add your own debug logging using a printf syntax, use
*   dbg_error_log( 'MyComponent', 'At this point, first is %s and second is %s', $first_string, $second_string );
*/
// $c->dbg["ALL"] = 1;
// $c->dbg['i18n'] = 0;
// $c->dbg["request"] = 1;   // The request headers & content
// $c->dbg['response'] = 1;  // The response headers & content
// $c->dbg["component"] = 1;
// $c->dbg['caldav'] = 1;
// $c->dbg['querystring'] = 1;
// $c->dbg['icalendar'] = 1;
// $c->dbg['ics'] = 1;
// $c->dbg['login'] = 1;
// $c->dbg['options'] = 1;
// $c->dbg['get'] = 1;
// $c->dbg['put'] = 1;
// $c->dbg['propfind'] = 1;
// $c->dbg['proppatch'] = 1;
// $c->dbg['report'] = 1;
// $c->dbg['principal'] = 1;
// $c->dbg['user'] = 1;
// $c->dbg['vevent'] = 1;
// $c->dbg['rrule'] = 1;


/**
* Even on a moderately busy server, turning on debug logging for everyone can
* produce a lot of output in a short time that makes it hard to find the
* relevant lines. Debug filtering limits logging to certain IP addresses or
* usernames. (config values are arrays)
*/
// $c->dbg_filter["remoteIP"][] = '192.168.1.20';
// $c->dbg_filter["remoteIP"][] = '192.168.1.21';
// $c->dbg_filter["authenticatedUser"][] = 'peter';
// $c->dbg_filter["authenticatedUser"][] = 'john';


/**
* default is 'davical' used to prefix debugging messages but will only need to change
* if you are running multiple DAViCal servers logging into the same place.
*/
// $c->sysabbr = 'davical';

/**
* As yet we only support quite a limited range of options.  When we see clients looking
* for more than this we will work to support them further.  So we can see clients trying
* to use such methods there is a configuration option to override and allow lying about
* what is available.
* ex : $c->override_allowed_methods = "PROPPATCH,OPTIONS, GET, HEAD, PUT, DELETE, PROPFIND, MKCOL, MKCALENDAR, LOCK, UNLOCK, REPORT"
* Don't muck with this unless you are trying to write code to support a new option!
*/
// $c->override_allowed_methods = "PROPPATCH, OPTIONS, GET, HEAD, PUT, DELETE, PROPFIND, MKCOL, MKCALENDAR, LOCK, UNLOCK, REPORT"

