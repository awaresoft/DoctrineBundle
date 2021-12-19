<?php

namespace Awaresoft\DoctrineBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Faker\Generator;

/**
 * Extension of base AbstractFixture class
 *
 * @author Bartosz Malec <b.malec@awaresoft.pl>
 */
abstract class AbstractFixture extends Fixture implements FixtureGroupInterface, OrderedFixtureInterface, FixtureInterface
{
    /**
     * @var Generator
     */
    protected $fakerGenerator;

    /**
     * @param Generator $fakerGenerator
     */
    public function setFakerGenerator(Generator $fakerGenerator)
    {
        $this->fakerGenerator = $fakerGenerator;
    }
}
