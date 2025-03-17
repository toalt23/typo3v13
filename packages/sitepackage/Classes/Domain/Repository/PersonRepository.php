<?php

declare(strict_types=1);

namespace Tobias\Sitepackage\Domain\Repository;


use Tobias\Sitepackage\Domain\Model\Person;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * @extends Repository<Person>
 */
class PersonRepository extends Repository
{
    protected $defaultOrderings = ['lastname' => QueryInterface::ORDER_ASCENDING];
}