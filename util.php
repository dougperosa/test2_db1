<?php

class Musica
{

    function repeticaoAnimais($animais, $contador)
    {
        $texto = null;
        for ($i = $contador; $i > 0; $i--) {
            if ($i == 1) {
                $separador = ';\n';
            } else {
                $separador = ',\n';
            }
            $texto .= 'She swallowed the ' . $animais[$i] . ' to catch the ' . $animais[$i - 1] . $separador;
        }
        return $texto;
    }

    function primeiroVerso($animal)
    {
        return 'There was an old lady who swallowed a ' . $animal . ';\n';
    }

    function ultimoVerso($primeiroanimal)
    {
        return "I don't know why she swallowed a " . $primeiroanimal . " - perhaps she'll die!\n\n";
    }

    function ultimaEstrofe($animal)
    {
        $texto = "There was an old lady who swallowed a " . $animal . "...\n";
        $texto .= "...She's dead, of course!";

        return $texto;
    }

    function randomVersoSurpresa($animal)
    {
        $frasesrandom = array(
            "That wriggled and wiggled and tickled inside her.\n",
            "How absurd to swallow a animal.\n",
            "Fancy that to swallow a animal!\n",
            "What a hog, to swallow a animal!\n",
            "I don't know how she swallowed a cow!\n"
        );
        return str_replace('animal', $animal, $frasesrandom[rand(0, count($frasesrandom) - 1)]);
    }
}
