<?php 

class Time {

	var $nome;
	var $imagem;
	var $pontos;

	//construtor
	function _construct($nome, $imagem){
		$this->nome = $nome;
		$this->imagem = $imagem;
	}

	//setters
	function setNome($nome){
		$this->nome = $nome;
	}

	function setImagem($imagem){
		$this->imagem = $imagem;
	}

	function setPontos($pontos){
		$this->pontos = $pontos;
	}

	//getters
	function getNome(){
		return $this->nome;
	}

	function getImagem(){
		return $this->imagem;
	}

	function getPontos(){
		return $this->imagem;
	}

}

?>