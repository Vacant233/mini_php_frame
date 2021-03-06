<?php
namespace controller;

class IndexController extends \miniphp\Controller
{
	public function __construct()
	{
		parent::__construct();

		//加载view
		$this->page_include("Index/header.php");
	}

	public function index()
	{
		$this->parameter['page_name'] = '首页';

		$Safe = new \miniphp\utils\Safe();
		$this->parameter['passwd'] = $Safe->cryptStr('你需要加密的字符串');

		$this->page_include("Index/page/index.php");
	}

	public function register()
	{
		$this->parameter['page_name'] = '注册';

		$this->page_include("Index/page/register.php");
	}

	private function getUserModelConnect()
	{
		//此函数用于获取User表的数据库类实例
		//无需 include 直接 new(自动加载会帮你include)
		return new userModel();
	}

	public function __destruct()
	{
		$this->page_include("Index/footer.php");

		parent::__destruct();
	}
}