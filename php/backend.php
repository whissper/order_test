<?php
 
// Здесь нужно сделать все проверки передаваемых файлов и вывести ошибки если нужно
 
// Переменная ответа
 
$data = array();
 
if( isset( $_GET['uploadfiles'] ) && preg_match('/^[a-zA-Z0-9]+$/', $_GET['uploadfiles']) ){
    $error = false;
    $files = array();
	$token = $_GET['uploadfiles'];
	
    $uploaddir = './uploads/'; // . - текущая папка где находится submit.php
 
    // Создадим папку если её нет
 
    if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );
 
    // переместим файлы из временной директории в указанную
    foreach( $_FILES as $file ){
		if( 'zip' == pathinfo($file['name'], PATHINFO_EXTENSION) )
		{
			if( move_uploaded_file( $file['tmp_name'], $uploaddir . $token . '_' . basename( iconv('UTF-8', 'windows-1251', $file['name']) ) ) ){
				//do nothing
			}
			else{
				$error = true;
			}
		}
		else
		{
			$error = true;
		}
    }
 
    $data = $error ? array('error' => 'Ошибка загрузки файлов.') : array('status' => 'Файлы успешно загружены');
 
    echo json_encode( $data );
}
else if( isset( $_GET['uploadapply'] ) && preg_match('/^[a-zA-Z0-9]+$/', $_GET['uploadapply']) ){
	$error = false;
    $files = array();
	$token = $_GET['uploadapply'];
	
    $uploaddir = './uploads/'; // . - текущая папка где находится submit.php
 
    // Создадим папку если её нет
 
    if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );
 
    // переместим файлы из временной директории в указанную
    foreach( $_FILES as $file ){
		if( 'pdf' == pathinfo($file['name'], PATHINFO_EXTENSION) )
		{
			if( move_uploaded_file( $file['tmp_name'], $uploaddir . $token . '_' . basename( iconv('UTF-8', 'windows-1251', $file['name']) ) ) ){
				//do nothing
			}
			else{
				$error = true;
			}
		}
		else
		{
			$error = true;
		}
    }
 
    $data = $error ? array('error' => 'Ошибка загрузки файлов.') : array('status' => 'Файлы успешно загружены');
 
    echo json_encode( $data );
}
?>
