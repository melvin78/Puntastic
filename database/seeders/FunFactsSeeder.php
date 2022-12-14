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
                'description' => "Vikings  used the bones ð¦´ of slain animals when smithing new weapons believing this would enchant the weapon with the animals spirit. This actually made the weapons stronger because the carbon in the bones coupled with the iron made a primitive version of steelâ",
                'reactions' => [
                    'ð®' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 3,
                'description' => "The measurement of timeâ, the second, is called that because it's the second division of the hour.",
                'reactions' => [
                    'ð²' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 4,
                'description' => "90% of the population on Earth ð lives in the Northern Hemisphere.That's because most of the land on Earth is in the northern hemisphere.",
                'reactions' => [
                    'ð' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 5,
                'description' => "There are more trees ð³ on Earth than stars in the Milky Way. Around 3 trillion trees to 100 billion stars â­â¨",
                'reactions' => [
                    'ð½' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 6,
                'description' => "There are more trees ð³ on Earth than stars in the Milky Way. Around 3 trillion trees to 100 billion stars â­â¨",
                'reactions' => [
                    'ð½' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 7,
                'description' => "Humans ð§ are the best endurance runners on the planet, able to outrun ANY species given enough distance/time. And our favored method of hunting was to keep following our prey, throwing stuff at it whenever it stopped to rest, until it dropped dead of exhaustion.ð¤",
                'reactions' => [
                    'ð¨' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 8,
                'description' => "Natural Gas â½â½ has no smell. The smell that people associate with natural gas (mercaptan) is added to the gas lines to allow people to detect it before an accident occurs.",
                'reactions' => [
                    'ð¤¨' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 9,
                'description' => "Natural Gas â½â½ has no smell. The smell that people associate with natural gas (mercaptan) is added to the gas lines to allow people to detect it before an accident occurs.",
                'reactions' => [
                    'ð¤¨' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 10,
                'description' => "Hippos have pink urine",
                'reactions' => [
                    'ð¶' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 11,
                'description' => "Human beings only use one nostrilð at a time. Each nostril takes a turn at being dormant (about five minutes), as the other nostril does all the work. The process is then reversed and the resting nostril takes over.  ",
                'reactions' => [
                    'ð¤¯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 12,
                'description' => "Human beings only use one nostrilð at a time. Each nostril takes a turn at being dormant (about five minutes), as the other nostril does all the work. The process is then reversed and the resting nostril takes over.  ",
                'reactions' => [
                    'ð¤¯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 13,
                'description' => "Since most people are right handedð¤, in WW2 the Germans were specifically trained to eat with their left hand, so that finding spies from other countries would be easier to spot.",
                'reactions' => [
                    'ð¤¯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 14,
                'description' => "When unable to tell the difference between a bone ð¦´ and a rock in the archaeological field, itâs not uncommon to press it to oneâs tongue. If it falls, itâs a rock, and if it sticks, itâs bone",
                'reactions' => [
                    'ð¶' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 15,
                'description' => "Human's ability smell petrichor (smell of wet earth from rain) is greater than a Shark'sð¦ ability to smell blood in water.",
                'reactions' => [
                    'ð¶' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 16,
                'description' => "Muscles ðª do not develop the same in everyone and their exact origins/insertions can differ between people. In some the biceps have three or more heads, as opposed to the normal two. Some muscles are entirely absent, such as the psoas minor (found in about 40% of humans) and the sternalis (only 7.8%).",
                'reactions' => [
                    'ð¶' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 17,
                'description' => "The shell is part of the turtleâs skeleton...And to add to that a lot of people donât know that turtles ð¢ have nerves in their shells",
                'reactions' => [
                    'ð¯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 18,
                'description' => "Eugene Aldrin, the father of the famous moon landing astronaut Buzz Aldrin, not only witnessed the Wright brothersâ first flight but also went to see his son land on the moon in his lifespan. Weâve been quick! â¡",
                'reactions' => [
                    'ð¯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 19,
                'description' => "There was a phantom poop on an Apollo mission. A poop, floating around, that none of the astronauts said was theirs. ð¤£.....*_i wouldn't own up either_*",
                'reactions' => [
                    'ð¯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 20,
                'description' => "Butterflies and Moths can drink blood and tears in order to get nutrientsð. Itâs called Mud-puddling. I think more horror movies should use this.",
                'reactions' => [
                    'ð¯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 21,
                'description' => "Komodo dragons ð²ð² are the largest animals in the world capable of reproducing asexually.to explain further, its called parthenogenesis. Its not like they suddenly split in two like bacteria do, its a method of reproduction for if the female isnt able to reproduce sexually. They'll lay and hatch an unfertilized egg, literally creating a clone of themselves that has an exact copy of their DNA",
                'reactions' => [
                    'ð¤¨' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 22,
                'description' => "When a person receives a kidney transplant they donât take out the old kidneys ð©º, they just shove em to the side and leave em in there.",
                'reactions' => [
                    'ð¤¨' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 23,
                'description' => "Emma Morano of Italy  was the last (documented and verified) ðµ person to die that was born in the 1800s. 29th November 1899 - 15th April 2017",
                'reactions' => [
                    'ð®' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 24,
                'description' => "Your eyeballs ð have a separate enclosed immune system than the rest of your body. If somehow the two become aware of each other, your body will think your eyes are invaders and literally attack and dissolve them. Also, for those that are panickingð: it only happens with eye puncture injuries and even then, in very rare cases. Even rarer in eye surgeries.",
                'reactions' => [
                    'ð®' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 25,
                'description' => "The sun ð is not yellow. When viewed outside earths atmosphere it is white âª. It only looks yellow due to our atmosphere 'pulling' the blue light out, leaving it looking yellow. It's an illusion. To expand on that, the shorter wavelength colors (blue, violet) are more easily refracted and scattered by particles in the atmosphere, leaving the longer wavelength colors (red, orange) to actually make it to our eyes. It's also why if there's a lot of smoke in the sky, the sun looks even more intensely red. More particles for more colors to be refracted by, leaving nothing but red ð´",
                'reactions' => [
                    'ð®' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 26,
                'description' => "Trees ð³ existed for 60 million years before anything evolved to digest cellulose.For 60 million years, trees just grew until their shallow roots couldnât hold them up, then they fell over. And piled up, without rotting or decomposing.For 60 million years!!! ð±.",
                'reactions' => [
                    'ð²' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 27,
                'description' => "When the Rubix Cube was first released a mathematician said it would take the average person 30 years, working 8 hours a day, to solve a cube saying it was impossible for someone without a master's in mathematics to solve it in under a month. ð Jokes on him",
                'reactions' => [
                    'ð¤£' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 28,
                'description' => "If you thoroughly shuffle a deck of cards ð, the exact order theyâre in has almost certainly never been duplicated in the history of shuffled decks. There are hundreds of billions of stars in each galaxy in the universe, and there are hundreds of billions of galaxies. The number of stars in the known universe is estimated at about 200 billion trillion.
That looks like this: 200,000,000,000,000,000,000,000.

he number of possible combinations in a 52-card deck looks like this:
80,658,175,170,943,878,571,660,636,856,403,766,975,289,505,440,883,277,824,000,000,000,000",
                'reactions' => [
                    'ð±' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 29,
                'description' => "Some people donât have a inner dialogue, some canât picture in their mind ð§ , and some have / can do both. Multisensory aphantasia is the absence of any sense within the mind. Research in the area has exploded with the last 10 years. People with aphantasia had no idea others could see/hear things in their minds.",
                'reactions' => [
                    'ð¯' => ['1234']
                ]

            ],
            [
                'fun_fact_number' => 30,
                'description' => "Stephen Hawking died on March 14, the Pi Day, which is also the birthday of Albert Einstein.ð",
                'reactions' => [
                    'ð¯' => ['1234']
                ]

            ],
        ];

        $fun_facts_two = [
            [
                'fun_fact_number' => 31,
                'description' => "Thereâs a vast difference between a million and a billion. A simple way to visualize it: a million seconds is over 11 daysâ³. A billion seconds is just under 32 years.",
                'reactions' => [
                    'ð²' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 32,
                'description' => "The Guinness book of records was invented by the Guinness beer folks ð». They figured a book of verifiable facts would help stop bar arguments.",
                'reactions' => [
                    'ð®' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 33,
                'description' => "The amount of water in ð§, on, and above planet earth does not increase or decrease. It's always in a constant cycleð¤½ââï¸. Even the water humans use. weâre drinking the same water the dinosaurs ð did and it makes sense",
                'reactions' => [
                    'ð®' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 34,
                'description' => "You know that feeling like youâre falling you get when youâre falling asleep? ðThat happens because sometimes your muscles relax and your heart rate slows down too quickly that your body thinks youâre dying. So, it gives you that falling sensation which jolts you awakeð. Hypnic jerk. Thereâs some thought that it might be an evolutionary hold over to keep us from falling out of trees ð² while we sleep.",
                'reactions' => [
                    'ð®' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 35,
                'description' => "You know that feeling like youâre falling you get when youâre falling asleep? ðThat happens because sometimes your muscles relax and your heart rate slows down too quickly that your body thinks youâre dying. So, it gives you that falling sensation which jolts you awakeð. Hypnic jerk. Thereâs some thought that it might be an evolutionary hold over to keep us from falling out of trees ð² while we sleep.",
                'reactions' => [
                    'ð®' => ['1234']
                ]
            ],

            [
                'fun_fact_number' => 36,
                'description' => "Nibling is a word siblings are your brothers and sisters, niblings are you're nieces and nephews",
                'reactions' => [
                    'ð' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 37,
                'description' => "Nibling is a word siblings are your brothers and sisters, niblings are you're nieces and nephews",
                'reactions' => [
                    'ð' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 38,
                'description' => "Platypus have a 6th sense. ð They can detect electrical currents in muscles so that they know where you're going to move before you do. They also have poisonous claws. They're essentially the perfect hunter trapped in an adorably retarded body.",
                'reactions' => [
                    'ð®' => ['1234']
                ]
            ],

            [
                'fun_fact_number' => 39,
                'description' => "A bowhead whale ð was killed in Alaska in 2013 by local whalers. They found the tip of a harpoon embedded in it's blubber that dated back to the 1880's- a whale had survived over 130 years with a victorian-era harpoon in it's neck.",
                'reactions' => [
                    'ð®' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 40,
                'description' => "Mammoths were still alive during the building of the Pyramids. ðð",
                'reactions' => [
                    'ð§' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 41,
                'description' => "There is a planet covered in 'burning' ice. It is called Gliese 436 b. Its surface is at a constant 800ÂºF, but the ice remains as a sort of ice because the atmospheric pressure of the planet is so incredibly powerful that it compresses all of the water vapour into a solid state. It is actually called ice X. When I say 'burning', I don't mean the thing is on fire, but more that it's just incredibly hot.",
                'reactions' => [
                    'ð±' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 42,
                'description' => "111,111,111 x 111,111,111 = 12,345,678,987,654,321 Just one of the little things that makes math beautiful. ð§®",
                'reactions' => [
                    'ð±' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 43,
                'description' => "111,111,111 x 111,111,111 = 12,345,678,987,654,321 Just one of the little things that makes math beautiful. ð§®",
                'reactions' => [
                    'ð±' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 44,
                'description' => "Otters have pouches where they store their favourite pebble ",
                'reactions' => [
                    'ð±' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 45,
                'description' => "Lion ð¦ð¦ tamers use chairs because lions are wired mentally to focus on one thing and attack it, with the four prongs of a chair coming at it, it backs off.",
                'reactions' => [
                    'ð³' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 46,
                'description' => "Carrotsð¥ were originally purple.The Dutch monoarch carrot planted seeds together until the carrots grew orange to match their royal colour - The House of Orange. Orange carrots were a symbol of prestige.",
                'reactions' => [
                    'ð³' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 47,
                'description' => "If you put a piece of pineapple ð somewhere in your mouth it will start eating you. It has proteins that degrade meat. This is why people who work in pineapple plantations have obscured or removed fingerprints. So keep that in mindð in case you decide to become a Â°serial killerÂ° pineapple farmer.",
                'reactions' => [
                    'ð³' => ['1234']
                ]
            ],

            [
                'fun_fact_number' => 48,
                'description' => "From when it was discovered to when it was declassified as a planet, Pluto did not make a full orbit around the sun.ð.I think this is sadð. It's like being told you're invited to a party, then being uninvited after you're halfway there.",
                'reactions' => [
                    'ð' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 49,
                'description' => "Our closest galactic neighbor (Andromeda) will collide with our galaxy (The Milky Way)ð. In about 4 billion years that is. The resulting collision will make for a beautiful night sky. Too bad humans and all other terrestrial life will be long gone by then seeing that our Sun will dry up the surface of the Earth by then.",
                'reactions' => [
                    'ð¥' => ['1234']
                ]
            ],
            [
                'fun_fact_number' => 50,
                'description' => "Hippopotomonstrosesquippedaliophobia is the fear of long words.",
                'reactions' => [
                    'ð' => ['1234']
                ]
            ],
        ];

        DB::table('fun_facts')->insert($fun_facts_two);
    }
}
