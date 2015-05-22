<?php 

if ( !empty($_POST['name-form']) && !empty($_POST['phone-form']) ){
    $theme = 'Хочу такой';
    $body = $_POST['name-form'].'  '.$_POST['phone-form'].'  '.$_POST['color-form'];
    mail("plonina777@gmail.com", $theme, $body);

    echo '<script type="text/javascript">'; 
	echo 'window.location.href="http://monopodbuy.ru";'; 
	echo '</script>';
}

if ( !empty($_POST['name-call']) && !empty($_POST['phone-call']) ){
    $theme = 'Заказ звонка';
    $body = $_POST['name-call'].'  '.$_POST['phone-call'];
    mail("plonina777@gmail.com", $theme, $body);

	echo '<script type="text/javascript">'; 
	echo 'window.location.href="http://monopodbuy.ru";'; 
	echo '</script>';

}

if ( !empty($_POST['name-comment']) && !empty($_POST['phone-comment']) ){
    $theme = 'Есть вопрос';
    $body = $_POST['name-comment'].'  '.$_POST['phone-comment'].'  '.$_POST['comment'];
    mail("plonina777@gmail.com", $theme, $body);

    echo '<script type="text/javascript">'; 
	echo 'window.location.href="http://monopodbuy.ru";'; 
	echo '</script>';
}

	echo '<script type="text/javascript">'; 
	echo 'window.location.href="http://monopodbuy.ru";'; 
	echo '</script>';

?>