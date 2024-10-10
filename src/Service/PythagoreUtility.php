<?php

namespace App\Service;

class PythagoreUtility
{
    public function display(): string
    {
        $html = '<table border="1">'; // Début de la table avec une bordure

        for ($i = 1; $i <= 10; $i++) {
            $html .= '<tr>'; // Début d'une nouvelle ligne
            for ($j = 1; $j <= 10; $j++) {
                if ($j == $i) {
                    $html .= '<td>X</td>';
                }else
                $html .= '<td>' . ($i * $j) . '</td>'; // Multiplier et insérer dans une cellule
            }
            $html .= '</tr>'; // Fin de la ligne
        }

        $html .= '</table>'; // Fin de la table
        return $html;
    }
}
