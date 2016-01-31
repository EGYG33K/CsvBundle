<?php
namespace Egyg33k\CsvBundle\Services;

class Writer {
	
    public static function __callstatic($method, $arguments)
    {
    	return forward_static_call_array(array('League\Csv\Writer', $method),$arguments);
    }
}