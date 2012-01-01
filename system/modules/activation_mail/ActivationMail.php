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
 * Class ActivationMail
 * Contain methods to send activation mails using the mail_templates extension
 */
class ActivationMail extends Backend
{
	/**
	 * Uncheck the am_send_mail checkbox on every reload. So never 2 mails will be send
	 * 
	 * @param string $varValue
	 * @param DataContainer $dc
	 * @return int
	 */
    public function resetAmSendMail($varValue, DataContainer $dc)
    {
        return 0;
    }


	/**
	 * Send the activation mail if there are enables for the current user
	 * 
	 * @param void
	 * @return void
	 */
    public function sendMail()
    {
        $this->import('Input');

        // send the email if
        // - the login is now enabled
        // - the am_send_mail flag is activated
        // - the mail_template_enable is langer than 0
        // - the passwords match
        if ($this->Input->post('login') == 1 && $this->Input->post('am_send_mail') == 1 && $this->Input->post('am_mail_template_enable') > 0 && $this->Input->post('password') == $this->Input->post('password_confirm'))
        {
        	// get all fields for the current member
        	$objMember = $this->Database->prepare('SELECT * FROM tl_member WHERE id=?')
										->limit(1)
										->execute($this->Input->get('id'));

			$arrTokens = $objMember->fetchAssoc();
			$arrTokens['password'] = $this->Input->post('password');

			// prepare the array with the additional addresses
			$arrSendTo = array();
			$arrSendTo['to'] = $objMember->email;


        	// use the mail_template extension to send the email
        	MailTemplate::sendMail($this->Input->post('am_mail_template_enable'), false, $arrTokens, $arrSendTo);

			// log the event
			$this->log('The member ID '. $objMember->id . ' has been notified.', 'ActivationMail sendMail()', 'ACTIVATION_MAIL');
        }   


        // send the email if
        // - the login is now disabled
        // - the am_send_mail flag is activated
        // - the mail_template_disable is larger than 0
        if ($this->Input->post('login') == 0 && $this->Input->post('am_send_mail') == 1 && $this->Input->post('am_mail_template_disable') > 0)
        {
        	// get all fields for the current member
        	$objMember = $this->Database->prepare('SELECT * FROM tl_member WHERE id=?')
										->limit(1)
										->execute($this->Input->get('id'));

			$arrTokens = $objMember->fetchAssoc();

			// prepare the array with the additional addresses
			$arrSendTo = array();
			$arrSendTo['to'] = $objMember->email;


        	// use the mail_template extension to send the email
        	MailTemplate::sendMail($this->Input->post('am_mail_template_disable'), false, $arrTokens, $arrSendTo);

			// log the event
			$this->log('The member ID '. $objMember->id . ' has been notified.', 'ActivationMail sendMail()', 'ACTIVATION_MAIL');
        }
    }
}

?>