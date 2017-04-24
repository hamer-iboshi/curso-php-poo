<?php
require "classes.php"; //inclui o arquivo com classes

// -- CURSO DO DIA 22/04/2017

$membros = array(
			new Membro("Bruno Piccoli", "10/04/2017", "Assessor de Projetos", "20173048", "TADS"),
			new Membro("Daniel", "10/04/2017", "Assessor de Negócios", "20173048", "TADS"),
			new Membro("Eduarda", "10/04/2017", "Assessora de Adm-fin", "20173048", "IBM"),
			new Membro("Enzo M", "10/04/2017", "Assessor de Negócios", "20173048", "BCC"),
			new Membro("Fernando S.", "10/04/2017", "Assessor de Projetos", "20161234", "BCC"),
			new Membro("Giulia", "10/04/2017", "Assessora de Negócios", "20173048", "TADS"),
			new Membro("Luiz Cesar", "10/04/2017", "Assessor de Comunica", "20173048", "BCC"),
			new Membro("Lucas S", "10/04/2017", "Assessor de Projetos", "20173048", "BCC"),
			new Membro("Marcelo", "10/04/2017", "Assessor de Projetos", "20163048", "BCC"),
			new Membro("Maria Eduarda", "10/04/2017", "Assessora de DH", "20161234", "BCC"),
			new Membro("Pedro L", "10/04/2017", "Assessor de Qualidade", "20163048", "BCC"),
			new Membro("Thales", "10/04/2017", "Assessor de Qualidade", "20173048", "BCC"),
			new Membro("Luana", "10/04/2017", "Assessora de DH", "20163048", "TADS"),
			new Membro("Milena", "10/04/2016", "Diretora de DH", "20163048", "TADS"),
			new Membro("Wellington", "10/04/2017", "Diretor de Comunica", "20173048", "BCC"),
		);	
$curso2 = new Curso("Orientação à objetos e PHP", "22/04/2017", "Hamer", $membros);
$membro13 =	new Membro("Fernanda B", "10/04/2016", "Assessora de Qualidade", "20163048", "TADS");
$curso2->adicionaMembro($membro13);
$membro14 =	new Membro("Diego", "10/04/2017", "Diretor Presidente", "20153048", "BCC");
$curso2->adicionaMembro($membro14);

$curso2->printaDetalhes();

$curso2->printaFrequencia();

// -- CURSO DO DIA 27/10/2016

$membro1 = new Membro("Laura", "04/09/2016", "Ass. de Projetos", "20163048", "BCC");
$membro2 = new Membro("Gabriele", "04/09/2016", "Assessora de Comunicação", "20152790", "BCC");
$membros = array($membro1, $membro2);

$curso1 = new Curso("Orientação à objetos e PHP", "27/10/2016", "Hamer", $membros);
//instancia objeto membro para cada membro presente
$membro3 = new Membro("Fernando", "04/09/2016", "Assessor de Projetos", "20151234", "BCC");
$curso1->adicionaMembro($membro3);
$membro4 = new Membro("Luana", "04/09/2016", "Assessora de DH", "20161234", "TADS");
$curso1->adicionaMembro($membro4);
$membro5 = new Membro("Fernanda B.", "04/09/2016", "Assessora de DH", "20161234", "TADS");
$curso1->adicionaMembro($membro5);
$membro6 = new Membro("Fernanda C.", "04/09/2016", "Assessora de DH", "20161234", "BCC");
$curso1->adicionaMembro($membro6);
$membro7 = new Membro("Victor", "04/09/2016", "Assessor de Qualidade", "20161234", "BCC");
$curso1->adicionaMembro($membro7);
$membro8 = new Membro("Rebeca", "04/09/2016", "Assessora de Comunicação", "20161234", "TADS");
$curso1->adicionaMembro($membro8);
$membro9 = new Membro("Marlon", "04/09/2016", "Assessor de Projetos", "20161234", "BCC");
$curso1->adicionaMembro($membro9);
$membro10 = new Membro("Eduarda", "04/09/2016", "Assessora de Comunicação", "20161234", "BCC");
$curso1->adicionaMembro($membro10);
$membro11 = new Membro("Guilherme", "04/09/2016", "Assessor de Negócios", "20151234", "BCC");
$curso1->adicionaMembro($membro11);
$membro12 = new Membro("Gabriel", "04/09/2016", "Assessor de Negócios", "20161234", "BCC");
$curso1->adicionaMembro($membro12);
//var_dump($membro1, $membro2); //var_dump eh uma funcao php que exibe o objeto


$curso1->printaDetalhes();

$curso1->printaFrequencia();

?>
