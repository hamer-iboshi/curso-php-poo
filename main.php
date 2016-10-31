<?php
require "classes.php"; //inclui o arquivo com classes

$membro1 = new Membro("Laura", "04/09/2016", "Ass. de Projetos", "20163048", "BCC");
$membro2 = new Membro("Gabriele", "04/09/2016", "Assessora de Comunicação", "20152790", "BCC");
$membros = array($membro1, $membro2);

$curso1 = new Curso("PHP e Orientação à objetos", "27/10/2016", "Hamer", $membros);
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
