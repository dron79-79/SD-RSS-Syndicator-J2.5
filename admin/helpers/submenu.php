<?php
defined('_JEXEC') or die;

/**
 * Contact component helper.
 *
 * @package		Joomla.Administrator
 * @subpackage	com_contact
 * @since		1.6
 */
class SdrsssynicatorHelper
{
	/**
	 * Configure the Linkbar.
	 *
	 * @param	string	$vName	The name of the active view.
	 *
	 * @return	void
	 * @since	1.6
	 */
	public static function addSubmenu($vName)
	{
		JSubMenuHelper::addEntry(
			JText::_('COM_SDRSSSYNDYCATOR_SUBMENU_FEEDS'),
			'index.php?option=com_sdrsssyndicator&task=feeds',
			$vName == 'feeds'
		);
		JSubMenuHelper::addEntry(
			JText::_('COM_SDRSSSYNDYCATOR_SUBMENU_CONFIG'),
			'index.php?option=com_sdrsssyndicator&task=config',
			$vName == 'config'
		);
		
		JSubMenuHelper::addEntry(
			JText::_('COM_SDRSSSYNDYCATOR_SUBMENU_BUTTONMAKER'),
			'index.php?option=com_sdrsssyndicator&task=buttonmaker',
			$vName == 'buttonmaker'
		);
		JSubMenuHelper::addEntry(
			JText::_('COM_SDRSSSYNDYCATOR_SUBMENU_DESCRIPTION'),
			'index.php?option=com_sdrsssyndicator&task=info',
			$vName == 'info'
		);

		if ($vName=='feeds') {
			JToolBarHelper::title(
				JText::sprintf('COM_SDRSSSYNDYCATOR_LIST_FEEDS', JText::_('com_sdrsssyndicator')),
				'newsfeeds-cat.png');
		}
		if ($vName=='feed') {
			JToolBarHelper::title(
				JText::sprintf('COM_SDRSSSYNDYCATOR_ITEM_FEEDS', JText::_('com_sdrsssyndicator')),
				'newsfeeds.png');
		}
		if ($vName=='config') {
			JToolBarHelper::title(
				JText::sprintf('COM_SDRSSSYNDYCATOR_CONFIG_FEEDS', JText::_('com_sdrsssyndicator')),
				'config.png');
		}
		
		if ($vName=='buttonmaker') {
			JToolBarHelper::title(
				JText::sprintf('COM_SDRSSSYNDYCATOR_BUTTONMAKER_FEEDS', JText::_('com_sdrsssyndicator')),
				'mediamanager.png');
		}
		if ($vName=='info') {
			JToolBarHelper::title(
				JText::sprintf('COM_SDRSSSYNDYCATOR_DESCRIPTION_FEEDS', JText::_('com_sdrsssyndicator')),
				'systeminfo.png');
		}
	}

	
}
