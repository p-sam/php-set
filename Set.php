<?php

namespace SP\Set;

class Set implements \IteratorAggregate, \Countable {
	private $hashmap;
	private $iterator;
	
	private static function assertScalar($scalar) {
		if(!is_scalar($scalar)) {
			throw new \InvalidArgumentException('Only scalar can be added to this Set (due to PHP limitations)');
		}
	}
	
	public static function fromArray(array $array) {
		$set = new Set();
		foreach($array as $v) {
			$set->add($v);
		}
		return $set;
	}
	
	public function __construct() {
		$this->hashmap = [];
		$this->iterator = null;
	}
	
	public function getIterator() {
		if(is_null($this->iterator)) {
			$this->iterator = new Iterator($this->hashmap);
		}
		return $this->iterator;
	}
	
	public function toArray() {
		return array_keys($this->hashmap);
	}
	
	public function has($scalar) {
		self::assertScalar($scalar);
		return isset($this->hashmap[$scalar]);
	}
	
	public function add($scalar) {
		if(!$this->has($scalar)) {
			$this->hashmap[$scalar] = 1;
		}
	}
	
	public function remove($scalar) {
		if($this->has($scalar)) {
			unset($this->hashmap[$scalar]);
		}
	}
	
	public function count() {
		return count($this->hashmap);
	}
}