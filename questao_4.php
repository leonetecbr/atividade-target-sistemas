<?php

$invoicing = [
    [
        'state' => 'SP',
        'value' => 67836.43
    ],[
        'state' => 'RJ',
        'value' => 36678.66
    ],[
        'state' => 'MG',
        'value' => 29229.88
    ],[
        'state' => 'ES',
        'value' => 27165.48
    ],[
        'state' => 'Outros',
        'value' => 19849.53
    ]
];

$values = [];

foreach ($invoicing as $data) $values[] = $data['value'];

$total = array_sum($values);

/**
 * Formata o número no formato basileiro
 *
 * @param int|float $number
 * @return string
 */
function format(int|float $number): string{
    return number_format($number, 2, ',');
}

foreach ($invoicing as $data){
    $percentage = format($data['value'] / $total * 100);
    print "{$data['state']} = {$percentage}%\n";
}