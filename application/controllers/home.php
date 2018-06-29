<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{
	function __construct() 
    {
    	parent::__construct();
        $this->load->model('Sentiment_Model', '', TRUE);
        $this->load->model('Home_Model', '', TRUE);
        $this->load->model('Research_Model', '', TRUE);
    }

    function data($cat)
    {
        $data['result'] = $this->Home_Model->getAlldata('sentimental_word');
        $data['show_score'] = FALSE;
        $data['cat'] = $cat;
        if($cat == 'sentimental_word')
        {
            $header['value'] = 1;
            $data['thead'] = "<th>Word</th><th>Type</th><th>Value</th>";
        }
        else
        {
            $header['value'] = 2;
            $data['thead'] = "<th>Word</th><th>Type</th><th>Value</th>";
            for($i = 0; $i < count($data['result']); $i++)
            {
                $html = "<p>".$data['result'][$i]['word']."<p><p>".$data['result'][$i]['type']."</p><p>".$data['result'][$i]['value']."</p>";
                //$button = "<a target='_blank' class='btn btn-dark-grey btn-block' href='".$data['result'][$i]['link']."'>Go to link <i class='icon-circle-arrow-right'></i></a>";
                $data['result'] = $html;
            }
        }  
    	$this->load->view('header', $header);
    	$this->load->view('home_data', $data);
    	$this->load->view('footer');
    }

    function view_comment($id)
    {
        $data['result'] = $this->Home_Model->getSpecificData('word_id', 'comment', $id);
        $data['show_score'] = FALSE;
        $data['cat'] = 'sentimental_word';
        $data['thead'] = "<th>Word</th><th>Type</th><th>Value</th>";
        $sum = $this->Home_Model->getDetailedData('sum(value) as vsum', 'word_id', 'comment', $id);
        $data['sum'] = $sum[0];
        if(is_null($data['sum']['vsum']))
            $data['sum']['vsum'] = 0;
        $header['value'] = 3;
        $this->load->view('header', $header);
        $this->load->view('home_data', $data);
        $this->load->view('footer');
    }

    function research($cat)
    {
        if($cat == 'test')
        {
            $header['value'] = 5;
            $data['show_result'] = FALSE;
            $data['cat'] = $cat;
            $this->load->view('header', $header);
            $this->load->view('home_test', $data);
            $this->load->view('footer');
        }
        if($cat == 'start')
        {
            $header['value'] = 4;
            $data['show_graph'] = 0;
            $data['portal_list'] = $this->Home_Model->getPortalList();
            $data['year_list'] = $this->Research_Model->get_year();
            $this->load->view('header', $header);
            $this->load->view('trend_comment', $data);
            $this->load->view('footer');
        }
    }

    function test_method()
    {
        $text = $this->input->post('text_input');
        var_dump($text);
    }

    function trend_news()
    {
        $get_year = $this->Research_Model->get_year();
        $portal_list = $this->Home_Model->getPortalList();
        $i = 0;
        foreach($portal_list as $list)
        {
            $portal_list[$i] = $list['portal_id'];
            $i++;
        }

        for($i = 0; $i < count($get_year); $i++)
        {
            $result[$i] = $this->Research_Model->get_total_news_byYear($get_year[$i], $portal_list);
        }

        $data['thead'] = "<th>Date Pubished</th><th>Title</th><th>Important Words</th><th>Portal</th><th>Link</th><th>Comments</th>";
        $data['result'] = $this->Home_Model->getAlldata('sentimental_word');
        //$data['score'] = json_encode($result);
        $data['axis'] = json_encode($get_year);
        $data['portal_list'] = $this->Home_Model->getPortalList();
        $data['year_list'] = $get_year;
        $data['subtitle'] = 'Results';
        $data['query'] = 'All Portals - No Sentiment - All Year';
        $header['value'] = 6;

        $this->load->view('header', $header);
        $this->load->view('trend_news', $data);
        $this->load->view('footer');
    }

    function test_textmining()
    {
        $header['value'] = 7;
        $data['get_result'] = 0;
        $this->load->view('header', $header);
        $this->load->view('home_textmining', $data);
        $this->load->view('footer');
    }

    function dashboard()
    {
        $header['value'] = 'dashboard';
        $this->load->view('header', $header);
        $this->load->view('home_dashboard');
        $this->load->view('footer');
    }

    function literature()
    {
        $header['value'] = 'literature';
        $this->load->view('header', $header);
        $this->load->view('home_literature');
        $this->load->view('footer');
    }
}