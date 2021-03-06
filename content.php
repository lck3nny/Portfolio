<?php
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    // General content
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $lorem_ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";


    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    // Home page content
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    
    $my_name = "Liam Kenny";
    $my_age = floor((time() - strtotime('1995-10-11')) / 31556926);
    $my_tagline = "Developer";

    $my_skills = ["Software Development", "Data and Analytics", "Machine Learning"];

    $my_skills_bodys =      ["Building Web and Mobile apps is a hugely <span class='key-word'>rewarding</span> process. With instantaneous visual feedback
                            and a tangable results, these projects have shaped my programming and <span class='key-word'>motivated</span> me
                            towards bigger and more challenging endeavours. I have experience programming in multiple
                            frameworks including: <span class='key-word'><i>SpringMVC</i></span>, <span class='key-word'><i>Ruby on Rails</i></span> and 
                            <span class='key-word'><i>Android Studio</i></span> utilising <span class='key-word'>Java</span>, 
                            <span class='key-word'> HTML</span>, <span class='key-word'> CSS</span>, <span class='key-word'> JavaScript</span>,
                            <span class='key-word'> PHP</span> and <span class='key-word'> XML</span> to create responsive, intuitive and stable builds.", 

                            "Data requires <span class='key-word'>security</span>; ensuring safe, effective
                            and appropriate storage and processing. It has never been more important to understand
                            the risks and rewards that come with this. <span class='key-word'><i>Python</i></span> tools such as <span class='key-word'><i>Pandas</i></span> 
                            and <span class='key-word'><i>MatPlotLib</i></span> have
                            allowed me to comprehend complex and confusing datasets. <span class='key-word'><i>Linux</i></span> networking tools helped me to
                            better implement network security. <span class='key-word'>Risk Analysis</span> has given new insight into mitigating
                            data breaches which we see ever more frequently.",   

                            "Machine Learning and AI have contributed to some of the <span class='key-word'> most
                            exciting</span> breakthroughs in my lifetime. Being able to utalise these complex algorithms to
                            create new meaning from data has <span class='key-word'> driven</span> me to become the programmer I am today. My experience
                            with Machine Learning includes: <span class='key-word'> <i>Neural Networks</i>  (MLP, CNN, GAN, LSTM) </span>, 
                            <span class='key-word'><i>Computational Intelligence</i> 
                            (Evolutionary Algorithms, Swarm Intelligence) </span> and <span class='key-word'><i>Reinforcement Learning</i></span>, among others."];

    $about_me_tagline = "I am a Developer based out of Whistler, BC";
    $about_me_bodys =   ["I am an enthusiastic " . $my_age ." year old with a passion for technology and the outdoors. 
                        After graduating from The University of Surrey, UK, I followed my childhood dream 
                        of moving to Whistler, BC. Having spent two years working through the pandemic, I 
                        am ready to start my next adventure.", 

                        "Science and technology have always been fascinating to me. The study of how, and more
                        importantly, why things work has been the driving force in my study. My dream is to
                        combine my love for the outdoors with my love for science, working with weather and
                        climate data to explore solutions to our dying planet."];
    
    $projects_tagline = "Here's what I've been working on";
    $my_projects = ["Avalanche Prediction", "Pok??mon Generator", "Photography", "Surrey Snowsports", "SNKRS", "Let's Connect"];
    
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    // Avalanche page content
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    $avi_explained =    ["Data",
                        "Network",
                        "Prediction"];

    $avi_explained_body =   ["Both the quality and quantity of life lessons somebody encounters significantly effects how experienced that
                            individual is at a particular task. The same can be said about the data provided to a computer learning model. 
                            It is therefore crutial to the success of an ML model to input useful and easily recognisable data, while ensuring
                            that there is sufficient data to learn from. For this reason, I combined avalanche data from the Utah Avalanche Centre,
                            with weather data the NOAA (National Oceanic and Atmospheric Administration) to form my own novel dataset. 
                            This gave me 10 winters of well documented avalanche activity to learn from, a smaller than desirable amount, but 
                            significant nonetheless.
                            ",

                            "Neural Networks allow computers to quickly and efficiently find trends in data. The learning process
                            requires many training cycles, where nodes within a network (just like neurons in the brain) adapt over time
                            to recognise patterns relating to trends within the data. This allows computers to determine for themselves
                            which features are more or less relavent to a decision. An LSTM (Long-Short Term Memory) network uses a
                            recurrant technique to make use of prior experience, giving context to the data rather than analysing each
                            new input in isolation. When dealing with accumulated snow, the events of the past day, week or month can
                            have a significant effect on the stability of the snowpack.",

                            "With a solid dataset and a machine learning model which appropriately handled data for my task, it was possible to
                            begin training and prediciton. The goal of my network was to predict the occurance of an avalanche on a particular day,
                            either 'true' or 'false'. Avalanches occured on aproximately 48% of days, meaning that a model could simply
                            pick 'false' during each attempt and score an accuracy of 52%. This number defines the baseline prediction accuracy
                            for the project. My goal was to improve apon the baseline accuracy by 10%. Predicting at a minimum of 62% accuracy
                            would successfully prove the concept of LSTM structures providing useful insight into the field of avalanche
                            prediction. "];
    
    
    $avi_prediction_tagline =   "The Science behind the predicting a catastrophe";
    $avi_prediction_bodys =     ["Almost all avalanche prediction is carried out by highly trained individuals who spend years learning the
                                intricacies of snow science, slope angles and wind loading. The 'snowpack' referrs to the accumulation of
                                snow across a winter, forming layers similar to those of a sedimentary rock. Some light and fluffy, some heavily
                                crystalised, layers in the snowpack are never the same. It's differences in the layers that can cause weaknesses
                                to form in the snowpack. After enough instability and an ever important trigger, an avalanche may occur. Snow on an
                                angle will suddnely begin to slide, carrying people, rocks and trees down the slope, mixing them around
                                and depositing them at the bottom of the valley.",
                                "Understanding the full complexities of a snowpack under constantly variable conditions is simply not possible
                                for a person. Much of this data processing can be done by computers with a much higher tollerance for mathmatical
                                calculation. A tool such as this could help suppliment the work that is done by these experts, allowing them to
                                focus their attention on planning and prevention."];

    $avi_vairables_subtitle = "Visualising the data - Take a step back";
    $avi_vairables_body =   "Below, you can see the recorded temperatures for 10 winters in the town of Logan, Utah. While the overall trend within the
                            season remains the same, variations in the length or intensity of cold / warm periods can cause a huge impact to snowpack
                            stability. A change of 1?? could have very little impact to snow and ice at -20??, whereas a change of 1?? around 0?? would mean
                            the difference between melt and thaw. ";
                            
    $avi_architecture_subtitle = "The structure of an LSTM network";
    $avi_architecture_body =    "With an LSTM (Long-Short Term Memory) structure, new and past data are fed into the module simulatneously. Next, it decides which
                                parts of the data to keep and which to discard. Any data being kept is added to the 'cell state'
                                 to be fed into the next iteration. With both the new and historical data, a prediction is made
                                for this round and the entire process is repeated. This allows the network to make it's predictions
                                with context of what has previously occured while discarding any irrelevant data as it moves to the 
                                next prediction cycle. ";
    
    $avi_results_subtitle = "Here's how it went";
    $avi_results_bodys =    ["The graph seen to the right shows the accuracy of predictions made on the validation set across three seperate
                            tests. 9-Fold Cross-Validation was used in order to better represent predictions of the network across the dataset.
                            This is done by changing the portion of data that the network was training on: 1/3, 3/6 and 6/9. These slices were
                            chosen to allow the network to train from full winter seasons, instead of splitting data mid winter. 
                            With a baseline accuracy of the dataset at 52%, the target prediciton accuracy is marked by the blue line,
                            at 62%. You can see that the earliest fold (with the least accurate data) performed the worst, while the other two
                            folds either met or exceeded the target accouracy for the network.",
                            "The latter graph displays an AUC - ROC curve. This is a performance measure, displaying the seperability of the data.
                            A model which is totally unable to seperate a positive and negative result will fall along the 45?? line. Any curve above 
                            this line shows that the network was successfully able to distinguish between a positive and negative result. 
                            This measure clearly shows that the network was successful while using a 'loss' of Binary-Cross-Entropy' and an
                            opsimiser of 'Adam'. This model became the final and most successful model of the project, predicting significantly
                            above the target accuracy. "];

    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    // Pokemon page content
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    $pokemon_about_heads = ["Data", "Creation" ,"Categorisation"];
    $pokemon_about_bodys = ["As a franchise dating back to the early '90s, the world of Pok??mon is vast. There are 809 official characters across 8 
                            'generations' so far, with statistics and categories for each. There is a well documented collection of official Pok??mon
                            images too, with characters in different poses or executing different moves. This makes for a large and well documented
                            dataset. Further to this, there are many unofficial Pok??mon which have been added by fans; many of which with a full list
                            of attributes. Working with images can often by difficult, with so much variation in background, subject and size. However,
                            Pok??mon provide a consistent background and shape of image, making this dataset the perfect candidate for machine learning.",
                            "The first step in our process was to create a brand new Pok??mon. In order to do this, we would need a large dataset to learn
                             from. In order to improve our learning capibilities, we flipped each image horizontally, doubling or dataset. This allowed us
                             to feed in extra datapoints to the network without over-training.<br><br><br>The training process for a creation network such as a GAN
                             was long and arduous. The processing times for training took days for this stage; a significant increase from any other learning
                             models which we had trained in the past. ",
                            "With our new Pok??mon output from the previous step, we needed to provide the character with a 'type' attribute - a fundamental
                            statistic which defines which group the Pok??mon belongs to. Similarly to the previous step, we expanded our database, this time 
                            going one step further. We flipped the Pok??mon images both vertically and horizontally, expanding our dataset 4-fold. As much
                            of the caterisation relied on color and shape, using an inverted image would not hinder the network's ability to categorise
                            a character into one of 18 categories. This allowed us to vastly improve our accuracy when predicting, resulting in a very
                            understandable choise of 'Grass - Bug' for our small, green friend. "];
    $pokemon_how_subtitle = ["Generative Adversarial Network", "Convolutional Neural Network"];
    $pokemon_how_bodys =    ["A GAN consists of two seperate networks, each aiming to fool one another. The 'Generator's' role is to take a square of
                            pure noise and adapt it to form a new, recognisable image. Meanwhile, the role of the 'Discriminator' is to inspect an image
                            and determine it as 'real' or 'fake'. These two networks battle, with an improvement in one network encouraging the other to
                            do a better job. This is a very slow process, requiring many rounds of training, but one which can achieve some outstanding
                            results",
                            "A CNN takes an image as an input, itterating over it in small steps to produce a feature-focused output. After this process is
                            repeated a number of times, a 'Dense' layer interprets the convoluted input and outputs a series of probabilities relating to
                            the likelyhood of falling into each predefined category. Image processing and pre-training can be used to speed up this learning
                            process, removing the need for a network to complete early steps such as edge or object detection."];
    
    $pokemon_results_subtitle = "We made a brand new Pok??mon!";
    $pokemon_results_bodys =    ["Our goal for this project was to create a completly novel Pok??mon with a 'type' arritbute; using a Generative Adversatial Network
                                to create our Pok??mon and a Convolutional Neural Network to categorise it. We created an image which can be easily recognised as a
                                cartoon style character, bursting with color, an animal-esque shape and even an eye ball! Our small, green creation was categorised
                                as a 'Grass - Bug' type, a very beleivable outcome for such a character. 
                                ", "Below, you will find a copy of our final research poster, going in depth into the creation, success and process behind this research
                                project. "];
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    // Snowsports page content
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    $snow_explained =  ["Creation",
                        "Training",
                        "Competition"];

    $snow_explained_bodys = ["Prior to my involvement in the club, Surrey Snowsports (SuSnow) offered ski and snowboard racing for team members
                            and a yearly ski trip to the Alps. My love for snowboarding got me hooked, however racing was not where my passion
                            truely lied. After winning consecuative local races, my Race Captain signed me up for the biggest university snowsports
                            competition in the UK, bringing together hundreds of competitors from across the country. After asking about the possibility
                            of competing in freestyle, I placed 6th overall, scoring our university it's first ever freestyle snowboarding points. After 
                            the success of this event, I planned with the club to create a new role of 'Freestyle Captain' in order to establish freestyle
                            snowsports as a permanent part of SuSnow.",

                            "Eatablishing a new disapline within the club required budget meetings with our Studen's Union, sourcing quality equiptment
                            for a range of abilities and sizes, arranging sponsorship with local businesses to secure club discounts and creating agreements
                            with training facilities for scheduled sessions at a competative rate before the role was even off the ground. During the semester,
                            I arranged weekly trips to a local snow centre where I would manage bookings, transport and passes. These sessions were open to
                            skiers and snowboarders of intermediate ability and above with training provided by myself. For snowboarding, this was fairly straight
                            forward, but for skiing, a disapline I had never been involved in.",

                            "It was important for me to fully establish the role I had created by bringing a group of athletes to competition. In order to do this,
                            I ran a number of additional coaching sessions, aimed at aerial awareness on trampolines. These sessions allowed athletes to safely
                            practise dangerous tricks before competition with supervision from myself and a training partner. In addition to these sessions, professional
                            training was offered to a select few who were interested in competing. In our first year of running Freestyle as a disapline, we achieved
                            two podium positions: 1st Place Womens Freestyle Ski and 3rd Place Womens Freestyle Snowboard. This was a huge success for myself and the
                            club as a whole.  "];

    $snow_role_subtitle = "It's more than just a few cool tricks";
    $snow_role = ["Outside of 'Freestyle Captain' everyone within the SuSnow committee was responsible for the daily administration of the club. In order to function,
                we needed to run a series of fundraser events throughout the year. These included our legendary 'Whiteout' bar crawel as well as merchendise creation
                and sales. As committee members, we were all responsible for ensuring that the club had enough cashflow to function, while providing a fun and welcoming
                environment for our members.", "Further to our fundasing events, we partnered with charities such as Mind and Disability Snowsports UK in order to give 
                back to the community and culture which had helped support our club to where it stands today. Such events ranged from Sit-Ski Tuition for less-able athlets
                to a ski and snowboard judging course, certifying participents in entry-level judging for the competitions we regularly compete in."];
    
    $snow_trip_subtitle = "THE BIGGEST EVENT OF THE YEAR";
    $snow_trip_bodys = ["In addition to the many responsibilities of being a part of the SuSnow committee, planning and executing a ski trip for over 300 students was
                        by far the biggest. Our designated 'Trip Organiser' took the lead when it came to negotiating and planning the ins and outs of the trip, while
                        much of the legwork of promiting, selling and marketting our event was shared evenly througout the committee. ", 
                        "The responsibility of running such a monumentous trip was one of the most rewarding parts of the year. We were able to share our love and passion 
                        for snowsports with our valued members, bringing together all parts of the club for one well-deserved post-exam party. Follow the link below for
                        our trip video, professionally currated by Matt Greenwell.
                        "];
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    // Sneakers page content
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    $snkrs_explained =  ["Limited Quantities",
                        "Collaboration",
                        "Hype"];

    $snkrs_explained_body =     ["While most sneakers are mass-produced, a continuous stream of limited releases scatters the calendar.
                                These releases are somewhat unconventional to a standard buying experience, requiring a successful raffle 
                                entry to be able to purchase the item. Even with 20 / 30 different raffles from retailers across
                                Europe and North America, only a small percentage ever get the opportunity to purchase these limited-edition sneakers. 
                                The discrepancy between supply and demand forms the basis of sneaker trading, creating a profitable market.",

                                "A large proportion of limited sneaker releases are collaboration projects between brands, artists and designers. 
                                These projects allow much greater creative control than your standard sneaker design; 
                                starting from the ground up, giving designers choice over materials, patterns and even creating new silhouettes.
                                Creations such as these stand out from the saturated world of mainline sneakers.
                                These collaborations make for highly sought after releases, with much less supply than there is demand.
                                It is easy to see why these models often fetch prices much higher than their original value. ",

                                "From brand new models to retro re-issues, hype plays a huge role in sneaker value. Michael Jordan released his first 
                                shoe, the Air Jordan 1, in a variety of colorways, now known as the 'OG' colourways. These models are rarely re-released 
                                but often play their role in inspiring new models. Paying hommage to the sneaker
                                community's roots often create huge demand for a release, with collectors and sneakerheads paying 100%, 200% or even more
                                over the retail value for a shoe. "];


    $snkrs_depop_subtitle = "This is where I sell my items!";
    $snkrs_depop_body =     "There are many platforms for selling sneakers and clothing; one of the most popular being Depop. This site provides an
                            easy search facility with built-in messaging and buyer/seller protection. Although Depop charges a fee for this, Many
                            buyers and sellers believe that it provides peace of mind against inauthentic or poor condition items. Marketplaces such as
                            <a href='https://www.grailed.com/lck3nny'>Grailed</a>, Facebook and Instagram also play a huge role in sneaker sales. Being a part of the community and understanding trends
                            in the market is critical to a profitable portfolio.";

    $snkrs_profit_subtitle = "At the end of the day, it's all about profit. ";
    $snkrs_profit_body =    "There are many factors which will contribute to the market price of a shoe.
                            One of the most important is the time between the current date and the release date. The longer it has been since a 
                            sneaker was released, the rarer that sneaker is, specially in brand new condition. Holding sneakers for longer periods
                            usually results in a steady climb in value. 'The Peak' can certianly be reached, where comparatively priced sneakers
                            prevent an item from continuing to increase in value, so holding for the right amount of time is crutial to securing a
                            healthy profit.";

    $snkrs_profit_body_2 =    "Below is a graph detailing the price paid for each sneaker within my portfolio and its value, either at the current
                                time, or the value for which it was sold. Profits are hilighted in green, with any losses displayed in orange.";

    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    // Contact page content
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $contact_title = "What's Your Idea?";
    $contact_subtitle = "I'd love to hear all about it!";

?>