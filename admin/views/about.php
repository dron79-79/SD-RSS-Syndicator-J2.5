<?php
/**
* @Copyright Copyright (C) 2010 sdaprel.ru
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
**/

defined( '_JEXEC' ) or die( 'Restricted access' );

class sdrsssyndicatorViewAbout
{

	function __construct()
	{
		$this->addToolBar();	
		$this->about();
	}
	
	function about()
	{
		?>
			<div class="m">
							
			<p align="left">компонет SD RSS Syndicator, разработан студией веб дизайна Апрель</p>
			<p align="left">информацию по этому проекту смотрите на странице проекта <a href="http://www.sdaprel.ru/content/view/738/51/">SD RSS Syndicator</a></p>
			
			<p align="left">Copyright 2010, <a href="http://sdaprel.ru/" target="_blank">www.sdaprel.ru</a>.</p>
				<div class="clr"></div>
			</div>
		<?php
	}
	protected function addToolBar()
	{
		//JRequest::setVar('hidemainmenu', true);
		require_once JPATH_COMPONENT.'/helpers/submenu.php';
		SdrsssynicatorHelper::addSubmenu('info');
		//JToolBarHelper::title(   JText::_( 'sdrsssyndicator_feeds').': <small><small>[ ' . $text.' ]</small></small>', 'addedit.png' );
		
		
	}
}
?>
