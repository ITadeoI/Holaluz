<?php
declare(strict_types = 1);

namespace App\Tests;

use Faker\Factory;
use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{
    protected $faker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Factory::create();
    }

}