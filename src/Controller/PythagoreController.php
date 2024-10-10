<?php
namespace App\Controller;


use App\Service\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    private PythagoreUtility $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    #[Route('pythagore/view', name: 'pythagore_view')]
    public function displayPythagoreAction(): Response
    {
        $table = $this->pythagoreUtility->display();

        return $this->render('displayPythagore.html.twig', [
            'pythagore_table' => $table,
            'name' => 'BANKOLE STEPHANE',
        ]);
    }
}
