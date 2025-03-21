<?php


declare(strict_types=1);

namespace Tobias\Sitepackage\Controller;

use Psr\Http\Message\ResponseInterface;
use Tobias\Sitepackage\Domain\Repository\PersonRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Tobias\Sitepackage\Domain\Model\Person;

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

    public function newAction(): ResponseInterface
    {
        $input = $this->request->getQueryParams()["person"];
        if($input) {
            $person = new Person($input["firstNameInput"],$input["lastNameInput"],$input["emailInput"]);
            $this->personRepository->add($person);
        }
        return $this->htmlResponse();
    }

}