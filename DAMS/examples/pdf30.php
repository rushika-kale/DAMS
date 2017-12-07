<?php


   ob_start();
    include(dirname(__FILE__).'/pdf3030.php');
    $content = ob_get_clean();

    // convert to PDF
    require_once(dirname(__FILE__).'/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('L', 'A4', 'en', true, 'UTF-8', 3);
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('Event.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>
