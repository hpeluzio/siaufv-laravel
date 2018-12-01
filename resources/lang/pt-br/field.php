<?php

return [
  'ano' => [
    'id' => 'Código',
    'nome' => 'Nome',
  ],

  'sala' => [
    'id' => 'Código',
    'nome' => 'Nome',
    'descricao' => 'Descrição',
    'capacidade' => 'Capacidade',
  ],

  'minicurso' => [
    'id' => 'Código',
    'nome' => 'Nome',
    'vagas' => 'Vagas',
    'sala_id' => 'Sala',
    'ano_id' => 'Ano',

    'ministrante' => [
      'nome' => 'Nome',
    ],

    'horario' => [
      'inicio' => 'Início',
      'fim' => 'Fim',
    ],
  ],

  'avaliador' => [
    'id' => 'Código',
    'matricula' => 'Matrícula',
    'nome' => 'Nome',
    'curso' => 'Curso',
    'instituto' => 'Instituto',
    'email' => 'E-mail',
    'ano_id' => 'Ano',
  ],

  'trabalho' => [
    'id' => 'Código',
    'nome' => 'Título',
    'orientador' => 'Orientador',
    'autor' => 'Autor',
    'modalidade' => 'Modalidade',
    'area' => 'Área Temática',
    'ano_id' => 'Ano',

    'autor' => [
      'nome' => 'Nome',
    ],
  ],

  'avaliacao' => [
    'data' => 'Data',
    'horario' => 'Início',
    'fim' => 'Fim',
    'avaliador_id' => 'Presidente',
    'sala_id' => 'Sala',
    'ano_id' => 'Ano',

    'detalhe' => [
      'id' => 'Código',
      'trabalho_id' => 'Trabalho',
      'avaliador1_id' => 'Avaliador 1',
      'avaliador2_id' => 'Avaliador 2',
      'tipo' => 'Tipo',
      'orientador' => 'Orientador',
    ],
  ],
];
