<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz1>
 */
class Quiz1Factory extends Factory
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
                'question' => 'Kāds ir mājas kaķa vidējais dzīves ilgums?',
                'correct' => '10-15 gadi',
                'false1' => '2-4 gadi',
                'false2' => '20-25 gadi',
                'false3' => '30-35 gadi'
            ],
            [
                'question' => 'Kā sauc kaķa skaņu, ko tas izdod, kad ir laimīgs?',
                'correct' => 'Murmināšana',
                'false1' => 'Ūkšķēšana',
                'false2' => 'Kliedziens',
                'false3' => 'Rēkšana'
            ],
            [
                'question' => 'Kā sauc kaķa mazuli?',
                'correct' => 'Kaķēns',
                'false1' => 'Kucēns',
                'false2' => 'Cālis',
                'false3' => 'Trusis'
            ],
            [
                'question' => 'Kāda ir galvenā kaķa instinkta darbība?',
                'correct' => 'Medības',
                'false1' => 'Grauzšana',
                'false2' => 'Lidošana',
                'false3' => 'Dzinējs'
            ],
            [
                'question' => 'Kāda šķirne ir pazīstama ar lielu izmēru un draudzīgu raksturu?',
                'correct' => 'Maine Coon',
                'false1' => 'Persiešu kaķis',
                'false2' => 'Sfenks',
                'false3' => 'Siamiešu kaķis'
            ],
            [
                'question' => 'Kāds ir kaķa redzes galvenais pielāgojums?',
                'correct' => 'Labāk redz tumsā',
                'false1' => 'Redz ultravioleto gaismu',
                'false2' => 'Redz vairāk krāsas nekā cilvēki',
                'false3' => 'Labāk redz dienā'
            ],
            [
                'question' => 'Cik nagi ir katrā kaķa priekšējā ķepā?',
                'correct' => '5',
                'false1' => '3',
                'false2' => '4',
                'false3' => '6'
            ],
            [
                'question' => 'Kāds ir kaķa ķermeņa temperatūras vidējais līmenis?',
                'correct' => '38 °C',
                'false1' => '35 °C',
                'false2' => '42 °C',
                'false3' => '40 °C'
            ],
            [
                'question' => 'Kāds ir kaķa uztura pamats?',
                'correct' => 'Gaļa',
                'false1' => 'Augi',
                'false2' => 'Graudi',
                'false3' => 'Zivis'
            ],
            [
                'question' => 'Kāda ir kaķu īpašā dzirde?',
                'correct' => 'Spēj dzirdēt ļoti augstas frekvences',
                'false1' => 'Spēj dzirdēt zemas frekvences',
                'false2' => 'Spēj dzirdēt tikai cilvēka balsi',
                'false3' => 'Nav īpaša dzirde'
            ],
            [
                'question' => 'Kāds kaķa dzīvības veids ir populārs mājās?',
                'correct' => 'Sfenks',
                'false1' => 'Līcis',
                'false2' => 'Zirgs',
                'false3' => 'Vāvere'
            ],
            [
                'question' => 'Kāda ir kaķa galvenā saziņas metode?',
                'correct' => 'Visi iepriekš minētie',
                'false1' => 'Mutes skaņas',
                'false2' => 'Astes kustības',
                'false3' => 'Acu kontakts'
            ],
            [
                'question' => 'Cik daudz nagus kaķis var ievilkt?',
                'correct' => 'Visi vienlaikus',
                'false1' => 'Neviens',
                'false2' => 'Tikai priekšējie',
                'false3' => 'Tikai aizmugurējie'
            ],
            [
                'question' => 'Kāds kaķis ir pilnīgi bez spalvas?',
                'correct' => 'Sfenks',
                'false1' => 'Persiešu kaķis',
                'false2' => 'Maine Coon',
                'false3' => 'Ragdoll'
            ],
            [
                'question' => 'Kāda ir kaķa tipiskā miega ilgums dienā?',
                'correct' => '12-16 stundas',
                'false1' => '4-6 stundas',
                'false2' => '8-10 stundas',
                'false3' => '20 stundas vai vairāk'
            ],
            
        ];
    }
}
