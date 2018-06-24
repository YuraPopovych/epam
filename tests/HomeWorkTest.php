<?php
namespace tests\HomeWorkTest;
use PHPUnit\Framework\TestCase;
require './Arrays/hw3_2Bonus.php';

class HomeWorkTest  extends TestCase
{
    /**
     * @return array
     *
     */
    public function PositiveValDataProvider()
    {
        return [
            [[ 1, 1, 1, 2, 1, 1 ], 2],
            [[ 0, 0, 0.55, 0, 0 ], 0.55],
            [[ 3,1,5,3,7,4,1,5,7], 4],
        ];
    }

    /**
     * @test
     * Positive
     * @dataProvider PositiveValDataProvider
     *
     */
    public function ValueUniqueTestSucess($input, $expected)
    {
        $result = uniqueValue($input);
        $this -> assertEquals($expected, $result);
    }

    /**
     * @return array
     *
     */
    public function NegativeValDataProvider()
    {
        return [
            [[], 'Void array is not allowed!'],
            [123, 'Only array values allowed!'],
            [[2,2,2],'Unique value in array required!'],

        ];
    }

    /**
     * @test Negative
     * @dataProvider NegativeValDataProvider
     *
     */
    public function ValueUniqueTestFail($input, $expected)
    {
        $this -> expectExceptionMessage($expected);
        uniqueValue($input);
    }
}