<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $booksData = [
            // Core Rulebooks
            ['name' => 'Player’s Handbook', 'acronym' => 'PHB', 'release_date' => '2014-08-19', 'type' => 'Core Rule'],
            ['name' => 'Dungeon Master’s Guide', 'acronym' => 'DMG', 'release_date' => '2014-12-09', 'type' => 'Core Rule'],
            ['name' => 'Monster Manual', 'acronym' => 'MM', 'release_date' => '2014-09-30', 'type' => 'Core Rule'],
            
            // Supplements
            ['name' => 'Volo’s Guide to Monsters', 'acronym' => 'VGtM', 'release_date' => '2016-11-15', 'type' => 'Supplement'],
            ['name' => 'Xanathar’s Guide to Everything', 'acronym' => 'XGtE', 'release_date' => '2017-11-21', 'type' => 'Supplement'],
            ['name' => 'Mordenkainen’s Tome of Foes', 'acronym' => 'MToF', 'release_date' => '2018-05-29', 'type' => 'Supplement'],
            ['name' => 'Tasha’s Cauldron of Everything', 'acronym' => 'TCoE', 'release_date' => '2020-11-17', 'type' => 'Supplement'],
            ['name' => 'Fizban’s Treasury of Dragons', 'acronym' => 'FToD', 'release_date' => '2021-10-19', 'type' => 'Supplement'],
            ['name' => 'Monsters of the Multiverse', 'acronym' => 'MotM', 'release_date' => '2021-11-16', 'type' => 'Supplement'],
            
            // Campaign Settings
            ['name' => 'Sword Coast Adventurer’s Guide', 'acronym' => 'SCAG', 'release_date' => '2015-11-03', 'type' => 'Campaign Setting'],
            ['name' => 'Guildmasters’ Guide to Ravnica', 'acronym' => 'GGtR', 'release_date' => '2018-11-20', 'type' => 'Campaign Setting'],
            ['name' => 'Acquisitions Incorporated', 'acronym' => 'AI', 'release_date' => '2019-06-18', 'type' => 'Campaign Setting'],
            ['name' => 'Eberron: Rising from the Last War', 'acronym' => 'RftLW', 'release_date' => '2019-11-19', 'type' => 'Campaign Setting'],
            ['name' => 'Explorer’s Guide to Wildemount', 'acronym' => 'EGtW', 'release_date' => '2020-03-17', 'type' => 'Campaign Setting'],
            ['name' => 'Mythic Odysseys of Theros', 'acronym' => 'MOoT', 'release_date' => '2020-06-02', 'type' => 'Campaign Setting'],
            ['name' => 'Van Richten’s Guide to Ravenloft', 'acronym' => 'VRGtR', 'release_date' => '2021-05-18', 'type' => 'Campaign Setting'],
            ['name' => 'Strixhaven: A Curriculum of Chaos', 'acronym' => 'SaCoC', 'release_date' => '2021-11-16', 'type' => 'Campaign Setting'],
            ['name' => 'Spelljammer: Adventures in Space', 'acronym' => 'SAiS', 'release_date' => '2022-08-16', 'type' => 'Campaign Setting'],
            
            // Adventures
            ['name' => 'Lost Mine of Phandelver', 'acronym' => 'LMoP', 'release_date' => '2014-07-15', 'type' => 'Adventure'],
            ['name' => 'Hoard of the Dragon Queen', 'acronym' => 'HotDQ', 'release_date' => '2014-08-19', 'type' => 'Adventure'],
            ['name' => 'Princes of the Apocalypse', 'acronym' => 'PotA', 'release_date' => '2015-04-07', 'type' => 'Adventure'],
            ['name' => 'The Rise of Tiamat', 'acronym' => 'RoT', 'release_date' => '2014-10-21', 'type' => 'Adventure'],
            ['name' => 'Out of the Abyss', 'acronym' => 'OotA', 'release_date' => '2015-09-15', 'type' => 'Adventure'],
            ['name' => 'Curse of Strahd', 'acronym' => 'CoS', 'release_date' => '2016-03-15', 'type' => 'Adventure'],
            ['name' => 'Storm King’s Thunder', 'acronym' => 'SKT', 'release_date' => '2016-09-06', 'type' => 'Adventure'],
            ['name' => 'Tales from the Yawning Portal', 'acronym' => 'TftYP', 'release_date' => '2017-04-04', 'type' => 'Adventure'],
            ['name' => 'Tomb of Annihilation', 'acronym' => 'ToA', 'release_date' => '2017-09-19', 'type' => 'Adventure'],
            ['name' => 'Waterdeep: Dragon Heist', 'acronym' => 'WDH', 'release_date' => '2018-09-18', 'type' => 'Adventure'],
            ['name' => 'Waterdeep: Dungeon of the Mad Mage', 'acronym' => 'WDotMM', 'release_date' => '2018-11-20', 'type' => 'Adventure'],
            ['name' => 'Hunt for Thessalhydra', 'acronym' => 'HfT', 'release_date' => '2019-05-01', 'type' => 'Adventure'],
            ['name' => 'Ghosts of Saltmarsh', 'acronym' => 'GoS', 'release_date' => '2019-05-21', 'type' => 'Adventure'],
            ['name' => 'Baldur’s Gate: Descent into Avernus', 'acronym' => 'BGDiA', 'release_date' => '2019-09-17', 'type' => 'Adventure'],
            ['name' => 'Dungeons & Dragons vs Rick and Morty', 'acronym' => 'DnDvsRnM', 'release_date' => '2019-11-19', 'type' => 'Adventure'],
            ['name' => 'Icewind Dale: Rime of the Frostmaiden', 'acronym' => 'IDRotF', 'release_date' => '2020-09-15', 'type' => 'Adventure'],
            ['name' => 'Candlekeep Mysteries', 'acronym' => 'CM', 'release_date' => '2021-03-16', 'type' => 'Adventure'],
            ['name' => 'The Wild Beyond The Witchlight', 'acronym' => 'TWBtW', 'release_date' => '2021-09-21', 'type' => 'Adventure'],
            ['name' => 'Critical Role: Call of the Netherdeep', 'acronym' => 'CRCotN', 'release_date' => '2021-10-12', 'type' => 'Adventure'],
            ['name' => 'Journeys through the Radiant Citadel', 'acronym' => 'JttRC', 'release_date' => '2022-01-25', 'type' => 'Adventure'],
            ['name' => 'Starter Set: Dragons of Stormwreck Isle', 'acronym' => 'DoSI', 'release_date' => '2022-06-21', 'type' => 'Adventure'],
            ['name' => 'Dragonlance: Shadow of the Dragon Queen', 'acronym' => 'DSotDQ', 'release_date' => '2022-12-06', 'type' => 'Adventure'],
            ['name' => 'Tyranny of Dragons', 'acronym' => 'ToD', 'release_date' => '2023-01-17', 'type' => 'Adventure'],
            ['name' => 'Keys from the Golden Vault', 'acronym' => 'KftGV', 'release_date' => '2023-02-21', 'type' => 'Adventure'],
            
            // Extra Life Charity
            ['name' => 'The Tortle Package', 'acronym' => '', 'release_date' => '2017-09-15', 'type' => 'Extra Life Charity'],
            ['name' => 'One Grung Above', 'acronym' => '', 'release_date' => '2017-10-11', 'type' => 'Extra Life Charity'],
            ['name' => 'The Lost Kenku', 'acronym' => '', 'release_date' => '2017-11-28', 'type' => 'Extra Life Charity'],
            ['name' => 'Volo’s Waterdeep Enchiridion', 'acronym' => '', 'release_date' => '2018-10-05', 'type' => 'Extra Life Charity'],
            ['name' => 'Lost Laboratory of Kwalish', 'acronym' => '', 'release_date' => '2018-11-10', 'type' => 'Extra Life Charity'],
            ['name' => 'Locathah Rising', 'acronym' => '', 'release_date' => '2019-09-19', 'type' => 'Extra Life Charity'],
            ['name' => 'Adventure with Muk', 'acronym' => '', 'release_date' => '2019-11-12', 'type' => 'Extra Life Charity'],
            ['name' => 'Infernal Machine Rebuild', 'acronym' => '', 'release_date' => '2019-11-12', 'type' => 'Extra Life Charity'],
            ['name' => 'Mordenkainen’s Fiendish Folio', 'acronym' => '', 'release_date' => '2019-12-03', 'type' => 'Extra Life Charity'],
            ['name' => 'Domains of Delight', 'acronym' => '', 'release_date' => '2021-09-21', 'type' => 'Extra Life Charity'],
            ['name' => 'Minsc & Boo’s Journal of Villainy', 'acronym' => '', 'release_date' => '2021-10-05', 'type' => 'Extra Life Charity'],
        ];

        foreach ($booksData as $bookData) {
            Book::create($bookData);
        }
    }
}
