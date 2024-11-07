<?php

//  Constantes mágica
class Person {}
echo __LINE__;     // Número da linha corrente, do arquivo em questão
echo __FILE__;     // Caminho completo e nome do arquivo com links simbólicos resolvidos
echo __DIR__;      // Diretório do arquivo
echo __FUNCTION__; // Nome da função
echo __CLASS__;    // Nome da classe incluindo o namespace em que foi declarado
echo __TRAIT__;    // Nome do trait incluindo o namespace em que foi declarado
echo __METHOD__;   // Nome do método
echo __NAMESPACE__; // Nome do namespace
echo Person::class; //  Nome completo da classe