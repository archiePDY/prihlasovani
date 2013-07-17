<?php

use Nette\Application\UI;

require_once(__DIR__ . '/../../../libs/tcpdf/config/lang/eng.php');
require_once(__DIR__ . '/../../../libs/tcpdf/tcpdf.php');


class Certifikaty extends UI\Control
{

    private $tituly;



    public function __construct()
    {
        $this->tituly = array(
            '1' => 'Benešovský deník',
            '2' => 'Berounský deník',
            '3' => 'Blanenský deník',
            '4' => 'Boleslavský deník',
            '5' => 'Břeclavský deník',
            '6' => 'Brněnský deník',
            '7' => 'Bruntálský a Krnovský deník',
            '8' => 'Českobudějovický deník',
            '9' => 'Českokrumlovský deník',
            '10' => 'Českolipský deník',
            '11' => 'Chebský deník',
            '12' => 'Chomutovský deník',
            '13' => 'Chrudimský deník',
            '14' => 'Děčínský deník',
            '15' => 'Domažlický deník',
            '16' => 'Třinecký deník',
            '17' => 'Havířecký deník',
            '18' => 'Havlíčkobrodský deník',
            '19' => 'Hodonínský deník',
            '20' => 'Hradecký deník',
            '21' => 'Hranický deník',
            '22' => 'Hranický týden',
            '23' => 'Jablonecký deník deník',
            '24' => 'Jičínský deník',
            '25' => 'Jihlavský deník',
            '26' => 'Jindřichohradecký deník',
            '27' => 'Karlovarský deník',
            '28' => 'Karvinský deník',
            '29' => 'Kladenský deník',
            '30' => 'Klatovský deník',
            '31' => 'Kolínský deník',
            '32' => 'Krajský redakce - východ',
            '33' => 'Krajský redakce - vysočina',
            '34' => 'Krkonošský deník',
            '35' => 'Kroměřížský deník',
            '36' => 'Kutnohorský deník',
            '37' => 'Liberecký deník',
            '38' => 'Litoměřický deník',
            '39' => 'Mělnický deník',
            '40' => 'Moravskoslezký deník',
            '41' => 'Moravský sever',
            '42' => 'Mostecký deník',
            '43' => 'Náchodský deník',
            '44' => 'Naše Valašsko',
            '45' => 'Nové Přerovsko',
            '46' => 'Nový region Frýdecko - Místecko',
            '47' => 'Nový region Havířovsko',
            '48' => 'Nový region Karvinsko',
            '49' => 'Novojičínský deník',
            '50' => 'Nymburský deník',
            '51' => 'Olomoucký deník',
            '52' => 'Opavský a Hučínský deník',
            '53' => 'Orlický deník',
            '54' => 'Pardubický deník',
            '55' => 'Pelhřimovský deník',
            '56' => 'Písecký deník',
            '57' => 'Plzeňský deník',
            '58' => 'Prachatický deník',
            '59' => 'Pražský deník',
            '60' => 'Přerovský deník',
            '61' => 'Příbramský deník',
            '62' => 'Prostějovský deník',
            '63' => 'Prostějovský týden',
            '64' => 'Rakovnický deník',
            '65' => 'Region Bruntálský',
            '66' => 'Region Krnovský  noviny',
            '67' => 'Region opavský a hlučínský',
            '68' => 'Region týdeníku okresu Nový Jičín',
            '69' => 'Rokycanský deník',
            '70' => 'Rychnovský deník',
            '71' => 'Slovácké noviny',
            '72' => 'Slovácký deník',
            '73' => 'Sokolovský deník',
            '74' => 'Strakonický deník',
            '75' => 'Šumperský a jesenický deník',
            '76' => 'Svitavský deník',
            '77' => 'Táborský deník',
            '78' => 'Tachovský deník',
            '79' => 'Teplický deník',
            '80' => 'Třebíčský deník',
            '81' => 'Turnovský a semilský deník',
            '82' => 'Ústecký deník',
            '83' => 'Valašský deník',
            '84' => 'Vyškovský deník',
            '85' => 'Žatecký a lounsky deník',
            '86' => 'Žďárský deník',
            '87' => 'Zlínský',
            '88' => 'Znojemský',
        );
    }



