<?php

//CURSOS
$cursos = [
    
'SI' => 4,
'CINEMA' => 6,
'DESIGN' => 7,
'MEDICINA' => 10

];

$pesos = [
    'P1' => 1.5,
    'P2' => 2.5,
    'P3' => 3.5
]; 

$sexo = [
    'array_feminino' => [],
    'array_masculino' => []
];


//Dados alunos

$alunos = [

$a1 = [
    'NOME' => 'ROSÉ',
    'IDADE' => 27,
    'SEXO' => 'F',
    'CURSO' => 'SI',
    'SEMESTRE' => 2,
    'TEMPO_FACULDADE' => $cursos['SI'],
    'TEMPO_CONCLUSAO' => $cursos['SI'],
    'NOTA_1' => 6.5,
    'NOTA_2' => 7.0,
    'NOTA_3' => 8.0,
    'MEDIA' => 0
],

$a2 = [
    'NOME' => 'RICHARD',
    'IDADE' => 28,
    'SEXO' => 'M',
    'CURSO' => 'Cinema',
    'SEMESTRE' => 3,
    'TEMPO_FACULDADE' => $cursos['CINEMA'],
    'TEMPO_CONCLUSAO' => $cursos['CINEMA'],
    'NOTA_1' => 2.5,
    'NOTA_2' => 9.0,
    'NOTA_3' => 10,
    'MEDIA' => 0
],

$a3 = [
    'NOME' => 'KAIKE',
    'IDADE' => 27,
    'SEXO' => 'M',
    'CURSO' => 'Design',
    'SEMESTRE' => 4,
    'TEMPO_FACULDADE' => $cursos['DESIGN'],
    'TEMPO_CONCLUSAO' => $cursos['DESIGN'],
    'NOTA_1' => 8.0,
    'NOTA_2' => 3.5,
    'NOTA_3' => 7.0,
    'MEDIA' => 0
],

$a4 = [
    'NOME' => 'JISOO',
    'IDADE' => 29,
    'SEXO' => 'F',
    'CURSO' => 'Medicina',
    'SEMESTRE' => 6,
    'TEMPO_FACULDADE' => $cursos['MEDICINA'],
    'TEMPO_CONCLUSAO' => $cursos['MEDICINA'],
    'NOTA_1' => 7.5,
    'NOTA_2' => 8.5,
    'NOTA_3' => 9.0,
    'MEDIA' => 0
]

];

//foreach Alunos dados calculados

foreach($alunos as $key => $aluno){
    //calculo semestres restantess
    $reajusteTempo = $aluno['TEMPO_FACULDADE'] - $aluno['SEMESTRE'];
    $aluno['TEMPO_CONCLUSAO'] = $reajusteTempo;

    //CALCULO NOTAS INDIVIDUAIS

    //Peso 1
    $Calculo_nota1 = $aluno['NOTA_1'] * $pesos['P1'];
    $aluno['NOTA_1'] = $Calculo_nota1;

    //Peso 2
    $Calculo_nota2 = $aluno['NOTA_2'] * $pesos['P2'];
    $aluno['NOTA_2'] = $Calculo_nota2;

    //Peso 3
    $Calculo_nota3 = $aluno['NOTA_3'] * $pesos['P3'];
    $aluno['NOTA_3'] = $Calculo_nota3;

    //MEDIA FINAL
    $Calculo_Media =  $aluno['NOTA_1'] +  $aluno['NOTA_2'] +  $aluno['NOTA_3'];
    $Soma_Pesos = $pesos['P1'] + $pesos['P2'] + $pesos['P3'];
    $divisaoMediaPeso = $Calculo_Media / $Soma_Pesos;
    $aluno['MEDIA'] = number_format($divisaoMediaPeso, 2);

    //Divisao por sexo
    if($aluno['SEXO'] == 'F'){
        $sexo['array_feminino'][] = $aluno;
    }else{
        $sexo['array_masculino'][] = $aluno;
    }

};

foreach($sexo['array_feminino'] as $feminino){
    echo"Nome: " . $feminino['NOME'] . "<br>" .
    "Idade: " . $feminino['IDADE'] . "<br>" .
    "Curso: " . $feminino['CURSO'] . "<br>" .
    "Semestre Atual: " . $feminino['SEMESTRE'] . "<br>" .
    "Tempo de Faculdade: " . $feminino['TEMPO_FACULDADE'] . "<br>" .
    "Tempo para concluir: " . $feminino['TEMPO_CONCLUSAO'] . "<br>" . 
    "1 Nota: " . $feminino['NOTA_1'] . "<br>" .
    "2 Nota: " . $feminino['NOTA_2'] . "<br>" . 
    "3 Nota: " . $feminino['NOTA_3'] . "<br>" . 
    "Media Final: " . $feminino['MEDIA'] . "<br>" .  "<hr>";
}

foreach($sexo['array_masculino'] as $masculino){
    echo"Nome: " . $masculino['NOME'] . "<br>" .
    "Idade: " . $masculino['IDADE'] . "<br>" .
    "Curso: " . $masculino['CURSO'] . "<br>" .
    "Semestre Atual: " . $masculino['SEMESTRE'] . "<br>" .
    "Tempo de Faculdade: " . $masculino['TEMPO_FACULDADE'] . "<br>" .
    "Tempo para concluir: " . $masculino['TEMPO_CONCLUSAO'] . "<br>" . 
    "1 Nota: " . $masculino['NOTA_1'] . "<br>" .
    "2 Nota: " . $masculino['NOTA_2'] . "<br>" . 
    "3 Nota: " . $masculino['NOTA_3'] . "<br>" . 
    "Media Final: " . $masculino['MEDIA'] . "<br>" .  "<hr>";
}

