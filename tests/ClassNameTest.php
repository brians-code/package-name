<?php

use CodeKitchen\PackageName\ClassName;

class ClassNameTest extends PHPUnit_Framework_TestCase {
 
  public function testClassNameHasResult()
  {
    $class_name = new ClassName;
    $this->assertTrue($class_name->functionName());
  }
 
}
