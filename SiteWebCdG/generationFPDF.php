<?php
require('fpdf.php');
require('makefont/makefont.php');

//connection a la base de donnees
include('inc/db.php');


class PDF extends FPDF
{
  // En-tête
function Header()
{
  //Logo
  $this->Image('images/orangelogo.png',10,6,30);
  //police Arial 15 gras
  $this->SetFont('Arial','B',15);
  //décallage à droite
  $this->Cell(80);
  //Titre
  $this->Cell(50,10,'titre',1,0,'C');
  //saut de ligne
  $this->Ln(20);
}
//pied de page
function Footer()
{
  //positionnement à 1.5 cm du bas de la page
  $this->SetY(-15);
  //police arial italique 8
  $this->SetFont('Arial','I','8');
  //n° de page centré
  $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}

$pdf=new PDF();

//desactive le coupure de page automatique
$pdf->SetAutoPageBreak(false);
//ajoute la première page
$pdf->AddPage();
//y initial pour chaque pages
$y_axis_initial =50;
//max ligne par pages
$max = 25;

$y_axis = 0;

$i = 0;

//demande de données
$result = mysqli_query($db,"SELECT * FROM doc Where id =".$_GET['id']);


while($row = mysqli_fetch_array($result))
{
  if($i == $max)
  {
    $pdf->AddPage();
  }
  $pdf->SetFont('Arial','B',12);
  $titre = $row['titre'];
  $description = $row['description'];
  $mention = $row['mention'];
  $conditionGene = $row['conditionGene'];

  $pdf->SetFillColor(255,255,255);

  //--------------TITRE PRESTA--------------------
  $pdf->SetXY(25,$y_axis_initial);
  $pdf->SetFont('Arial','B',17);
  $pdf->Cell(0,6,'Prestation : ',0,1,'L',1);
  $pdf->SetFont('Arial','',12);
  $pdf->Cell(0,6, $titre,0,1,'L',1);
  //--------------DESCRIPTION PRESTA--------------------
  $pdf->SetXY(25,$y_axis_initial + 25);
  $pdf->SetFont('Arial','B',17);
  $pdf->Cell(0,6,'Description : ',0,1,'L',1);
  $pdf->SetFont('Arial','',12);
  $pdf->MultiCell(0,6,$description,0,1,'L',false);
  //-------------MENTION PRESTA--------------------
  $pdf->SetXY(25,$y_axis_initial + 50);
  $pdf->SetFont('Arial','B',17);
  $pdf->Cell(0,6,'Mention : ',0,1,'L',1);
  $pdf->SetFont('Arial','',12);
  $pdf->MultiCell(0,6,$mention,0,1,'L',false);
  //--------------CONDITION PRESTA--------------------
  $pdf->SetXY(25,$y_axis_initial + 75);
  $pdf->SetFont('Arial','B',17);
  $pdf->Cell(0,6,'Condition Generale : ',0,1,'L',1);
  $pdf->SetFont('Arial','',12);
  $pdf->MultiCell(0,6,$conditionGene,0,1,'L',false);


// En-tête

}

$pdf->Output();
?>
