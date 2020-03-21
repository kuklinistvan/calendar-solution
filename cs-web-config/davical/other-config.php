<?php
/**
* For the curious, there are a number of other references to $c->something
* which are (or might appear to be) configuration items.  This file contains
* some documentation for them, but it is strongly recommended that you should
* not touch any of these.  Either you will break the application or they will
* have no effect because they are simply calculated internally.
*/

/**
* Set automatically according to $_SERVER['SCRIPT_NAME']
* It will be used to set the address of each tab of the web interface,
* to set the relative address of images and so forth.  You probably should
* not change it unless you know why you want to.
*/
// $c->base_url = 'http://example.com/davical';

/**
* Automatically set according to $_SERVER['DOCUMENT_ROOT'], but could be overridden
* if that gets it wrong for some reason.
*/
// $c->base_directory = "/not/here";

/**
* Used to set the timeouts applying to the LOCK method.
*/
// $c->default_lock_timeout = 900;
// $c->maximum_lock_timeout = 8640000;

/**
* If set, DAViCal will store each unique time zone used in any calendar to speed
* future timezone interpretation.
* Default = true;
*/
// $c->save_time_zone_defs = true;

/**
* If there is some timezone which shows up with a name that is not understood
* by DAViCal, you can add a translation for it into this list
*/
// $c->timezone_translations = array( 'Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London' => 'Europe/London' );

/**
* It is possible that you have installed DAViCal in a non-standard manner, and
* DAViCal can't find it's locale files, or you want it to use some different
* ones that you're writing to submit to the developers (yes please!).
* Default: ../locale
*/
// $c->locale_path = '/path/to/davical/locale/files';

/**
* Internal variable used to contain arrays of stylesheets or javascripts
* which are needed by the page being displayed.
*/
// Usually internally assigned, but you may want to set it to something meaningful
// if you are writing your own pages within the admin interface.
// $c->scripts = array();
// $c->stylesheets = array();

/**
* Where the up.gif and down.gif are located
* */
// $c->images = $c->base_url . '/images';

/**
* PostgreSQL supports multiple namespaces (schemas) within a single database,
* allowing you to have (e.g.) two tables with the same name. This setting
* allows you to control the search path so that you can have the DAViCal
* tables in a different schema.
* Note that there is no support in DAViCal for putting the tables into a
* non-default schema in the first place.
*/
// $c->db_schema = 'schema1,schema2';

/**
* Whether to replace query parameters with appropriately escaped substitutions
* in AWL, or leave it to the database to "prepare" the query.
* Default: true (do it in AWL)
*/
// $c->expand_pdo_parameters = true;

/**
* The recursion depth when expanding group memberships to resolve effective
* permissions. Default: 2
*/
// $c->permission_scan_depth = 2;

/**
* Internal variable to display page's title
* in the web interface
*/
// Usually internally assigned, but you may want to set it to something meaningful
// if you are writing your own pages within the admin interface.
// $c->page_title = 'DAViCal CalDAV Server';

/**
* Internal array variable to hold error messages to be displayed on top of page
* in the web interface
*/
// Usually internally assigned, but you may want to append meaningful messages
// to this array if you are writing your own pages within the admin interface.
//$c->messages[] = 'Hello World!';


/**
* This property is used to enforce regular ordering of query results so
* that the regression test output is deterministically ordered. In
* real life this is not important, and it is a performance hit, so it
* should not usually be enabled anywhere else.
*/
// $c->strict_result_ordering = false;
