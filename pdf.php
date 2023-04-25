<?php
require "./FPDF/fpdf.php";
include("./connect.php");

    

    class myPDF extends FPDF {
        function header ()
        {
            $this->Setfont('Arial','B',14);
            $this->cell(276,5,'BILL FOR CUSTOMER',0,0,'c');
            $this->ln();
            $this->SetFont('Times','',12);
            $this->cell(276,10,'THIS IS BILL OF OPTAINED TREATMENT BASED ON PRICE LIST',0,0,'c');
            $this->ln(10);
            $this->SetFont('Times','',12);
            $this->Cell(12,5,'Date :',0,0);
            $date = date('d/m/y h:m:s');
            $this->Cell(50,5,$date ,0,1);
            $this->ln();
            $this->SetFont('Times','',12);
            $this->cell(35,5,'NAME :- ',0,0,'c');
            $this->Cell(50,5,'___________  ',0,1);    // |      | required
            $this->ln();
            
        }
       
        function headerTable(){
            $this-> SetFont('Times','B',12);
            $this->cell(20,10,'ID',1,0,'C');
            $this->cell(50,10,'TREATMENT',1,0,'C');
            
           
            
            $this->cell(30,10,'PRICE',1,0,'C');
            $this->ln();

        }
        function viewTable($db){
            $this->SetFont('Times','',12);

            $stmt = 'select * from treatment';
            $sql = 'select SUM(T_PRICE) AS TOTAL from treatment';
// for sum
            $result = mysqli_query($db,$stmt);
            $result1 = mysqli_query($db,$sql);

            $sum = mysqli_fetch_array($result1,MYSQLI_ASSOC);

            while($data = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $price=$data['T_PRICE'];
                

                $this->cell(20,10,$data['p_id'],1,0,'C');
                $this->cell(50,10,$data['T_NAME'],1,0,'C');
                $this->cell(30,10,$data['T_PRICE'],1,0,'C');
               
                
                $this->ln();
                
            }
            $this->cell(20,10,'',0,0,'c');
            $this->cell(40,10,'',0,0,'L');
            $this->cell(40,10,'',0,0,'L');
            $this->cell(60,10,'',0,0,'L');
            $this->cell(20,10,'',0,8,'L');
            
        }
    }

    $pdf = new myPDF();
    $pdf->AliasNbpages();
    $pdf->Addpage('L','A4',0);
    $pdf->headerTable();
    $pdf->viewTable($db);
    $pdf->output();
?>



