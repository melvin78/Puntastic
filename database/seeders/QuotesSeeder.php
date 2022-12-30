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

        $quotes_two= [
            [
                'quote_number'=>31,
                'description'=> "If you become a soldier, you'll be a general. If you become a monk you'll end up as the pope.' Instead i became a painter and wound up as Picasso -*_Pablo Picasso_*",
                'reactions' => [
                    '🎨' => ['1234']
                ]

            ],
            [
                'quote_number'=>32,
                'description'=> "The whole problem with the world is that fools and fanatics are always so certain of themselves, but wiser people so full of doubts -*_Bertrand Russell_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>33,
                'description'=> "Those who make peaceful revolution impossible will make violent revolution inevitable. -*_John F. Kennedy_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>34,
                'description'=> "The most merciful thing in the world, I think, is the inability of the human mind to correlate all its contents. We live on a placid island of ignorance in the midst of black seas of infinity, and it was not meant that we should voyage far. The sciences, each straining in its own direction, have hitherto harmed us little; but some day the piecing together of dissociated knowledge will open up such terrifying vistas of reality, and of our frightful position therein, that we shall either go mad from the revelation or flee from the deadly light into the peace and safety of a new dark age.. -*_H.P. Lovecraft_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>35,
                'description'=> "We, the unwilling, led by the unknowing, are doing the impossible for the ungrateful. We have done so much, for so long, with so little, we are now qualified to do anything with nothing. -*_Konstantin Jireček_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>36,
                'description'=> "Stand amongst the ashes of a trillion dead souls and ask the ghosts if honor matters
...The silence is your answer. ",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],

            [
                'quote_number'=>37,
                'description'=> "Loneliness does not come from having no one around us but instead being unable to communicate the things that matter most to us. -*_Carl Jung_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>38,
                'description'=> "How much more grievous are the consequences of anger than the causes of it.. -*_Marcus Aurelius_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>39,
                'description'=> "Nothing in this world can take the place of persistence. Talent will not; nothing is more common than unsuccessful men with talent. Genius will not; unrewarded genius is almost a proverb. Education will not; the world is full of educated derelicts. Persistence and determination alone are omnipotent. The slogan Press On! has solved and always will solve the problems of the human race.. -*_-Calvin Coolidge_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>40,
                'description'=> "It is possible to make no mistakes and lose. That is not failure, that is life.. -*_-Cpt Jean Luc Picard_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>41,
                'description'=> "Every lie we tell incurs a debt to the truth. Sooner or later that debt is paid. -*_-Valery Legasov_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>42,
                'description'=> "Any fool can be happy. It takes a man with real heart to make beauty out of the stuff that makes us weep. -*_-Clive Barker_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>43,
                'description'=> "Even the finest sword plunged into salt water will eventually rust. You can be the very best at something but if you’re not in the right environment to prosper you will never become all that you could be.  -*_-Sun Tzu_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>44,
                'description'=> "It is the mark of an educated mind to be able to entertain a thought without accepting it  -*_-Aristotle_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>45,
                'description'=> "It is not the critic who counts; not the man who points out how the strong man stumbles, or where the doer of deeds could have done them better. The credit belongs to the man who is actually in the arena, whose face is marred by dust and sweat and blood; who strives valiantly; who errs, who comes short again and again, because there is no effort without error and shortcoming; but who does actually strive to do the deeds; who knows great enthusiasms, the great devotions; who spends himself in a worthy cause; who at the best knows in the end the triumph of high achievement, and who at the worst, if he fails, at least fails while daring greatly, so that his place shall never be with those cold and timid souls who neither know victory nor defeat  -*_-Theodore Roosevelt_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>46,
                'description'=> "If they can make penicillin out of moldy bread, they can make something out of you -*_-Muhammad Ali_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>47,
                'description'=> "Pride is not the opposite of shame, but its source. True humility is the only antidote to shame -*_-Iroh_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>48,
                'description'=> "An entire sea of water can’t sink a ship unless it gets inside the ship. Similarly, the negativity of the world can’t put you down unless you allow it to get inside you. -*_-Goi Nasu_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>49,
                'description'=> "It's easy to look at people and make quick judgements about them, their present and their past, but you'd be amazed at the pain and tears a single smile hides. What a person shows to the world is only one tiny fascet of the iceberg hidden from sight. And more often than not, it's lined with cracks and scars that go all the way to the foundation of their soul. -*_-Sherrilyn Kenyon_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
            [
                'quote_number'=>50,
                'description'=> "No man chooses evil because it is evil; he only mistakes it for happiness, the good he seeks.. -*_-Mary Wollstonecraft_*",
                'reactions' => [
                    '✍' => ['1234']
                ]

            ],
        ];

        DB::table('quotes')->insert($quotes_two);
    }
}
