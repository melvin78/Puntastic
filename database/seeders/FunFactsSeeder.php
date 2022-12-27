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
                    '😮' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 3,
                'description' => "The measurement of time⌚, the second, is called that because it's the second division of the hour.",
                'reactions' => [
                    '😲' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 4,
                'description' => "90% of the population on Earth 🌏 lives in the Northern Hemisphere.That's because most of the land on Earth is in the northern hemisphere.",
                'reactions' => [
                    '😀' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 5,
                'description' => "There are more trees 🌳 on Earth than stars in the Milky Way. Around 3 trillion trees to 100 billion stars ⭐✨",
                'reactions' => [
                    '👽' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 6,
                'description' => "There are more trees 🌳 on Earth than stars in the Milky Way. Around 3 trillion trees to 100 billion stars ⭐✨",
                'reactions' => [
                    '👽' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 7,
                'description' => "Humans 🧔 are the best endurance runners on the planet, able to outrun ANY species given enough distance/time. And our favored method of hunting was to keep following our prey, throwing stuff at it whenever it stopped to rest, until it dropped dead of exhaustion.😤",
                'reactions' => [
                    '😨' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 8,
                'description' => "Natural Gas ⛽⛽ has no smell. The smell that people associate with natural gas (mercaptan) is added to the gas lines to allow people to detect it before an accident occurs.",
                'reactions' => [
                    '🤨' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 9,
                'description' => "Natural Gas ⛽⛽ has no smell. The smell that people associate with natural gas (mercaptan) is added to the gas lines to allow people to detect it before an accident occurs.",
                'reactions' => [
                    '🤨' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 10,
                'description' => "Hippos have pink urine",
                'reactions' => [
                    '😶' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 11,
                'description' => "Human beings only use one nostril👃 at a time. Each nostril takes a turn at being dormant (about five minutes), as the other nostril does all the work. The process is then reversed and the resting nostril takes over.  ",
                'reactions' => [
                    '🤯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 12,
                'description' => "Human beings only use one nostril👃 at a time. Each nostril takes a turn at being dormant (about five minutes), as the other nostril does all the work. The process is then reversed and the resting nostril takes over.  ",
                'reactions' => [
                    '🤯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 13,
                'description' => "Since most people are right handed🤜, in WW2 the Germans were specifically trained to eat with their left hand, so that finding spies from other countries would be easier to spot.",
                'reactions' => [
                    '🤯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 14,
                'description' => "When unable to tell the difference between a bone 🦴 and a rock in the archaeological field, it’s not uncommon to press it to one’s tongue. If it falls, it’s a rock, and if it sticks, it’s bone",
                'reactions' => [
                    '😶' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 15,
                'description' => "Human's ability smell petrichor (smell of wet earth from rain) is greater than a Shark's🦈 ability to smell blood in water.",
                'reactions' => [
                    '😶' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 16,
                'description' => "Muscles 💪 do not develop the same in everyone and their exact origins/insertions can differ between people. In some the biceps have three or more heads, as opposed to the normal two. Some muscles are entirely absent, such as the psoas minor (found in about 40% of humans) and the sternalis (only 7.8%).",
                'reactions' => [
                    '😶' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 17,
                'description' => "The shell is part of the turtle’s skeleton...And to add to that a lot of people don’t know that turtles 🐢 have nerves in their shells",
                'reactions' => [
                    '😯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 18,
                'description' => "Eugene Aldrin, the father of the famous moon landing astronaut Buzz Aldrin, not only witnessed the Wright brothers’ first flight but also went to see his son land on the moon in his lifespan. We’ve been quick! ⚡",
                'reactions' => [
                    '😯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 19,
                'description' => "There was a phantom poop on an Apollo mission. A poop, floating around, that none of the astronauts said was theirs. 🤣.....*_i wouldn't own up either_*",
                'reactions' => [
                    '😯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 20,
                'description' => "Butterflies and Moths can drink blood and tears in order to get nutrients😋. It’s called Mud-puddling. I think more horror movies should use this.",
                'reactions' => [
                    '😯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 21,
                'description' => "Komodo dragons 🐲🐲 are the largest animals in the world capable of reproducing asexually.to explain further, its called parthenogenesis. Its not like they suddenly split in two like bacteria do, its a method of reproduction for if the female isnt able to reproduce sexually. They'll lay and hatch an unfertilized egg, literally creating a clone of themselves that has an exact copy of their DNA",
                'reactions' => [
                    '🤨' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 22,
                'description' => "When a person receives a kidney transplant they don’t take out the old kidneys 🩺, they just shove em to the side and leave em in there.",
                'reactions' => [
                    '🤨' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 23,
                'description' => "Emma Morano of Italy  was the last (documented and verified) 👵 person to die that was born in the 1800s. 29th November 1899 - 15th April 2017",
                'reactions' => [
                    '😮' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 24,
                'description' => "Your eyeballs 👀 have a separate enclosed immune system than the rest of your body. If somehow the two become aware of each other, your body will think your eyes are invaders and literally attack and dissolve them. Also, for those that are panicking😖: it only happens with eye puncture injuries and even then, in very rare cases. Even rarer in eye surgeries.",
                'reactions' => [
                    '😮' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 25,
                'description' => "The sun 🌞 is not yellow. When viewed outside earths atmosphere it is white ⚪. It only looks yellow due to our atmosphere 'pulling' the blue light out, leaving it looking yellow. It's an illusion. To expand on that, the shorter wavelength colors (blue, violet) are more easily refracted and scattered by particles in the atmosphere, leaving the longer wavelength colors (red, orange) to actually make it to our eyes. It's also why if there's a lot of smoke in the sky, the sun looks even more intensely red. More particles for more colors to be refracted by, leaving nothing but red 🔴",
                'reactions' => [
                    '😮' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 26,
                'description' => "Trees 🌳 existed for 60 million years before anything evolved to digest cellulose.For 60 million years, trees just grew until their shallow roots couldn’t hold them up, then they fell over. And piled up, without rotting or decomposing.For 60 million years!!! 😱.",
                'reactions' => [
                    '😲' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 27,
                'description' => "When the Rubix Cube was first released a mathematician said it would take the average person 30 years, working 8 hours a day, to solve a cube saying it was impossible for someone without a master's in mathematics to solve it in under a month. 😆 Jokes on him",
                'reactions' => [
                    '🤣' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 28,
                'description' => "If you thoroughly shuffle a deck of cards 🃏, the exact order they’re in has almost certainly never been duplicated in the history of shuffled decks. There are hundreds of billions of stars in each galaxy in the universe, and there are hundreds of billions of galaxies. The number of stars in the known universe is estimated at about 200 billion trillion.
That looks like this: 200,000,000,000,000,000,000,000.

he number of possible combinations in a 52-card deck looks like this:
80,658,175,170,943,878,571,660,636,856,403,766,975,289,505,440,883,277,824,000,000,000,000",
                'reactions' => [
                    '😱' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 29,
                'description' => "Some people don’t have a inner dialogue, some can’t picture in their mind 🧠, and some have / can do both. Multisensory aphantasia is the absence of any sense within the mind. Research in the area has exploded with the last 10 years. People with aphantasia had no idea others could see/hear things in their minds.",
                'reactions' => [
                    '😯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 30,
                'description' => "Stephen Hawking died on March 14, the Pi Day, which is also the birthday of Albert Einstein.🎂",
                'reactions' => [
                    '😯' => ['1234']
                ]

            ],
        ];

        $fun_facts_two = [
            [
                'fun_fact_number' => 31,
                'description' => "There’s a vast difference between a million and a billion. A simple way to visualize it: a million seconds is over 11 days⏳. A billion seconds is just under 32 years.",
                'reactions' => [
                    '😲' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 32,
                'description' => "The Guinness book of records was invented by the Guinness beer folks 🍻. They figured a book of verifiable facts would help stop bar arguments.",
                'reactions' => [
                    '😮' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 33,
                'description' => "The amount of water in 💧, on, and above planet earth does not increase or decrease. It's always in a constant cycle🤽‍♂️. Even the water humans use. we’re drinking the same water the dinosaurs 🐉 did and it makes sense",
                'reactions' => [
                    '😮' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 34,
                'description' => "You know that feeling like you’re falling you get when you’re falling asleep? 🛌That happens because sometimes your muscles relax and your heart rate slows down too quickly that your body thinks you’re dying. So, it gives you that falling sensation which jolts you awake😅. Hypnic jerk. There’s some thought that it might be an evolutionary hold over to keep us from falling out of trees 🌲 while we sleep.",
                'reactions' => [
                    '😮' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 35,
                'description' => "You know that feeling like you’re falling you get when you’re falling asleep? 🛌That happens because sometimes your muscles relax and your heart rate slows down too quickly that your body thinks you’re dying. So, it gives you that falling sensation which jolts you awake😅. Hypnic jerk. There’s some thought that it might be an evolutionary hold over to keep us from falling out of trees 🌲 while we sleep.",
                'reactions' => [
                    '😮' => ['1234']
                ]
            ],

            [
                'fun_fact_number' => 36,
                'description' => "Nibling is a word siblings are your brothers and sisters, niblings are you're nieces and nephews",
                'reactions' => [
                    '😄' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 37,
                'description' => "Nibling is a word siblings are your brothers and sisters, niblings are you're nieces and nephews",
                'reactions' => [
                    '😄' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 38,
                'description' => "Platypus have a 6th sense. 👁 They can detect electrical currents in muscles so that they know where you're going to move before you do. They also have poisonous claws. They're essentially the perfect hunter trapped in an adorably retarded body.",
                'reactions' => [
                    '😮' => ['1234']
                ]
            ],

            [
                'fun_fact_number' => 39,
                'description' => "A bowhead whale 🐋 was killed in Alaska in 2013 by local whalers. They found the tip of a harpoon embedded in it's blubber that dated back to the 1880's- a whale had survived over 130 years with a victorian-era harpoon in it's neck.",
                'reactions' => [
                    '😮' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 40,
                'description' => "Mammoths were still alive during the building of the Pyramids. 🐘🐘",
                'reactions' => [
                    '😧' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 41,
                'description' => "There is a planet covered in 'burning' ice. It is called Gliese 436 b. Its surface is at a constant 800ºF, but the ice remains as a sort of ice because the atmospheric pressure of the planet is so incredibly powerful that it compresses all of the water vapour into a solid state. It is actually called ice X. When I say 'burning', I don't mean the thing is on fire, but more that it's just incredibly hot.",
                'reactions' => [
                    '😱' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 42,
                'description' => "111,111,111 x 111,111,111 = 12,345,678,987,654,321 Just one of the little things that makes math beautiful. 🧮",
                'reactions' => [
                    '😱' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 43,
                'description' => "111,111,111 x 111,111,111 = 12,345,678,987,654,321 Just one of the little things that makes math beautiful. 🧮",
                'reactions' => [
                    '😱' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 44,
                'description' => "Otters have pouches where they store their favourite pebble ",
                'reactions' => [
                    '😱' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 45,
                'description' => "Lion 🦁🦁 tamers use chairs because lions are wired mentally to focus on one thing and attack it, with the four prongs of a chair coming at it, it backs off.",
                'reactions' => [
                    '😳' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 46,
                'description' => "Carrots🥕 were originally purple.The Dutch monoarch carrot planted seeds together until the carrots grew orange to match their royal colour - The House of Orange. Orange carrots were a symbol of prestige.",
                'reactions' => [
                    '😳' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 47,
                'description' => "If you put a piece of pineapple 🍍 somewhere in your mouth it will start eating you. It has proteins that degrade meat. This is why people who work in pineapple plantations have obscured or removed fingerprints. So keep that in mind😝 in case you decide to become a °serial killer° pineapple farmer.",
                'reactions' => [
                    '😳' => ['1234']
                ]
            ],

            [
                'fun_fact_number' => 48,
                'description' => "From when it was discovered to when it was declassified as a planet, Pluto did not make a full orbit around the sun.🌞.I think this is sad😓. It's like being told you're invited to a party, then being uninvited after you're halfway there.",
                'reactions' => [
                    '😂' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 49,
                'description' => "Our closest galactic neighbor (Andromeda) will collide with our galaxy (The Milky Way)🌌. In about 4 billion years that is. The resulting collision will make for a beautiful night sky. Too bad humans and all other terrestrial life will be long gone by then seeing that our Sun will dry up the surface of the Earth by then.",
                'reactions' => [
                    '😥' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 50,
                'description' => "Hippopotomonstrosesquippedaliophobia is the fear of long words.",
                'reactions' => [
                    '😁' => ['1234']
                ]
            ],
        ];

        DB::table('fun_facts')->insert($fun_facts_two);
    }
}
