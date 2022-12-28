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
        DB::table('puns')->insert($puns);
    }
}
