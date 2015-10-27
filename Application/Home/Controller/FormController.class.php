<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{
	public function _empty(){
		echo "Erorr Page";
	}
	public function index(){

	}
	public function insert(){
		$Form = D('Form1');
		if($Form->create()){
			$result = $Form->add();
			if($result){
				$this->success('数据添加成功!');
			}else{
				$this->error('数据添加错误!');
			}
		}else{
			$this->error($Form->getError);
		}
	}

	//从数据库读入数据
	public function read($id=0){
		$Form = M('Form1');
		//读取数据
		$data = $Form->find($id);
		if($data){
			$this->assign('data',$data);	//模板变量赋值
		}else{
			$this->error('数据错误');
		}
		$this->display();
	}

	public function edit($id=0){
		$Form = M('Form1');
		//找到主键为$ID的列
		$this -> assign('vo',$Form->find($id));
		$this -> display();
	}

	public function update(){
		$Form = D('Form1');

		if($Form->create()){
			$result = $Form->save();
			if($result){
				$this->success('操作成功！');
	        }else{
	            $this->error('写入错误！');
	        }
		}else{
        $this->error($Form->getError());
   		}
	}

}