<?php
namespace Egyg33k\CsvBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

abstract class AbstractTestCase extends WebTestCase {
	protected $container;
	public function setUp()
	{
        $kernel = new \AppKernel('test', true);
        $kernel->boot();

        $this->container = $kernel->getContainer();
	}
}
