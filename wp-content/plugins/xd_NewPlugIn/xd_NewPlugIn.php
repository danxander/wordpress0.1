<?php
	/*
	Plugin Name: xd_NewPlulgIn
	Plugin URI: http//www.xanderdann.com
	Description: Pintar formulario
	Author: XanderDann
	Version: 0.1
	Author URI: http//www.xanderdann.com
	Licence: GPL2
	*/
add_action("init","xd_ShortCode");
add_action('wp_enqueue_scripts', 'xd_StyleCSS');
add_action('wp_enqueue_scripts', 'xd_mainJS');

/*Agrega estilos personales CSS*/
if (!function_exists("xd_StyleCSS")) {
	
	function xd_StyleCSS() {
    
        wp_enqueue_style('style', get_template_directory_uri().'/../../../wp-admin/css/xd_CSS/style.css');
    
	}
}

/*Agrega scripts personales JS*/
if (!function_exists("xd_mainJS")) {
	
	function xd_mainJS() {
    
        wp_enqueue_script('script', get_template_directory_uri().'/../../../wp-admin/js/xd_JS/main.js');
    
	}
}


/*Inicializa la funcion para el shortcode*/
if (!function_exists("xd_ShortCode")) {
	
	function xd_ShortCode(){
		add_shortcode("form","CodigoCorto");
		
	}
}

/*Funcion con el contenido del shortcode*/
if (!function_exists("CodigoCorto")) {
	
	function CodigoCorto($args, $content){
		return "<form action='' method='post'>
      
        <h1>FORMULARIO</h1>
        
        <fieldset>
          <legend><span class='number'>1</span>Informaci&oacute;n b&aacute;sica</legend>
          <label for='name'>Nombre:</label>
          <input type='text' id='name' name='user_name'>
          
          <label for='mail'>Email:</label>
          <input type='email' id='mail' name='user_email'>
          
          <label for='password'>Contraseña:</label>
          <input type='password' id='password' name='user_password'>
          
          <label>Edad:</label>
          <input type='radio' id='under_13' value='under_13' name='user_age'><label for='under_13' class='light'>Menor de 13</label><br>
          <input type='radio' id='over_13' value='over_13' name='user_age'><label for='over_13' class='light'>13 o mas</label>
        </fieldset>
        
        <fieldset>
          <legend><span class='number'>2</span>T&uacute; Perfil</legend>
          <label for='bio'>Biograf&iacute;a:</label>
          <textarea id='bio' name='user_bio'></textarea>
        </fieldset>
        <fieldset>
        <label for='job'>Trabajo:</label>
        <select id='job' name='user_job'>
          <optgroup label='Web'>
            <option value='frontend_developer'>Front-End Developer</option>
            <option value='php_developor'>PHP Developer</option>
            <option value='python_developer'>Python Developer</option>
            <option value='rails_developer'> Rails Developer</option>
            <option value='web_designer'>Web Designer</option>
            <option value='WordPress_developer'>WordPress Developer</option>
          </optgroup>
          <optgroup label='Mobile'>
            <option value='Android_developer'>Androild Developer</option>
            <option value='iOS_developer'>iOS Developer</option>
            <option value='mobile_designer'>Mobile Designer</option>
          </optgroup>
          <optgroup label='Business'>
            <option value='business_owner'>Business Owner</option>
            <option value='freelancer'>Freelancer</option>
          </optgroup>
          <optgroup label='Other'>
            <option value='secretary'>Secretary</option>
            <option value='maintenance'>Maintenance</option>
          </optgroup>
        </select>
        
          <label>Intereses:</label>
          <input type='checkbox' id='development' value='interest_development' name='user_interest'><label class='light' for='development'>Desarrollo</label><br>
            <input type='checkbox' id='design' value='interest_design' name='user_interest'><label class='light' for='design'>Diseño</label><br>
          <input type='checkbox' id='business' value='interest_business' name='user_interest'><label class='light' for='business'>Negocios</label>
        
        </fieldset>
        <button type='submit'>REGISTRAR</button>
      </form>";
		
	}
}




?>