
<?php

function load_config(){
    $CI=& get_instance();

    // Memuat konfigurasi dari database kedalam kofigurasi global CI
    // foreach($CI->model->method model()->mengambil result() as $mau dikasi variabel apa)
    foreach($CI->m_appconfig->get_all()->result() as $app_config){
        $CI->config->set_item($app_config->key,$app_config->value);
    }

    // Seting Konfigurasi timezone CI dengan konfigurasi dari database
    if($CI->config->item('timezone')){
        date_default_timezone_set($CI->config->item('timezone'));
    }
}