<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<title> Orderlugin </title>
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<script type="text/javascript" src="js/own.js"></script>
</head>

<body>
	<div class="container sav2-form-area">
	  <!-- 1 start -->
      <div class="row sav2-first-form">
		<div class="col-md-12">
			 <div>
				<p>Заявление о признании семьи или одинокого проживающего гражданина малоимущими и назначении государственной социальной помощи:</p>
				<br />
			 </div>
			 <div class="form-group">
				  <label for="org-town">Название города, района где располагается Центр по предоставлению гос. услуг в сфере соц. защиты:</label>
				  <select class="form-control" id="org-town">
					<option value="1">г.Сыктывкар</option>
					<option value="2">Эжвинский район г.Сыктывкар</option>
					<option value="3">г.Воркута</option>
					<option value="4">г.Инта</option>
					<option value="5">г.Печора</option>
					<option value="6">г.Ухта</option>
					<option value="7">Сыктывдинский район</option>
					<option value="8">Сысольский район</option>
					<option value="9">Койгородский район</option>
					<option value="10">Прилузский район</option>
					<option value="11">Корткеросский район</option>
					<option value="12">Усть-Куломский район</option>
					<option value="13">Троицко-Печорский район</option>
					<option value="14">Усть-Вымский район</option>
					<option value="15">Удорский район</option>
					<option value="16">Княжпогостский район</option>
					<option value="17">Ижемский район</option>
					<option value="18">Усть-Цилемский район</option>
					<option value="19">г.Вуктыл</option>
					<option value="20">г.Усинск</option>
					<option value="21">г.Сосногорск</option>
				  </select>
			</div>
			<div class="form-group">
			  <label for="customer-fio">От (фамилия, имя, отчество):</label>
			  <input type="text" class="form-control" id="customer-fio">
			</div>
			<div class="form-group">
			  <label for="customer-dwelling">Зарегестрированный(ая) по месту жительства (месту прибывания) по адресу:</label>
			  <input type="text" class="form-control" id="customer-dwelling">
			</div>
			<div class="jumbotron">
				<div class="form-group">
				  <label for="customer-id-doc-name">Наименование документа, удостоверяющего личность:</label>
				  <input type="text" class="form-control" id="customer-id-doc-name">
				</div>
				<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					  <label for="customer-id-doc-vol">Серия:</label>
					  <input type="text" class="form-control" id="customer-id-doc-vol">
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
					  <label for="customer-id-doc-num">Номер:</label>
					  <input type="text" class="form-control" id="customer-id-doc-num">
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					  <label for="customer-id-doc-givenbywhom">Кем выдан:</label>
					  <input type="text" class="form-control" id="customer-id-doc-givenbywhom">
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
					  <label for="customer-id-doc-givendate">Дата выдачи:</label>
					  <input type="text" class="form-control" id="customer-id-doc-givendate">
					</div>
					</div>
				</div>
			</div>
			<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					  <label for="customer-birthdate">Дата рождения:</label>
					  <input type="text" class="form-control" id="customer-birthdate">
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
					  <label for="customer-phonenum">Номер телефона:</label>
					  <input type="text" class="form-control" id="customer-phonenum">
					</div>
					</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="next1">Далее</button>
				</div>
			</div>
		</div>
	  </div>
	  <!-- 1 end -->
	  <!-- 2 start -->
	  <div class="row sav2-second-form">
		<div class="col-md-12">
			<div>
				<p>Сведения о лице, являющемся представителем в соответствии с законодательством Российской Федерации:</p>
				<br />
			</div>
			<div class="form-group">
			  <label for="delegate-fio">фамилия, имя, отчество:</label>
			  <input type="text" class="form-control" id="delegate-fio">
			</div>
			<div class="form-group">
			  <label for="delegate-dwelling">адрес места жительства (места пребывания):</label>
			  <input type="text" class="form-control" id="delegate-dwelling">
			</div>
			<div class="form-group">
			  <label for="delegate-phonenum">номер телефона:</label>
			  <input type="text" class="form-control" id="delegate-phonenum">
			</div>
			<div class="jumbotron">
				<div class="form-group">
				  <label for="delegate-id-doc-name">Наименование документа, удостоверяющего личность представителя:</label>
				  <input type="text" class="form-control" id="delegate-id-doc-name">
				</div>
				<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					  <label for="delegate-id-doc-vol">Серия:</label>
					  <input type="text" class="form-control" id="delegate-id-doc-vol">
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
					  <label for="delegate-id-doc-num">Номер:</label>
					  <input type="text" class="form-control" id="delegate-id-doc-num">
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					  <label for="delegate-id-doc-givenbywhom">Кем выдан:</label>
					  <input type="text" class="form-control" id="delegate-id-doc-givenbywhom">
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
					  <label for="delegate-id-doc-givendate">Дата выдачи:</label>
					  <input type="text" class="form-control" id="delegate-id-doc-givendate">
					</div>
					</div>
				</div>
			</div>
			<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					  <label for="customer-birthdate">Дата рождения:</label>
					  <input type="text" class="form-control" id="delegate-birthdate">
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
					  <label for="customer-phonenum">Место рождения:</label>
					  <input type="text" class="form-control" id="delegate-birthplace">
					</div>
					</div>
			</div>
			<div class="jumbotron">
				<div class="form-group">
				  <label for="delegate-priv-doc-name">Наименование документа, подтверждающего полномочия представителя:</label>
				  <input type="text" class="form-control" id="delegate-priv-doc-name">
				</div>
				<div class="row">
					<div class="col-md-12">
					<div class="form-group">
					  <label for="delegate-priv-doc-givenbywhom">Кем выдан:</label>
					  <input type="text" class="form-control" id="delegate-priv-doc-givenbywhom">
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					  <label for="delegate-priv-doc-num">Номер документа:</label>
					  <input type="text" class="form-control" id="delegate-priv-doc-num">
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
					  <label for="delegate-priv-doc-num">Дата выдачи:</label>
					  <input type="text" class="form-control" id="delegate-priv-doc-givendate">
					</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="back2">Назад</button>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="next2">Далее</button>
				</div>
			</div>
		</div>
	  </div>
	  <!-- 2 end -->
	  <!-- 3 start -->
	  <div class="row sav2-third-form">
		<div class="col-md-12">
			<div>
				<p></p>
				<br />
			</div>
			
			<div class="jumbotron">
				<div>
					<b>Прошу признать меня, мою семью малоимущим(щей) и предоставить мне (моей семье) государственную социальную помощь в виде (выбрать один или несколько пунктов, пометив нужный квадрат):</b>
					<br />
				</div>
				<div class="row benefits-list">
					<div class="col-md-6">
						<div class="checkbox">
							<label><input id="benefit1" type="checkbox" value="">социального пособия;</label>
						</div>
						<div class="checkbox">
							<label><input id="benefit2" type="checkbox" value="">пособия на оплату проезда в общественном транспорте гражданам пожилого возраста;</label>
						</div>
						<div class="checkbox">
							<label><input id="benefit3" type="checkbox" value="">пособия "От пособия к зарплате" (участия в проекте "От пособия к зарплате");</label>
						</div>
						<div class="checkbox">
							<label><input id="benefit4" type="checkbox" value="">пособия беременным женщинам, кормящим матерям на приобретение продуктов питания;</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="checkbox">
							<label><input id="benefit5" type="checkbox" value="">материальной помощи;</label>
						</div>
						<div class="checkbox">
							<label><input id="benefit6" type="checkbox" value="">компенсации понесенных затрат на приобретение бытового сжиженого газа;</label>
						</div>
						<div class="checkbox">
							<label><input id="benefit7" type="checkbox" value="">проезда по остросоциальным нуждам по территории Российской Федерации;</label>
						</div>
						<div class="checkbox">
							<label><input id="benefit8" type="checkbox" value="">предоставление питания в образовательной организации;</label>
						</div>
					</div>
				</div>
			</div>
			
			<div class="jumbotron">
			<div class="form-group">
				  <label for="payment-method">Выплаты прошу перечислить:</label>
				  <select class="form-control" id="payment-method">
					<option value="1">финансово-кредитное учреждение</option>
					<option value="2">через отделение федеральной почтовой связи</option>
					<option value="3">через кассу центра по предоставлению государственных услуг</option>
				  </select>
			</div>
				<div class="fincred-data">
				<div class="form-group">
							<label for="fincred-name-org">Наименование финансово-кредитного учреждения:</label>
							<input type="text" class="form-control" id="fincred-name-org">
				</div>
				<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <label for="fincred-otdel-num">отделение №:</label>
							  <input type="text" class="form-control" id="fincred-otdel-num">
							</div>
						</div>
						<div class="col-md-6">
						  <div class="form-group">
							<label for="fincred-filial-num">филиал №:</label>
							<input type="text" class="form-control" id="fincred-filial-num">
						  </div>
						</div>
				</div>
				<div class="form-group">
							<label for="fincred-account-num">счёт №:</label>
							<input type="text" class="form-control" id="fincred-account-num">
				</div>
				</div>
				<div class="postal-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <label for="postal-index">почтовый индекс:</label>
							  <input type="text" class="form-control" id="postal-index">
							</div>
						</div>
						<div class="col-md-6">

						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="back3">Назад</button>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="next3">Далее</button>
				</div>
			</div>
		</div>
	  </div>
	  <!-- 3 end -->
	  <!-- 4 start -->
	  <div class="row sav2-fourth-form">
		<div class="col-md-12">
			<div>
				<p>Сообщаю следующие сведения:</p>
				<br />
			</div>
			<p>1) сведения о составе семьи по месту жительства (месту пребывания):</p> 
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-3">
					Ф.И.О. гражданина и членов его семьи (указываются без сокращений)
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
					Дата рождения
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
					Данные документа, удостоверяющего личность (серия, номер)
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
					Родственные отношения
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
					Категории регистрируемого (работающий, пенсионер, учащийся (N класса (группы), наименование образовательной организации, безработный, инвалид (гр. инв.), студент и другие категории регистрируемого)
					</div>
				</div>
				<br />
				<div class="famstuff">
				<div class="row famstuff-row">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="form-group">
						  <label for="fam-staff-fio">Ф.И.О.</label>
						  <input type="text" class="form-control" id="fam-staff-fio"></input>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="form-group">
						  <label for="fam-staff-birthdate">Дата:</label>
						  <input type="text" class="form-control" id="fam-staff-birthdate"></input>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="form-group">
						  <label for="fam-staff-iddoc">документ:</label>
						  <input type="text" class="form-control" id="fam-staff-iddoc"></input>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="form-group">
						  <label for="fam-staff-relation">отношение:</label>
						  <input type="text" class="form-control" id="fam-staff-relation"></input>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="form-group">
						  <label for="fam-staff-category">категория:</label>
						  <input type="text" class="form-control" id="fam-staff-category"></input>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button class="btn btn-lg btn-primary btn-block" type="submit" id="add-family-member">добавить</button>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button class="btn btn-lg btn-primary btn-block" type="submit" id="remove-family-member">удалить</button>
					</div>
				</div>
			</div>
			
			<p>2)  сведения  о принадлежащем гражданину, членам его семьи имуществе на праве собственности (в том числе долевой собственности):</p> 
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-3">
					<label class="checkbox-inline"><input type="checkbox" value="" id="hold-house">Дача (дом, квартира)</label>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="form-group">
						  <label for="hold-house-purchaseyear">год приобретения:</label>
						  <input type="text" class="form-control" id="hold-house-purchaseyear" disabled=""></input>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-3">
					<label class="checkbox-inline"><input type="checkbox" value="" id="hold-garden">Подсобное хозяйство</label>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="form-group">
						  <label for="hold-garden-square">Кол-во соток:</label>
						  <input type="text" class="form-control" id="hold-garden-square" disabled=""></input>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-3">
					<label class="checkbox-inline" style="margin-bottom: 50px;"><input type="checkbox" value="" id="hold-land">Земельный участок</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-3">
					<label class="checkbox-inline"><input type="checkbox" value="" id="hold-car">Автомобиль</label>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="form-group">
						  <label for="hold-car-mark">Марка:</label>
						  <input type="text" class="form-control" id="hold-car-mark" disabled=""></input>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="form-group">
						  <label for="hold-car-releaseyear">Год выпуска:</label>
						  <input type="text" class="form-control" id="hold-car-releaseyear" disabled=""></input>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="form-group">
						  <label for="hold-car-purchaseyear">Год приобретения:</label>
						  <input type="text" class="form-control" id="hold-car-purchaseyear" disabled=""></input>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 20px;">
					Прочее имущество:
					</div>
				</div>
				<div class="another-hold">
					<div class="row another-hold-row">
						<div class="col-md-3 col-sm-3 col-xs-3">
							<div class="form-group">
							  <label for="another-hold-name">Наименование</label>
							  <input type="text" class="form-control" id="another-hold-name"></input>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<div class="form-group">
							  <label for="another-hold-square">Кол-во соток:</label>
							  <input type="text" class="form-control" id="another-hold-square"></input>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
							<div class="form-group">
							  <label for="another-hold-mark">Марка:</label>
							  <input type="text" class="form-control" id="another-hold-mark"></input>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<div class="form-group">
							  <label for="another-hold-releaseyear">Год выпуска:</label>
							  <input type="text" class="form-control" id="another-hold-releaseyear"></input>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<div class="form-group">
							  <label for="another-hold-purchaseyear">Год приобретения:</label>
							  <input type="text" class="form-control" id="another-hold-purchaseyear"></input>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button class="btn btn-lg btn-primary btn-block" type="submit" id="add-another-hold">добавить</button>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button class="btn btn-lg btn-primary btn-block" type="submit" id="remove-another-hold">удалить</button>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="back4">Назад</button>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="next4">Далее</button>
				</div>
			</div>
		</div>
	  </div>
	  <!-- 4 end -->
	  <!-- 5 start -->
	  <div class="row sav2-fifth-form">
		<div class="col-md-12">
			<div>
				<p>3)  дополнительно  сообщаю  о  социальных  выплатах,  получаемых мною и(или) моей семьей в виде (нужное отметить):</p>
				<br />
			</div>
			<div>
				<label class="checkbox-inline"><input type="checkbox" value="" id="soc-pay-baby1">ежемесячного пособия на ребенка, рожденного до 1 января 2005 года;</label>
			</div>
			<div>
				<label class="checkbox-inline"><input type="checkbox" value="" id="soc-pay-baby2">ежемесячного пособия по уходу за ребенком до полутора лет;</label>
			</div>
			<div>
				<label class="checkbox-inline"><input type="checkbox" value="" id="soc-pay-pubserv1">субсидии на оплату жилого помещения и коммунальных услуг;</label>
			</div>
			<div>
				<label class="checkbox-inline"><input type="checkbox" value="" id="soc-pay-pubserv2">меры социальной поддержки по оплате жилого помещения и коммунальных услуг;</label>
			</div>
			<div>
				<label class="checkbox-inline"><input type="checkbox" value="" id="soc-pay-solidfuel">компенсации стоимости твердого топлива;</label>
			</div>
			<div>
				<label class="checkbox-inline"><input type="checkbox" value="" id="soc-pay-another">других выплат (указать):</label>
				<input type="text" class="form-control" id="soc-pay-another-info" disabled=""></input>
			</div>
			
			<div class="jumbotron" style="margin-top: 50px;">
				<div style="margin-bottom: 30px;">
					<label class="checkbox-inline"><input type="checkbox" value="" id="notice-agreement-1">Сообщаю,  что  ни  я,  ни  члены  моей  семьи  не  получаем алименты на несовершеннолетних детей по причине:</label>
					<input type="text" class="form-control" id="notice-agreement-1-info" disabled=""></input>
				</div>
				<div style="margin-bottom: 30px;">
					<label class="checkbox-inline"><input type="checkbox" value="" id="notice-agreement-2">Я обязуюсь извещать центр по предоставлению государственных услуг <span id="notice-agreement-2-town"></span> об изменениях сведений о составе семьи по месту жительства (месту  пребывания),  о  принадлежащем  на праве собственности имуществе, о выплатах,  получаемых  мною  и (или) моей семьей, являющихся основанием для отказа  в  предоставлении государственной социальной помощи, в течение двух недель со дня возникновения указанных изменений.</label>
				</div>
				<div>
					<label class="checkbox-inline"><input type="checkbox" value="" id="notice-agreement-3">Я  предупрежден(а),  что излишне предоставленные мне и моей семье суммы государственной  социальной  помощи  вследствие  представления документов с недостоверными  сведениями  взыскиваются  в установленном законодательством порядке.</label>
				</div>
			</div>
			
			<div class="jumbotron">
				<div>
					К заявлению прилагаю следующие документы:
					<br />
				</div>
				<div class="pinned-docs">
					<div class="row pinned-docs-row">
						<div class="col-md-8 col-sm-8 col-xs-8">
							<div class="form-group">
							  <label for="pinned-doc-name">Наименование:</label>
							  <input type="text" class="form-control" id="pinned-doc-name"></input>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<div class="form-group">
							  <label for="pinned-doc-amount">Кол-во:</label>
							  <input type="text" class="form-control" id="pinned-doc-amount"></input>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button class="btn btn-lg btn-primary btn-block" type="submit" id="add-pinned-doc">добавить</button>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button class="btn btn-lg btn-primary btn-block" type="submit" id="remove-pinned-doc">удалить</button>
					</div>
				</div>
			</div>
			
			<div class="jumbotron">
				<div>
					Сформировать заявление (скачать):
					<br />
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button class="btn btn-lg btn-primary btn-block" type="submit" id="get-pdf">Сформировать</button>
					</div>
				</div>
			</div>
			
			<div id="debug-field"></div><!-- DEBUG -->
			
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="back5">Назад</button>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="next5">Далее</button>
				</div>
			</div>
		</div>
	  </div>
	  <!-- 5 end -->
	  <!-- 6 start -->
	  <div class="row sav2-sixth-form">
		<div class="col-md-12">
			<div>
				<p>Пожалуйста, все электронные образы прилагаемых документов предварительно упакуйте в zip-архив. (документы отправляются единым архивом) :</p>
				<br />
			</div>
			<div class="form-group">
				<label>Прикрепить архив:</label>
				<input class="pin_archive" type="file" accept=".zip,application/zip" />
			</div>
			<div class="ajax-respond">
			
			</div>
			<br /><br />
			<div>
				<p>Также прикрепите заявление (которое было скачано на предыдущем этапе) :</p>
				<br />
			</div>
			<div class="form-group">
				<label>Прикрепить заявление:</label>
				<input class="pin_apply" type="file" accept=".pdf" />
			</div>
			<div class="ajax-respond-apply">
			
			</div>
			
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="back6">Назад</button>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="send6">Отправить</button>
				</div>
			</div>
		</div>
	</div>
	  <!-- 6 end -->
    </div> <!-- /container -->
</body>

</html>