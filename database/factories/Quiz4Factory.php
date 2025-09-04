<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz4>
 */
class Quiz4Factory extends Factory
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
                'question' => 'Kā sauc Zemes vienīgo dabīgo pavadoni?',
                'correct' => 'Mēness',
                'false1' => 'Marss',
                'false2' => 'Rūdolfs',
                'false3' => 'Jupiter'
            ],
            [
                'question' => 'Kurš bija pirmais cilvēks kosmosā?',
                'correct' => 'Yuri Gagarin',
                'false1' => 'Neil Armstrong',
                'false2' => 'Buzz Aldrin',
                'false3' => 'John Glenn'
            ],
            [
                'question' => 'Kā sauc lielāko planētu Saules sistēmā?',
                'correct' => 'Jupiters',
                'false1' => 'Saturns',
                'false2' => 'Zeme',
                'false3' => 'Marss'
            ],
            [
                'question' => 'Kāda ir Zemes orbītas forma ap Sauli?',
                'correct' => 'Elipsveida',
                'false1' => 'Pilnīgi apaļa',
                'false2' => 'Līnija',
                'false3' => 'Neregulāra'
            ],
            [
                'question' => 'Kas ir Saules sistēmas centrālā zvaigzne?',
                'correct' => 'Saule',
                'false1' => 'Eiropa',
                'false2' => 'Zeme',
                'false3' => 'Jupiters'
            ],
            [
                'question' => 'Kāds ir kosmosa vakuuma galvenais raksturojums?',
                'correct' => 'Pilnīgs tukšums bez gaisa',
                'false1' => 'Liels spiediens',
                'false2' => 'Silts un mitrs',
                'false3' => 'Piepildīts ar ūdeni'
            ],
            [
                'question' => 'Kā sauc kosmosa kuģa ārējo daļu?',
                'correct' => 'Apvalks',
                'false1' => 'Kabīne',
                'false2' => 'Dzinējs',
                'false3' => 'Spārni'
            ],
            [
                'question' => 'Kas atrodas starp Marsu un Jupiteru Saules sistēmā?',
                'correct' => 'Asteroīdu josla',
                'false1' => 'Komētas',
                'false2' => 'Planētas',
                'false3' => 'Zvaigznes'
            ],
            [
                'question' => 'Kā sauc pirmo cilvēka nosēšanos uz Mēness?',
                'correct' => 'Apollo 11',
                'false1' => 'Sputnik',
                'false2' => 'Voyager',
                'false3' => 'Skylab'
            ],
            [
                'question' => 'Kāds ir aptuvenais laiks, cik ilgi gaismai no Saules jānonāk līdz Zemei?',
                'correct' => '8 minūtes',
                'false1' => '8 sekundes',
                'false2' => '8 stundas',
                'false3' => '8 dienas'
            ],
            [
                'question' => 'Kā sauc zonu ap Zemi, kur atrodas vairums mākslīgo pavadoni?',
                'correct' => 'Low Earth Orbit (LEO)',
                'false1' => 'Orbitālais koridors',
                'false2' => 'Geostacionārais punkts',
                'false3' => 'Atmosfēras malas'
            ],
            [
                'question' => 'Kā sauc kosmosa kuģa vadītāju?',
                'correct' => 'Astronauts',
                'false1' => 'Pilots',
                'false2' => 'Kapteinis',
                'false3' => 'Kosmonauts'
            ],
            [
                'question' => 'Kāda planēta ir pazīstama kā “Sarkanais planēta”?',
                'correct' => 'Marss',
                'false1' => 'Jupiters',
                'false2' => 'Venēra',
                'false3' => 'Saturns'
            ],
            [
                'question' => 'Kā sauc spožu gaismas parādību debesīs, ko rada Zemes magnētiskais lauks?',
                'correct' => 'Aurora Borealis',
                'false1' => 'Meteoru lietus',
                'false2' => 'Saules aptumsums',
                'false3' => 'Mēness aptumsums'
            ],
            [
                'question' => 'Kā sauc Visuma milzīgo izplešanos, kas sākās ar Lielo sprādzienu?',
                'correct' => 'Visuma paplašināšanās',
                'false1' => 'Kosmiskais mikrobangojums',
                'false2' => 'Visuma inflācija',
                'false3' => 'Saules sistēmas veidošanās'
            ],
        ];
    }
}
