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
                    '😝' => ['1234']
                ]
            ],
            [
                'pun_number' => 3,
                'description' => "if the sun🌞 decided decided to go to college it wont struggle....since it has a million degrees",
                'reactions' => [
                    '🥁' => ['1234']
                ]
            ],
            [
                'pun_number' => 4,
                'description' => "Doctor👨‍⚕: I'm sorry but we had to remove your colon...```Me why?```",
                'reactions' => [
                    '😝' => ['1234']
                ]
            ],
            [
                'pun_number' => 5,
                'description' => "what do you call a snake 🐍 that works for the government?...a civil serpent",
                'reactions' => [
                    '😝' => ['1234']
                ]
            ],
            [
                'pun_number' => 6,
                'description' => "I have just started up a dating sites for chickens🐔...its not my normal day job im just doing it to make hens meet",
                'reactions' => [
                    '😂' => ['1234']
                ]
            ],
            [
                'pun_number' => 7,
                'description' => "I walked into the apartment and found 5 ants🐜 on the wall and another 5 on the table...i think they were the tenants",
                'reactions' => [
                    '😂' => ['1234']
                ]
            ],
            [
                'pun_number' => 8,
                'description' => "I accidentally drank a bottle of invisible ink🔏....now im in the hospital waiting to be seen...i think i should go the ICU",
                'reactions' => [
                    '😂' => ['1234']
                ]
            ],
            [
                'pun_number' => 9,
                'description' => "I have a phobia for elevators....i will start taking steps🚶‍ to avoid them",
                'reactions' => [
                    '😂' => ['1234']
                ]
            ],
            [
                'pun_number' => 10,
                'description' => "My wife asked me to put ketchup🍅 on the shopping list....now i cant read anything i guess Heinz sight is 20/20",
                'reactions' => [
                    '🤣' => ['1234']
                ]
            ],
            [
                'pun_number' => 11,
                'description' => "What starts with a W, and has 3 letters, but ends with a T... yes",
                'reactions' => [
                    '😆' => ['1234']
                ],
            ],
            [
                'pun_number' => 12,
                'description' => "I ate a clock🕰, it was very time consuming...especially when i went back for seconds",
                'reactions' => [
                    '😆' => ['1234']
                ]

            ],
            [
                'pun_number' => 13,
                'description' => "Quiting my job as a human cannonball 💣....where will they find someone of my calibre",
                'reactions' => [
                    '😆' => ['1234']
                ]

            ],
            [
                'pun_number' => 15,
                'description' => "I got an email📩 on how to read maps backwards....it was spam",
                'reactions' => [
                    '😆' => ['1234']
                ]

            ],
            [
                'pun_number' => 16,
                'description' => "My son's👶 birthday was today.When he came to see me i didn't recognize him at first....i had never seen him be four.",
                'reactions' => [
                    '😆' => ['1234']
                ]

            ],
            [
                'pun_number' => 17,
                'description' => "I searched a list📃 of ten puns to find one that made me laugh....no pun in ten did",
                'reactions' => [
                    '😂' => ['1234']
                ]

            ],
            [
                'pun_number' => 18,
                'description' => "What do you get when you cross a joke with a rhetorical question? 🙂",
                'reactions' => [
                    '😝' => ['1234']
                ]

            ],
            [
                'pun_number' => 19,
                'description' => "When does a dad👨 joke become a dad joke?...when the punchline becomes apparent....when does the punchline become apparent?....after the delivery",
                'reactions' => [
                    '😝' => ['1234']
                ]

            ],
            [
                'pun_number' => 20,
                'description' => "Wheat did the cannibal🦴 get when he was late for dinner?....a cold shoulder",
                'reactions' => [
                    '😝' => ['1234']
                ]

            ]
        ];
        $Puns_two = [
            [
                'pun_number' => 21,
                'description' => "what kind of tea ☕ is hard to swallow?....Reality",
                'reactions' => [
                    '😆' => ['1234']
                ]
            ],
            [
                'pun_number' => 22,
                'description' => "Sometimes i hate my job, all i do is crush cans all day....its soda pressing🍺 ",
                'reactions' => [
                    '😆' => ['1234']
                ]
            ],
            [
                'pun_number' => 23,
                'description' => "I have got a horse 🐎 named Mayo....Mayo neighs",
                'reactions' => [
                    '😆' => ['1234']
                ]
            ],
            [
                'pun_number' => 24,
                'description' => "Which of the king Arthur's knight was chosen to make the round table?🤺.....Sir Curmference",
                'reactions' => [
                    '😄' => ['1234']
                ]
            ],
            [
                'pun_number' => 25,
                'description' => "I only believe 12.5% of the Bible 🤲...i guess that makes me an eighth-theist",
                'reactions' => [
                    '🤣' => ['1234']
                ]
            ],
            [
                'pun_number' => 26,
                'description' => "'Sugar😋' is the only word in the English language where 'su-' makes a 'sh' sound...  at least, i'm pretty sure that's correct....when 'Suit yourself' takes on a whole new meaning",
                'reactions' => [
                    '🤣' => ['1234']
                ]
            ],
            [
                'pun_number' => 27,
                'description' => "Andrew Garfield, Tobey Maguire and Tom Holland got into an accident upon arriving at a party🕺....As it turns out they are terrible parallel parkers",
                'reactions' => [
                    '🤣' => ['1234']
                ]
            ],
            [
                'pun_number' => 28,
                'description' => "Andrew Garfield, Tobey Maguire and Tom Holland got into an accident upon arriving at a party🕺....As it turns out they are terrible parallel parkers",
                'reactions' => [
                    '🤣' => ['1234']
                ]
            ],
            [
                'pun_number' => 29,
                'description' => "What is the difference between grey and gray?....one is a color 🌈, and the other is a color",
                'reactions' => [
                    '😁' => ['1234']
                ]
            ],
            [
                'pun_number' => 30,
                'description' => "I have lost 20% of my couch....ouch. This is the funniest couch joke i've seen sofa🤭",
                'reactions' => [
                    '😁' => ['1234']
                ]
            ],
            [
                'pun_number' => 31,
                'description' => "I saw a one legged man at the ATM🏧...he was checking his balance",
                'reactions' => [
                    '😁' => ['1234']
                ]
            ],
            [
                'pun_number' => 32,
                'description' => "My man proposed in the gym 🏋️ but she said no....safe to day it didn't work out",
                'reactions' => [
                    '😁' => ['1234']
                ]
            ],
            [
                'pun_number' => 33,
                'description' => "The man who survived pepper spray🌶 and mustard gas is now a seasoned veteran",
                'reactions' => [
                    '😂' => ['1234']
                ]
            ],
            [
                'pun_number' => 34,
                'description' => "A chemist accidentally froze himself at -273.15c...dont worry though he's 0k ....What a cold🥶 thing to say....i think i should chill its nothing to cryo-ver😜",
                'reactions' => [
                    '😂' => ['1234']
                ]
            ],
            [
                'pun_number' => 35,
                'description' => "I accidentally drank some Holy Water 💧 with my laxative....i am about to start a religious movment",
                'reactions' => [
                    '😂' => ['1234']
                ]
            ],
            [
                'pun_number' => 36,
                'description' => "I think my wife left me because of my gambling 💵 addiction....wanna bet?",
                'reactions' => [
                    '🤣' => ['1234']
                ]
            ],

            [
                'pun_number' => 37,
                'description' => "What is the difference between a vegan🥬 and a computer programmer💻?...one is disgusted by a rack of lamb and the other is disgusted by a lack of RAM",
                'reactions' => [
                    '🤣' => ['1234']
                ]
            ],
            [
                'pun_number' => 38,
                'description' => "Is it crazy how saying sentences backwards🥴... creates backwards sentences saying how crazy it is",
                'reactions' => [
                    '😆' => ['1234']
                ]
            ],
            [
                'pun_number' => 39,
                'description' => "If A is for apple🍎 and B is for banana 🍌 what is C for?...plastic explosives",
                'reactions' => [
                    '😆' => ['1234']
                ]
            ],
            [
                'pun_number' => 40,
                'description' => "My coworkers laugh at my jokes in in-person meetings,but never in online meetings....when i asked them why, they said that my jokes weren't remotely funny.",
                'reactions' => [
                    '😆' => ['1234']
                ]
            ],
        ];
        DB::table('puns')->insert($Puns_two);
    }
}
