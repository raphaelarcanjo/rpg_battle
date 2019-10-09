<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
  {
      parent::__construct();
  }

	public function index()
	{
		$personagens = array('humano','orc');
		$personagens['humano'] = array(
			'pv' => 12,
			'for' => 1,
			'agi' => 2
		);
		$personagens['orc'] = array(
			'pv' => 20,
			'for' => 2,
			'agi' => 0
		);
		$armas = array('espada_longa','clava_madeira');
		$armas['espada_longa'] = array(
			'atq' => 2,
			'def' => 1,
			'dano' => rand(1,6)
		);
		$armas['clava_madeira'] = array(
			'atq' => 1,
			'def' => 0,
			'dano' => rand(1,8)
		);
		$data['h_iniciativa'] = rand(1,20) + $personagens['humano']['agi'];
		$data['o_iniciativa'] = rand(1,20) + $personagens['orc']['agi'];
		$data['personagens'] = $personagens;
		$data['armas'] = $armas;
		$data['page_title'] = 'Batalha RPG';
		$this->load->view('home',$data);
	}
}
