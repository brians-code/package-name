<?php
use CodeKitchen\PackageName\ClassName\ChildClassName;

class ChildClassNameTest extends PHPUnit_Framework_TestCase {
  public function testChildClassNameHasResult()
  {
    $child_class_name = new ChildClassName;
    $this->assertFalse($child_class_name->functionName());
  }
}
