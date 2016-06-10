# php-pagination
Paginação usando PHP

**Exemplo**


```php
require ("Pagination.php");
$pagina = (isset($_GET['pagina']) ? $_GET['pagina'] : 1);					
$urlDaPagina = "http://$_SERVER[HTTP_HOST]/pagination/exemplo.php?pagina="; 
$totalItens = 100;															
$itensPorPagina = 10;														
$urlAmigavel = false;														

$pagination = new Pagination();
$pagination->config('url', $urlDaPagina);
$pagination->config('totalItens', $totalItens);
$pagination->config('currentPage', $pagina);
$pagination->config('itensPerPage', $itensPorPagina);
$pagination->config('friendlyURL', $urlAmigavel);
echo $pagination->create();

```