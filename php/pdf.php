<?php
session_start();

function sav2_convert($val){
	return iconv('UTF-8', 'windows-1251', $val);
}

$month_rus = array("января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря");

define('FPDF_FONTPATH', './font/');

require('./mc_table/mc_table.php');

if( isset( $_POST['jsonstring'] ) )
{
	$_SESSION['applydata'] =  json_decode( $_POST['jsonstring'] );
}

if( isset( $_GET['getpdf'] ) )
{	
	$applyData = $_SESSION['applydata'];

	$pdf=new PDF_MC_Table('P');
	$pdf->SetMargins(25, 10, 10);


	$pdf->AddFont('TimesNewRomanPSMT','','times.php');
	$pdf->AddPage();
	$pdf->SetFont('TimesNewRomanPSMT','',12);

	$pdf->SetX(110);
	$pdf->MultiCell(88, 5, sav2_convert("Государственное бюджетное учреждение \n Республики Коми \"Центр по предоставлению \n государственных услуг в сфере \n социальной защиты населения "), 0, 'R');
	$pdf->SetX(110);
	$pdf->SetTextColor(0,0,255);
	$pdf->MultiCell(88, 6, sav2_convert( $applyData->{'org-town'} ."\"" ), 'B', 'R');
	$pdf->SetTextColor(0,0,0);
	$pdf->Ln();
	$pdf->MultiCell($width, 5, sav2_convert("ЗАЯВЛЕНИЕ \n о признании семьи или одиноко проживающего гражданина \n малоимущими и назначении государственной социальной помощи"), 0, 'C');
	$pdf->Ln();

	$pdf->Cell(6,5,sav2_convert('от'),0);
	$pdf->SetTextColor(0,0,255);
	$pdf->MultiCell($width, 5, sav2_convert( $applyData->{'customer-fio'} ), 'B', 'C');
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell($width,5,sav2_convert("(фамилия, имя, отчество)"),0,1,'C');
	$pdf->Cell($width,6,sav2_convert("зарегистрированного(ой) по месту жительства (месту пребывания) по адресу:"),0,1,'L');
	$pdf->SetTextColor(0,0,255);
	$pdf->MultiCell($width,6,sav2_convert( $applyData->{'customer-dwelling'} ),'B','C');
	$pdf->SetTextColor(0,0,0);
	$pdf->Ln();

	$pdf->SetWidths(array(60,40,35,40));
	$pdf->Row( array(sav2_convert("Наименование документа, удостоверяющего личность:"),sav2_convert( $applyData->{'customer-id-doc-name'} ),sav2_convert("Дата выдачи:"),sav2_convert( $applyData->{'customer-id-doc-givendate'} )) );
	$pdf->Row( array(sav2_convert("Серия и \nномер документа:"),sav2_convert( $applyData->{'customer-id-doc-vol'} ." ". $applyData->{'customer-id-doc-num'} ),sav2_convert("Дата рождения:"),sav2_convert( $applyData->{'customer-birthdate'} )) );
	$pdf->Row( array(sav2_convert("Кем \nвыдан:"),sav2_convert( $applyData->{'customer-id-doc-givenbywhom'}),sav2_convert("Номер телефона:"),sav2_convert( $applyData->{'customer-phonenum'} )) );
	$pdf->Ln();

	$pdf->MultiCell($width, 5, sav2_convert("Сведения   о   лице,   являющемся   представителем   в  соответствии  с законодательством Российской Федерации:"), 0, 'L');
	$pdf->SetTextColor(0,0,255);
	$pdf->MultiCell($width, 5, sav2_convert( $applyData->{'delegate-fio'} ), 'B', 'C');
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell($width,5,sav2_convert("(фамилия, имя, отчество)"),0,1,'C');
	$pdf->SetTextColor(0,0,255);
	$pdf->MultiCell($width, 5, sav2_convert($applyData->{'delegate-dwelling'} ." тел. ". $applyData->{'delegate-phonenum'}), 'B', 'C');
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell($width,5,sav2_convert("(адрес места жительства (места пребывания), номер телефона)"),0,1,'C');
	$pdf->Ln();

	$pdf->SetWidths(array(60,40,35,40));
	$pdf->Row( array(sav2_convert("Наименование документа, удостоверяющего личность представителя:"),sav2_convert( $applyData->{'delegate-id-doc-name'} ),sav2_convert("Дата выдачи:"),sav2_convert( $applyData->{'delegate-id-doc-givendate'} )) );
	$pdf->Row( array(sav2_convert("Серия и \nномер документа:"),sav2_convert($applyData->{'delegate-id-doc-vol'} ." ". $applyData->{'delegate-id-doc-num'}),sav2_convert("Дата рождения:"),sav2_convert( $applyData->{'delegate-birthdate'} )) );
	$pdf->Row( array(sav2_convert("Кем \nвыдан:"),sav2_convert( $applyData->{'delegate-id-doc-givenbywhom'} ),sav2_convert("Место рождения:"),sav2_convert( $applyData->{'delegate-birthplace'} )) );
	$pdf->SetWidths(array(60,115));
	$pdf->Row( array(sav2_convert("Наименование документа, подтверждающего полномочия представителя:"),sav2_convert( $applyData->{'delegate-priv-doc-name'} )) );
	$pdf->SetWidths(array(60,40,35,40));
	$pdf->Row( array(sav2_convert("Номер \nдокумента:"),sav2_convert( $applyData->{'delegate-priv-doc-num'} ),sav2_convert("Дата выдачи:"),sav2_convert( $applyData->{'delegate-priv-doc-givendate'} )) );
	$pdf->SetWidths(array(60,115));
	$pdf->Row( array(sav2_convert("Кем \nвыдан:"),sav2_convert( $applyData->{'delegate-priv-doc-givenbywhom'} )) );
	$pdf->Ln();

	$pdf->AddPage();
	$pdf->MultiCell($width, 5, sav2_convert("Прошу  признать  меня,  мою  семью  малоимущим(щей)  и предоставить мне (моей  семье)  государственную  социальную  помощь в виде (выбрать один или несколько пунктов, пометив нужный квадрат):"), 0, 'L');
	$pdf->Ln();

	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(6,5,sav2_convert( ($applyData->{'benefit1'} ? 'X' : '') ),1,0,'C');
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(80, 5, sav2_convert("социального пособия;"),0,0,'L');

	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(6,5,sav2_convert( ($applyData->{'benefit2'} ? 'X' : '') ),1,0,'C');
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(80, 5, sav2_convert("материальной помощи;"),0,1,'L');

	$pdf->SetXY(25, 40);
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(6,5,sav2_convert( ($applyData->{'benefit3'} ? 'X' : '') ),1,0,'C');
	$pdf->SetTextColor(0,0,0);
	$pdf->MultiCell(80, 5, sav2_convert("пособия на оплату проезда в общественном транспорте гражданам пожилого возраста;"),0,'L');

	$pdf->SetXY(111, 40);
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(6,5,sav2_convert( ($applyData->{'benefit4'} ? 'X' : '') ),1,0,'C');
	$pdf->SetTextColor(0,0,0);
	$pdf->MultiCell(80, 5, sav2_convert("компенсации понесенных затрат на приобретение бытового сжиженного газа;"),0,'L');

	$pdf->SetXY(25, 60);
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(6,5,sav2_convert( ($applyData->{'benefit5'} ? 'X' : '') ),1,0,'C');
	$pdf->SetTextColor(0,0,0);
	$pdf->MultiCell(80, 5, sav2_convert("пособия на оплату проезда в общественном транспорте гражданам пожилого возраста;"),0,'L');

	$pdf->SetXY(111, 60);
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(6,5,sav2_convert( ($applyData->{'benefit6'} ? 'X' : '') ),1,0,'C');
	$pdf->SetTextColor(0,0,0);
	$pdf->MultiCell(80, 5, sav2_convert("проезда по остросоциальным нуждам по территории Российской Федерации;"),0,'L');

	$pdf->SetXY(25, 80);
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(6,5,sav2_convert( ($applyData->{'benefit7'} ? 'X' : '') ),1,0,'C');
	$pdf->SetTextColor(0,0,0);
	$pdf->MultiCell(80, 5, sav2_convert("пособия беременным женщинам, кормящим матерям на приобретение продуктов питания;"),0,'L');

	$pdf->SetXY(111, 80);
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(6,5,sav2_convert( ($applyData->{'benefit8'} ? 'X' : '') ),1,0,'C');
	$pdf->SetTextColor(0,0,0);
	$pdf->MultiCell(80, 5, sav2_convert("предоставление питания в образовательной организации;"),0,'L');

	$pdf->Ln();
	$pdf->Ln();
	$pdf->Ln();

	$pdf->Cell($width,5,sav2_convert("Выплаты прошу перечислить:"),0,1,'L');
	$pdf->SetDrawColor(0,0,255);
	$pdf->Cell(90,5,sav2_convert("1) через отделение федеральной почтовой связи:"),($applyData->{'payment-method'}==2 ? 'B' : 0),0,'L');
	$pdf->SetDrawColor(0,0,0);
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(85,5,sav2_convert($applyData->{'postal-index'}),'B',1,'L');
	$pdf->SetTextColor(0,0,0);
	$pdf->SetDrawColor(0,0,255);
	$pdf->Cell($width,5,sav2_convert("2) финансово-кредитное учреждение:"),($applyData->{'payment-method'}==1 ? 'B' : 0),1,'L');
	$pdf->SetDrawColor(0,0,0);
	$pdf->SetTextColor(0,0,255);
	$pdf->MultiCell($width, 5, sav2_convert($applyData->{'fincred-name-org'}),'B','C');
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell($width,5,sav2_convert("(наименование)"),0,1,'C');
	$pdf->Cell(28,5,sav2_convert("отделение №:"),0,0,'L');
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(60,5,sav2_convert($applyData->{'fincred-otdel-num'}),'B',0,'L');
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(25,5,sav2_convert("филиала №:"),0,0,'L');
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(62,5,sav2_convert($applyData->{'fincred-filial-num'}),'B',1,'L');
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(25,5,sav2_convert("на счет №:"),0,0,'L');
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(150,5,sav2_convert($applyData->{'fincred-account-num'}),'B',1,'L');
	$pdf->SetTextColor(0,0,0);
	$pdf->SetDrawColor(0,0,255);
	$pdf->Cell($width,5,sav2_convert("3) через кассу центра по предоставлению государственных услуг."),($applyData->{'payment-method'}==3 ? 'B' : 0),1,'L');
	$pdf->SetDrawColor(0,0,0);
	$pdf->Ln();

	$pdf->Cell($width,5,sav2_convert("Сообщаю следующие сведения:"),0,1,'L');
	$pdf->Cell($width,5,sav2_convert("1) о составе семьи по месту жительства (месту пребывания):"),0,1,'L');
	$pdf->Ln();
	$pdf->Ln();

	$pdf->SetWidths(array(8,35,27,35,35,35));
	$pdf->Row( array(sav2_convert("№ п/п"),sav2_convert("Ф.И.О. гражданина и членов его семьи (указываются без сокращений)"),sav2_convert("Дата рождения"),sav2_convert("Данные документа, удостоверяющего личность (серия, номер)"),sav2_convert("Родственные отношения"),sav2_convert("Категории регистрируемого (работающий, пенсионер, учащийся (N класса (группы), наименование образовательной организации, безработный, инвалид (гр. инв.), студент и другие категории регистрируемого)")) );
	$count_famstuff = 0;
	if(!empty($applyData->{'famstuff'}))
	{
		foreach ($applyData->{'famstuff'} as $value) {
			$count_famstuff += 1;
			$pdf->Row( array(sav2_convert($count_famstuff),sav2_convert($value[0]),sav2_convert($value[1]),sav2_convert($value[2]),sav2_convert($value[3]),sav2_convert($value[4])) );
		}
	}
	while( $count_famstuff < 3){
		$count_famstuff += 1;
		$pdf->Row( array(sav2_convert(""),sav2_convert(""),sav2_convert(""),sav2_convert(""),sav2_convert(""),sav2_convert("")) );
	}
	$pdf->Ln();

	$pdf->MultiCell($width, 5, sav2_convert("2)  сведения  о принадлежащем гражданину, членам его семьи имуществе на праве собственности (в том числе долевой собственности):"),0,'L');
	$pdf->Ln();

	$pdf->SetWidths(array(35,8,10,27,35,30,30));
	$pdf->row(array(sav2_convert("Наименование имущества"),sav2_convert("Да"),sav2_convert("Нет"),sav2_convert("Кол-во \nсоток"),sav2_convert("Марка"),sav2_convert("Год \nвыпуска"),sav2_convert("Год приобретения")));
	$pdf->row(array(sav2_convert("Дача (дом, квартира)"),sav2_convert(($applyData->{'hold-house'}[0] ? "V" : "")),sav2_convert(($applyData->{'hold-house'}[0] ? "" : "V")),sav2_convert("X"),sav2_convert("X"),sav2_convert("X"),sav2_convert($applyData->{'hold-house'}[1])));
	$pdf->row(array(sav2_convert("Подсобное хозяйство"),sav2_convert(($applyData->{'hold-garden'}[0] ? "V" : "")),sav2_convert(($applyData->{'hold-garden'}[0] ? "" : "V")),sav2_convert($applyData->{'hold-garden'}[1]),sav2_convert("X"),sav2_convert("X"),sav2_convert("X")));
	$pdf->row(array(sav2_convert("Земельный участок"),sav2_convert(($applyData->{'hold-land'} ? "V" : "")),sav2_convert(($applyData->{'hold-land'} ? "" : "V")),sav2_convert("X"),sav2_convert("X"),sav2_convert("X"),sav2_convert("X")));
	$pdf->row(array(sav2_convert("Автомобиль"),sav2_convert(($applyData->{'hold-car'}[0] ? "V" : "")),sav2_convert(($applyData->{'hold-car'}[0] ? "" : "V")),sav2_convert("X"),sav2_convert($applyData->{'hold-car'}[1]),sav2_convert($applyData->{'hold-car'}[2]),sav2_convert($applyData->{'hold-car'}[3])));
	if(!empty($applyData->{'another-hold'}))
	{
		foreach ($applyData->{'another-hold'} as $value) {
			$pdf->row(array(sav2_convert($value[0]),sav2_convert(""),sav2_convert(""),sav2_convert($value[1]),sav2_convert($value[2]),sav2_convert($value[3]),sav2_convert($value[4])));
		}
	}
	$pdf->Ln();

	$pdf->SetDrawColor(0,0,255);
	$pdf->MultiCell($width, 5, sav2_convert("3) дополнительно  сообщаю  о  социальных  выплатах,  получаемых мною и (или) моей семьей в виде (нужное подчеркнуть):"),0,'L');
	$pdf->MultiCell(140, 5, sav2_convert("а) ежемесячного пособия на ребенка, рожденного до 1 января 2005 года;"),($applyData->{'soc-pay-baby1'} ? 'B' : 0),'L');
	$pdf->MultiCell(125, 5, sav2_convert("б) ежемесячного пособия по уходу за ребенком до полутора лет;"),($applyData->{'soc-pay-baby2'} ? 'B' : 0),'L');
	$pdf->MultiCell(130, 5, sav2_convert("в) субсидии на оплату жилого помещения и коммунальных услуг;"),($applyData->{'soc-pay-pubserv1'} ? 'B' : 0),'L');
	$pdf->MultiCell(165, 5, sav2_convert("г) меры социальной поддержки по оплате жилого помещения и коммунальных услуг;"),($applyData->{'soc-pay-pubserv2'} ? 'B' : 0),'L');
	$pdf->MultiCell(90, 5, sav2_convert("д) компенсации стоимости твердого топлива;"),($applyData->{'soc-pay-solidfuel'} ? 'B' : 0),'L');
	$pdf->MultiCell(55, 5, sav2_convert("е) других выплат (указать):"),($applyData->{'soc-pay-another'} ? 'B' : 0),'L');
	$pdf->SetDrawColor(0,0,0);
	$pdf->MultiCell($width, 5, sav2_convert($applyData->{'soc-pay-another-info'}),'B','L');
	$pdf->Ln();

	$pdf->MultiCell($width, 5, sav2_convert("Сообщаю,  что  ни  я,  ни  члены  моей  семьи  не  получаем алименты на несовершеннолетних детей по причине:"),0,'L');
	$pdf->MultiCell($width, 5, sav2_convert($applyData->{'notice-agreement-1-info'}),'B','L');
	$pdf->Ln();
	$pdf->MultiCell($width, 5, sav2_convert("Я обязуюсь извещать центр по предоставлению государственных услуг ". $applyData->{'org-town'} ." (город,  район) об изменениях сведений о составе семьи по месту жительства (месту  пребывания), о принадлежащем на праве собственности имуществе, о выплатах, получаемых мною и (или) моей семьей, являющихся основанием дляотказа  в  предоставлении государственной социальной помощи, в течение двух недель со дня возникновения указанных изменений."),0,'L');
	$pdf->Ln();
	$pdf->MultiCell($width, 5, sav2_convert("Я предупрежден(а), что излишне предоставленные мне и моей семье суммы государственной социальной помощи вследствие представления документов с недостоверными сведениями взыскиваются в установленном законодательством порядке."),0,'L');
	$pdf->Ln();

	$pdf->MultiCell($width, 5, sav2_convert("К заявлению прилагаю следующие документы:"),0,'L');
	$pdf->SetWidths(array(20,135,20));
	$pdf->row(array(sav2_convert("№ п/п"),sav2_convert("Наименование документа"),sav2_convert("Кол-во")));
	$count_pinneddocs = 0;
	if(!empty($applyData->{'pinned-docs'}))
	{
		foreach ($applyData->{'pinned-docs'} as $value) {
			$count_pinneddocs += 1;
			$pdf->row(array(sav2_convert("".$count_pinneddocs),sav2_convert($value[0]),sav2_convert($value[1])));
		}
	}

	$pdf->Ln();
	$pdf->Ln();

	$pdf->Cell(3,5,sav2_convert("\""),0,0,'L');
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(6,5,sav2_convert(date('d')),'B',0,'L');
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(3,5,sav2_convert("\""),0,0,'L');
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(30,5,sav2_convert($month_rus[date('n')-1]),'B',0,'C');
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(6,5,sav2_convert("20"),0,0,'L');
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(6,5,sav2_convert(date('y')),'B',0,'L');
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(6,5,sav2_convert("г."),0,0,'L');

	$pdf->Output();
}
?>
