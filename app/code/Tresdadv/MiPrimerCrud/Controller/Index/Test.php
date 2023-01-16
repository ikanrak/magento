<?php

namespace Tresdadv\MiPrimerCrud\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Tresdadv'));
		$this->_eventManager->dispatch('tresdadv_miprimercrud_display_text', ['mp_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}
