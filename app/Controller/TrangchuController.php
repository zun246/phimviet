<?php
/**
* 
*/
class TrangchuController extends AppController
{
	public $uses=array('Quocgia','Theloai','Phim');
	
	public function index(){
		$quocgia = $this->Quocgia->find('all');
		$phim = $this->Phim->find('all');
		$theloai = $this->Theloai->find('all');

		$this->set('quocgia',$quocgia);
		$this->set('cacphim',$phim);
		$this->set('cactheloai',$theloai);
	}
}
