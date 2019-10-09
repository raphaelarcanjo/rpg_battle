<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
  {
      parent::__construct();
  }

	public function index()
	{
		$indice = 0;
		$turnos = array();

		$personagens = array('humano','orc');

		$personagens['humano'] = array(
			'pv' => 12,
			'for' => 1,
			'agi' => 2,
			'arma' => 'espada_longa'
		);

		$personagens['orc'] = array(
			'pv' => 20,
			'for' => 2,
			'agi' => 0,
			'arma' => 'clava_madeira'
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

		while($o_pv > 0 or $h_pv > 0){
			if($h_iniciativa > $o_iniciativa){
				$turno[$indice]['ataque'] = rand(1,20) + $personagens['humano']['agi'] + $armas[$personagens['humano']['arma']]['atq'];
				$turno[$indice]['defesa'] = rand(1,20) + $personagens['orc']['agi'] + $armas[$personagens['orc']['arma']]['def'];

				if($turno[$indice]['ataque'] - $turno[$indice]['defesa'] > 0){
					$turno[$indice]['dano'] = $armas[$personagens['humano']['arma']]['dano'] + $personagens['humano']['for'];
					$o_pv -= $turno[$indice]['dano'];
				}
				else $turno[$indice]['dano'] = 0;

				$turno[$indice]['o_pv'] = $o_pv;
				$turno[$indice]['h_pv'] = $h_pv;
				$indice++;

				$turno[$indice]['ataque'] = rand(1,20) + $personagens['orc']['agi'] + $armas[$personagens['orc']['arma']]['atq'];
				$turno[$indice]['defesa'] = rand(1,20) + $personagens['humano']['agi'] + $armas[$personagens['humano']['arma']]['def'];

				if($turno[$indice]['ataque'] - $turno[$indice]['defesa'] > 0){
					$turno[$indice]['dano'] = $armas[$personagens['orc']['arma']]['dano'] + $personagens['orc']['for'];
					$h_pv -= $turno[$indice]['dano'];
				}
				else $turno[$indice]['dano'] = 0;

				$turno[$indice]['o_pv'] = $o_pv;
				$turno[$indice]['h_pv'] = $h_pv;
				$indice++;
			}

			if($o_iniciativa > $h_iniciativa){
				$turno[$indice]['ataque'] = rand(1,20) + $personagens['orc']['agi'] + $armas[$personagens['orc']['arma']]['atq'];
				$turno[$indice]['defesa'] = rand(1,20) + $personagens['humano']['agi'] + $armas[$personagens['humano']['arma']]['def'];

				if($turno[$indice]['ataque'] - $turno[$indice]['defesa'] > 0){
					$turno[$indice]['dano'] = $armas[$personagens['orc']['arma']]['dano'] + $personagens['orc']['for'];
					$h_pv -= $turno[$indice]['dano'];
				}
				else $turno[$indice]['dano'] = 0;

				$turno[$indice]['o_pv'] = $o_pv;
				$turno[$indice]['h_pv'] = $h_pv;
				$indice++;

				$turno[$indice]['ataque'] = rand(1,20) + $personagens['humano']['agi'] + $armas[$personagens['humano']['arma']]['atq'];
				$turno[$indice]['defesa'] = rand(1,20) + $personagens['orc']['agi'] + $armas[$personagens['orc']['arma']]['def'];

				if($turno[$indice]['ataque'] - $turno[$indice]['defesa'] > 0){
					$turno[$indice]['dano'] = $armas[$personagens['humano']['arma']]['dano'] + $personagens['humano']['for'];
					$o_pv -= $turno[$indice]['dano'];
				}
				else $turno[$indice]['dano'] = 0;

				$turno[$indice]['o_pv'] = $o_pv;
				$turno[$indice]['h_pv'] = $h_pv;
				$indice++;
			}
			if($o_pv <= 0 or $h_pv <= 0) break;
		}

		$data['turno'] = $turno;
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
