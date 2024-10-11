<?php

namespace App\Service;

class PythagoreUtility
{
    public function display(): string
    {
        $html = '<table border="1">'; // Début de la table avec une bordure

        // Première ligne avec 0, 1, 2, ..., 10
        $html .= '<tr><td>0</td>'; // Première case "0" en haut à gauche
        for ($j = 1; $j <= 10; $j++) {
            $html .= '<td>' . $j . '</td>'; // Insère 1 à 10 dans la première ligne
        }
        $html .= '</tr>';

        // Boucle pour créer le reste des lignes
        for ($i = 1; $i <= 10; $i++) {
            $html .= '<tr>';
            // Insérer la première colonne avec les nombres de 1 à 10
            $html .= '<td>' . $i . '</td>'; // Colonne gauche avec 1 à 10

            for ($j = 1; $j <= 10; $j++) {
                if ($j == $i) {
                    // Mettre "X" sur la diagonale
                    $html .= '<td>X</td>';
                } else {
                    // Multiplier et insérer dans une cellule pour les autres cases
                    $html .= '<td>' . ($i * $j) . '</td>';
                }
            }
            $html .= '</tr>'; // Fin de la ligne
        }

        $html .= '</table>'; // Fin de la table
        return $html;
    }
}
