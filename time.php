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
		$this->nome;
	}

	function setImagem($imagem){
		$this->imagem;
	}

	function setPontos($imagem){
		$this->imagem;
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