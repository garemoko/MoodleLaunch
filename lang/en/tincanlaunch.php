<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * English strings for tincanlaunch
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package mod_tincanlaunch
 * @copyright  2013 Andrew Downes
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename'] = 'Tin Can Launch Link';
$string['modulenameplural'] = 'Tin Can Launch Links';
$string['modulename_help'] = 'A plug in for Moodle that allows the launch of Tin Can (xAPI) content which is then tracked to a separate LRS.';

//Start Default LRS Admin Settings
$string['tincanlaunchlrsfieldset'] = 'Default values for TinCan Launch Link activity settings';
$string['tincanlaunchlrsfieldset_help'] = 'These are site-wide, default values used when creating a new activity. Each activity has the ability to override and provide alternative values.';

$string['tincanlaunchlrsendpoint'] = 'Endpoint';
$string['tincanlaunchlrsendpoint_help'] = 'The LRS endpoint (e.g. http://lrs.example.com/endpoint/). Must include trailing forward slash.';
$string['tincanlaunchlrsendpoint_default'] = '';

$string['tincanlaunchlrslogin'] = 'Basic Login';
$string['tincanlaunchlrslogin_help'] = 'Your LRS login key.';
$string['tincanlaunchlrslogin_default'] = '';

$string['tincanlaunchlrspass'] = 'Basic Password';
$string['tincanlaunchlrspass_help'] = 'Your LRS password (secret).';
$string['tincanlaunchlrspass_default'] = '';

$string['tincanlaunchlrsduration'] = 'Duration';
$string['tincanlaunchlrsduration_help'] = 'Used with \'LRS integrated basic authentication\'. Requests the LRS to keep credentials valid for this number of minutes.';
$string['tincanlaunchlrsduration_default'] = '9000';

$string['tincanlaunchlrsauthentication'] = 'Authentication settings';
$string['tincanlaunchlrsauthentication_help'] = 'Use "Simple basic authentication" unless another setting is explicitly supported by your LRS.';
$string['tincanlaunchlrsauthentication_option_0'] = 'LRS integrated basic authentication';
$string['tincanlaunchlrsauthentication_option_1'] = 'Simple basic authentication';
//End Default LRS Admin Settings

//Start Activity Settings
$string['tincanlaunchname'] = 'Launch link name';
$string['tincanlaunchname_help'] = 'The name of the launch link as it will appear to the user.';

$string['tincanlaunchurl'] = 'Launch URL';
$string['tincanlaunchurl_help'] = 'The base URL of the Tin Can activity you want to launch (e.g. http://example.com/content/index.html).';

$string['tincanactivityid'] = 'Activity ID';
$string['tincanactivityid_help'] = 'The identifying IRI for the primary activity being launched.';

$string['tincanpackage'] = 'Zip package';
$string['tincanpackage_help'] = 'If you have a packaged Tin Can course, you can upload it here. If you upload a package, the Launch URL and Activity ID fields above will be automatically populated when you save using data from the tincan.xml file contained in the zip. You can edit these settings at any time, but should not change the Activity ID (either directly or by file upload) unless you understand the consequences.';

$string['tincanpackagetitle'] = 'Launch settings';
$string['tincanpackagetext'] = 'You can populate the Launch URL and Activity ID settings directly, or by uploading a zip package containing a tincan.xml file. The launch url defined in the tincan.xml may point to other files in the zip package, or to an external URL. The Activity ID must always be a full URL (or other IRI).';

$string['lrsheading'] = 'LRS Settings';
$string['lrsdefaults'] = 'LRS Default Settings';
$string['lrssettingdescription'] = 'By default, this activity uses the global LRS settings found in Site administration > Plugins > Activity modules > Tin Can Launch Link. To change the settings for this specific activity, select Unlock Defaults.';
$string['overridedefaults'] = 'Unlock Defaults';
$string['overridedefaults_help'] = 'Allows activity to have different LRS settings than the site-wide, default LRS settings.';
//End Activity Settings

//Zip errors
$string['badmanifest'] = 'Some manifest errors: see errors log';
$string['badimsmanifestlocation'] = 'A tincan.xml file was found but it was not in the root of your zip file, please re-package your course';
$string['badarchive'] = 'You must provide a valid zip file';
$string['nomanifest'] = 'Incorrect file package - missing tincan.xml';

$string['tincanlaunch'] = 'Tin Can Launch Link';
$string['pluginadministration'] = 'Tin Can Launch Link administration';
$string['pluginname'] = 'Tin Can Launch Link';

//verb completion settings
$string['completionverb'] = 'Verb';
$string['completionverbgroup'] = 'Track completion by verb';
$string['completionverbgroup_help'] = 'Moodle will look for statements where the actor is the current user, the object is the specified activity id and the verb is the one set here. If it finds a matching statement, the activity will be marked complete.';


//View settings
$string['tincanlaunchviewfirstlaunched'] = 'First launched';
$string['tincanlaunchviewlastlaunched'] = 'Last launched';
$string['tincanlaunchviewlaunchlinkheader'] = 'Launch link';
$string['tincanlaunchviewlaunchlink'] = 'launch';

$string['tincanlaunch_completed'] = 'Experience complete!';
$string['tincanlaunch_progress'] = 'Attempt in progress.';
$string['tincanlaunch_attempt'] = 'New Attempt';
$string['tincanlaunch_notavailable'] = 'The Learning Record Store is not available. Please contact a system administrator. 

If you are the system administrator, go to Site admin / Development / Debugging and set Debug messages to DEVELOPER. Set it back to NONE or MINIMAL once the error details have been recorded.';
$string['tincanlaunch_regidempty'] = 'Registration id not found. Please close this window.';

$string['idmissing'] = 'You must specify a course_module ID or an instance ID';

// Events
$string['eventactivitylaunched'] = 'Activity launched';
$string['eventactivitycompleted'] = 'Activity completed';

$string['tincanlaunch:addinstance'] = 'Add a new Tin Can (xAPI) activity to a course';
