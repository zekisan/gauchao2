<?php 

class Time {

    var $id;
	var $nome;
	var $imagem;
	var $pontos;

    //construtor
    function __construct($id, $nome, $imagem)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->imagem = $imagem;
        $this->pontos = 0;
    }

	//setters
    public function setId($id)
    {
        $this->id = $id;
    }

	public function setNome($nome)
    {
		$this->nome = $nome;
	}

	public function setImagem($imagem)
    {
		$this->imagem = $imagem;
	}

	public function setPontos($pontos)
    {
		$this->pontos = $pontos;
	}

	//getters
    public function getId()
    {
        return $this->id;
    }

	public function getNome()
    {
		return $this->nome;
	}

	public function getImagem()
    {
		return $this->imagem;
	}

	public function getPontos()
    {
		return $this->imagem;
	}

}

?>