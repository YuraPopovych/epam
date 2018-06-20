<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.06.2018
 * Time: 18:34
 */

namespace tests\HomeWorkTest;
use PHPUnit\Framework\TestCase;

require './Arrays/hw3_2Bonus.php';

class HomeWorkTest extends TestCase
{
    /**
     * Data for successful testing.
     *
     * @return array
     */
    public function PositiveValDataProvider()
    {
        return [
            [[1, 1, 1, 2, 1, 1], 2],
            [[0, 0, 0.55, 0, 0], 0.55],
            [[3, 1, 5, 3, 7, 4, 1, 5, 7], 4],
        ];
    }

    /**
     * Test unique function on success.
     *
     * @test
     * @dataProvider PositiveValDataProvider
     * @param $input
     * @param $expected
     */
    public function ValueUniqueTestSuccess($input, $expected)
    {
        $result = uniqueValue($input);

        $this->assertEquals($expected, $result);
    }

    /**
     * Data for failed testing.
     *
     * @return array
     */
    public function NegativeValDataProvider()
    {
        return [
            [123, "Only array values allowed!"],
            [[], "Void array is not allowed!"],
            [[2, 2, 2], false],
        ];
    }

    /**
     * Test unique function on failure.
     *
     * @test Negative
     * @dataProvider NegativeValDataProvider
     * @param $input
     * @param $expected
     */
    public function ValueUniqueTestFail($input, $expected)
    {
        $result = uniqueValue($input);

        $this->assertEquals($expected, $result);
    }
}
