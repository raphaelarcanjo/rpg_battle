<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
  {
      parent::__construct();
  }

	public function index()
	{
		$turnos = array();

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

		$h_pv = $personagens['humano']['pv'];
		$o_pv = $personagens['orc']['pv'];

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

		$h_iniciativa = 0;
		$o_iniciativa = 0;

		while($h_iniciativa == $o_iniciativa){
			$h_iniciativa = rand(1,20) + $personagens['humano']['agi'];
			$o_iniciativa = rand(1,20) + $personagens['orc']['agi'];
		}

		$data['h_pv'] = $h_pv;
		$data['o_pv'] = $o_pv;
		$data['h_iniciativa'] = $h_iniciativa;
		$data['o_iniciativa'] = $o_iniciativa;
		$data['personagens'] = $personagens;
		$data['armas'] = $armas;
		$data['page_title'] = 'Batalha RPG';
		$this->load->view('home',$data);
	}
}
