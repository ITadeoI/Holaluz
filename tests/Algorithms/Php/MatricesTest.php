<?php

namespace App\Tests\algorithms\php;


use App\Algorithms\Php\Matrices;
use App\Tests\BaseTestCase;

class MatricesTest extends BaseTestCase
{
    private $matrix;

    public function setUp(): void
    {
        parent::setUp();

        $this->matrix = new Matrices();
    }

    public function testGivenAPositiveMatrixShouldReturnHighestNumber(): void
    {
        $matrixPositive = [
            [10, 100, 3],
            [12, 200, 154],
            [3, 30, 2],
        ];

        $this->assertEquals($this->matrix->getMatrixMax($matrixPositive) , 200);
    }

    public function  testGivenANegativeMatrixShouldReturnHighestNumber(): void
    {
        $matrixNegative = [
            [-10, -100, -3],
            [-12, -200, -154],
            [-3, -30, -2],
        ];

        $this->assertEquals($this->matrix->getMatrixMax($matrixNegative) , -2);
    }

    public function  testGivenAMixedMatrixShouldReturnHighestNumber(): void
    {
        $matrixMixed = [
            [-10, 100, 3],
            [12, -200, 154],
            [3, 30, -2],
        ];

        $this->assertEquals($this->matrix->getMatrixMax($matrixMixed) , 154);
    }


}