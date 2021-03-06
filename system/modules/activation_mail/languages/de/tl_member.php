<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Unglaub 2012
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    activation_mail
 * @license    LGPL
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_member']['am_send_mail']				= array('Benachrichtigungs via E-Mail verschicken', 'Aktivieren Sie diese Option um den Benutzer über die Account-Änderung via E-Mail zu informieren.');
$GLOBALS['TL_LANG']['tl_member']['am_mail_template_enable']		= array('E-Mail Vorlage - Aktivierung', 'Bitte wählen Sie die E-Mail Vorlage welche für Aktivierungs E-Mails verwendet werden soll. Die Daten des Users stehen als "simple tokens" zur Verfügung.');
$GLOBALS['TL_LANG']['tl_member']['am_mail_template_disable']	= array('E-Mail Vorlage - Deaktivierung', 'Bitte wählen Sie die E-Mail Vorlage welche für die Deaktivierungs E-Mails verwendet werden soll. Die Daten des Users stehen als "simple tokens" zur Verfügung.');

?>