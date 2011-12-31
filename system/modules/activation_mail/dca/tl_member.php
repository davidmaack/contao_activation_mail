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
 * @package    activation_main
 * @license    LGPL
 * @filesource
 */


$GLOBALS['TL_DCA']['tl_member']['config']['onsubmit_callback'][] = array('activation_mail', 'send_mail');
$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace('{login_legend:hide},login;', '{login_legend:hide},am_send_mail,login;', $GLOBALS['TL_DCA']['tl_member']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_member']['fields']['am_send_mail'] = array(
			'label'          => &$GLOBALS['TL_LANG']['tl_member']['am_send_mail'],
			'exclude'        => true,
            'load_callback'  => array(array('activation_mail', 'reset_am_send_mail')),
			'inputType'      => 'checkbox'	
);

class activation_mail extends Backend {
    
    // helper function to uncheck the checkbox
    public function reset_am_send_mail($strValue) {
        $strValue = 0;
        return $strValue;
    }
    
    // Send the email
    public function send_mail() {
        $this->import('Input');
               
        // send mail if login is enabled
        if ($this->Input->post('login') == 1 and $this->Input->post('am_send_mail') == 1 and $this->Input->post('password') == $this->Input->post('password_confirm')) {
            $objInfoMail = new Email();
            $objInfoMail->subject = str_replace('%s',$this->Environment->host,$GLOBALS['TL_LANG']['MSC']['am']['subject_enabled']);
            $objInfoMail->from = str_replace('%s',$this->Environment->host,$GLOBALS['TL_LANG']['MSC']['am']['sender_mail']);
            $objInfoMail->fromName = $GLOBALS['TL_LANG']['MSC']['am']['sender_name'];
            $objInfoMail->text = str_replace(array('%f', '%l', '%g', '%u', '%p'),array($this->Input->post('firstname'), $this->Input->post('lastname'), $this->Environment->host, $this->Input->post('username'),$this->Input->post('password')),$GLOBALS['TL_LANG']['MSC']['am']['content_enabled']);
            $objInfoMail->sendTo($this->Input->post('email'));
            unset($objInfoMail);
        }   
        
        // send mail if login is disabled
        if ($this->Input->post('login') == 0 and $this->Input->post('am_send_mail') == 1) {
            $objInfoMail = new Email();
            $objInfoMail->subject = str_replace('%s',$this->Environment->host,$GLOBALS['TL_LANG']['MSC']['am']['subject_disabled']);
            $objInfoMail->from = str_replace('%s',$this->Environment->host,$GLOBALS['TL_LANG']['MSC']['am']['sender_mail']);
            $objInfoMail->fromName = $GLOBALS['TL_LANG']['MSC']['am']['sender_name'];
            $objInfoMail->text = str_replace(array('%f', '%l', '%g', '%u', '%p'),array($this->Input->post('firstname'), $this->Input->post('lastname'), $this->Environment->host, $this->Input->post('username'),$this->Input->post('password')),$GLOBALS['TL_LANG']['MSC']['am']['content_disabled']);
            $objInfoMail->sendTo($this->Input->post('email'));
            unset($objInfoMail);
        }
    }
}

?>