    public function render()
    {
        $template = $this->template;
        $template->setFile(__DIR__ . '/certifikaty.latte');

        $template->render();
    }



    protected function createComponentForm()
    {
        $form = new UI\Form();
        $metody = array('mpdf', 'tcpdf');
        $form->addSelect('method', 'metoda gerovávní', $metody)
                ->setItems($metody, FALSE)
                ->setDefaultValue('tcpdf');
        
        $delka = array('roční', 'pololetní','čtvrtletní','měsíční');
        $form->addSelect('length', 'délka předplatného', $delka)
                ->setItems($delka, FALSE)
                ->setRequired()
                ->setPrompt('Vyberte');
        
        $typy = array('Předplatné', 'E-paper');
        $form->addSelect('typ', 'typ předplatného', array('Předplatné', 'E-paper'))
                ->setItems($typy, FALSE)
                ->setPrompt('Vyberte');

        $form->addText('from', 'Od')
                ->setAttribute('placeholder', 'Jméno dárce');
        $form->addText('to', 'Komu')
                ->setAttribute('placeholder', 'Jméno příjemce')
                ->setRequired();

        $form->addTextArea('adress', 'Doručovací adresa')
                ->setRequired();
        $form->addText('email', 'Email')
                ->addRule(UI\Form::EMAIL, 'email musí mít správný formát')
                ->setRequired();

        $form->addSelect('titul', 'Titul', $this->tituly)
                ->setItems($this->tituly, FALSE)
                ->setPrompt('Vyberte');
        $form->addCheckbox('send_to','odeslat na email?');

        $form->addSubmit('send', 'Vytvořit');

        $form->onSuccess[] = callback($this, 'processForm');

        return $form;
    }



    public function processForm(UI\Form $form)
    {

        $data = $form->values;

        if ($data['method'] == 'mpdf') {
            $this->generujmPdf($data);
        } else if ($data['method'] == 'tcpdf') {
            $this->generujTcPdf($data);
        }

        $this->flashMessage('PDF soubor byl vygenerován metodou' . $data['method']);

        // unlink('../temp/certifikat.pdf');
        $this->redirect('this');
    }



    public function generujmPdf($data)
    {
        $template = parent::createTemplate();
        $mpdf = new mPDF('utf-8', // mode - default ''
                        array(350, 200), // format - A4, for example, default ''
                        0, // font size - default 0
                        '', // default font family
                        '', // margin_left
                        '', // margin right
                        '', // margin top
                        '', // margin bottom
                        '', // margin header
                        '', // margin footer
                        'P');  // L - landscape, P - portrait
        //$mpdf->useOnlyCoreFonts = true;
        //$mpdf->SetDisplayMode('fullpage');
        $mpdf->SetAutoFont(0);

        $template->setFile(__DIR__ . '/sablona.latte');

        $template->data = $data;
        $mpdf->WriteHTML((string) $template);

        $mpdf->Output(__DIR__ . '/../../../temp/mpdfgcertifikat.pdf', "I");
    }



    public function generujTcPdf($data)
    {
        $pdf = new TCPDF('L', PDF_UNIT, array(300, 200), true, 'UTF-8', false);

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        $pdf->SetMargins(PDF_MARGIN_LEFT, 0, PDF_MARGIN_RIGHT);

        //$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        //$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);




        $pdf->AddPage();
        $template = parent::createTemplate();
        $pdf->SetFont('dejavusans', '', 20);

        $template->data = $data;
        $template->setFile(__DIR__ . '/sablona.latte');
        // get the current page break margin
        $bMargin = $pdf->getBreakMargin();
        // get current auto-page-break mode
        $auto_page_break = $pdf->getAutoPageBreak();
        // disable auto-page-break
        $pdf->SetAutoPageBreak(false, 0);
        // set bacground image
        $img_file = 'images/jaro.jpg';
        $pdf->Image($img_file, 0, 0, 410, 297, '', '', '', false, 300, '', false, false, 0);
        // restore auto-page-break status
        $pdf->SetAutoPageBreak($auto_page_break, $bMargin);
        // set the starting point for the page content
        $pdf->setPageMark();

        $pdf->writeHTML($template, true, false, true, false, '');
        // --- example with background set on page ---
        // set font

        $pdf->Output('test.pdf', 'I');
    }

}

?>
