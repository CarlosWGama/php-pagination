<?php
require ("Pagination.php");
$pagina = (isset($_GET['pagina']) ? $_GET['pagina'] : 1);					//Pagina atual
$urlDaPagina = "http://$_SERVER[HTTP_HOST]/pagination/exemplo.php?pagina="; //URL da página
$totalItens = 100;															//Total de itens independente da página
$itensPorPagina = 10;														//QUantos itens são exibidos por página
$urlAmigavel = false;														//Padrão de URL amigável

$pagination = new Pagination();
$pagination->config('url', $urlDaPagina);
$pagination->config('totalItens', $totalItens);
$pagination->config('currentPage', $pagina);
$pagination->config('itensPerPage', $itensPorPagina);
$pagination->config('friendlyURL', $urlAmigavel);
echo $pagination->create();
