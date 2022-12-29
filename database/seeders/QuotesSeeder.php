<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quotes = [
            [
                'quote_number'=>2,
                'description'=> "if they can get you asking the wrong questions, they dont have to worry about answers",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>3,
                'description'=> "We judge others by their actions and ourselves by our intentions",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>4,
                'description'=> "The world is a comedy to those that think; a tragedy to those that feel -*_Horace Walpole_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>5,
                'description'=> "Sometimes you never realize the value of a moment until it becomes a memory -*_Dr. Seuss_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>6,
                'description'=> "It is the mark of an educated mind, to entertain a thought without accepting it -*_Aristotle_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>7,
                'description'=> "Another flaw in the human character is that everyone wants to build and nobody wants to do maintenance. -*_Kurt Vonnegut_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>8,
                'description'=> "A man who wants to lead the orchestra must turn his back on the crowd. -*_Max Lucado_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>9,
                'description'=> "Nothing in this world can take the place of persistence. Talent will not: nothing is more common than unsuccessful men with talent. Genius will not; unrewarded genius is almost a proverb. Education will not: the world is full of educated derelicts. Persistence and determination alone are omnipotent.. -*_Calvin Coolidge_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>10,
                'description'=> "All men dream, but not equally. Those who dream by night in the dusty recesses of their minds, wake in the day to find that it was vanity: but the dreamers of the day are dangerous men, for they may act on their dreams with open eyes, to make them possible. -*_T. E. Lawrence_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>11,
                'description'=> "Dream is not that which you see while sleeping it is something that does not let you sleep. -*_A.P.J. Abdul Kalam, Wings of Fire: An Autobiography_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>12,
                'description'=> "I used to think the worst thing in life was to end up all alone, it's not. The worst thing in life is to end up with people who make you feel all alone. -*_Robin Williams_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>13,
                'description'=> "When another person makes you suffer, it is because he suffers deeply within himself, and his suffering is spilling over. He does not need punishment; he needs help. That's the message he is sending. -*_Thích Nhất Hạnh_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>14,
                'description'=> "If you know the enemy and know yourself, you need not fear the result of a hundred battles. If you know yourself but not the enemy, for every victory gained you will also suffer a defeat. If you know neither the enemy nor yourself, you will succumb in every battle. -*_ Sun Tzu_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>15,
                'description'=> "But you don't become great by trying to be great. You become great by wanting to do something, and doing it so hard that you become great in the process. -*_ Sun Tzu_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>16,
                'description'=> "It's so hard to forget pain, but it's even harder to remember sweetness. We have no scar to show for happiness. We learn so little from peace. -*_Chuck Palahniuk_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>17,
                'description'=> "Live a good life. If there are gods and they are just, then they will not care how devout you have been, but will welcome you based on the virtues you have lived by. If there are gods, but unjust, then you should not want to worship them. If there are no gods, then you will be gone, but will have lived a noble life that will live on in the memories of your loved ones.. -*_Marcus Aurelius, Meditations_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>18,
                'description'=> "Imagining the Future is a kind of nostalgia. You spend your whole life stuck in the labyrinth, thinking about how you'll escape it one day, and how awesome it will be, and imagining that future keeps you going, but you never do it. You just use the future to escape the present.. -*_John Green_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>19,
                'description'=> "There is nothing noble in being superior to your fellow man. True nobility is in being superior to your former self.. -*_Ernest Hemingway_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>20,
                'description'=> "Treat the Earth Well. It was not given to you by your parents, it was loaned to you by your children. -*_Kenyan Proverb_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>21,
                'description'=> "A society grows great when old men plant trees whose shade they know they shall never sit in.. -*_Greece Proverb_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>22,
                'description'=> "Great minds discuss ideas; average minds discuss events; small minds discuss people. -*_Eleanore Roosevelt_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>23,
                'description'=> "    It is not the strongest of the species that survives, nor the most intelligent that survives. It is the one that is the most adaptable to change.. -*_Charles Darwin_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>24,
                'description'=> "Change is the law of life. And those who look only to the past or the present are certain to miss the future -*_JFK_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>25,
                'description'=> "Years of love have been forgot, in the hatred of a minute -*_Edgar Allan Poe_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>26,
                'description'=> "Forgive others, not because they deserve forgiveness, but because you deserve peace -*_Jonathan Lockwood Huie_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>27,
                'description'=> "There are three things all wise men fear: the sea in storm, a night with no moon, and the anger of a gentle man -*_Patrick Rothfuss_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>28,
                'description'=> "He who fights with monsters should be careful lest he thereby become a monster. And if thou gaze long into an abyss, the abyss will also gaze into thee -*_Nietzsche_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],

            [
                'quote_number'=>29,
                'description'=> "If you want to build a ship, don't drum up the men to gather wood, divide the work and give orders. Instead, teach them to yearn for the vast and endless sea -*_Antoine de Saint-Exupéry_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
            [
                'quote_number'=>30,
                'description'=> "If your plan is for one year, plant rice. If your plan is for ten years, plant trees. If your plan is for one hundred years, educate children. -*_Confucius_*",
                'reactions' => [
                    '🧠' => ['1234']
                ]

            ],
        ];

        DB::table('quotes')->insert($quotes);
    }
}
