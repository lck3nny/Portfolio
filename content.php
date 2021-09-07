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
    $my_projects = ["Avalanche Prediction", "Pokémon Generator", "Photography", "Surrey Snowsports", "SNKRS", "Let's Connect"];
    
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    // Avalanche page content
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    $avi_explained =    ["Data",
                        "Network",
                        "Prediction"];

    $avi_explained_body =   ["As with any learning process, data is required to provide example and context to a scenario. In the
                            case of Avalanche Prediction, weather data was combined with avalanche data to create a novel dataset. 
                            First comes clearning and repairing. As many datasets are created without supervision, there are often
                            many missing, incomplete or otherwise corrupted values. Data First-Aid is the first and one of the most
                            important parts of any machine learning process.
                            It is important to remove data which is not useful or confusing to the network as this will only 
                            obfuscate the learning process, while retaining as much useful data as possible. Furthermore, many
                            examples of data require context, for example Temperature. Variations +/- of 0° are much more significant 
                            than those firmly in the + or - scale. Data normalisation is a technique used to adapt the way data is
                            displayed to the network. Finding the apropriate technique to normalise each variable is a very important
                            process and, done wrong, can lead to an inability to learn from the data.",

                            "There are many types of Machine Learning techniques and Neural Netowrks make up only a subsection. 
                            For the problem of predicting avalanches, the effects of weather can perpetuate weaknesses in the snow
                            structure for weeks or even months. Therefore, it was important to utalise a network which considered 
                            the long term effects of data. Recurrant Neural Networks (RNNs) allow data to be passed forward, from 
                            one prediction to another. This prevents data from viewed ",

                            "Understanding patterns in data allows us to make predictions about how future data may behave. Allowing 
                            the network to 'train' is a process by which nodes within the network adapt to particular input patterns. 
                            When similar patterns are fed in, the network's goal is to recognise important features and categorise
                            the input data appropriately. As the network trains, it may predict corrently or incorrectly. The success
                            of each prediction is fed back into the network and provides feedback, directly impacting how each node 
                            is configured. Just like a person, this learning process can be confusing and take a lot of examples
                            to successfully learn. Once training is complete and the network is able to predict at a satisfactory
                            accuracy, fresh data is fed into the network. This time, predictions can be used on real-world examples,
                            providing useful insight to users that would be much too complicated for a human to calculate. "];
    
    
    $avi_prediction_tagline = "The Science behind the predicting a catastrophe";
    $avi_vairables_subtitle = "Visualising the data - Take a step back";
    $avi_architecture_subtitle = "The structure of an LSTM network";
    $avi_architecture_body =    "With an LSTM (Long-Short Term Memory) structure, new and past data are fed into the module simulatneously. Next, it decides which
                                parts of the data to keep and which to discard. Any data being kept is added to the 'cell state'
                                 to be fed into the next iteration. With both the new and historical data, a prediction is made
                                for this round and the entire process is repeated. This allows the network to make it's predictions
                                with context of what has previously occured while discarding any irrelevant data as it moves to the 
                                next prediction cycle. ";
    $avi_results_subtitle = "Here's how it went";

    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    // Pokemon page content
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $pokemon_how_subtitle = ["Generative Adversarial Network", "Convolutional Neural Network"];
    $pokemon_results_subtitle = "We made a brand new Pokémon!";
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
?>