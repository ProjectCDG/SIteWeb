<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Utilisateur;
use App\Entity\Piece;
use App\Entity\Mesure;
use Dompdf\Dompdf;
use Dompdf\Options;

class PdfController extends AbstractController
{
    /**
     * @Route("/pdf/Users", name="createUserPdf")
     */
    public function createUserPdf()
    {
      $repo = $this->getDoctrine()->getRepository(Utilisateur::class);

      $utilisateurs = $repo->findAll();
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('pdf/UserPdf.html.twig', [
                'utilisateurs' => $utilisateurs
        ]);



        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        return new Response ($dompdf->stream());

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }
    /**
     * @Route("/pdf/Pieces", name="createPiecePdf")
     */
    public function createPiecePdf()
    {
      $repo = $this->getDoctrine()->getRepository(Piece::class);

      $pieces = $repo->findAll();
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('pdf/PiecePdf.html.twig', [
                'pieces' => $pieces
        ]);



        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        return new Response ($dompdf->stream());

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }
    /**
     * @Route("/pdf/Mesures", name="createMesurePdf")
     */
    public function createMesurePdf()
    {
      $repo = $this->getDoctrine()->getRepository(Mesure::class);

      $mesures = $repo->findAll();
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('pdf/MesurePdf.html.twig', [
                'mesures' => $mesures
        ]);



        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        return new Response ($dompdf->stream());

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }

}
