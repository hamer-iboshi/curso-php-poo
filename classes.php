<?php

class Membro{
	private $nome;
	private $dataEntrou;
	private $cargo;
	private $GRR;
	private $curso;

	public function __construct($nome, $dataEntrou, $cargo, $GRR, $curso){
		$this->nome = $nome;
		$this->dataEntrou = $dataEntrou;
		$this->cargo = $cargo;
		$this->GRR = $GRR;
		$this->curso = $curso;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setData($dataEntrou){
		$this->dataEntrou = $dataEntrou;
	}

	public function getData(){
		return $this->dataEntrou;
	}

	public function setCargo($cargo){
		$this->cargo = $cargo;
	}

	public function getCargo(){
		return $this->cargo;
	}

	public function setGRR($GRR){
		$this->GRR = $GRR;
	}

	public function getGRR(){
		return $this->GRR;
	}

	public function setCurso($curso){
		$this->curso = $curso;
	}

	public function getCurso(){
		return $this->curso;
	}
	 
	public function printaMembros(){
		echo "\t".$this->nome . "\n";
  	}
}

class Curso extends Membro{
	private $titulo;
	private $data;
	private $instrutor;
	private $presentes;
	 
	public function __construct($titulo, $data, $instrutor, $presentes){
		$this->titulo = $titulo;
		$this->data = $data;
		$this->instrutor= $instrutor;
		$this->presentes = $presentes;
	}
	 
	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	 
	public function getTitulo(){
		return $this->titulo;
	}
	 
	public function setData($data){
		$this->data = $data;
	}

	public function getData(){
		return $this->data;
	}
	 
	public function setInstrutor($instrutor){
		$this->instrutor = $instrutor;
	}
	 
	public function getInstrutor(){
		return $this->instrutor;
	}
	 
	public function setFrequencia($presentes){
		$this->presentes = $presentes;
	}
	 
	public function getFrequencia(){
		return $this->presentes;
	}
	 
	public function adicionaMembro($membro){
		array_push($this->presentes,$membro);
	}

	public function printaDetalhes(){
		echo "CURSO:\n".$this->titulo."\n";
		echo "DATA:\n".$this->data."\n";
		echo "INSTRUTOR:\n".$this->instrutor."\n";
	}

	public function printaFrequencia(){
		echo "PRESENTES:\n";
		foreach($this->presentes as $membro){
     			$membro->printaMembros();
   		}
	}	
}
