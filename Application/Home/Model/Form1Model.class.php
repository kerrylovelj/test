<?php
namespace Home\Model;
use Think\Model;
Class Form1Model extends Model{
	//定义自动验证
	protected $_validate = array(array('titel','require','标题必须'),);
	 protected $_auto    =   array(
        array('create_time','time',1,'function'),
        );
}