<?php


declare(strict_types=1);

namespace Tobias\Sitepackage\Controller;

use Psr\Http\Message\ResponseInterface;
use Tobias\Sitepackage\Domain\Repository\PersonRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller for the main "Person" FE plugin.
 */
class PersonController extends ActionController
{
    public function __construct(
        private readonly PersonRepository $personRepository,
    )
    {
    }

    public function indexAction(): ResponseInterface
    {
        $this->view->assign('persons', $this->personRepository->findAll());
        return $this->htmlResponse();
    }

}