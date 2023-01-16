
<?php

namespace Tresdadv\MiPrimerCrud\Cron;

class Testsudo
{

	public function execute()
	{

		$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/cron.log');
		$logger = new \Zend\Log\Logger();
		$logger->addWriter($writer);
		$logger->info(__METHOD__);

		return $this;

	}
}
