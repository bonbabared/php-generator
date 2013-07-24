<?php
/**
 * 
 * generatorの基本的な使い方
 * yieldの役割について
 * 
 */

// generatorオブジェクト生成
$g = gfunc();

// generatorオブジェクトをforeachでぶん回す
foreach ($g as $x)
{
	var_dump($x);
}

/**
 * generator関数
 * yieldが呼び出される度に1ずつ加算される
 */
function gfunc()
{
	$i = 0;
	yield $i;
	$i++;
	yield $i;
	$i++;
	yield $i;
}
