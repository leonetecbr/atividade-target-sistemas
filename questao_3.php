<?php

$json = file_get_contents(__DIR__ . '/dados.json');
$data = json_decode($json, true);

$values = [];
$days = 0;
$above_average = 0;

foreach ($data as $day){
    // Obtém o faturamento do dia
    $values[] = $day['valor'];
    // Verifica se o faturamento é maior que 0
    if ($day['valor'] > 0) $days++;
}

/**
 * Deixa o número no formato monetário brasileiro
 *
 * @param float|int $value
 * @return string
 */
function currency(float|int $value): string
{
    return number_format($value, '2', ',', '.');
}

$lowerValue = currency(min($values));
$highestValue = currency(max($values));
$average = array_sum($values) / $days;

array_map('is_above_average', $values);

/**
 * Verifica se o faturamento diário foi acima da média
 *
 * @param float $value
 * @return void
 */
function is_above_average(float $value): void
{
    global $average, $above_average;

    if ($value > $average) $above_average++;
}

print_r("O menor faturamento diário foi R$ {$lowerValue}.\n");
print_r("O maior faturamento diário foi R$ {$highestValue}.\n");
print_r("Durante {$above_average} dias o faturamento foi acima da média.\n");
