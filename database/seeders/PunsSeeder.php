<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PunsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $puns = [
            [
                'pun_number' => 2,
                'description' => "British python devs be like....oy that's a constructor `__init__`",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 3,
                'description' => "if the sunπ decided decided to go to college it wont struggle....since it has a million degrees",
                'reactions' => [
                    'π₯' => ['1234']
                ]
            ],
            [
                'pun_number' => 4,
                'description' => "Doctorπ¨ββ: I'm sorry but we had to remove your colon...```Me why?```",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 5,
                'description' => "what do you call a snake π that works for the government?...a civil serpent",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 6,
                'description' => "I have just started up a dating sites for chickensπ...its not my normal day job im just doing it to make hens meet",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 7,
                'description' => "I walked into the apartment and found 5 antsπ on the wall and another 5 on the table...i think they were the tenants",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 8,
                'description' => "I accidentally drank a bottle of invisible inkπ....now im in the hospital waiting to be seen...i think i should go the ICU",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 9,
                'description' => "I have a phobia for elevators....i will start taking stepsπΆβ to avoid them",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 10,
                'description' => "My wife asked me to put ketchupπ on the shopping list....now i cant read anything i guess Heinz sight is 20/20",
                'reactions' => [
                    'π€£' => ['1234']
                ]
            ],
            [
                'pun_number' => 11,
                'description' => "What starts with a W, and has 3 letters, but ends with a T... yes",
                'reactions' => [
                    'π' => ['1234']
                ],
            ],
            [
                'pun_number' => 12,
                'description' => "I ate a clockπ°, it was very time consuming...especially when i went back for seconds",
                'reactions' => [
                    'π' => ['1234']
                ]

            ],
            [
                'pun_number' => 13,
                'description' => "Quiting my job as a human cannonball π£....where will they find someone of my calibre",
                'reactions' => [
                    'π' => ['1234']
                ]

            ],
            [
                'pun_number' => 15,
                'description' => "I got an emailπ© on how to read maps backwards....it was spam",
                'reactions' => [
                    'π' => ['1234']
                ]

            ],
            [
                'pun_number' => 16,
                'description' => "My son'sπΆ birthday was today.When he came to see me i didn't recognize him at first....i had never seen him be four.",
                'reactions' => [
                    'π' => ['1234']
                ]

            ],
            [
                'pun_number' => 17,
                'description' => "I searched a listπ of ten puns to find one that made me laugh....no pun in ten did",
                'reactions' => [
                    'π' => ['1234']
                ]

            ],
            [
                'pun_number' => 18,
                'description' => "What do you get when you cross a joke with a rhetorical question? π",
                'reactions' => [
                    'π' => ['1234']
                ]

            ],
            [
                'pun_number' => 19,
                'description' => "When does a dadπ¨ joke become a dad joke?...when the punchline becomes apparent....when does the punchline become apparent?....after the delivery",
                'reactions' => [
                    'π' => ['1234']
                ]

            ],
            [
                'pun_number' => 20,
                'description' => "Wheat did the cannibalπ¦΄ get when he was late for dinner?....a cold shoulder",
                'reactions' => [
                    'π' => ['1234']
                ]

            ]
        ];
        $Puns_two = [
            [
                'pun_number' => 21,
                'description' => "what kind of tea β is hard to swallow?....Reality",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 22,
                'description' => "Sometimes i hate my job, all i do is crush cans all day....its soda pressingπΊ ",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 23,
                'description' => "I have got a horse π named Mayo....Mayo neighs",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 24,
                'description' => "Which of the king Arthur's knight was chosen to make the round table?π€Ί.....Sir Curmference",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 25,
                'description' => "I only believe 12.5% of the Bible π€²...i guess that makes me an eighth-theist",
                'reactions' => [
                    'π€£' => ['1234']
                ]
            ],
            [
                'pun_number' => 26,
                'description' => "'Sugarπ' is the only word in the English language where 'su-' makes a 'sh' sound...  at least, i'm pretty sure that's correct....when 'Suit yourself' takes on a whole new meaning",
                'reactions' => [
                    'π€£' => ['1234']
                ]
            ],
            [
                'pun_number' => 27,
                'description' => "Andrew Garfield, Tobey Maguire and Tom Holland got into an accident upon arriving at a partyπΊ....As it turns out they are terrible parallel parkers",
                'reactions' => [
                    'π€£' => ['1234']
                ]
            ],
            [
                'pun_number' => 28,
                'description' => "Andrew Garfield, Tobey Maguire and Tom Holland got into an accident upon arriving at a partyπΊ....As it turns out they are terrible parallel parkers",
                'reactions' => [
                    'π€£' => ['1234']
                ]
            ],
            [
                'pun_number' => 29,
                'description' => "What is the difference between grey and gray?....one is a color π, and the other is a color",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 30,
                'description' => "I have lost 20% of my couch....ouch. This is the funniest couch joke i've seen sofaπ€­",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 31,
                'description' => "I saw a one legged man at the ATMπ§...he was checking his balance",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 32,
                'description' => "My man proposed in the gym ποΈ but she said no....safe to day it didn't work out",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 33,
                'description' => "The man who survived pepper sprayπΆ and mustard gas is now a seasoned veteran",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 34,
                'description' => "A chemist accidentally froze himself at -273.15c...dont worry though he's 0k ....What a coldπ₯Ά thing to say....i think i should chill its nothing to cryo-verπ",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 35,
                'description' => "I accidentally drank some Holy Water π§ with my laxative....i am about to start a religious movment",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 36,
                'description' => "I think my wife left me because of my gambling π΅ addiction....wanna bet?",
                'reactions' => [
                    'π€£' => ['1234']
                ]
            ],

            [
                'pun_number' => 37,
                'description' => "What is the difference between a veganπ₯¬ and a computer programmerπ»?...one is disgusted by a rack of lamb and the other is disgusted by a lack of RAM",
                'reactions' => [
                    'π€£' => ['1234']
                ]
            ],
            [
                'pun_number' => 38,
                'description' => "Is it crazy how saying sentences backwardsπ₯΄... creates backwards sentences saying how crazy it is",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 39,
                'description' => "If A is for appleπ and B is for banana π what is C for?...plastic explosives",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 40,
                'description' => "My coworkers laugh at my jokes in in-person meetings,but never in online meetings....when i asked them why, they said that my jokes weren't remotely funny.",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
        ];

        $puns_three = [
            [
                'pun_number' => 41,
                'description' => "What do you call a cowπ? with no legs?...ground beef...with two legs...lean beef and with all legs high steaks",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 42,
                'description' => "Did you hearπ about the guy who lost the left side if his body?....he's alright now",
                'reactions' => [
                    'π€£' => ['1234']
                ]
            ],
            [
                'pun_number' => 43,
                'description' => "What did the bufallo say to his son?...Bison",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 44,
                'description' => "Whats its called when you have too many aliensπ½?...Extraterrestrials",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 45,
                'description' => "Do you know signπ language?...You should learn it....its pretty handy",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 46,
                'description' => "What does a clockπ do when its hungry?....it goes back for seconds",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 47,
                'description' => "i used to be afraid of hurdlesπ...but i got over them",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 48,
                'description' => "How does Moses make coffeeβ?....Hebrews it",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 49,
                'description' => "How much does it cost to make santa's sleigh to moveπ?...eight bucks",
                'reactions' => [
                    'π' => ['1234']
                ]
            ],
            [
                'pun_number' => 50,
                'description' => "Why do drum π₯ kits have the strongest password protection?....because they contain special cymbals",
                'reactions' => [
                    'π₯' => ['1234']
                ]
            ],
        ];

        DB::table('puns')->insert($puns_three);
    }
}
