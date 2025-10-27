<?php

namespace Database\Seeders;

use App\Models\Quiz1;
use App\Models\Quiz2;
use App\Models\Quiz3;
use App\Models\Quiz4;
use App\Models\Quiz5;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('topics')->insert([
            [
                'topic_name' => 'Cats',
                'table_name' => 'quiz1s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_name' => 'Latin',
                'table_name' => 'quiz2s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_name' => 'Latvija',
                'table_name' => 'quiz3s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_name' => 'Kossmos',
                'table_name' => 'quiz4s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_name' => 'Dators',
                'table_name' => 'quiz5s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $quiz1 = [
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
        foreach ($quiz1 as $question) {
            Quiz1::create($question);
        }

        $quiz2 = [
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
        foreach ($quiz2 as $question) {
            Quiz2::create($question);
        }

        $quiz3 = [
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
        foreach ($quiz3 as $question) {
            Quiz3::create($question);
        }

        $quiz4 = [
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
        foreach ($quiz4 as $question) {
            Quiz4::create($question);
        }

        $quiz5 = [
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
        foreach ($quiz5 as $question) {
            Quiz5::create($question);
        }
    }
}
