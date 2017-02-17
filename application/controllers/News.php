<?php

/**
 * Created by PhpStorm.
 * User: quoc_trinh
 * Date: 13/12/2016
 * Time: 09:47
 */
class News extends CI_Controller
{
	public function get_news_list()
	{

		$news_list = $this->news_model->getList();
		echo "kaka";
	}
}