<?php
namespace Egyg33k\CsvBundle\Tests\Services;

use Egyg33k\CsvBundle\Tests\Services\AbstractTestCase;

class ReaderTest extends AbstractTestCase {

	function testReaderServiceInstance() {
		$reader = $this->container->get('egyg33k.csv.reader');
		$this->assertInstanceOf('Egyg33k\CsvBundle\Services\Reader', $reader);
		$csv = $reader::createFromPath('org.csv');
		$this->assertInstanceOf('League\Csv\Reader', $csv);
	}
}