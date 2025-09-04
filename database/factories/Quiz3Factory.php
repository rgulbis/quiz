<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz3>
 */
class Quiz3Factory extends Factory
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
                'question' => 'Kad tika pasludināta Latvijas neatkarība?',
                'correct' => '1918. gadā',
                'false1' => '1914. gadā',
                'false2' => '1920. gadā',
                'false3' => '1940. gadā'
            ],
            [
                'question' => 'Kas bija Latvijas pirmais prezidents?',
                'correct' => 'Jānis Čakste',
                'false1' => 'Kārlis Ulmanis',
                'false2' => 'Gustavs Zemgals',
                'false3' => 'Zigfrīds Meierovics'
            ],
            [
                'question' => 'Kurš bija Latvijas pirmais Ministru prezidents?',
                'correct' => 'Zigfrīds Meierovics',
                'false1' => 'Kārlis Ulmanis',
                'false2' => 'Jānis Čakste',
                'false3' => 'Roberts Gulbis'
            ],
            [
                'question' => 'Kāda bija Latvijas valsts forma pēc neatkarības pasludināšanas?',
                'correct' => 'Republika',
                'false1' => 'Monarhija',
                'false2' => 'Impērija',
                'false3' => 'Demokrātija'
            ],
            [
                'question' => 'Kurš no šiem notikumiem bija svarīgs Latvijas neatkarības atjaunošanai 1991. gadā?',
                'correct' => 'Barikādes',
                'false1' => 'Pirmā latviešu skola',
                'false2' => 'Jāņi',
                'false3' => 'Pirmais Rīgas maratons'
            ],
            [
                'question' => 'Kā sauc Latvijas galvaspilsētu?',
                'correct' => 'Rīga',
                'false1' => 'Daugavpils',
                'false2' => 'Liepāja',
                'false3' => 'Priekuļi'
            ],
            [
                'question' => 'Kāds bija Latvijas teritorijas statuss pirms neatkarības?',
                'correct' => 'Krievijas impērijas sastāvā',
                'false1' => 'Vācijas impērijas sastāvā',
                'false2' => 'Zviedrijas impērijas sastāvā',
                'false3' => 'Polijas karalistes sastāvā'
            ],
            [
                'question' => 'Kas ir „Latvijas Brīvības cīņas”?',
                'correct' => 'Neatkarības karš pēc Pirmā pasaules kara',
                'false1' => 'Pirmais latviešu romāns',
                'false2' => 'Latvijas sporta sacensības',
                'false3' => 'Pirmā latviešu valsts izglītības reforma'
            ],
            [
                'question' => 'Kurš ir Latvijas nacionālais simbols?',
                'correct' => 'Lāčplēsis',
                'false1' => 'Gaismas pils',
                'false2' => 'Jānis Čakste',
                'false3' => 'Dzintars'
            ],
            [
                'question' => 'Kāda bija Latvijas politika starpkaru periodā?',
                'correct' => 'Demokrātiska',
                'false1' => 'Totalitāra',
                'false2' => 'Monarhiska',
                'false3' => 'Komunistiska'
            ],
            [
                'question' => 'Kad Latvija iestājās Eiropas Savienībā?',
                'correct' => '2004',
                'false1' => '1995',
                'false2' => '2010',
                'false3' => '2018'
            ],
            [
                'question' => 'Kas bija Kārlis Ulmanis?',
                'correct' => 'Latvijas valdības vadītājs un autoritārs līderis',
                'false1' => 'Rakstnieks',
                'false2' => 'Latvijas pirmais prezidents',
                'false3' => 'Zinātnieks'
            ],
            [
                'question' => 'Kā sauc Latvijas lielāko upi?',
                'correct' => 'Daugava',
                'false1' => 'Gauja',
                'false2' => 'Venta',
                'false3' => 'Lielupe'
            ],
            [
                'question' => 'Kāda valoda ir Latvijas oficiālā valoda?',
                'correct' => 'Latviešu',
                'false1' => 'Krievu',
                'false2' => 'Lietuviešu',
                'false3' => 'Php'
            ],
            [
                'question' => 'Kāds bija Rīgas aplenkums 1919. gadā?',
                'correct' => 'Neatkarības kara daļa',
                'false1' => 'Pirmā Pasaules kara daļa',
                'false2' => 'Otrā Pasaules kara daļa',
                'false3' => 'Nekas tāds nenotika'
            ],
        ];
    }
}
