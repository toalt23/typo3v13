<?php

declare(strict_types=1);

namespace Tobias\Tea\Controller;

use Psr\Http\Message\ResponseInterface;
use Tobias\Tea\Domain\Model\Tea;
use Tobias\Tea\Domain\Repository\TeaRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller for the main "Tea" FE plugin.
 */
class TeaController extends ActionController
{
    public function __construct(
        private readonly TeaRepository $teaRepository,
    ) {}

    public function indexAction(): ResponseInterface
    {
        $teas = $this->teaRepository->findAll();
        var_dump($teas);
        die();
        $this->view->assign('teas', $teas);
        return $this->htmlResponse();
    }

    public function showAction(Tea $tea): ResponseInterface
    {
        $this->view->assign('tea', $tea);
        return $this->htmlResponse();
    }
}
