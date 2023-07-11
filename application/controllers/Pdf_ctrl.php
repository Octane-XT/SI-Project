<?php
if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Pdf_ctrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
      $this->load->model('Users_model');
    }

    public function index()
    {

    }

    public function exporting_pdf(){
        $datas = json_decode($this->input->post('data'));
        // var_dump($datas);
                date_default_timezone_set('Europe/Moscow') ;
        $user = $this->Users_model->getUserById($this->session->userdata('iduser'));
                $invoiceDate = date('Y-m-d');
                $customerName = $user->nom;
                $totalAmount = $datas->total;

                
       // Créer le contenu de la facture
// Créer le contenu de la facture
$content = "
<h1>Facture</h1>
<br/><br/>
<p><strong>Date de facture :</strong> $invoiceDate</p>
<p><strong>Client :</strong> $customerName</p>
<br/><br/><br/>
<table style='border-collapse: collapse;' border='1'>
    <thead>
        <tr>
            <th style='border: 1px solid #000;'><strong>Nom</strong></th>
            <th style='border: 1px solid #000;'><strong>Quantité</strong></th>
            <th style='border: 1px solid #000;'><strong>Prix</strong></th>
        </tr>
    </thead>
    <tbody>";

// Boucler sur les produits et remplir le tableau dans la facture
for ($i = 0; $i < count(get_object_vars($datas)) - 1; $i++) {
    $petitDejeuner = $datas->$i->petit_dejeuner;
    $dejeuner = $datas->$i->dejeuner;
    $gouter = $datas->$i->gouter;
    $diner = $datas->$i->diner;
    $sport = $datas->$i->sport;

    if ($petitDejeuner->nom !== "rien") {
        $description = $petitDejeuner->nom;
        $quantite = $petitDejeuner->quantite;
        $prix = $petitDejeuner->prix;

        $content .= "
        <tr>
            <td style='border: 1px solid #000;'>$description</td>
            <td style='border: 1px solid #000;'>$quantite</td>
            <td style='border: 1px solid #000;'>$prix</td>
        </tr>";
    }

    if ($dejeuner->nom !== "rien") {
        $description = $dejeuner->nom;
        $quantite = $dejeuner->quantite;
        $prix = $dejeuner->prix;

        $content .= "
        <tr>
            <td style='border: 1px solid #000;'>$description</td>
            <td style='border: 1px solid #000;'>$quantite</td>
            <td style='border: 1px solid #000;'>$prix</td>
        </tr>";
    }

    if ($gouter->nom !== "rien") {
        $description = $gouter->nom;
        $quantite = $gouter->quantite;
        $prix = $gouter->prix;

        $content .= "
        <tr>
            <td style='border: 1px solid #000;'>$description</td>
            <td style='border: 1px solid #000;'>$quantite</td>
            <td style='border: 1px solid #000;'>$prix</td>
        </tr>";
    }

    if ($diner->nom !== "rien") {
        $description = $diner->nom;
        $quantite = $diner->quantite;
        $prix = $diner->prix;

        $content .= "
        <tr>
            <td style='border: 1px solid #000;'>$description</td>
            <td style='border: 1px solid #000;'>$quantite</td>
            <td style='border: 1px solid #000;'>$prix</td>
        </tr>";
    }

    if ($sport->nom !== "rien") {
        $description = $sport->nom;
        $quantite = $sport->quantite;
        $prix = $sport->prix;

        $content .= "
        <tr>
            <td style='border: 1px solid #000;'>$description</td>
            <td style='border: 1px solid #000;'>$quantite</td>
            <td style='border: 1px solid #000;'>$prix</td>
        </tr>";
    }
}

$content .= "
    </tbody>
    <br/> <br/>
    <tfoot>
        <tr>
            <td colspan='2'><strong>Total :</strong></td>
            <td style='border: 1px solid #000;'>$totalAmount Ar</td>
        </tr>
        <br/> <br/> <br/> <br/> <br/> <br/>
        <tr>
        <td colspan='2'><strong> $customerName</strong></td>
        <td></td>
        <td colspan='2'><strong>Izay Mety</strong></td>
    </tr>
    </tfoot>
</table>

";


        // Charger la bibliothèque TCPDF
        $this->load->library('tcpdf');

        // Créer un nouvel objet TCPDF
        $pdf = new TCPDF();

        // Définir les métadonnées du PDF
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Body Care | Export PDF');
        $pdf->SetSubject('Testing TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, CodeIgniter');

        // Ajouter une page
        $pdf->AddPage();

        // Charger la vue pdf_view.php
        $data['pdf'] = $pdf;
        $pdf->writeHTML($content, true, false, true, false, '');

        // Sortir le PDF en tant que fichier téléchargeable
        $pdf->Output('facture.pdf', 'D');
    }
}
