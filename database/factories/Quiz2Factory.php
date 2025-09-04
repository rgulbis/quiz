<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz2>
 */
class Quiz2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'question' => 'Kāds ir latīņu nosaukums mājas kaķim?',
                'correct' => 'Felis catus',
                'false1' => 'Canis lupus',
                'false2' => 'Equus ferus',
                'false3' => 'Bos taurus'
            ],
            [
                'question' => 'Kāds ir latīņu nosaukums ozolam?',
                'correct' => 'Quercus',
                'false1' => 'Pinus',
                'false2' => 'Fagus',
                'false3' => 'Betula'
            ],
            [
                'question' => 'Kā sauc latīņu valodā bērzu?',
                'correct' => 'Betula',
                'false1' => 'Acer',
                'false2' => 'Quercus',
                'false3' => 'Salix'
            ],
            [
                'question' => 'Kāds ir latīņu nosaukums liellopam?',
                'correct' => 'Bos taurus',
                'false1' => 'Equus caballus',
                'false2' => 'Sus scrofa',
                'false3' => 'Felis catus'
            ],
            [
                'question' => 'Kā sauc latīņu valodā suni?',
                'correct' => 'Canis',
                'false1' => 'Felis',
                'false2' => 'Equus',
                'false3' => 'Bos'
            ],
            [
                'question' => 'Kāds ir latīņu nosaukums zirgam?',
                'correct' => 'Equus ferus',
                'false1' => 'Bos taurus',
                'false2' => 'Canis lupus',
                'false3' => 'Felis catus'
            ],
            [
                'question' => 'Kāda ir latīņu nosaukums eglei?',
                'correct' => 'Picea',
                'false1' => 'Pinus',
                'false2' => 'Abies',
                'false3' => 'Betula'
            ],
            [
                'question' => 'Kāds ir latīņu nosaukums ābolam?',
                'correct' => 'Malus',
                'false1' => 'Pyrus',
                'false2' => 'Prunus',
                'false3' => 'Citrus'
            ],
            [
                'question' => 'Kā sauc latīņu valodā lapsu?',
                'correct' => 'Vulpes',
                'false1' => 'Canis',
                'false2' => 'Felis',
                'false3' => 'Ursus'
            ],
            [
                'question' => 'Kāds ir latīņu nosaukums cūkai?',
                'correct' => 'Sus scrofa',
                'false1' => 'Bos taurus',
                'false2' => 'Equus ferus',
                'false3' => 'Ovis aries'
            ],
            [
                'question' => 'Kāds ir latīņu nosaukums vilkam?',
                'correct' => 'Canis lupus',
                'false1' => 'Felis catus',
                'false2' => 'Ursus arctos',
                'false3' => 'Vulpes vulpes'
            ],
            [
                'question' => 'Kāds ir latīņu nosaukums ābelei?',
                'correct' => 'Malus domestica',
                'false1' => 'Picea abies',
                'false2' => 'Prunus avium',
                'false3' => 'Quercus robur'
            ],
            [
                'question' => 'Kā sauc latīņu valodā vilnu dodošu aitu?',
                'correct' => 'Ovis aries',
                'false1' => 'Bos taurus',
                'false2' => 'Capra aegagrus',
                'false3' => 'Sus scrofa'
            ],
            [
                'question' => 'Kāds ir latīņu nosaukums ķirbim?',
                'correct' => 'Cucurbita',
                'false1' => 'Solanum',
                'false2' => 'Brassica',
                'false3' => 'Fragaria'
            ],
            [
                'question' => 'Kā sauc latīņu valodā lapu koku, kas pazīstams ar spožām rudens lapām?',
                'correct' => 'Acer',
                'false1' => 'Pinus',
                'false2' => 'Quercus',
                'false3' => 'Betula'
            ],
        ];
    }
}
