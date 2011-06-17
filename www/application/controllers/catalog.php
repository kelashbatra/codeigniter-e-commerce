<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    
class Catalog extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->helper('file');
        $this->load->library('parser');
   }
	
    public function index() {

        // Получаем список групп товаров
        $query = $this->db->get('product_group');
        $result = $query->result_array();

        // Подготавливаем данные
        $menu = array();
        $content = array();
        $i=0;
        foreach ($result as $group) {

            // Добавляем пути к картинкам групп
            $files = get_filenames('images/catalog/' . $group['id']);
            $result[$i]['images'] = base_url() . 'images/catalog/' . $group['id'] . '/' . $files[0];

            // Формируем меню
            $menu[$i] = array(
                'href' => base_url() . 'catalog/categories/' . $group['id'] . '/',
                'category' => $group['name']
            );
            // Content
            $content[$i] = array(
                'href' => base_url() . 'catalog/categories/' . $group['id'] . '/',
                'img_src' => base_url() . 'images/catalog/' . $group['id'] . '/' . $files[0],
                'category' => $group['name']
            );
            $i++;
        }          

        $data = array(
            'page_title' => 'Page Title',
            'content_view' => 'content_catalog',
            'menu_view' => 'menu_catalog',
            'menu' => $menu,
            'content' => $content
        );

        $this->parser->parse('page', $data);

    //            echo '<pre>';
    //            print_r($data);
    //            echo '</pre>';
    //            $data = array('content_view' => 'menu');
    //            $this->load->view('page', $data);
    }

    public function categories() {

        $query = $this->db->get('product_group');
        $result = $query->result_array();

        echo '<pre>';

        $i = 0;

        foreach ($result as $res) {
            $files = get_filenames('images/catalog/' . $res['id']);
            $result[$i++]['images'] = 'images/catalog/' . $res['id'] . '/' . $files[0];
        }


        print_r($result);

        echo '</pre>';

        $data = array('result' => $result);
        //$this->load->view('page_view',$data);

    }
}

?>