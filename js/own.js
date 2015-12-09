/**
*	Main Class -- OrderPlugin
*/
function OrderPlugin()
{
	//reference to itself
	var self = this;
	
	//methods --(start):
	
	//private
	var somePrivateMethod = function()
	{
		
	}
	
	
	//public
	this.somePublicMethod = function()
	{
		
	}
	
	//methods --(end);
	
	/**
	*	Constructor
	*/
	var constructOrderPlugin = function()
	{	
		
	}
	
	/**
	*	initialization
	*/
	this.init = function()
	{
		constructOrderPlugin();
	}
	
	//callback init ->
	this.init();
}

// initialization: kinda -- "public static void main(String[] args){ ... }"
/**
*	public static void (String[] args){ ... }
*/
$(document).ready(function(){
	
	var getOrgTownVal = function(idval){
		
		var townString = "г.Сыктывкара";
		
		switch (idval) {
			case '1':
				townString = "г.Сыктывкара";
				break;
			case '2':
				townString = "Эжвинского района г.Сыктывкара";
				break;
			case '3':
				townString = "г.Воркуты";
				break;
			case '4':
				townString = "г.Инты";
				break;
			case '5':
				townString = "г.Печоры";
				break;
			case '6':
				townString = "г.Ухты";
				break;
			case '7':
				townString = "Сыктывдинского района";
				break;
			case '8':
				townString = "Сысольского района";
				break;
			case '9':
				townString = "Койгородского района";
				break;
			case '10':
				townString = "Прилузского района";
				break;
			case '11':
				townString = "Корткеросского района";
				break;
			case '12':
				townString = "Усть-Куломского района";
				break;
			case '13':
				townString = "Троицко-Печорского района";
				break;
			case '14':
				townString = "Усть-Вымского района";
				break;
			case '15':
				townString = "Удорского района";
				break;
			case '16':
				townString = "Княжпогостского района";
				break;
			case '17':
				townString = "Ижемского района";
				break;
			case '18':
				townString = "Усть-Цилемского района";
				break;
			case '19':
				townString = "г.Вуктыла";
				break;
			case '20':
				townString = "г.Усинска";
				break;
			case '21':
				townString = "г.Сосногорска";
				break;
		}
		
		return townString;
	}
	
	//var order = new OrderPlugin();
	
	var token = (Math.random().toString(36)+'00000000000000000').slice(2, 5+2).toUpperCase() + $.now();
	var documentsAreSent = false;
	
	var files;
	var fileApply;
	
	$('#next1').on('click', function(){
		$('.sav2-first-form').fadeOut(200, 
								   function(){ 
									$('.sav2-second-form').fadeIn(200); 
								   });
		$('html, body').animate({scrollTop: 0}, 500);
	});
	
	$('#back2').on('click', function(){
		$('.sav2-second-form').fadeOut(200, 
								   function(){ 
									$('.sav2-first-form').fadeIn(200); 
								   });
		$('html, body').animate({scrollTop: 0}, 500);
	});
	
	$('#next2').on('click', function(){
		$('.sav2-second-form').fadeOut(200, 
								   function(){ 
									$('.sav2-third-form').fadeIn(200); 
								   });
		$('html, body').animate({scrollTop: 0}, 500);
	});
	
	$('#back3').on('click', function(){
		$('.sav2-third-form').fadeOut(200, 
								   function(){ 
									$('.sav2-second-form').fadeIn(200); 
								   });
		$('html, body').animate({scrollTop: 0}, 500);
	});
	
	$('#next3').on('click', function(){
		$('.sav2-third-form').fadeOut(200, 
								   function(){ 
									$('.sav2-fourth-form').fadeIn(200); 
								   });
		$('html, body').animate({scrollTop: 0}, 500);
	});
	
	$('#back4').on('click', function(){
		$('.sav2-fourth-form').fadeOut(200, 
								   function(){ 
									$('.sav2-third-form').fadeIn(200); 
								   });
		$('html, body').animate({scrollTop: 0}, 500);
	});
	
	$('#next4').on('click', function(){
		$('.sav2-fourth-form').fadeOut(200, 
								   function(){ 
									$('.sav2-fifth-form').fadeIn(200); 
								   });
		$('html, body').animate({scrollTop: 0}, 500);
	});
	
	$('#back5').on('click', function(){
		$('.sav2-fifth-form').fadeOut(200, 
								   function(){ 
									$('.sav2-fourth-form').fadeIn(200); 
								   });
		$('html, body').animate({scrollTop: 0}, 500);
	});
	
	$('#next5').on('click', function(){
		$('.sav2-fifth-form').fadeOut(200, 
								   function(){ 
									$('.sav2-sixth-form').fadeIn(200); 
								   });
		$('html, body').animate({scrollTop: 0}, 500);
	});
	
	$('#back6').on('click', function(){
		$('.sav2-sixth-form').fadeOut(200, 
								   function(){ 
									$('.sav2-fifth-form').fadeIn(200); 
								   });
		documentsAreSent = false;
		$('html, body').animate({scrollTop: 0}, 500);
	});
	
	$('#notice-agreement-2-town').html( $('#org-town option:selected').text() );
	
	$('#org-town').on('change', function(){ 
		$('#notice-agreement-2-town').html( $('#org-town option:selected').text() ); 
	});
	
	$('#payment-method').val('1');
	
	$('#payment-method').on('change', function(){ 
		switch($(this).val())
		{
			case '1':
				//alert('one');
				if (typeof $('.postal-data').attr('style') !== typeof undefined 
					&& 
					$('.postal-data').attr('style') !== false)
				{
					// Element has this attribute
					$('.postal-data').removeAttr('style');
				}
				
				if (typeof $('.fincred-data').attr('style') !== typeof undefined 
					&& 
					$('.fincred-data').attr('style') !== false)
				{
					// Element has this attribute
					$('.fincred-data').removeAttr('style');
				}
				$('#postal-index').val('');
				break;
			case '2':
				//alert('two');
				$('.fincred-data').css({'display':'none'});
				$('.postal-data').css({'display':'block'});
				$('#fincred-name-org').val('');
				$('#fincred-otdel-num').val('');
				$('#fincred-filial-num').val('');
				$('#fincred-account-num').val('');
				break;
			case '3':
				//alert('three');
				$('.fincred-data').css({'display':'none'});
				$('.postal-data').css({'display':'none'});
				$('#fincred-name-org').val('');
				$('#fincred-otdel-num').val('');
				$('#fincred-filial-num').val('');
				$('#fincred-account-num').val('');
				$('#postal-index').val('');
				break;
		}
	});
	
	$('#add-family-member').on('click', function(){
		
		var factoryString = '<div class="row famstuff-row">' +
								'<div class="col-md-3 col-sm-3 col-xs-3">' +
									'<div class="form-group">' +
									  '<label for="fam-staff-fio">Ф.И.О.</label>' +
									  '<input type="text" class="form-control" id="fam-staff-fio"></input>' +
									'</div>' +
								'</div>' +
								'<div class="col-md-2 col-sm-2 col-xs-2">' +
									'<div class="form-group">' +
									  '<label for="fam-staff-birthdate">Дата:</label>' +
									  '<input type="text" class="form-control" id="fam-staff-birthdate"></input>' +
									'</div>' +
								'</div>' +
								'<div class="col-md-2 col-sm-2 col-xs-2">' +
									'<div class="form-group">' +
									  '<label for="fam-staff-iddoc">документ:</label>' +
									  '<input type="text" class="form-control" id="fam-staff-iddoc"></input>' +
									'</div>' +
								'</div>' +
								'<div class="col-md-2 col-sm-2 col-xs-2">' +
									'<div class="form-group">' +
									  '<label for="fam-staff-relation">отношение:</label>' +
									  '<input type="text" class="form-control" id="fam-staff-relation"></input>' +
									'</div>' +
								'</div>' +
								'<div class="col-md-3 col-sm-3 col-xs-3">' +
									'<div class="form-group">' +
									  '<label for="fam-staff-category">категория:</label>' +
									  '<input type="text" class="form-control" id="fam-staff-category"></input>' +
									'</div>' +
								'</div>' +
							'</div>';
		
		
		$('.famstuff').append(factoryString);
	});
	
	$('#remove-family-member').on('click', function(){
		$('.famstuff .famstuff-row').last().remove();
	});
	
	$('#hold-house').on('change', function(){
		if( $(this).is(':checked') ){
			$('#hold-house-purchaseyear').removeAttr('disabled');
		}
		else{
			$('#hold-house-purchaseyear').attr('disabled', '');
			$('#hold-house-purchaseyear').val('');
		}
	});
	
	$('#hold-garden').on('change', function(){
		if( $(this).is(':checked') ){
			$('#hold-garden-square').removeAttr('disabled');
		}
		else{
			$('#hold-garden-square').attr('disabled', '');
			$('#hold-garden-square').val('');
		}
	});
	
	$('#hold-car').on('change', function(){
		if( $(this).is(':checked') ){
			$('#hold-car-mark').removeAttr('disabled');
			$('#hold-car-releaseyear').removeAttr('disabled');
			$('#hold-car-purchaseyear').removeAttr('disabled');
		}
		else{
			$('#hold-car-mark').attr('disabled', '');
			$('#hold-car-mark').val('');
			$('#hold-car-releaseyear').attr('disabled', '');
			$('#hold-car-releaseyear').val('');
			$('#hold-car-purchaseyear').attr('disabled', '');
			$('#hold-car-purchaseyear').val('');
		}
	});
	
	$('#add-another-hold').on('click', function(){
		
		var factoryString = '<div class="row another-hold-row">' +
								'<div class="col-md-3 col-sm-3 col-xs-3">' +
									'<div class="form-group">' +
									  '<label for="another-hold-name">Наименование</label>' +
									  '<input type="text" class="form-control" id="another-hold-name"></input>' +
									'</div>' +
								'</div>' +
								'<div class="col-md-2 col-sm-2 col-xs-2">' +
									'<div class="form-group">' +
									  '<label for="another-hold-square">Кол-во соток:</label>' +
									  '<input type="text" class="form-control" id="another-hold-square"></input>' +
									'</div>' +
								'</div>' +
								'<div class="col-md-3 col-sm-3 col-xs-3">' +
									'<div class="form-group">' +
									  '<label for="another-hold-mark">Марка:</label>' +
									  '<input type="text" class="form-control" id="another-hold-mark"></input>' +
									'</div>' +
								'</div>' +
								'<div class="col-md-2 col-sm-2 col-xs-2">' +
									'<div class="form-group">' +
									  '<label for="another-hold-releaseyear">Год выпуска:</label>' +
									  '<input type="text" class="form-control" id="another-hold-releaseyear"></input>' +
									'</div>' +
								'</div>' +
								'<div class="col-md-2 col-sm-2 col-xs-2">' +
									'<div class="form-group">' +
									  '<label for="another-hold-purchaseyear">Год приобретения:</label>' +
									  '<input type="text" class="form-control" id="another-hold-purchaseyear"></input>' +
									'</div>' +
								'</div>' +
							'</div>';
		
		
		$('.another-hold').append(factoryString);
	});
	
	$('#remove-another-hold').on('click', function(){
		$('.another-hold .another-hold-row').last().remove();
	});
	
	$('#soc-pay-another').on('change', function(){
		if( $(this).is(':checked') ){
			$('#soc-pay-another-info').removeAttr('disabled');
		}
		else{
			$('#soc-pay-another-info').attr('disabled', '');
			$('#soc-pay-another-info').val('');
		}
	});
	
	$('#notice-agreement-1').on('change', function(){
		if( $(this).is(':checked') ){
			$('#notice-agreement-1-info').removeAttr('disabled');
		}
		else{
			$('#notice-agreement-1-info').attr('disabled', '');
			$('#notice-agreement-1-info').val('');
		}
	});
	
	$('#add-pinned-doc').on('click', function(){
		
		var factoryString = '<div class="row pinned-docs-row">' +
								'<div class="col-md-8 col-sm-8 col-xs-8">' +
									'<div class="form-group">' +
									  '<label for="pinned-doc-name">Наименование:</label>' +
									  '<input type="text" class="form-control" id="pinned-doc-name"></input>' +
									'</div>' +
								'</div>' +
								'<div class="col-md-2 col-sm-2 col-xs-2">' +
									'<div class="form-group">' +
									  '<label for="pinned-doc-amount">Кол-во:</label>' +
									  '<input type="text" class="form-control" id="pinned-doc-amount"></input>' +
									'</div>' +
								'</div>' +
							'</div>';
		
		
		$('.pinned-docs').append(factoryString);
	});
	
	$('#remove-pinned-doc').on('click', function(){
		$('.pinned-docs .pinned-docs-row').last().remove();
	});
	
	// Вешаем функцию на событие
	// Получим данные файлов и добавим их в переменную
	 
	$('.pin_archive').change(function(){
		if(this.files.length != 0){
			files = this.files;
		}else{
			files = null;
		}
	});
	
	$('.pin_apply').change(function(){
		if(this.files.length != 0){
			fileApply = this.files;
		}else{
			fileApply = null;
		}
	});
	
	// Вешаем функцию ан событие click и отправляем AJAX запрос с данными файлов
 
	$('#send6').click(function( event ){
	
	if( (files != null) && (fileApply != null) )
	{		
		if(!documentsAreSent){
			event.stopPropagation(); // Остановка происходящего
			event.preventDefault();  // Полная остановка происходящего
			
			documentsAreSent = true;
		 
			// Создадим данные формы и добавим в них данные файлов из files
		 
			var data = new FormData();
			$.each( files, function( key, value ){
				if( value.size < 10485760 ) // 10 MB (this size is in bytes)
				{
					data.append( key, value );
				}
			});
		 
			// Отправляем запрос
		 
			$.ajax({
				url: 'php/backend.php?uploadfiles='+token,
				type: 'POST',
				data: data,
				cache: false,
				dataType: 'json',
				processData: false, // Не обрабатываем файлы (Don't process the files)
				contentType: false, // Так jQuery скажет серверу что это строковой запрос
				success: function( respond, textStatus, jqXHR ){
		 
					// Если все ОК
		 
					if( typeof respond.error === 'undefined' ){
						// Файлы успешно загружены, делаем что нибудь здесь
		 
						// выведем пути к загруженным файлам в блок '.ajax-respond'
		 
						var respond_status = respond.status;
						$('.ajax-respond').html( '<div class="respond-status">'+respond_status+'</div>' );
					}
					else{
						var error_status = respond.error;
						$('.ajax-respond').html( '<div class="error-status">'+error_status+'</div>' );
						console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
					}
				},
				error: function( jqXHR, textStatus, errorThrown ){
					console.log('ОШИБКИ AJAX запроса: ' + textStatus );
				}
			});
		 
			//2
			var data = new FormData();
			$.each( fileApply, function( key, value ){
				if( value.size < 10485760 ) // 10 MB (this size is in bytes)
				{
					data.append( key, value );
				}
			});

			$.ajax({
				url: 'php/backend.php?uploadapply='+token,
				type: 'POST',
				data: data,
				cache: false,
				dataType: 'json',
				processData: false, // Не обрабатываем файлы (Don't process the files)
				contentType: false, // Так jQuery скажет серверу что это строковой запрос
				success: function( respond, textStatus, jqXHR ){
		 
					// Если все ОК
		 
					if( typeof respond.error === 'undefined' ){
						// Файлы успешно загружены, делаем что нибудь здесь
		 
						// выведем пути к загруженным файлам в блок '.ajax-respond'
		 
						var respond_status = respond.status;
						$('.ajax-respond-apply').html( '<div class="respond-status">'+respond_status+'</div>' );
					}
					else{
						var error_status = respond.error;
						$('.ajax-respond-apply').html( '<div class="error-status">'+error_status+'</div>' );
						console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
					}
				},
				error: function( jqXHR, textStatus, errorThrown ){
					console.log('ОШИБКИ AJAX запроса: ' + textStatus );
				}
			});
		}
		else{
			alert("Заявление уже отправлено!");
		}
	}
	else
	{
		alert("Прикрепите архив и заявление!");
	}
	});
	
	$('#get-pdf').click(function(){
		var preparedString = '';
		
		preparedString += '{';
		
		preparedString += '"org-town" : "'+ getOrgTownVal( $('#org-town').val() ) +'",';
		preparedString += '"customer-fio" : "'+ $('#customer-fio').val() +'",';
		preparedString += '"customer-dwelling" : "'+ $('#customer-dwelling').val() +'",';
		preparedString += '"customer-id-doc-name" : "'+ $('#customer-id-doc-name').val() +'",';
		preparedString += '"customer-id-doc-vol" : "'+ $('#customer-id-doc-vol').val() +'",';
		preparedString += '"customer-id-doc-num" : "'+ $('#customer-id-doc-num').val() +'",';
		preparedString += '"customer-id-doc-givenbywhom" : "'+ $('#customer-id-doc-givenbywhom').val() +'",';
		preparedString += '"customer-id-doc-givendate" : "'+ $('#customer-id-doc-givendate').val() +'",';
		preparedString += '"customer-birthdate" : "'+ $('#customer-birthdate').val() +'",';
		preparedString += '"customer-phonenum" : "'+ $('#customer-phonenum').val() +'",';
		preparedString += '"delegate-fio" : "'+ $('#delegate-fio').val() +'",';
		preparedString += '"delegate-dwelling" : "'+ $('#delegate-dwelling').val() +'",';
		preparedString += '"delegate-phonenum" : "'+ $('#delegate-phonenum').val() +'",';
		preparedString += '"delegate-id-doc-name" : "'+ $('#delegate-id-doc-name').val() +'",';
		preparedString += '"delegate-id-doc-vol" : "'+ $('#delegate-id-doc-vol').val() +'",';
		preparedString += '"delegate-id-doc-num" : "'+ $('#delegate-id-doc-num').val() +'",';
		preparedString += '"delegate-id-doc-givenbywhom" : "'+ $('#delegate-id-doc-givenbywhom').val() +'",';
		preparedString += '"delegate-id-doc-givendate" : "'+ $('#delegate-id-doc-givendate').val() +'",';
		preparedString += '"delegate-birthdate" : "'+ $('#delegate-birthdate').val() +'",';
		preparedString += '"delegate-birthplace" : "'+ $('#delegate-birthplace').val() +'",';
		preparedString += '"delegate-priv-doc-name" : "'+ $('#delegate-priv-doc-name').val() +'",';
		preparedString += '"delegate-priv-doc-givenbywhom" : "'+ $('#delegate-priv-doc-givenbywhom').val() +'",';
		preparedString += '"delegate-priv-doc-num" : "'+ $('#delegate-priv-doc-num').val() +'",';
		preparedString += '"delegate-priv-doc-givendate" : "'+ $('#delegate-priv-doc-givendate').val() +'",';
		preparedString += '"benefit1" : '+ $('#benefit1').prop('checked') +',';
		preparedString += '"benefit2" : '+ $('#benefit2').prop('checked') +','; 
		preparedString += '"benefit3" : '+ $('#benefit3').prop('checked') +','; 
		preparedString += '"benefit4" : '+ $('#benefit4').prop('checked') +','; 
		preparedString += '"benefit5" : '+ $('#benefit5').prop('checked') +','; 
		preparedString += '"benefit6" : '+ $('#benefit6').prop('checked') +','; 
		preparedString += '"benefit7" : '+ $('#benefit7').prop('checked') +','; 
		preparedString += '"benefit8" : '+ $('#benefit8').prop('checked') +','; 
		preparedString += '"payment-method" : "'+ $('#payment-method').val() +'",';
		preparedString += '"fincred-name-org" : "'+ $('#fincred-name-org').val() +'",';
		preparedString += '"fincred-otdel-num" : "'+ $('#fincred-otdel-num').val() +'",';
		preparedString += '"fincred-filial-num" : "'+ $('#fincred-filial-num').val() +'",';
		preparedString += '"fincred-account-num" : "'+ $('#fincred-account-num').val() +'",';
		preparedString += '"postal-index" : "'+ $('#postal-index').val() +'",';
		
		if( $('.famstuff-row').length == 0 )
		{
			preparedString += '"famstuff" : [],';
		}
		else
		{
			preparedString += '"famstuff" : [ ';
			$('.famstuff-row').each(function(index, element){
				if(index === $('.famstuff-row').length-1){
					preparedString += '["'+ $(element).find('#fam-staff-fio').val() +'", "'+ $(element).find('#fam-staff-birthdate').val() +'", "'+ $(element).find('#fam-staff-iddoc').val() +'", "'+ $(element).find('#fam-staff-relation').val() +'", "'+ $(element).find('#fam-staff-category').val() +'"]';
				}
				else{
					preparedString += '["'+ $(element).find('#fam-staff-fio').val() +'", "'+ $(element).find('#fam-staff-birthdate').val() +'", "'+ $(element).find('#fam-staff-iddoc').val() +'", "'+ $(element).find('#fam-staff-relation').val() +'", "'+ $(element).find('#fam-staff-category').val() +'"],';
				}
			});
			preparedString += ' ],';
		}
		
		preparedString += '"hold-house" : ['+ $('#hold-house').prop('checked') +', "'+ $('#hold-house-purchaseyear').val() +'"],';
		preparedString += '"hold-garden" : ['+ $('#hold-garden').prop('checked') +', "'+ $('#hold-garden-square').val() +'"],';
		preparedString += '"hold-land" : '+ $('#hold-land').prop('checked') +',';
		preparedString += '"hold-car" : ['+ $('#hold-car').prop('checked') +', "'+ $('#hold-car-mark').val() +'", "'+ $('#hold-car-releaseyear').val() +'" , "'+ $('#hold-car-purchaseyear').val() +'"],';
		
		if( $('.another-hold-row').length == 0 )
		{
			preparedString += '"another-hold" : [],';
		}
		else
		{
			preparedString += '"another-hold" : [ ';
			$('.another-hold-row').each(function(index, element){
				if(index === $('.another-hold-row').length-1){
					preparedString += '["'+ $(element).find('#another-hold-name').val() +'", "'+ $(element).find('#another-hold-square').val() +'", "'+ $(element).find('#another-hold-mark').val() +'", "'+ $(element).find('#another-hold-releaseyear').val() +'", "'+ $(element).find('#another-hold-purchaseyear').val() +'"]';
				}
				else{
					preparedString += '["'+ $(element).find('#another-hold-name').val() +'", "'+ $(element).find('#another-hold-square').val() +'", "'+ $(element).find('#another-hold-mark').val() +'", "'+ $(element).find('#another-hold-releaseyear').val() +'", "'+ $(element).find('#another-hold-purchaseyear').val() +'"],';
				}
			});
			preparedString += ' ],';
		}
		
		preparedString += '"soc-pay-baby1" : '+ $('#soc-pay-baby1').prop('checked') +',';
		preparedString += '"soc-pay-baby2" : '+ $('#soc-pay-baby2').prop('checked') +',';
		preparedString += '"soc-pay-pubserv1" : '+ $('#soc-pay-pubserv1').prop('checked') +',';
		preparedString += '"soc-pay-pubserv2" : '+ $('#soc-pay-pubserv2').prop('checked') +',';
		preparedString += '"soc-pay-solidfuel" : '+ $('#soc-pay-solidfuel').prop('checked') +',';
		preparedString += '"soc-pay-another" : '+ $('#soc-pay-another').prop('checked') +',';
		preparedString += '"soc-pay-another-info" : "'+ $('#soc-pay-another-info').val() +'",';
		preparedString += '"notice-agreement-1" : '+ $('#notice-agreement-1').prop('checked') +',';
		preparedString += '"notice-agreement-1-info" : "'+ $('#notice-agreement-1-info').val() +'",';
		preparedString += '"notice-agreement-2" : '+ $('#notice-agreement-2').prop('checked') +',';
		preparedString += '"notice-agreement-3" : '+ $('#notice-agreement-3').prop('checked') +',';
		
		if( $('.pinned-docs-row').length == 0 )
		{
			preparedString += '"pinned-docs" : [],';
		}
		else
		{
			preparedString += '"pinned-docs" : [ ';
			$('.pinned-docs-row').each(function(index, element){
				if(index === $('.pinned-docs-row').length-1){
					preparedString += '["'+ $(element).find('#pinned-doc-name').val() +'", "'+ $(element).find('#pinned-doc-amount').val() +'"]';
				}
				else{
					preparedString += '["'+ $(element).find('#pinned-doc-name').val() +'", "'+ $(element).find('#pinned-doc-amount').val() +'"],';
				}
			});
			preparedString += ' ]';
		}
		
		preparedString += '}';
		
		//alert( preparedString );
		$.ajax({
				type: "POST",
				url:  "php/pdf.php",
				data: {
						'jsonstring': preparedString
					  },
				dataType: "text",
				timeout: 5000,
				//success: function(message){ setData(message); },
				//success: function(message){ $('#debug-field').html(message); },
				success: function(message){ window.open("php/pdf.php?getpdf", '_blank'); },
				error: function(){ alert('service is unavailable'); }
	
		});
		
	});
});
