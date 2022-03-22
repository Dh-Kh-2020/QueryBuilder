<?php
require_once ('QueryBuilder.php');

$qb1 = new QueryBuilder();
$qb1 -> table('products')
    -> select('products.id', 'products.name', 'categories.name')
    -> InnerJoin('categories', 'products.category_id', 'categories.id')
    -> fetch();

echo "<hr />";

$qb2 = new QueryBuilder();
$qb2 -> table('products')
    -> select('products.id', 'products.name', 'categories.name')
    -> where('products.id', '>=', ' 3 ')
    -> fetch();
?>