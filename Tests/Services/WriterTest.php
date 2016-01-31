<?php
namespace Egyg33k\CsvBundle\Tests\Services;

use Egyg33k\CsvBundle\Tests\Services\AbstractTestCase;

class WriterTest extends AbstractTestCase {

	function testWriterServiceInstance() {
		$writer = $this->container->get('egyg33k.csv.writer');
		$this->assertInstanceOf('Egyg33k\CsvBundle\Services\Writer', $writer);
		$csv = $writer::createFromFileObject(new \SplTempFileObject());
		$this->assertInstanceOf('League\Csv\Writer', $csv);
	}
}