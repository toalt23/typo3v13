<?php

declare(strict_types=1);

namespace Tobias\Sitepackage\Domain\Model;

use TYPO3\CMS\Extbase\Annotation\Validate;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * A person - acting as author
 */
class Person extends AbstractEntity
{
    #[Validate(['validator' => 'StringLength', 'options' => ['maximum' => 80]])]
    protected string $firstname = '';

    #[Validate(['validator' => 'StringLength', 'options' => ['minimum' => 2, 'maximum' => 80]])]
    protected string $lastname = '';

    #[Validate(['validator' => 'EmailAddress'])]
    protected string $email = '';

    /**
     * Constructs a new Person
     */
    public function __construct(string $firstname, string $lastname, string $email)
    {
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setEmail($email);

    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}