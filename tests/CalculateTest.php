<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.06.2018
 * Time: 18:34
 */


namespace tests\CalculateTest;

use PHPUnit\Framework\TestCase;

require './FunctionsStringRegex/hw2_2Bonus.php';


class CalculateTest  extends TestCase
{


//test done in 13.06
    /**
     * @return array
     */
    public function ArrayContainDataProvider()
    {
        return [
            [
                'name' => 'Learning php, mysql & JavaScript',
                'author' => 'Robin Nixon',
                'price' => 30,
                'tags' => ['php', 'javascript', 'mysql']
            ],
            [
                'name' => 'Php for the Web: Visual QuickStart Guide',
                'author' => 'Larry Ullman',
                'price' => 25,
                'tags' => ['php']
            ],
            [
                'name' => 'pHp and MySqL for Dynamic Web Sites',
                'author' => 'Larry Ullman',
                'price' => 14.39,
                'tags' => ['php', 'mysql']
            ],
            [
                'name' => 'Modern PhP: New Features and Good Practices',
                'author' => 'Josh Lockhart',
                'price' => 24,
                'tags' => ['php']
            ],
            [
                'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
                'author' => 'Jon Duckett',
                'price' => 20,
                'tags' => ['javascript', 'jquery']
            ],
            [
                'name' => 'Miss Peregrine\'s Home for Peculiar Children',
                'author' => 'Ransom Riggs',
                'price' => 8.18
            ]
        ];
    }

    /**
     * @return array
     *
     */
    public function calculateSucessDataProvider()
    {
        return [
            ['ATTGC', 'TAACG'],
            ['ABC', 'TBG'],
            ['BDEE', 'BDEE'],

        ];
    }

    /**
     * @dataProvider calculateSucessDataProvider
     */
    public function testSucess($input, $expected)
    {
        $result = calculate($input);
        $this->assertEquals($expected, $result);
    }

}