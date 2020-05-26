<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('games')->delete();
        
        \DB::table('games')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Smash Bros Ultimate',
                'price' => 59.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co2255.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/sc5rla.jpg',
                'description' => 'Jeu de combat surpuissant',
                'note' => 4,
                'release_date' => '2018-12-07',
                'created_at' => '2020-05-26 18:48:45',
                'updated_at' => '2020-05-26 18:48:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'The Sims 4',
                'price' => 29.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1zok.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/mmleyi504ioefaxytjmu.jpg',
                'description' => 'The Sims 4 is the highly anticipated life simulation game that lets you play with life like never before. Create new Sims with intelligence and emotion. Experience all new intuitive and fun creative tools to sculpt your Sims and build unique homes. Control the mind, body, and heart of your Sims, and bring your stories to life.',
                'note' => NULL,
                'release_date' => '2017-11-17',
                'created_at' => '2020-05-26 19:07:20',
                'updated_at' => '2020-05-26 19:07:20',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Tales of Vesperia',
                'price' => 29.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1n2c.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/p9cswnm55orzl57mw7zo.jpg',
            'description' => 'Set in a world reliant on a mysterious ancient technology known as "blastia," the game follows former knight Yuri as he delves into a shadowy plot to use these magical devices to control civilization, or destroy it. A bold new interpretation of the elements that made the Tales series a hit with gamers around the world, Tales of Vesperia promises a standard-setting RPG experience on the Xbox 360. Using an all-new graphics engine and character designs by the renowned Kosuke Fujishima (Ah! My Goddess, Sakura Taisen), the game delivers high-quality HD character models and environments that are indistinguishable from traditional cel-based anime.',
                'note' => NULL,
                'release_date' => '2009-09-17',
                'created_at' => '2020-05-26 19:07:30',
                'updated_at' => '2020-05-26 19:07:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Ni no Kuni: Wrath of the White Witch',
                'price' => 29.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1rbw.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/tnps0hwvcfy6gdkd3feg.jpg',
                'description' => '"Ni no Kuni: Wrath of the White Witch, a heart-warming tale of a young boy named Oliver, who embarks on a journey into a parallel world in an attempt to bring his mother back from the dead. Along the way, Oliver makes new friends and adopts many of the wonderful creatures that inhabit the world, raising them to battle other creatures on his behalf as he takes on formidable enemies. Developed by LEVEL-5 alongside Studio Ghibli, the legendary animation studio, Ni no Kuni: Wrath of the White Witch combines beautiful animated visuals, masterful storytelling and a sweeping score into an epic role-playing adventure like no other."  Ni no Kuni: Wrath of the White Witch is an enhanced version of the Nintendo DS game Ni no Kuni: Dominion of the Dark Djin that was only released in Japan.',
                'note' => NULL,
                'release_date' => '2019-09-20',
                'created_at' => '2020-05-26 19:07:37',
                'updated_at' => '2020-05-26 19:07:37',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Ni no Kuni II: Revenant Kingdom',
                'price' => 39.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co25ub.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/yxsylghbggmgt6u4iqnk.jpg',
                'description' => 'The sequel to Ni no Kuni being developed for Windows and PlayStation 4. Players control Evan Pettiwhisker Tildrum, a young king who was usurped from his castle and sets out to reclaim his kingdom. While players can freely navigate Evan throughout the game\'s open world, other characters can be controlled during battles against enemies. During these battles, players use magical abilities and elemental creatures known as "Higgledies", which are used to cast spells.',
                'note' => NULL,
                'release_date' => '2018-03-24',
                'created_at' => '2020-05-26 19:07:48',
                'updated_at' => '2020-05-26 19:07:48',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'The Legend of Zelda: The Wind Waker HD',
                'price' => 29.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1p9o.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/jq2qnvlctkpgdijoz9wa.jpg',
                'description' => 'The Legend of Zelda: The Wind Waker is the 10th sequel of the Legend of Zelda action-adventure series. It\'s the first game of the series to be set on a group of islands in the sea. Therefore, many of Link\'s actions base on sailing and traveling from island to island, making a baton for controlling the wind the key item of the game.  The Legend of Zelda: The Wind Waker HD is a HD remaster of the the cartoonish cel-shaded The Legend of Zelda: The Wind Waker released in 2002 for Gamecube.',
                'note' => NULL,
                'release_date' => '2013-10-04',
                'created_at' => '2020-05-26 19:07:54',
                'updated_at' => '2020-05-26 19:07:54',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'The Legend of Zelda: Twilight Princess',
                'price' => 39.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1uij.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/wyqx7g1vwoy91i7f0nv5.jpg',
                'description' => 'Link, a young man raised as a wrangler in a small, rural village, is ordered by the mayor to attend the Hyrule Summit. He sets off, oblivious to the dark fate that has descended upon the kingdom. When he enters the Twilight Realm that has covered Hyrule, he transforms into a wolf and is captured. A mysterious figure named Midna helps him break free, and with the aid of her magic, they set off to free the land from the shadows. Link must explore the vast land of Hyrule and uncover the mystery behind its plunge into darkness.  For Nintendo\'s long-awaited Legend of Zelda: Twilight Princess, the designers have split the game into two versions -- one for GameCube, and one specially designed to make use of the Wii utilizing the powers of the Wii controller for all-new ways of exploring Hyrule.',
                'note' => NULL,
                'release_date' => '2006-12-08',
                'created_at' => '2020-05-26 19:07:59',
                'updated_at' => '2020-05-26 19:07:59',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Warcraft III: Reign of Chaos',
                'price' => 19.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1xuq.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/i1oynuvf858i7g9nw5vk.jpg',
                'description' => 'Warcraft 3: Reign of Chaos is an RTS made by Blizzard Entertainment. Take control of either the Humans, the Orcs, the Night Elves or the Undead, all with different unit types and heroes with unique abilities.Play the story driven single player campaign, go online to play default- or custom maps against people around the world or create your own maps with the map creation tool.',
                'note' => NULL,
                'release_date' => '2002-07-05',
                'created_at' => '2020-05-26 19:09:32',
                'updated_at' => '2020-05-26 19:09:32',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Call of Duty: Modern Warfare 2',
                'price' => 9.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1wl7.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/b21jr7nss4jikmgett1i.jpg',
                'description' => 'Call of Duty: Modern Warfare 2 is a first-person shooter video game developed by Infinity Ward and published by Activision for the Xbox 360 and PlayStation 3 video game consoles and the Microsoft Windows operating system. Officially announced on February 11, 2009, the game was released worldwide on November 10, 2009. It is the sixth installment of the Call of Duty series and the direct sequel to Call of Duty 4: Modern Warfare, continuing the same storyline, with Call of Duty: Modern Warfare 3 set to end the storyline.',
                'note' => NULL,
                'release_date' => '2009-11-10',
                'created_at' => '2020-05-26 19:10:05',
                'updated_at' => '2020-05-26 19:10:05',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Call of Duty: Black Ops',
                'price' => 9.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1wkl.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/sc6vt0.jpg',
                'description' => 'Call of Duty: Black Ops takes place during the 1960s in the Cold War. It focuses on CIA clandestine black operations carried out behind enemy lines. Missions take place in various locations around the globe such as the Ural Mountains in central Russia, Cuba, Kazakhstan, Hong Kong, Laos, Vietnam, and the Arctic circle. The single-player campaign revolves around an experimental chemical weapon codenamed "Nova-6".',
                'note' => NULL,
                'release_date' => '2010-11-09',
                'created_at' => '2020-05-26 19:10:26',
                'updated_at' => '2020-05-26 19:10:26',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Tales of Arise',
                'price' => 59.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1lw2.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/sc762w.jpg',
                'description' => 'Our tale begins with two people, born on different worlds, each looking to change their fate and create a new future. Featuring a new cast of characters, updated combat, and classic Tales of gameplay mechanics, experience the next chapter in the world-famous Tale of series, Tales of Arise.  The Next Chapter Experience the next chapter in the Tales of series, brought to life in stunning HD powered by Unreal Engine 4  Dynamic Action Dynamic Action RPG featuring an updated battle system that retains classic Tales of gameplay  A New Tale Awaits Rich story featuring a vibrant world and new cast of characters  Stunning Visuals High quality animation created by Ufotable',
                'note' => NULL,
                'release_date' => '2020-12-31',
                'created_at' => '2020-05-26 19:10:36',
                'updated_at' => '2020-05-26 19:10:36',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Tales of Zestiria',
                'price' => 29.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1rdq.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/x3lrxu99a5nztqkgorf0.jpg',
                'description' => 'Tales of Zestiria is a Japanese role-playing game. It is the fifteenth main entry in the Tales series. As with previous entries in the Tales series, the game uses a variation of the action-based Linear Motion Battle System, with additional elements including a navigable open world, and the ability for certain characters to fuse into a single entity in battle to deliver powerful attacks. The story follows Sorey, a young man blessed with powers by a mystical spirit race known as the Seraphim who act as a stabilizing force in the land, as he travels to free the land of Glenwood from the threat of the Hellion, creatures spawned by negative emotions.',
                'note' => NULL,
                'release_date' => '2016-07-07',
                'created_at' => '2020-05-26 19:10:45',
                'updated_at' => '2020-05-26 19:10:45',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Pokémon Mystery Dungeon: Rescue Team DX',
                'price' => 29.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1zm0.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/sc7ix5.jpg',
                'description' => 'You can meet and recruit Pokémon in a dungeon-crawling adventure within their world! Build a rescue team to take on mysterious, changing dungeons and strategically plan your moves as you venture forth to make the Pokémon world a safer place…and uncover your true purpose along the way.  As you recruit Pokémon, these trusty teammates will need somewhere to stay, so build camps to house, manage, and strengthen your Pokémon friends. Think hard about who is right for the job and how to approach each mysterious dungeon as you prepare a rescue team. You’ll move a single square at a time or use Auto mode to speed up movement until you engage other Pokémon in turn-based battles—but don’t forget about Pokémon strengths and weaknesses! This version adds gorgeous watercolor-inspired graphics, and more! Get comfortable in being a Pokémon, there’s a lot of work to do.',
                'note' => NULL,
                'release_date' => '2020-03-06',
                'created_at' => '2020-05-26 19:10:54',
                'updated_at' => '2020-05-26 19:10:54',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Pokémon Stadium',
                'price' => 9.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1yyd.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/bl6zlhrxwasottkj0tu5.jpg',
                'description' => 'In the game\'s Stadium Mode, one player competes in 80 different battles, divided into four tournaments. Beat the Stadium Mode and you\'re in for a bonus battle against the ultimate Pokémon warrior, Mewtwo, as well as a secret mode that gives you 80 brand-new, and devilishly tough battles. There is virtually no way you can beat the secret mode without having trained your own, elite Pokémon. One to four players compete against each other or the computer in a no-holds-barred battle with customizable rules. You can select rental Pokémon for these battles -- but that makes them much too predictable since their selection of techniques isn\'t determined by the trainer. You can also select quick and easy versus and random battles.',
                'note' => NULL,
                'release_date' => '1999-04-30',
                'created_at' => '2020-05-26 19:11:33',
                'updated_at' => '2020-05-26 19:11:33',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Overcooked! 2',
                'price' => 9.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1usu.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/rdacfm8f1d3mrwtpld10.jpg',
                'description' => 'The kitchen mayhem returns in this sequel from Team17 and Ghost Town Games that’s brimming with even more recipes, characters, kitchens and co-op madness. Bake, barbecue or broil with up to three other players in wireless local and online play modes. Save the world from clumsy cooking when the frantic food-juggler arrives on Aug. 7.',
                'note' => NULL,
                'release_date' => '2018-08-07',
                'created_at' => '2020-05-26 19:11:43',
                'updated_at' => '2020-05-26 19:11:43',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'FIFA 20',
                'price' => 29.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co206p.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/sc6lbk.jpg',
                'description' => 'Powered by Frostbite™, EA SPORTS™ FIFA 20 for PC brings two sides of The World’s Game to life - the prestige of the professional stage and an all-new, authentic street football experience in EA SPORTS VOLTA. FIFA 20 innovates across the game, FOOTBALL INTELLIGENCE unlocks an unprecedented platform for gameplay realism, FIFA Ultimate Team™ offers more ways to build your dream squad and EA SPORTS VOLTA returns the game to the street with an authentic form of small-sided football.',
                'note' => NULL,
                'release_date' => '2019-09-27',
                'created_at' => '2020-05-26 19:12:07',
                'updated_at' => '2020-05-26 19:12:07',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'eFootball PES 2020',
                'price' => 29.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1m14.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/sc6vml.jpg',
                'description' => 'Experience unparalleled realism and authenticity in this year\'s definitive football game: PES 2020.',
                'note' => NULL,
                'release_date' => '2019-09-10',
                'created_at' => '2020-05-26 19:12:14',
                'updated_at' => '2020-05-26 19:12:14',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Ori and the Blind Forest: Definitive Edition',
                'price' => 29.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1y40.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/x06p74kyvq9sdcalpkxp.jpg',
                'description' => 'The forest of Nibel is dying. After a powerful storm sets a series of devastating events in motion, Ori must journey to find courage and confront a dark nemesis to save the forest of Nibel. “Ori and the Blind Forest” tells the tale of a young orphan destined for heroics, through a visually stunning Action-Platformer crafted by Moon Studios. Featuring hand-painted artwork, meticulously animated character performance, a fully orchestrated score and dozens of new features in the Definitive Edition, “Ori and the Blind Forest” explores a deeply emotional story about love and sacrifice, and the hope that exists in us all.  NEW IN THE DEFINITIVE EDITION • Packed with new and additional content: New areas, new secrets, new abilities, more story sequences, multiple difficulty modes, full backtracking support and much more! • Discover Naru’s past in two brand new environments. • Master two powerful new abilities – Dash and Light Burst. • Find new secret areas and explore Nibel faster by teleporting between Spirit Wells.',
                'note' => NULL,
                'release_date' => '2019-09-27',
                'created_at' => '2020-05-26 19:12:22',
                'updated_at' => '2020-05-26 19:12:22',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'The Legend of Zelda: Majora\'s Mask',
                'price' => 2.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1n6a.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/rqoieell1ltsx837sbly.jpg',
            'description' => 'After the events of The Legend of Zelda: Ocarina of Time (1998), Link is assaulted by an imp named Skull Kid under the control of the evil Majora\'s Mask and gets stuck in a troubled land called Termina. Link must repeat the same 3 days, take on the identities of deceased people from other races, collect numerous masks and rid the land of evil to stop Majora from destroying the world in this third-person action/adventure game.',
                'note' => NULL,
                'release_date' => '2016-11-24',
                'created_at' => '2020-05-26 19:12:48',
                'updated_at' => '2020-05-26 19:12:48',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Human: Fall Flat',
                'price' => 2.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co1r7o.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/n9cqwrkkiktp5o7gggtj.jpg',
                'description' => 'Human: Fall Flat is an open-ended physics based puzzle game in which you take control of builder Bob helping him resolve the mysteries behind his recurring dreams of falling. Your goal is to escape those dreams full of puzzles, dangers and surprises using everything you find in the levels. The world of Bob dreams is built on his daily experiences, hopes, fears and memories interweaved in a net so sticky and hard to escape. All this mess is actually a carefully crafted work of… wait! You are the one to find it out! Bob is a human. Just a human. No hero. Zero superpowers. Period.  With open-ended simulator at its core “Human: Fall Flat” allows you to relive Bobs story your own way. Every shortcut can be taken, every solution is welcome! The game requires creativity and imagination. These often surreal environments do obey very real laws of the physics, if you think an object could be moved then rest assured it can. Replay value is limited only by your imagination.',
                'note' => NULL,
                'release_date' => '2017-05-12',
                'created_at' => '2020-05-26 19:12:59',
                'updated_at' => '2020-05-26 19:12:59',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Minecraft Dungeons',
                'price' => 29.99,
                'cover' => '//images.igdb.com/igdb/image/upload/t_cover_big/co233r.jpg',
                'banner' => '//images.igdb.com/igdb/image/upload/t_screenshot_big/sc82ob.jpg',
            'description' => '"Brave the dungeons alone, or team up with friends! Up to four players can battle together through action-packed, treasure-stuffed, wildly varied levels, all in an epic quest to save the villagers and take down the evil Arch-Illager!  Discover new weapons and items that will help you defeat a ruthless swarm of new-and-nasty mobs. Fight or flee through canyons, swamps and – of course – mines! Any adventurer brave or foolish enough (or a bit-of-both!) to explore this blocky and beautiful world will need to come prepared. So quickly, gear up!"',
                'note' => NULL,
                'release_date' => '2020-05-26',
                'created_at' => '2020-05-26 19:14:04',
                'updated_at' => '2020-05-26 19:14:04',
            ),
        ));
        
        
    }
}