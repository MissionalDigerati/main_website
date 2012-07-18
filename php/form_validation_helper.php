<?php
/**
 * This file is part of Missional Digerati Website.
 * 
 * Missional Digerati Website is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Missional Digerati Website is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see 
 * <http://www.gnu.org/licenses/>.
 *
 * @author Johnathan Pulos <johnathan@missionaldigerati.org>
 * @copyright Copyright 2012 Missional Digerati
 * 
 */
/**
 * A class for handling form validations
 *
 * @package default
 * @author Johnathan Pulos
 */
class FormValidationHelper {
	/**
	 * The POST variables passed from the form
	 *
	 * @var array
	 */
	private $postVars = array();
	
	/**
	 * The initializer method for this class
	 *
	 * @param array $fields the fields that allowed to exist
	 * @access public
	 * @author Johnathan Pulos
	 */
	public function __construct($postVars) {
		$this->postVars = $postVars;
	}
	
	/**
	 * Checks if the field has been supplied correctly
	 *
	 * @param string $field the field to check is present
	 * @return boolean
	 * @access public
	 * @author Johnathan Pulos
	 */
	public function isPresent($field) {
		if((isset($this->postVars[$field])) && ($this->postVars[$field] != '')) {
			return true;
		} else{
			return false;
		}
	}
	
	/**
	 * Checks that the field is a valid email
	 *
	 * @param string $field the field to check
	 * @return boolean
	 * @access public
	 * @author Johnathan Pulos
	 */
	public function isEmail($field) {
		$pattern = "/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/i";
		return preg_match($pattern, $this->postVars[$field]) ? true : false;
	}
	
	/**
	 * Checks to see if the Spam trap has been triggered
	 *
	 * @param string $spamField the field name for the spam trap
	 * @return boolean
	 * @access public
	 * @author Johnathan Pulos
	 */
	public function isSpam($spamField) {
		if((isset($this->postVars[$spamField])) && ($this->postVars[$spamField] != '')) {
			return true;
		} else{
			return false;
		}
	}
	
}
?>