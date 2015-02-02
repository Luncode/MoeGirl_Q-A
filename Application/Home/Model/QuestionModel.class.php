<?php
namespace Home\Model;
use Think\Model;

Class QuestionModel extends Model{
	// 创建新问题
	public function add_question($get_data){
		// 验证username
		//$cookie_username_token = login_en_code(M('UserLogin')->where('username="%s"',cookie('username'))->getField('random').cookie('username'));
		//if(session('user_status') != 1 && cookie('token') != $cookie_username_token) return false;
		if(!test_user()) return false;

		$get_data['topic']['count'] = count($get_data['topic']);
		if(!$get_data['title'] || !$get_data['topic']['count']) return false;

		$data = array(
			'username' 	=> cookie('username'),
			'title'		=> $get_data['title'],
			'content'	=> $get_data['content'],
			'topic'		=> json_encode($get_data['topic']),
			'anonymous' => $get_data['anonymous'],
			);


		$this->create($data);
		return($this->add());
	}
}