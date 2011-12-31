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
 * Callbacks
 */
$GLOBALS['TL_DCA']['tl_member']['config']['onsubmit_callback'][] = array('ActivationMail', 'sendMail');


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace('login;', 'am_send_mail,am_mail_template_enable,am_mail_template_disable,login;', $GLOBALS['TL_DCA']['tl_member']['palettes']['default']);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_member']['fields']['am_send_mail'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_member']['am_send_mail'],
	'exclude'		=> true,
	'inputType'		=> 'checkbox',
	'load_callback'	=> array
	(
		array
		(
			'ActivationMail', 'resetAmSendMail'
		)
	),
	'eval'			=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_member']['fields']['am_mail_template_enable'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_member']['am_mail_template_enable'],
	'exclude'		=> true,
	'inputType'		=> 'select',
	'options'		=> MailTemplatesHelper::getSelectValues(),
	'eval'			=> array('tl_class'=>'w50 clr')
);

$GLOBALS['TL_DCA']['tl_member']['fields']['am_mail_template_disable'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_member']['am_mail_template_disable'],
	'exclude'		=> true,
	'inputType'		=> 'select',
	'options'		=> MailTemplatesHelper::getSelectValues(),
	'eval'			=> array('tl_class'=>'w50')
);

// we need a clr otherwize it looks stupid
$GLOBALS['TL_DCA']['tl_member']['fields']['login']['eval']['tl_class'] .= ' clr';

?>