<?php

/*
 * @package         {packagename}
 * @author          {authorname}
 * @version         {version}
 * @copyright       {copyright}
 * @license         {license}
 * 
 * @note            Startup based on https://github.com/fititnt/joomla-quickstart
 */
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class ComExampleViewComExample extends JView
{
	function display($tpl = null) 
	{
		// Assign data to the view
		$this->item = $this->get('item');

		// Display the view
		parent::display($tpl);
	}
}
