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

// %s wird durch die URL der Webseite ersetzt
$GLOBALS['TL_LANG']['MSC']['am']['subject_enabled'] = 'Aktivierung Ihres Accounts auf %s';
// %s wird durch die URL der Webseite ersetzt
$GLOBALS['TL_LANG']['MSC']['am']['subject_disabled'] = 'Deaktivierung Ihres Accounts auf %s';
// %s wird durch die URL der Webseite ersetzt
$GLOBALS['TL_LANG']['MSC']['am']['sender_mail'] = 'noreply@%s';
$GLOBALS['TL_LANG']['MSC']['am']['sender_name'] = 'Account Manager';
// %f wird durch den Vornamen ersetzt
// %l wird durch den Nachnamen
// %g wird durch die URL der Webseite ersetzt
// %u wird durch den Loginnamen ersetzt
// %p wird durch das Password ersetzt
$GLOBALS['TL_LANG']['MSC']['am']['content_enabled'] = "Sehr geehrte Damen und Herren, \nIhr Account %u mit dem Password %p wurde auf der Webseite %g freigeschaltet. Sie können Sich dort nun mit Ihren Zugangsdaten einloggen.\nViele Grüße\nIhr Webmaster";
// %f wird durch den Vornamen ersetzt
// %l wird durch den Nachnamen
// %g wird durch die URL der Webseite ersetzt
// %u wird durch den Loginnamen ersetzt
// %p wird durch das Password ersetzt
$GLOBALS['TL_LANG']['MSC']['am']['content_disabled'] = "Sehr geehrte, Sehr geerter %f %l, \nIhr Account %u wurde auf der Webseite %g gesperrt. Sie können Sich dort nun nicht mehr mit Ihren Zugangsdaten einloggen.\nViele Grüße\nIhr Webmaster";
?>