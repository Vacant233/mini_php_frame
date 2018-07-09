<?php
namespace miniphp;

class Controller
{
	//需要使用的view
	public $page = array();

	//页面参数
	public $parameter = array();

	public function __construct()
	{
		//你好我的朋友
	}

	public function page_include($dir)
	{
		$dir = __CONFIG__['absolute_address'] . "app/view/" . $dir;
		array_push($this->page , $dir);
	}

	public function __destruct()
	{
		//渲染视图
		if($this->page != null)
		{
			foreach($this->page as $p)
			{
				include_once($p);
			}
		}
	}
}