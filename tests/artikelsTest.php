<?php


/**
 * Dit is de testclass voor de LesPlanning controller class
 */


namespace TDD\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\controllers\LesPlanning;


 class lesPlanningTest extends TestCase
 {
   /**
    * @dataProvider provideSayMyName
    */
    public function testSayMyName($input,$expected)
    {
        $LesPlanning = new lesPlanningTest();
        $output = $LesPlanning->sayMyName($input);
        $message = "Er moet uitkomen: 'Mijn naam is: $input'";

        $this->assertEquals($expected,
                            $output,
                            $message);

    }

    public function provideSayMyName()
    {
      return [
         'test1' => ['Ruud', 'Hallo mijn naam is : Ruud'],
         'test2' => ['Leo', 'Hallo mijn naam is : Leo']
      ];
    }
 }