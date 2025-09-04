<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz5>
 */
class Quiz5Factory extends Factory
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
                'question' => 'Kas ir CPU?',
                'correct' => 'Datora centrālā procesora vienība',
                'false1' => 'Atmiņas ierīce',
                'false2' => 'Video karte',
                'false3' => 'Barošanas bloks'
            ],
            [
                'question' => 'Kas ir RAM?',
                'correct' => 'Īslaicīgā atmiņa',
                'false1' => 'Ilgtermiņa atmiņa',
                'false2' => 'Grafiskā karte',
                'false3' => 'Cietais disks'
            ],
            [
                'question' => 'Kāda ir cietā diska (HDD) galvenā funkcija?',
                'correct' => 'Saglabāt datus ilgtermiņā',
                'false1' => 'Apstrādāt datus',
                'false2' => 'Attēlot grafiku',
                'false3' => 'Pievienot datoram jaudas'
            ],
            [
                'question' => 'Kas ir GPU?',
                'correct' => 'Grafiskā procesora vienība',
                'false1' => 'Procesors',
                'false2' => 'Atmiņas tips',
                'false3' => 'Barošanas avots'
            ],
            [
                'question' => 'Kāda datora daļa pārvalda enerģijas piegādi?',
                'correct' => 'Barošanas bloks (PSU)',
                'false1' => 'CPU',
                'false2' => 'RAM',
                'false3' => 'Cietais disks'
            ],
            [
                'question' => 'Kāds ir saīsinājums Māteplatei?',
                'correct' => 'MOBO',
                'false1' => 'CP',
                'false2' => 'MPT',
                'false3' => 'RODO'
            ],
            [
                'question' => 'Kāda ir operētājsistēmas funkcija?',
                'correct' => 'Pārvaldīt aparatūru un programmas',
                'false1' => 'Glabāt datus',
                'false2' => 'Veikt matemātiskus aprēķinus',
                'false3' => 'Attēlot video'
            ],
            [
                'question' => 'Kā sauc datu pārsūtīšanas ātrumu datora komponentēs?',
                'correct' => 'Bitrate',
                'false1' => 'Hz',
                'false2' => 'Pikseļi',
                'false3' => 'Voltāža'
            ],
            [
                'question' => 'Kas ir SSD?',
                'correct' => 'Ātrā, elektroniskā atmiņa bez kustīgām daļām',
                'false1' => 'Cietais disks ar mehāniskām daļām',
                'false2' => 'Barošanas bloks',
                'false3' => 'Procesors'
            ],
            [
                'question' => 'Kāda ir datora dzesēšanas sistēmas funkcija?',
                'correct' => 'Novērst pārkaršanu',
                'false1' => 'Uzlabot procesora jaudu',
                'false2' => 'Saglabāt datus',
                'false3' => 'Pievienot papildu atmiņu'
            ],
            [
                'question' => 'Kas ir datora tastatūra?',
                'correct' => 'Ievades ierīce',
                'false1' => 'Izvades ierīce',
                'false2' => 'Glabāšanas ierīce',
                'false3' => 'Barošanas ierīce'
            ],
            [
                'question' => 'Kā sauc programmatūru, kas nodrošina saziņu starp aparatūru un lietotāju?',
                'correct' => 'Operētājsistēma',
                'false1' => 'Programma',
                'false2' => 'Aplikācija',
                'false3' => 'Serveris'
            ],
            [
                'question' => 'Kas ir datu autobuss (bus) datorā?',
                'correct' => 'Datu pārsūtīšanas ceļš starp komponentēm',
                'false1' => 'Glabāšanas ierīce',
                'false2' => 'Dzesēšanas sistēma',
                'false3' => 'Barošanas bloks'
            ],
            [
                'question' => 'Kāda ir datora pele?',
                'correct' => 'Ierīce datu ievadei',
                'false1' => 'Ierīce datu glabāšanai',
                'false2' => 'Ierīce grafikas apstrādei',
                'false3' => 'Ierīce enerģijas piegādei'
            ],
            [
                'question' => 'Kas ir BIOS?',
                'correct' => 'Datora sākotnējās palaišanas programmatūra',
                'false1' => 'Datora cietais disks',
                'false2' => 'Datora videokarte',
                'false3' => 'Barošanas bloks'
            ],
        ];
    }
}
