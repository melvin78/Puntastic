<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FunFactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $fun_facts = [

            [
                'fun_fact_number' => 2,
                'description' => "Vikings  used the bones 🦴 of slain animals when smithing new weapons believing this would enchant the weapon with the animals spirit. This actually made the weapons stronger because the carbon in the bones coupled with the iron made a primitive version of steel⚔",
                'reactions' => [
                    '😮'=>['1234']
                ]
            ],
            [
                'fun_fact_number' => 3,
                'description' => "The measurement of time⌚, the second, is called that because it's the second division of the hour.",
                'reactions' => [
                    '😲'=>['1234']
                ]
            ],
            [
                'fun_fact_number' => 4,
                'description' => "90% of the population on Earth 🌏 lives in the Northern Hemisphere.That's because most of the land on Earth is in the northern hemisphere.",
                'reactions' => [
                    '😀'=>['1234']
                ]
            ],
            [
                'fun_fact_number' => 5,
                'description' => "There are more trees 🌳 on Earth than stars in the Milky Way. Around 3 trillion trees to 100 billion stars ⭐✨",
                'reactions' => [
                    '👽'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 6,
                'description' => "There are more trees 🌳 on Earth than stars in the Milky Way. Around 3 trillion trees to 100 billion stars ⭐✨",
                'reactions' => [
                    '👽'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 7,
                'description' => "Humans 🧔 are the best endurance runners on the planet, able to outrun ANY species given enough distance/time. And our favored method of hunting was to keep following our prey, throwing stuff at it whenever it stopped to rest, until it dropped dead of exhaustion.😤",
                'reactions' => [
                    '😨'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 8,
                'description' => "Natural Gas ⛽⛽ has no smell. The smell that people associate with natural gas (mercaptan) is added to the gas lines to allow people to detect it before an accident occurs.",
                'reactions' => [
                    '🤨'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 9,
                'description' => "Natural Gas ⛽⛽ has no smell. The smell that people associate with natural gas (mercaptan) is added to the gas lines to allow people to detect it before an accident occurs.",
                'reactions' => [
                    '🤨'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 10,
                'description' => "Hippos have pink urine",
                'reactions' => [
                    '😶'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 11,
                'description' => "Human beings only use one nostril👃 at a time. Each nostril takes a turn at being dormant (about five minutes), as the other nostril does all the work. The process is then reversed and the resting nostril takes over.  ",
                'reactions' => [
                    '🤯'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 12,
                'description' => "Human beings only use one nostril👃 at a time. Each nostril takes a turn at being dormant (about five minutes), as the other nostril does all the work. The process is then reversed and the resting nostril takes over.  ",
                'reactions' => [
                    '🤯'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 13,
                'description' => "Since most people are right handed🤜, in WW2 the Germans were specifically trained to eat with their left hand, so that finding spies from other countries would be easier to spot.",
                'reactions' => [
                    '🤯'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 14,
                'description' => "When unable to tell the difference between a bone 🦴 and a rock in the archaeological field, it’s not uncommon to press it to one’s tongue. If it falls, it’s a rock, and if it sticks, it’s bone",
                'reactions' => [
                    '😶'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 15,
                'description' => "Human's ability smell petrichor (smell of wet earth from rain) is greater than a Shark's🦈 ability to smell blood in water.",
                'reactions' => [
                    '😶'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 16,
                'description' => "Muscles 💪 do not develop the same in everyone and their exact origins/insertions can differ between people. In some the biceps have three or more heads, as opposed to the normal two. Some muscles are entirely absent, such as the psoas minor (found in about 40% of humans) and the sternalis (only 7.8%).",
                'reactions' => [
                    '😶'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 17,
                'description' => "The shell is part of the turtle’s skeleton...And to add to that a lot of people don’t know that turtles 🐢 have nerves in their shells",
                'reactions' => [
                    '😯'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 18,
                'description' => "Eugene Aldrin, the father of the famous moon landing astronaut Buzz Aldrin, not only witnessed the Wright brothers’ first flight but also went to see his son land on the moon in his lifespan. We’ve been quick! ⚡",
                'reactions' => [
                    '😯'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 19,
                'description' => "There was a phantom poop on an Apollo mission. A poop, floating around, that none of the astronauts said was theirs. 🤣.....*_i wouldn't own up either_*",
                'reactions' => [
                    '😯'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 20,
                'description' => "Butterflies and Moths can drink blood and tears in order to get nutrients😋. It’s called Mud-puddling. I think more horror movies should use this.",
                'reactions' => [
                    '😯'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 21,
                'description' => "Komodo dragons 🐲🐲 are the largest animals in the world capable of reproducing asexually.to explain further, its called parthenogenesis. Its not like they suddenly split in two like bacteria do, its a method of reproduction for if the female isnt able to reproduce sexually. They'll lay and hatch an unfertilized egg, literally creating a clone of themselves that has an exact copy of their DNA",
                'reactions' => [
                    '🤨'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 22,
                'description' => "When a person receives a kidney transplant they don’t take out the old kidneys 🩺, they just shove em to the side and leave em in there.",
                'reactions' => [
                    '🤨'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 23,
                'description' => "Emma Morano of Italy  was the last (documented and verified) 👵 person to die that was born in the 1800s. 29th November 1899 - 15th April 2017",
                'reactions' => [
                    '😮'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 24,
                'description' => "Your eyeballs 👀 have a separate enclosed immune system than the rest of your body. If somehow the two become aware of each other, your body will think your eyes are invaders and literally attack and dissolve them. Also, for those that are panicking😖: it only happens with eye puncture injuries and even then, in very rare cases. Even rarer in eye surgeries.",
                'reactions' => [
                    '😮'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 25,
                'description' => "The sun 🌞 is not yellow. When viewed outside earths atmosphere it is white ⚪. It only looks yellow due to our atmosphere 'pulling' the blue light out, leaving it looking yellow. It's an illusion. To expand on that, the shorter wavelength colors (blue, violet) are more easily refracted and scattered by particles in the atmosphere, leaving the longer wavelength colors (red, orange) to actually make it to our eyes. It's also why if there's a lot of smoke in the sky, the sun looks even more intensely red. More particles for more colors to be refracted by, leaving nothing but red 🔴",
                'reactions' => [
                    '😮'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 26,
                'description' => "Trees 🌳 existed for 60 million years before anything evolved to digest cellulose.For 60 million years, trees just grew until their shallow roots couldn’t hold them up, then they fell over. And piled up, without rotting or decomposing.For 60 million years!!! 😱.",
                'reactions' => [
                    '😲'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 27,
                'description' => "When the Rubix Cube was first released a mathematician said it would take the average person 30 years, working 8 hours a day, to solve a cube saying it was impossible for someone without a master's in mathematics to solve it in under a month. 😆 Jokes on him",
                'reactions' => [
                    '🤣'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 28,
                'description' => "If you thoroughly shuffle a deck of cards 🃏, the exact order they’re in has almost certainly never been duplicated in the history of shuffled decks. There are hundreds of billions of stars in each galaxy in the universe, and there are hundreds of billions of galaxies. The number of stars in the known universe is estimated at about 200 billion trillion.
That looks like this: 200,000,000,000,000,000,000,000.

he number of possible combinations in a 52-card deck looks like this:
80,658,175,170,943,878,571,660,636,856,403,766,975,289,505,440,883,277,824,000,000,000,000",
                'reactions' => [
                    '😱'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 29,
                'description' => "Some people don’t have a inner dialogue, some can’t picture in their mind 🧠, and some have / can do both. Multisensory aphantasia is the absence of any sense within the mind. Research in the area has exploded with the last 10 years. People with aphantasia had no idea others could see/hear things in their minds.",
                'reactions' => [
                    '😯'=>['1234']
                ]

            ],
            [
                'fun_fact_number' => 30,
                'description' => "Stephen Hawking died on March 14, the Pi Day, which is also the birthday of Albert Einstein.🎂",
                'reactions' => [
                    '😯'=>['1234']
                ]

            ],
        ];

        DB::table('fun_facts')->insert($fun_facts);
    }
}
