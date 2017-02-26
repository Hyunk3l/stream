<?php

namespace Hyunk3l\Stream\Test;

use Hyunk3l\Stream\Stream;
use PHPUnit\Framework\TestCase;

class StreamTest extends TestCase
{
    /**
     * @test
     */
    public function shouldApplyAFunctionOverAnArray()
    {
        $streamOfArray = new Stream([
           "a",
           "b",
           "c",
        ]);

        $result = $streamOfArray->forEach(function($valueFromArray){
            return $valueFromArray . "b";
        });

        $this->assertEquals([
                "ab",
                "bb",
                "cb",
            ],
            $result
        );
    }
}