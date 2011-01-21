<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2009
 * @author     Leo Feyer <leo@typolight.org>
 * @package    Language
 * @license    LGPL
 * @filesource
 */

/**
 * Sprachstrings für activation_mail
 */

// %s replaced by the URL of the site
$GLOBALS['TL_LANG']['MSC']['am']['subject_enabled'] = 'Your account is enabled at %s';
// %s replaced by the URL of the site
$GLOBALS['TL_LANG']['MSC']['am']['subject_disabled'] = 'Your account is locked at %s';
// %s replaced by the URL of the site
$GLOBALS['TL_LANG']['MSC']['am']['sender_mail'] = 'noreply@%s';
$GLOBALS['TL_LANG']['MSC']['am']['sender_name'] = 'Account Manager';
// %f replaced by the first name
// %l replaced by the last name
// %g replaced by the URL of the site
// %u replaced by the login name
// %p replaced by the password
$GLOBALS['TL_LANG']['MSC']['am']['content_enabled'] = "Dear User, \nYour account (%s) on %g has been activated. You can now log on using your account details.\nRegards\nYour webmaster";
// %f replaced by the first name
// %l replaced by the last name
// %g replaced by the URL of the site
// %u replaced by the login name
// %p replaced by the password
$GLOBALS['TL_LANG']['MSC']['am']['content_disabled'] = "Dear User,\nYour account on %s has been blocked. You can no longer log on with your account details.\nRegards\nYour webmaster";
?>