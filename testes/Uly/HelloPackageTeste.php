<?php

/**
 * Description of HelloPackage
 *
 * @author Ulysses
 */

namespace Uly;

class HelloPackageTeste extends \PHPUnit_Framework_TestCase {

   public function testeGetHello() {
      $hello = new HelloPackage();
      $string = $hello->getHello();
      $this->assertNotNull($string);
   }

}
