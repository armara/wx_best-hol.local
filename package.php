<?php
  if (!isset($_GET['p']) || $_GET['p'] < 1 || $_GET['p'] > 6) {
    header('Location: /tours');
  } else {
    $tour_number = $_GET['p'];
  }
  $tours = [
    1 => [
      'title' => "Author&#39;s tour: horse trekking in Armenia",
      'desc' => "<p>The animal and plant world of Armenia is unique and original. The reasons for such an amazing biological diversity of this region lie in its special geological location. The flora and fauna of Armenia is an amazing and impressive combination of European, Asian and African features, while standing out with a large number of unique species found only in the Caucasus.</p><p>The tour operator \"ExploreArmenia.am\" offers an <strong>exclusive horse tour (7 days / 6 nights)</strong> in the surroundings of territory of the Khosrov reserve, the Urtskiy ridge and the Dahnak mountains, where the Red Book animals live in large numbers - bezoar goat, Armenian mouflon, Caucasian bear, lynx etc. The <strong>horse trekking route</strong> crosses the migration path of a rare Caucasian leopard (if you wish, you can explore the cameras - traps set in the path of this rare predator). The flora of this region is also unique with a large number of endemic, rare and endangered biological species. The ornithological component of the tour is also sorough. On the route of our horse expedition in Armenia there is an opportunity to see the Caspian snowcock, bearded, stone partridge, daytime birds of prey and other rare species of birds.</p><p>Not only the biological agenda of the proposed exclusive campaign in Armenia is rich. During the <span style=\"text-decoration: underline\">excursion on horseback</span> we will study a lot of cultural and historical monuments - monasteries, churches, khachkars (stones-crosses) of ancient tombstones and cemeteries. The first we are waiting for the fortress-monastery of 10-13 centuries Gevorg Marzpetuni (Tapi Berd) Castle with its unique infrastructure and Arabian cemetery, where we will spend the night. Next we will be amazed with distinctive khachkars and tombstones - the Spitak Khach Church of the 12-13th century. Then, on our way, the high-altitude church of Surb Karapet 13-14 centuries will slowly appear from the clouds.</p><p>In the mountains we will meet with Alpine shepherds who will treat us with natural ecological products, the aroma of which you will remember for a long time. In general, most of the products that we have stored for the days of the tour will be purchased in the nearby villages, which means they will be environmentally friendly and tasty. They will be processed by our staff before our arrival.</p><p><strong>Note:</strong> since the tour is to some <strong>extent extreme,</strong> lovers of extreme tourism at the age of 50-55 years old are allowed to the tour, physically healthy, since the elevation changes on the route range from 1,200 to 2,800 m.</p><p>Meals on the way: breakfast, light lunch on halts and a dense snack in the TENT CAMP.</p><p style=\"color: red\">We draw your attention to the fact that everything that is described in the tour program is already included in its price.</p>",
      'h2' => "Horse riding tour program in Armenia, overnight in tents (7 days/6 nights)",
      'image' => "/images/horse_tour/horse_tour.jpg"
    ],
    2 => [
      'title' => "Walking tour in Armenia. Trekking “To the origins of civilization”",
      'desc' => "<p>Armenia is an ideal place for active recreation and lovers of hiking tours (hikes). Trekking in Armenia will amaze you with beautiful mountain landscapes and a large number of historical monuments.</p><p>Tour operator \"ExploreArmenia.am\" offers a walking tour in Armenia, in the least populated region of Armenia - Vayots Dzor. The region is impressive with its unique species of flora and fauna, most of which are listed in the Red Book, unique landscapes and landscapes, extinct craters and picturesque gorges, alpine meadows, and, in general, natural monuments. Here is the deepest cavern of Armenia, Mozrov, the cave of Archer (the longest) and Magel, the cave of the Areni birds, where the ancient winery and the oldest leather shoe, 6 thousand years old, were discovered.</p><p>Archaeological excavations showed that the territory of Vayots Dzor was inhabited since ancient times, it was here that daggers, bracelets, rings and other objects belonging to the Bronze Age were discovered. However, you yourself will become familiar with the artifacts during the excursion, as well as with the unique cultural and historical monuments of the region. This is the majestic alpine monastery of Noravank, which, due to its features and combination of different types of art, is considered one of the best and original monuments of Armenian architecture.</p><p>During the hike, you will see unique historical monuments of the region: Smbataberd (10-13 century), Tsakhats Kar (10 century), Spitakavor (13th century), Proshaberd (13th century), Berdakar fortress (5th century) and Ketchut (10-13 century), the remains of the ancient settlements of Yeghegis with its ancient Jewish burial, khachkars of the 5-6th century, etc.</p><p>Hospitable, open, strong and kind people are the main attraction of Vayots Dzor. Maybe that's why only here in the Caucasus, side by side with people, bezoar goats (which are in danger of extinction and are listed in the International Red Book), live without fear. You can watch them like other animals from the special observation platform of the village of Shatin. You will see different types of fauna of the region at other heights throughout the hike.</p><p>Hiking tours in Armenia will allow you to better understand yourself, make new friends and experience all the romance of hiking tourism.</p><p style=\"color: red\">We draw your attention to the fact that everything that is described in the tour program is already included in its price.</p>",
      'h2' => "Hiking tour program (trekking) in Armenia (7 days / 6 nights)",
      'image' => "/images/walking_tour/walking_tour.jpg"
    ],
    3 => [
      'title' => "Travelling to Armenia - Sightseeing tour to Armenia (7 days/6 nights)",
      'desc' => "<p>Armenia is a country with a very ancient history and centuries-old traditions. During the <strong>travelling to Armenia</strong>, you will see a magical world, where the story gets even into wrinkles, where everyone has retained their unique identity.</p><p>We <strong>present you a 7-day sightseeing tour in Armenia</strong>. The fertile sightseeing tour program will provide you with an opportunity to learn more deeply about the country with the rich historical and cultural heritage during the <i>travelling to Armenia</i>. You will visit cultural and historical sites, which are now under UNESCO protection, enjoy the unique and original architecture of Armenia, see how the national bread – lavash is baked, taste Armenian national dishes of Armenian cuisine, and of course, get a lot of positive emotions. Travelling to Armenia is the way to feel the taste of life!</p><p>It’s cheap with us; we have the honest prices for sightseeing <i>tours to Armenia</i>! We do not resell the tours and excursions, bur offer our own tours to Armenia without intermediaries. Save your money with us!</p><p>It is possible there will not be anything interesting for you among our offers. So, we are ready to plan <i>a sightseeing tour to Armenia</i> with you for <strong>ANY NUMBER OF DAYS</strong> and places you want to visit.</p><p style=\"color: red\">We draw your attention to the fact that everything that is described in the tour program is included in the price</p>",
      'h2' => "The program of travelling to Armenia (7 days/6 nights)",
      'image' => "/images/sightseeing_tour/sightseeing_tour.jpg"
    ],
    4 => [
      'title' => "Tour to Armenia and Nagorno-Karabakh (Artsakh) – 7 days/6 nights",
      'desc' => "<p>We offer you to take a <strong>week-long tour to Armenia and Nagorno-Karabakh (Artsakh)</strong>. During the historical and cultural tour you will have a unique opportunity to visit the most interesting attractions of <i>2 Armenian States: Republic of Armenia and Nagorno-Karabakh (NKR)</i>.</p><p>Centuries of Armenian heritage can be traced on this 7 days/6 nights unforgettable <i>tour to Armenia and Karabakh (Artsakh)</i>.</p><p>Nagorno-Karabakh (Artsakh) is of great interest for tourists. This is a unique place, where the most things are untouched during centuries. It is the open air museum, where you can get in touch with antiquity and history.</p><p>During the <i>tour to Armenia and Karabakh (Artsakh) you will get acquainted with a large number of monuments, deep and unique cultural traditions, and get a lot of new experiences. You will walk through Yerevan, visit Garni Temple, Geghard monastery, Sevan Lake, Tatev monastery and etc</i>. You will have an opportunity to see the <i>capital of Artsakh - Stepanakert, Shushi fortress, Dadivank monastery, Ancient Tigranakert city </i>and much more.</p><p style=\"color: red\">We draw your attention to the fact that everything that is described in the tour program is included in the price.</p>",
      'h2' => "Tour program of Armenia and Artsakh (Nagorno-Karabakh) - 7 days/6 nights)",
      'image' => "/images/tour_artsakh/tour_artsakh.jpg"
    ],
    5 => [
      'title' => "Cheap trip to Armenia – a weekend tour (3 days/2 nights)",
      'desc' => "<p>If the holiday is still far away, but you want to have a rest and spend an unforgettable weekend, we offer you an amazing <strong>weekendtour to Armenia</strong> to run away from monotonous everyday life and plunge into a bright and hospitable atmosphere of Armenia for the affordable price! During this cheap trip for 3 days you will enjoy sightseeing of our wonderful country. The schedule of <i>this cheap weekend tour to Armenia</i> allows you to see the capital city Yerevan, the biblical Mount Ararat, historical and cultural centers, the objects included in the UNESCO World Heritage List, and to taste national brand of Armenia – cognac.</p><p>If you choose a weekend tour to Armenia, you will get a lot of emotions and positive energy for several months. The warmth and cheerfulness, that surrounds you during the weekend tour to Armenia, will warm you and up to time of your arrival home, leave a range of emotions.</p><p style=\"color: red\">We draw your attention to the fact that everything that is described in the tour program is included in the price.</p>",
      'h2' => "",
      'image' => "/images/weekend_tour/weekend_tour.jpg"
    ],
    6 => [
      'title' => "Tours in Armenia - Excursion trip (5 days/4 nights)",
      'desc' => "<p><strong>Cheap tour</strong> is the dream of every tourist. We present you our five-day <strong>budgetary trip in Armenia</strong>.If you want to spend a full day of sightseeing in Armenia, then these tours are designed special for you. These <strong>cheap tours in Armenia</strong> will be ideal especially for those who are mostly interested in the country’s history and culture, rather than in luxurious conditions of recreation.</p><p>You will have the most intense program of <i>cheap tours in Armenia</i>. During these cheap tours in Armenia you will visit the sights of Armenia, cultural and historical centers, as well as taste the national treasure - Armenian cognac.</p><p style=\"color: red\">We draw your attention to the fact that everything that is described in the tour program is included in the price.</p>",
      'h2' => "The program of the cheap tours in Armenia (5 days/4 nights)",
      'image' => "/images/excursion_tour/excursion_tour.jpg"
    ],
  ];

  $rel_src = [
    'Ambert'=>[
      './images/Ambert/images (2).jpg',
      './images/Ambert/images (3).jpg',
      './images/Ambert/images (4).jpg',
      './images/Ambert/images (5).jpg',
      './images/Ambert/images (6).jpg',
      './images/Ambert/images (7).jpg',
      './images/Ambert/images (8).jpg',
      './images/Ambert/images (9).jpg',
      './images/Ambert/images (10).jpg',
      './images/Ambert/images (11).jpg',
      './images/Ambert/images (12).jpg',
      './images/Ambert/images (13).jpg',
      './images/Ambert/images (14).jpg',
      './images/Ambert/images (17).jpg',
    ],
    'Ararat'=>[
      './images/Ararat/images (9).jpg',
      './images/Ararat/images (10).jpg',
      './images/Ararat/images (11).jpg',
      './images/Ararat/images (12).jpg',
      './images/Ararat/images (13).jpg',
    ],
    'Dilijan'=>[
      './images/Dilijan/images (5).jpg',
      './images/Dilijan/images (6).jpg',
      './images/Dilijan/images (7).jpg',
      './images/Dilijan/images (8).jpg',
      './images/Dilijan/images (9).jpg',
      './images/Dilijan/images (10).jpg',
      './images/Dilijan/images (11).jpg',
      './images/Dilijan/images (12).jpg',
      './images/Dilijan/images (13).jpg',
      './images/Dilijan/images (14).jpg',
      './images/Dilijan/images (15).jpg',
      './images/Dilijan/images (16).jpg',
      './images/Dilijan/images (17).jpg',
      './images/Dilijan/images (18).jpg',
      './images/Dilijan/images (19).jpg',
      './images/Dilijan/images (20).jpg',
      './images/Dilijan/images (21).jpg',
      './images/Dilijan/images (22).jpg',
      './images/Dilijan/images (23).jpg',
      './images/Dilijan/images (27).jpg',
    ],
    'Echmiadzin'=>[
      './images/Echmiadzin/images (2).jpg',
      './images/Echmiadzin/images (3).jpg',
      './images/Echmiadzin/images (4).jpg',
      './images/Echmiadzin/images (5).jpg',
      './images/Echmiadzin/images (6).jpg',
      './images/Echmiadzin/images (7).jpg',
      './images/Echmiadzin/images (8).jpg',
      './images/Echmiadzin/images (9).jpg',
      './images/Echmiadzin/images (10).jpg',
      './images/Echmiadzin/images (12).jpg',
      './images/Echmiadzin/images (13).jpg',
      './images/Echmiadzin/images (15).jpg',
      './images/Echmiadzin/images (16).jpg',
      './images/Echmiadzin/images (17).jpg',
      './images/Echmiadzin/images (18).jpg',
    ],
    'Garni'=>[
      './images/Garni/images (1).jpg',
      './images/Garni/images (3).jpg',
      './images/Garni/images (4).jpg',
      './images/Garni/images (5).jpg',
      './images/Garni/images (6).jpg',
      './images/Garni/images (7).jpg',
      './images/Garni/images (9).jpg',
      './images/Garni/images (10).jpg',
      './images/Garni/images (11).jpg',
      './images/Garni/images (12).jpg',
    ],
    'Geghard'=>[
      './images/Geghard/images (3).jpg',
      './images/Geghard/images (5).jpg',
      './images/Geghard/images (6).jpg',
      './images/Geghard/images (7).jpg',
      './images/Geghard/images (8).jpg',
      './images/Geghard/images (9).jpg',
      './images/Geghard/images (10).jpg',
      './images/Geghard/images (11).jpg',
      './images/Geghard/images (13).jpg',
    ],
    'Goris'=>[
      './images/Goris/images (2).jpg',
      './images/Goris/images (3).jpg',
      './images/Goris/images (4).jpg',
      './images/Goris/images (5).jpg',
      './images/Goris/images (6).jpg',
      './images/Goris/images (7).jpg',
      './images/Goris/images (8).jpg',
      './images/Goris/images (9).jpg',
      './images/Goris/images (10).jpg',
      './images/Goris/images (11).jpg',
      './images/Goris/images (13).jpg',
    ],
    'Gyumri'=>[
      './images/Gyumri/images (3).jpg',
      './images/Gyumri/images (4).jpg',
      './images/Gyumri/images (6).jpg',
      './images/Gyumri/images (7).jpg',
      './images/Gyumri/images (8).jpg',
      './images/Gyumri/images (9).jpg',
      './images/Gyumri/images (10).jpg',
      './images/Gyumri/images (11).jpg',
      './images/Gyumri/images (12).jpg',
      './images/Gyumri/images (13).jpg',
      './images/Gyumri/images (14).jpg',
      './images/Gyumri/images (15).jpg',
      './images/Gyumri/images (16).jpg',
      './images/Gyumri/images (17).jpg',
      './images/Gyumri/images (18).jpg',
      './images/Gyumri/images (19).jpg',
      './images/Gyumri/images (21).jpg',
      './images/Gyumri/images (22).jpg',
      './images/Gyumri/images (24).jpg',
      './images/Gyumri/images (28).jpg',
      './images/Gyumri/images (29).jpg',
    ],
    'Haghpat Monastery'=>[
      './images/Haghpat Monastery/images (2).jpg',
      './images/Haghpat Monastery/images (4).jpg',
      './images/Haghpat Monastery/images (8).jpg',
      './images/Haghpat Monastery/images (10).jpg',
      './images/Haghpat Monastery/images (11).jpg',
    ],
    'Jermuk'=>[
      './images/Jermuk/images (3).jpg',
      './images/Jermuk/images (4).jpg',
      './images/Jermuk/images (5).jpg',
      './images/Jermuk/images (6).jpg',
      './images/Jermuk/images (7).jpg',
      './images/Jermuk/images (8).jpg',
      './images/Jermuk/images (9).jpg',
      './images/Jermuk/images (10).jpg',
      './images/Jermuk/images (11).jpg',
      './images/Jermuk/images (12).jpg',
      './images/Jermuk/images (13).jpg',
      './images/Jermuk/images (18).jpg',
      './images/Jermuk/images (19).jpg',
      './images/Jermuk/images (20).jpg',
      './images/Jermuk/images (21).jpg',
    ],
    'Khor Virap'=>[
      './images/Khor Virap/images (5).jpg',
      './images/Khor Virap/images (6).jpg',
      './images/Khor Virap/images (7).jpg',
      './images/Khor Virap/images (8).jpg',
      './images/Khor Virap/images (9).jpg',
      './images/Khor Virap/images (10).jpg',
      './images/Khor Virap/images (11).jpg',
      './images/Khor Virap/images (12).jpg',
      './images/Khor Virap/images (13).jpg',
      './images/Khor Virap/images (14).jpg',
      './images/Khor Virap/images (15).jpg',
      './images/Khor Virap/images (16).jpg',
      './images/Khor Virap/images (17).jpg',
      './images/Khor Virap/images (18).jpg',
      './images/Khor Virap/images (19).jpg',
      './images/Khor Virap/images (21).jpg',
      './images/Khor Virap/images (22).jpg',
      './images/Khor Virap/images (25).jpg',
      './images/Khor Virap/images (26).jpg',
    ],
    'Mesrop Mashtots'=>[
      './images/Mesrop Mashtots/images (2).jpg',
      './images/Mesrop Mashtots/images (3).jpg',
      './images/Mesrop Mashtots/images (4).jpg',
      './images/Mesrop Mashtots/images (5).jpg',
      './images/Mesrop Mashtots/images (6).jpg',
      './images/Mesrop Mashtots/images (7).jpg',
      './images/Mesrop Mashtots/images (8).jpg',
      './images/Mesrop Mashtots/images (9).jpg',
      './images/Mesrop Mashtots/images (10).jpg',
      './images/Mesrop Mashtots/images (11).jpg',
      './images/Mesrop Mashtots/images (12).jpg',
      './images/Mesrop Mashtots/images (14).jpg',
    ],
    'Noraduz Cemetery'=>[
      './images/Noraduz Cemetery/images (2).jpg',
      './images/Noraduz Cemetery/images (3).jpg',
      './images/Noraduz Cemetery/images (4).jpg',
      './images/Noraduz Cemetery/images (5).jpg',
      './images/Noraduz Cemetery/images (6).jpg',
      './images/Noraduz Cemetery/images (7).jpg',
      './images/Noraduz Cemetery/images (8).jpg',
    ],
    'Noravank Monastery'=>[
      './images/Noravank Monastery/images (4).jpg',
      './images/Noravank Monastery/images (6).jpg',
      './images/Noravank Monastery/images (7).jpg',
      './images/Noravank Monastery/images (8).jpg',
      './images/Noravank Monastery/images (13).jpg',
      './images/Noravank Monastery/images (14).jpg',
      './images/Noravank Monastery/images (15).jpg',
      './images/Noravank Monastery/images (16).jpg',
      './images/Noravank Monastery/images (17).jpg',
      './images/Noravank Monastery/images (19).jpg',
      './images/Noravank Monastery/images (21).jpg',
      './images/Noravank Monastery/images (22).jpg',
      './images/Noravank Monastery/images (23).jpg',
      './images/Noravank Monastery/images (24).jpg',
    ],
    'SANAHIN'=>[
      './images/SANAHIN/images (2).jpg',
      './images/SANAHIN/images (4).jpg',
      './images/SANAHIN/images (5).jpg',
      './images/SANAHIN/images (6).jpg',
      './images/SANAHIN/images (7).jpg',
      './images/SANAHIN/images (8).jpg',
      './images/SANAHIN/images (9).jpg',
      './images/SANAHIN/images (10).jpg',
      './images/SANAHIN/images (11).jpg',
      './images/SANAHIN/images (12).jpg',
      './images/SANAHIN/images (13).jpg',
      './images/SANAHIN/images (14).jpg',
    ],
    'Sevan'=>[
      './images/Sevan/images (2).jpg',
      './images/Sevan/images (3).jpg',
      './images/Sevan/images (4).jpg',
      './images/Sevan/images (5).jpg',
      './images/Sevan/images (6).jpg',
      './images/Sevan/images (7).jpg',
      './images/Sevan/images (8).jpg',
      './images/Sevan/images (9).jpg',
      './images/Sevan/images (10).jpg',
      './images/Sevan/images (11).jpg',
      './images/Sevan/images (12).jpg',
      './images/Sevan/images (13).jpg',
      './images/Sevan/images (14).jpg',
      './images/Sevan/images (15).jpg',
      './images/Sevan/images (17).jpg',
      './images/Sevan/images (18).jpg',
      './images/Sevan/images (19).jpg',
      './images/Sevan/images (20).jpg',
      './images/Sevan/images (21).jpg',
      './images/Sevan/images (22).jpg',
      './images/Sevan/images (23).jpg',
      './images/Sevan/images (24).jpg',
    ],
    'Sevanavank'=>[
      './images/Sevanavank/images (2).jpg',
      './images/Sevanavank/images (3).jpg',
      './images/Sevanavank/images (4).jpg',
      './images/Sevanavank/images (5).jpg',
      './images/Sevanavank/images (6).jpg',
      './images/Sevanavank/images (8).jpg',
      './images/Sevanavank/images (11).jpg',
      './images/Sevanavank/images (12).jpg',
      './images/Sevanavank/images (13).jpg',
      './images/Sevanavank/images (14).jpg',
    ],
    'TATEV'=>[
      './images/TATEV/images (2).jpg',
      './images/TATEV/images (3).jpg',
      './images/TATEV/images (4).jpg',
      './images/TATEV/images (5).jpg',
      './images/TATEV/images (6).jpg',
      './images/TATEV/images (7).jpg',
      './images/TATEV/images (8).jpg',
      './images/TATEV/images (9).jpg',
      './images/TATEV/images (10).jpg',
      './images/TATEV/images (11).jpg',
      './images/TATEV/images (12).jpg',
      './images/TATEV/images (14).jpg',
      './images/TATEV/images (17).jpg',
      './images/TATEV/images (18).jpg',
      './images/TATEV/images (21).jpg',
      './images/TATEV/images (22).jpg',
      './images/TATEV/images (23).jpg',
      './images/TATEV/images (25).jpg',
      './images/TATEV/images (27).jpg',
    ],
    'TSAGHKADZOR'=>[
      './images/TSAGHKADZOR/images (2).jpg',
      './images/TSAGHKADZOR/images (3).jpg',
      './images/TSAGHKADZOR/images (4).jpg',
      './images/TSAGHKADZOR/images (5).jpg',
      './images/TSAGHKADZOR/images (6).jpg',
      './images/TSAGHKADZOR/images (7).jpg',
      './images/TSAGHKADZOR/images (8).jpg',
      './images/TSAGHKADZOR/images (9).jpg',
      './images/TSAGHKADZOR/images (10).jpg',
      './images/TSAGHKADZOR/images (11).jpg',
      './images/TSAGHKADZOR/images (12).jpg',
      './images/TSAGHKADZOR/images (14).jpg',
      './images/TSAGHKADZOR/images (15).jpg',
      './images/TSAGHKADZOR/images (17).jpg',
      './images/TSAGHKADZOR/images (18).jpg',
      './images/TSAGHKADZOR/images (19).jpg',
      './images/TSAGHKADZOR/images (20).jpg',
      './images/TSAGHKADZOR/images (21).jpg',
      './images/TSAGHKADZOR/images (22).jpg',
      './images/TSAGHKADZOR/images (23).jpg',
      './images/TSAGHKADZOR/images (25).jpg',
    ],
    'YEREVAN'=>[
      './images/YEREVAN/images (1).jpg',
      './images/YEREVAN/images (2).jpg',
      './images/YEREVAN/images (3).jpg',
      './images/YEREVAN/images (4).jpg',
      './images/YEREVAN/images (5).jpg',
      './images/YEREVAN/images (6).jpg',
      './images/YEREVAN/images (8).jpg',
      './images/YEREVAN/images (9).jpg',
      './images/YEREVAN/images (10).jpg',
      './images/YEREVAN/images (11).jpg',
      './images/YEREVAN/images (12).jpg',
      './images/YEREVAN/images (13).jpg',
      './images/YEREVAN/images (14).jpg',
      './images/YEREVAN/images (15).jpg',
      './images/YEREVAN/images (16).jpg',
      './images/YEREVAN/images (17).jpg',
      './images/YEREVAN/images (18).jpg',
      './images/YEREVAN/images (20).jpg',
      './images/YEREVAN/images (21).jpg',
      './images/YEREVAN/images (22).jpg',
      './images/YEREVAN/images (24).jpg',
      './images/YEREVAN/images (25).jpg',
      './images/YEREVAN/images (26).jpg',
      './images/YEREVAN/images (27).jpg',
      './images/YEREVAN/images (28).jpg',
      './images/YEREVAN/images (29).jpg',
      './images/YEREVAN/images (30).jpg',
      './images/YEREVAN/images (31).jpg',
      './images/YEREVAN/images (32).jpg',
      './images/YEREVAN/images (33).jpg',
      './images/YEREVAN/images (34).jpg',
      './images/YEREVAN/images (35).jpg',
      './images/YEREVAN/images (36).jpg',
      './images/YEREVAN/images (37).jpg',
      './images/YEREVAN/images (38).jpg',
      './images/YEREVAN/images (39).jpg',
      './images/YEREVAN/images (40).jpg',
      './images/YEREVAN/images (41).jpg',
      './images/YEREVAN/images (42).jpg',
      './images/YEREVAN/images (43).jpg',
      './images/YEREVAN/images (44).jpg',
      './images/YEREVAN/images (45).jpg',
      './images/YEREVAN/images (46).jpg',
      './images/YEREVAN/images (47).jpg',
      './images/YEREVAN/images (49).jpg',
      './images/YEREVAN/images (50).jpg',
    ],
    'yer_1'=>[
      './images/YEREVAN/images (1).jpg',
      './images/YEREVAN/images (2).jpg',
      './images/YEREVAN/images (3).jpg',
      './images/YEREVAN/images (4).jpg',
      './images/YEREVAN/images (5).jpg',
      './images/YEREVAN/images (6).jpg',
      './images/YEREVAN/images (8).jpg',
      './images/YEREVAN/images (9).jpg',
      './images/YEREVAN/images (10).jpg',
      './images/YEREVAN/images (11).jpg',
      './images/YEREVAN/images (12).jpg',
      './images/YEREVAN/images (13).jpg',
      './images/YEREVAN/images (14).jpg',
      './images/YEREVAN/images (15).jpg',
      './images/YEREVAN/images (16).jpg',
      './images/YEREVAN/images (17).jpg',
      './images/YEREVAN/images (18).jpg',
      './images/YEREVAN/images (20).jpg',
      './images/YEREVAN/images (21).jpg',
      './images/YEREVAN/images (22).jpg',
      './images/YEREVAN/images (24).jpg',
      './images/YEREVAN/images (25).jpg',
      './images/YEREVAN/images (26).jpg',
      './images/YEREVAN/images (27).jpg',
      './images/YEREVAN/images (28).jpg',
      './images/YEREVAN/images (29).jpg',
      './images/YEREVAN/images (30).jpg',
      './images/YEREVAN/images (31).jpg',
      './images/YEREVAN/images (32).jpg',
      './images/YEREVAN/images (33).jpg',
      './images/YEREVAN/images (34).jpg',
      './images/YEREVAN/images (35).jpg',
      './images/YEREVAN/images (36).jpg',
      './images/YEREVAN/images (37).jpg',
      './images/YEREVAN/images (38).jpg',
      './images/YEREVAN/images (39).jpg',
      './images/YEREVAN/images (40).jpg',
      './images/YEREVAN/images (41).jpg',
      './images/YEREVAN/images (42).jpg',
      './images/YEREVAN/images (43).jpg',
      './images/YEREVAN/images (44).jpg',
      './images/YEREVAN/images (45).jpg',
      './images/YEREVAN/images (46).jpg',
      './images/YEREVAN/images (47).jpg',
      './images/YEREVAN/images (49).jpg',
      './images/YEREVAN/images (50).jpg',
    ],
    'yer_2'=>[
      './images/YEREVAN/images (1).jpg',
      './images/YEREVAN/images (2).jpg',
      './images/YEREVAN/images (3).jpg',
      './images/YEREVAN/images (4).jpg',
      './images/YEREVAN/images (5).jpg',
      './images/YEREVAN/images (6).jpg',
      './images/YEREVAN/images (8).jpg',
      './images/YEREVAN/images (9).jpg',
      './images/YEREVAN/images (10).jpg',
      './images/YEREVAN/images (11).jpg',
      './images/YEREVAN/images (12).jpg',
      './images/YEREVAN/images (13).jpg',
      './images/YEREVAN/images (14).jpg',
      './images/YEREVAN/images (15).jpg',
      './images/YEREVAN/images (16).jpg',
      './images/YEREVAN/images (17).jpg',
      './images/YEREVAN/images (18).jpg',
      './images/YEREVAN/images (20).jpg',
      './images/YEREVAN/images (21).jpg',
      './images/YEREVAN/images (22).jpg',
      './images/YEREVAN/images (24).jpg',
      './images/YEREVAN/images (25).jpg',
      './images/YEREVAN/images (26).jpg',
      './images/YEREVAN/images (27).jpg',
      './images/YEREVAN/images (28).jpg',
      './images/YEREVAN/images (29).jpg',
      './images/YEREVAN/images (30).jpg',
      './images/YEREVAN/images (31).jpg',
      './images/YEREVAN/images (32).jpg',
      './images/YEREVAN/images (33).jpg',
      './images/YEREVAN/images (34).jpg',
      './images/YEREVAN/images (35).jpg',
      './images/YEREVAN/images (36).jpg',
      './images/YEREVAN/images (37).jpg',
      './images/YEREVAN/images (38).jpg',
      './images/YEREVAN/images (39).jpg',
      './images/YEREVAN/images (40).jpg',
      './images/YEREVAN/images (41).jpg',
      './images/YEREVAN/images (42).jpg',
      './images/YEREVAN/images (43).jpg',
      './images/YEREVAN/images (44).jpg',
      './images/YEREVAN/images (45).jpg',
      './images/YEREVAN/images (46).jpg',
      './images/YEREVAN/images (47).jpg',
      './images/YEREVAN/images (49).jpg',
      './images/YEREVAN/images (50).jpg',
    ],
    'yer_3'=>[
      './images/YEREVAN/images (1).jpg',
      './images/YEREVAN/images (2).jpg',
      './images/YEREVAN/images (3).jpg',
      './images/YEREVAN/images (4).jpg',
      './images/YEREVAN/images (5).jpg',
      './images/YEREVAN/images (6).jpg',
      './images/YEREVAN/images (8).jpg',
      './images/YEREVAN/images (9).jpg',
      './images/YEREVAN/images (10).jpg',
      './images/YEREVAN/images (11).jpg',
      './images/YEREVAN/images (12).jpg',
      './images/YEREVAN/images (13).jpg',
      './images/YEREVAN/images (14).jpg',
      './images/YEREVAN/images (15).jpg',
      './images/YEREVAN/images (16).jpg',
      './images/YEREVAN/images (17).jpg',
      './images/YEREVAN/images (18).jpg',
      './images/YEREVAN/images (20).jpg',
      './images/YEREVAN/images (21).jpg',
      './images/YEREVAN/images (22).jpg',
      './images/YEREVAN/images (24).jpg',
      './images/YEREVAN/images (25).jpg',
      './images/YEREVAN/images (26).jpg',
      './images/YEREVAN/images (27).jpg',
      './images/YEREVAN/images (28).jpg',
      './images/YEREVAN/images (29).jpg',
      './images/YEREVAN/images (30).jpg',
      './images/YEREVAN/images (31).jpg',
      './images/YEREVAN/images (32).jpg',
      './images/YEREVAN/images (33).jpg',
      './images/YEREVAN/images (34).jpg',
      './images/YEREVAN/images (35).jpg',
      './images/YEREVAN/images (36).jpg',
      './images/YEREVAN/images (37).jpg',
      './images/YEREVAN/images (38).jpg',
      './images/YEREVAN/images (39).jpg',
      './images/YEREVAN/images (40).jpg',
      './images/YEREVAN/images (41).jpg',
      './images/YEREVAN/images (42).jpg',
      './images/YEREVAN/images (43).jpg',
      './images/YEREVAN/images (44).jpg',
      './images/YEREVAN/images (45).jpg',
      './images/YEREVAN/images (46).jpg',
      './images/YEREVAN/images (47).jpg',
      './images/YEREVAN/images (49).jpg',
      './images/YEREVAN/images (50).jpg',
    ],
    'yer_4'=>[
      './images/YEREVAN/images (1).jpg',
      './images/YEREVAN/images (2).jpg',
      './images/YEREVAN/images (3).jpg',
      './images/YEREVAN/images (4).jpg',
      './images/YEREVAN/images (5).jpg',
      './images/YEREVAN/images (6).jpg',
      './images/YEREVAN/images (8).jpg',
      './images/YEREVAN/images (9).jpg',
      './images/YEREVAN/images (10).jpg',
      './images/YEREVAN/images (11).jpg',
      './images/YEREVAN/images (12).jpg',
      './images/YEREVAN/images (13).jpg',
      './images/YEREVAN/images (14).jpg',
      './images/YEREVAN/images (15).jpg',
      './images/YEREVAN/images (16).jpg',
      './images/YEREVAN/images (17).jpg',
      './images/YEREVAN/images (18).jpg',
      './images/YEREVAN/images (20).jpg',
      './images/YEREVAN/images (21).jpg',
      './images/YEREVAN/images (22).jpg',
      './images/YEREVAN/images (24).jpg',
      './images/YEREVAN/images (25).jpg',
      './images/YEREVAN/images (26).jpg',
      './images/YEREVAN/images (27).jpg',
      './images/YEREVAN/images (28).jpg',
      './images/YEREVAN/images (29).jpg',
      './images/YEREVAN/images (30).jpg',
      './images/YEREVAN/images (31).jpg',
      './images/YEREVAN/images (32).jpg',
      './images/YEREVAN/images (33).jpg',
      './images/YEREVAN/images (34).jpg',
      './images/YEREVAN/images (35).jpg',
      './images/YEREVAN/images (36).jpg',
      './images/YEREVAN/images (37).jpg',
      './images/YEREVAN/images (38).jpg',
      './images/YEREVAN/images (39).jpg',
      './images/YEREVAN/images (40).jpg',
      './images/YEREVAN/images (41).jpg',
      './images/YEREVAN/images (42).jpg',
      './images/YEREVAN/images (43).jpg',
      './images/YEREVAN/images (44).jpg',
      './images/YEREVAN/images (45).jpg',
      './images/YEREVAN/images (46).jpg',
      './images/YEREVAN/images (47).jpg',
      './images/YEREVAN/images (49).jpg',
      './images/YEREVAN/images (50).jpg',
    ],
    'yer_5'=>[
      './images/YEREVAN/images (1).jpg',
      './images/YEREVAN/images (2).jpg',
      './images/YEREVAN/images (3).jpg',
      './images/YEREVAN/images (4).jpg',
      './images/YEREVAN/images (5).jpg',
      './images/YEREVAN/images (6).jpg',
      './images/YEREVAN/images (8).jpg',
      './images/YEREVAN/images (9).jpg',
      './images/YEREVAN/images (10).jpg',
      './images/YEREVAN/images (11).jpg',
      './images/YEREVAN/images (12).jpg',
      './images/YEREVAN/images (13).jpg',
      './images/YEREVAN/images (14).jpg',
      './images/YEREVAN/images (15).jpg',
      './images/YEREVAN/images (16).jpg',
      './images/YEREVAN/images (17).jpg',
      './images/YEREVAN/images (18).jpg',
      './images/YEREVAN/images (20).jpg',
      './images/YEREVAN/images (21).jpg',
      './images/YEREVAN/images (22).jpg',
      './images/YEREVAN/images (24).jpg',
      './images/YEREVAN/images (25).jpg',
      './images/YEREVAN/images (26).jpg',
      './images/YEREVAN/images (27).jpg',
      './images/YEREVAN/images (28).jpg',
      './images/YEREVAN/images (29).jpg',
      './images/YEREVAN/images (30).jpg',
      './images/YEREVAN/images (31).jpg',
      './images/YEREVAN/images (32).jpg',
      './images/YEREVAN/images (33).jpg',
      './images/YEREVAN/images (34).jpg',
      './images/YEREVAN/images (35).jpg',
      './images/YEREVAN/images (36).jpg',
      './images/YEREVAN/images (37).jpg',
      './images/YEREVAN/images (38).jpg',
      './images/YEREVAN/images (39).jpg',
      './images/YEREVAN/images (40).jpg',
      './images/YEREVAN/images (41).jpg',
      './images/YEREVAN/images (42).jpg',
      './images/YEREVAN/images (43).jpg',
      './images/YEREVAN/images (44).jpg',
      './images/YEREVAN/images (45).jpg',
      './images/YEREVAN/images (46).jpg',
      './images/YEREVAN/images (47).jpg',
      './images/YEREVAN/images (49).jpg',
      './images/YEREVAN/images (50).jpg',
    ],
    'yer_6'=>[
      './images/YEREVAN/images (1).jpg',
      './images/YEREVAN/images (2).jpg',
      './images/YEREVAN/images (3).jpg',
      './images/YEREVAN/images (4).jpg',
      './images/YEREVAN/images (5).jpg',
      './images/YEREVAN/images (6).jpg',
      './images/YEREVAN/images (8).jpg',
      './images/YEREVAN/images (9).jpg',
      './images/YEREVAN/images (10).jpg',
      './images/YEREVAN/images (11).jpg',
      './images/YEREVAN/images (12).jpg',
      './images/YEREVAN/images (13).jpg',
      './images/YEREVAN/images (14).jpg',
      './images/YEREVAN/images (15).jpg',
      './images/YEREVAN/images (16).jpg',
      './images/YEREVAN/images (17).jpg',
      './images/YEREVAN/images (18).jpg',
      './images/YEREVAN/images (20).jpg',
      './images/YEREVAN/images (21).jpg',
      './images/YEREVAN/images (22).jpg',
      './images/YEREVAN/images (24).jpg',
      './images/YEREVAN/images (25).jpg',
      './images/YEREVAN/images (26).jpg',
      './images/YEREVAN/images (27).jpg',
      './images/YEREVAN/images (28).jpg',
      './images/YEREVAN/images (29).jpg',
      './images/YEREVAN/images (30).jpg',
      './images/YEREVAN/images (31).jpg',
      './images/YEREVAN/images (32).jpg',
      './images/YEREVAN/images (33).jpg',
      './images/YEREVAN/images (34).jpg',
      './images/YEREVAN/images (35).jpg',
      './images/YEREVAN/images (36).jpg',
      './images/YEREVAN/images (37).jpg',
      './images/YEREVAN/images (38).jpg',
      './images/YEREVAN/images (39).jpg',
      './images/YEREVAN/images (40).jpg',
      './images/YEREVAN/images (41).jpg',
      './images/YEREVAN/images (42).jpg',
      './images/YEREVAN/images (43).jpg',
      './images/YEREVAN/images (44).jpg',
      './images/YEREVAN/images (45).jpg',
      './images/YEREVAN/images (46).jpg',
      './images/YEREVAN/images (47).jpg',
      './images/YEREVAN/images (49).jpg',
      './images/YEREVAN/images (50).jpg',
    ],
    'yer_7'=>[
      './images/YEREVAN/images (1).jpg',
      './images/YEREVAN/images (2).jpg',
      './images/YEREVAN/images (3).jpg',
      './images/YEREVAN/images (4).jpg',
      './images/YEREVAN/images (5).jpg',
      './images/YEREVAN/images (6).jpg',
      './images/YEREVAN/images (8).jpg',
      './images/YEREVAN/images (9).jpg',
      './images/YEREVAN/images (10).jpg',
      './images/YEREVAN/images (11).jpg',
      './images/YEREVAN/images (12).jpg',
      './images/YEREVAN/images (13).jpg',
      './images/YEREVAN/images (14).jpg',
      './images/YEREVAN/images (15).jpg',
      './images/YEREVAN/images (16).jpg',
      './images/YEREVAN/images (17).jpg',
      './images/YEREVAN/images (18).jpg',
      './images/YEREVAN/images (20).jpg',
      './images/YEREVAN/images (21).jpg',
      './images/YEREVAN/images (22).jpg',
      './images/YEREVAN/images (24).jpg',
      './images/YEREVAN/images (25).jpg',
      './images/YEREVAN/images (26).jpg',
      './images/YEREVAN/images (27).jpg',
      './images/YEREVAN/images (28).jpg',
      './images/YEREVAN/images (29).jpg',
      './images/YEREVAN/images (30).jpg',
      './images/YEREVAN/images (31).jpg',
      './images/YEREVAN/images (32).jpg',
      './images/YEREVAN/images (33).jpg',
      './images/YEREVAN/images (34).jpg',
      './images/YEREVAN/images (35).jpg',
      './images/YEREVAN/images (36).jpg',
      './images/YEREVAN/images (37).jpg',
      './images/YEREVAN/images (38).jpg',
      './images/YEREVAN/images (39).jpg',
      './images/YEREVAN/images (40).jpg',
      './images/YEREVAN/images (41).jpg',
      './images/YEREVAN/images (42).jpg',
      './images/YEREVAN/images (43).jpg',
      './images/YEREVAN/images (44).jpg',
      './images/YEREVAN/images (45).jpg',
      './images/YEREVAN/images (46).jpg',
      './images/YEREVAN/images (47).jpg',
      './images/YEREVAN/images (49).jpg',
      './images/YEREVAN/images (50).jpg',
    ],
    'yer_8'=>[
      './images/YEREVAN/images (1).jpg',
      './images/YEREVAN/images (2).jpg',
      './images/YEREVAN/images (3).jpg',
      './images/YEREVAN/images (4).jpg',
      './images/YEREVAN/images (5).jpg',
      './images/YEREVAN/images (6).jpg',
      './images/YEREVAN/images (8).jpg',
      './images/YEREVAN/images (9).jpg',
      './images/YEREVAN/images (10).jpg',
      './images/YEREVAN/images (11).jpg',
      './images/YEREVAN/images (12).jpg',
      './images/YEREVAN/images (13).jpg',
      './images/YEREVAN/images (14).jpg',
      './images/YEREVAN/images (15).jpg',
      './images/YEREVAN/images (16).jpg',
      './images/YEREVAN/images (17).jpg',
      './images/YEREVAN/images (18).jpg',
      './images/YEREVAN/images (20).jpg',
      './images/YEREVAN/images (21).jpg',
      './images/YEREVAN/images (22).jpg',
      './images/YEREVAN/images (24).jpg',
      './images/YEREVAN/images (25).jpg',
      './images/YEREVAN/images (26).jpg',
      './images/YEREVAN/images (27).jpg',
      './images/YEREVAN/images (28).jpg',
      './images/YEREVAN/images (29).jpg',
      './images/YEREVAN/images (30).jpg',
      './images/YEREVAN/images (31).jpg',
      './images/YEREVAN/images (32).jpg',
      './images/YEREVAN/images (33).jpg',
      './images/YEREVAN/images (34).jpg',
      './images/YEREVAN/images (35).jpg',
      './images/YEREVAN/images (36).jpg',
      './images/YEREVAN/images (37).jpg',
      './images/YEREVAN/images (38).jpg',
      './images/YEREVAN/images (39).jpg',
      './images/YEREVAN/images (40).jpg',
      './images/YEREVAN/images (41).jpg',
      './images/YEREVAN/images (42).jpg',
      './images/YEREVAN/images (43).jpg',
      './images/YEREVAN/images (44).jpg',
      './images/YEREVAN/images (45).jpg',
      './images/YEREVAN/images (46).jpg',
      './images/YEREVAN/images (47).jpg',
      './images/YEREVAN/images (49).jpg',
      './images/YEREVAN/images (50).jpg',
    ],
  ];

  $title_array = [ "Ambert", "Ararat", "Dilijan", "Echmiadzin", "Garni",
          "Geghard", "Goris", "Gyumri", "Haghpat Monastery", "Jermuk",
          "Khor Virap", "Mesrop Mashtots", "Noraduz Cemetery", "Noravank Monastery", "SANAHIN",
          "Sevan", "Sevanavank", "TATEV", "TSAGHKADZOR", "YEREVAN",
          "yer_1", "yer_2", "yer_3", "yer_4", "yer_5",
          "yer_6", "yer_7", "yer_8",
  ];
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from triper.dexignlab.com/xhtml/booking-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 18:17:18 GMT -->

<head>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta http-equiv="Pragma" content="no-cache" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="robots" content="" />
  <meta name="description" content="Triper : Tour, Travel & Travel Agency Template" />
  <meta property="og:title" content="Triper : Tour, Travel & Travel Agency Template" />
  <meta property="og:description" content="Triper : Tour, Travel & Travel Agency Template" />
  <meta property="og:image" content="Triper : Tour, Travel & Travel Agency Template" />

  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

  <link rel="stylesheet" href="/plugins/swiper-master/package/css/swiper.min.css">

  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/hover-show.css">
  <link rel="shortcut icon" href="images/bh.ico" type="image/x-icon">

  <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<title>Triper : Tour, Travel & Travel Agency Template</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
  [endif]
  -->

  <!-- STYLESHEETS -->
  <!-- <link rel="stylesheet" type="text/css" href="css/plugins.css"> -->
  <!-- <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css"> -->
  <!-- <link rel="stylesheet" href="plugins/datepicker/css/bootstrap-datetimepicker.min.css"/> -->
  <!-- Revolution Slider Css -->
  <!-- <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/layers.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css"> -->
  <!-- Revolution Navigation Style -->

  <link rel="stylesheet" type="text/css" href="css/package/style.min.css">
  <link rel="stylesheet" type="text/css" href="css/package/templete.min.css">

  <link rel="stylesheet" href="css/gallery.css">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

  <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="/css/animate.css">

  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/css/magnific-popup.css">

  <link rel="stylesheet" href="/css/aos.css">

  <link rel="stylesheet" href="/css/ionicons.min.css">

  <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="/css/jquery.timepicker.css">


  <link rel="stylesheet" href="/css/flaticon.css">
  <link rel="stylesheet" href="/css/icomoon.css">
  <link rel="stylesheet" href="/css/style.css">
  <style>

    .bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}

    form#chechinForm .form-control {
      box-shadow: none !important;
      border: 2px solid rgba(255, 255, 255, 0.5);
      background: transparent !important;
      color: white !important;
      font-size: 16px;
      width: 100%;
    }
    a:hover{
      text-decoration: underline;
    }

    .as-label,
    label,
    #checkin_date::placeholder {
      color: white;
    }

    input.age {
      margin-left: 3px;
    }

    .btn-submit {
      background-color: #5e5ea2;
      color: #ffffff;
      font-weight: 600;
    }

    .fa-info-circle{
      color: white;
      margin-left: 4px;
    }
    .input-group-text {
      background-color: #eff7ff;
    }
    
    [class*=bg-] .navbar-toggler span {
        background-color: #fff0;
    }
    a{
        cursor: pointer !important;
    }

    .list-of-discount {
      margin-bottom: 3rem;
      max-width: 40rem;
    }

    .list-of-discount .list-group-item {
      background-color: transparent;
      color: white;
      font-weight: 500;
      border: 1px solid rgb(144, 213, 178);
      border-right: 0;
      border-left: 0;
      padding: 0.1rem .2rem;
    }
    .book-error-msg {
      color: red;
    }
  </style>
  <script>
    const tourNumber = Number('<?= $tour_number; ?>')
  </script>

</head>

<body id="bg">

  <?php
    $length = count( $title_array );
    for($i = 0; $i < $length; $i++){
      $title = $title_array[$i];
  
      $rel = isset($rel_src[$title]) ? $rel_src[$title] : null;
      $group_num = 'group_' . $i;
      $group_num = ( $title == "yer_1" ? $title : $group_num );
      $group_num = ( $title == "yer_2" ? $title : $group_num );
      $group_num = ( $title == "yer_3" ? $title : $group_num );
      $group_num = ( $title == "yer_4" ? $title : $group_num );
      $group_num = ( $title == "yer_5" ? $title : $group_num );
      $group_num = ( $title == "yer_6" ? $title : $group_num );
      $group_num = ( $title == "yer_7" ? $title : $group_num );
      $group_num = ( $title == "yer_8" ? $title : $group_num );
  ?>
      <?php 
        if($rel) :
        for($j = 0; $j < count($rel); $j++) : ?>
        <a rel="<?= $group_num ?>" href="<?= $rel[$j] ?>"></a>
        <?php endfor; endif; 
      ?>
  <?php
    }
  ?>
  
  <nav style="z-index: 100" class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="/images/logo.png" alt="Best Holiday Logo"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="sights" class="nav-link">Sights</a></li>
          <li class="nav-item"><a href="tours" class="nav-link">Tours Packages</a></li>
          <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
        </ul>
      </div>

    </div>
  </nav>

  <!--<div class="swiper-container display-block">-->
  <!--  <div class="swiper-wrapper">-->
  <!--    <div class="swiper-slide">-->
  <!--      <img src="/images/92f97eb687616cef5dab946c06d48611.jpg" alt="Los Angeles" style="width:100%;">-->
  <!--    </div>-->
  <!--    <div class="swiper-slide">-->
  <!--      <img src="/images/d3f86375f48490115f9312be6ec0322a_1_-1_art.jpg" alt="Los Angeles" style="width:100%;">-->
  <!--    </div>-->
  <!--    <div class="swiper-slide">-->
  <!--      <img src="/images/92f97eb687616cef5dab946c06d48611.jpg" alt="Los Angeles" style="width:100%;">-->
  <!--    </div>-->
  <!--    <div class="swiper-slide">-->
  <!--      <img src="/images/d3f86375f48490115f9312be6ec0322a_1_-1_art.jpg" alt="Los Angeles" style="width:100%;">-->
  <!--    </div>-->
  <!--  </div>-->
  <!--  <div class="swiper-button-next"></div>-->
  <!--  <div class="swiper-button-prev"></div>-->
  <!--</div>-->

  <div class="swiper-container display-block">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="/images/Armenia_2013-2-2.jpg" alt="Los Angeles" style="width:100%;">
      </div>
      <div class="swiper-slide">
        <img src="/images/d3f86375f48490115f9312be6ec0322a_1_-1_art.jpg" alt="Los Angeles" style="width:100%;">
      </div>
      <div class="swiper-slide">
        <img src="/images/Kaskad.jpg" alt="Los Angeles" style="width:100%;">
      </div>
      <div class="swiper-slide">
        <img src="/images/sightseeing_tour/zvartnoc_ruins.jpg" alt="Los Angeles" style="width:100%;">
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <div class="display-none">
    <img src="/images/b9342b7c57d087a650d11b828c97447b.jpg" alt="Los Angeles" style="width:100%;">
  </div>

  <div class="container">
    <div class="text-height">
      <div class="col-md-7 col-sm-12">
        <p class="breadcrumbs-text">
          <span class="mr-2 border-bottom">
            <a href="/" class="pointer white">Home</a>
          </span>
          <span class="border-bottom erkrordakan">Tour</span>
        </p>
        <h1 class="mb-3 breadcrumbs-text-h1">Tour<span class="br">&nbsp;</span>Packages</h1>
      </div>
    </div>
  </div>

  <div class="bg-primary m-b100">
    <!-- <div class="block-17 pt-3 pb-4"> -->
    <div class="container p-t30 p-b20">

    	<ul class="list-group list-group-flush list-of-discount">
	        <li class="list-group-item">Get 15% discount when ordering 60 days in advance</li>
	        <li class="list-group-item">Get 10% discount when ordering a package for more than two people</li>
	        <li class="list-group-item">Children under 5  get 100% discount</li>
	        <li class="list-group-item">Children between 5-18 get 50% discount</li>
      </ul>

      <form name="chechinForm" onsubmit="submitCheckin(event)" id="chechinForm">
        <div class="d-lg-flex mb-3 justify-content-around">
          <div class="one-third as-label">Check-in date:
            <input type="text" name="checkinDate" id="checkin_date" class="form-control" placeholder="d-m-y" value="<?= date('m/d/Y', strtotime('+6 days')) ?>">
          </div>
          <div class="one-third as-label">Travelers:
            <input type="number" value="1" min="1" pattern="\d+" name="travelers" id="travelers" onchange="changeTravelers()" class="form-control">
          </div>
          <div class="one-third as-label">Children:
            <input type="number" value="0" min="0" pattern="\d+" name="children" id="children" onchange="changeChildren()" class="form-control">
          </div>
        </div>

        <div id="ageWrap" class="d-lg-flex flex-wrap mb-3 mx-4 justify-content-around">
          <!-- Age Fields Container -->
        </div>
        <div class="border-top my-3 container"></div>

        <div class="d-lg-flex mb-3 justify-content-center">
          <!-- Place to stay: START -->
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="placeType" id="apartment" onchange="changePlaceBox(event)">
            <label class="form-check-label" for="apartment">
              Apartment 50 &euro;
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="placeType" id="private" onchange="changePlaceBox(event)">
            <label class="form-check-label" for="private">
              Private house 100 &euro;
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="placeType" id="hotel" onchange="changePlaceBox(event)">
            <label class="form-check-label" for="hotel">
              Hotel 150 &euro;
            </label>
          </div>
        </div>
        <div class="border-top my-3 container"></div> <!-- Place to stay: END -->

        <div class="d-lg-flex mb-3 justify-content-around">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="packType" id="allInclusive" onchange="changePackBox(event)">
            <label class="form-check-label" for="allInclusive">
              All Inclusive 1000 &euro;
            </label><i data-toggle="modal" class="fa fa-info-circle textTypeOfficialMessages2" name="All_Inclusive_text"  data-target="#anasunTextTypeOfficialMessages1"></i>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="packType" id="allUltra" onchange="changePackBox(event)">
            <label class="form-check-label" for="allUltra">
              Ultra all Inclusive 2000 &euro;
            </label><i data-toggle="modal" class="fa fa-info-circle textTypeOfficialMessages2" name="Ultra_All_Inclusive_text"  data-target="#anasunTextTypeOfficialMessages2"></i>
          </div>
          <div class="form-check form-check-inline">
            <!-- <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> -->
            <input class="form-check-input" type="checkbox" name="packType" id="allCrazzy" onchange="changePackBox(event)">
            <label class="form-check-label" for="allCrazzy">
              Crazy All Inclusive 2000 &euro;
            </label><i data-toggle="modal" class="fa fa-info-circle textTypeOfficialMessages2" name="Crazzy_All_Inclusive_text" data-target="#anasunTextTypeOfficialMessages3"></i>
          </div>
        </div>

      </form>

      <div class="border-top my-3 container">
       <div class="col-md-6 mx-auto">          
          <div class="text-white ">Days: 
            <span id="day-nums"></span>
          </div>
          <div class="text-white ">Price: 
            <span id="day-price"></span><span>&euro; per day</span>
          </div>
          <div class="text-white ">Discounts: 
            <span id="discounts">0</span><span>%</span>
          </div>
          <div id="form-message" class="text-danger font-weight-bold bg-warning mx-auto text-center w-50"></div>
        </div>
      </div>

      <div class="d-flex mb-3 justify-content-center">
        <div class="input-group mb-3 col-md-5">
          <div class="input-group-prepend">
            <span class="input-group-text">Summary:</span>
          </div>
          <input type="text" class="form-control" aria-label="amount" value="" id="summary" readonly>
          <div class="input-group-append">
            <span class="input-group-text">.00 &euro;</span>
          </div>
          <button type="submit" class="btn btn-submit" data-toggle="modal" data-target="#book_now">Book Now!</button>
        </div>
      </div>

      <!-- <div class="myjumbotron text-center">
        <div class="container">
          <h3 class="lead text-muted">For more discounts You can contact with us by:</h3>
        </div>
      </div> -->
      <div class="card mx-auto" style="max-width: 35rem;">
        <div class="card-body">
          <h5 class="card-title mb-3">For more discounts You can contact with us by:</h5>
          <h6 class="card-subtitle mb-2 text-muted">Phone Number: +374 91 22-11-40 Viber, Whatsapp</h6>
          <h6 class="card-subtitle mb-2 text-muted">E-mail address: info.b.holiday@gmail.com</h6>
        </div>
      </div>


    </div>
  </div>
  <div id="footer"></div>
  <div class="modal fade" id="book_now" role="dialog">
        <div class="modal-dialog book_now_modal">
          <div class="modal-content book_now_modal_body">
            <div class="modal-header p-1">
              <h2 style="color: white" class="m-auto">Book Now</h2>
              <button type="button" class="m-0 close" data-dismiss="modal">&times;</button>
            </div>
            <div style="z-index: 150000000;" class="modal-body">
              <div class="bootstrap-iso">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 mx-auto">
                      <form onsubmit="bookSubmit(event)">
                        <div class="form-group ">
                          <label class="control-label requiredField  text-black-100" for="name">
                          Full Name
                          <span class="asteriskField">
                            *
                          </span>
                          </label>
                          <input class="form-control" id="name" name="name" placeholder="Andy Brown" type="text"/>
                          <div class="book-error-msg"></div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label requiredField text-black-100" for="email">
                          Email
                          <span class="asteriskField">
                            *
                          </span>
                          </label>
                          <input class="form-control" id="email" name="email" placeholder="andy@mail.com" type="text"/>
                          <div class="book-error-msg"></div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label requiredField text-black-100" for="tel">
                          Phone Number
                          <span class="asteriskField">
                            *
                          </span>
                          </label>
                          <input class="form-control" id="tel" name="tel" placeholder="+37411223344" type="text"/>
                          <div class="book-error-msg"></div>
                        </div>
                        <div class="form-group" id="div_messengerbox">
                          <label class="control-label text-black-100" for="messengerbox">
                          Specify the messenger that supports your phone
                          </label>
                          <div class=" ">
                            <label class="checkbox-inline text-black-100">
                              <input style="margin-left: -16px !important; opacity: 1;" name="messengerbox" type="checkbox" value="Viber"/>
                              Viber
                            </label>
                            <label class="checkbox-inline text-black-100">
                              <input style="margin-left: -16px !important; opacity: 1;" name="messengerbox" type="checkbox" value="WhatsApp"/>
                              WhatsApp
                            </label>
                            <label class="checkbox-inline text-black-100">
                              <input style="margin-left: -16px !important; opacity: 1;" name="messengerbox" type="checkbox" value="Telegram"/>
                              Telegram
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <button class="btn btn-primary text-black-100" name="submit" type="submit">
                              Submit
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="anasunTextTypeOfficialMessages1" role="dialog">
        <div style="width: 100vw;margin: 5vh 20vw;" class="modal-dialog">
          <div style="width: 60vw;height: 90vh;" class="modal-content">
            <div class="modal-header p-1">
              <h2 style="color: white" class="m-auto">All Inclusive - Terms</h2>
              <button type="button" class="m-0 close" data-dismiss="modal">&times;</button>
            </div>
            <div style="z-index: 500; overflow-x: hidden;" class="modal-body">
              <p>
                <span style="font-size:11pt">
                  <span style="font-family:NotoSansArmenian-Regular">
                    <span style="color:#000000">
                      В рамках выбранного тур пакета<br />
                      1. Питание без ограничения<br />
                      2. Выпивка алкогольных и без алкогольных напитков<br />
                      3. Питание в разных Армянских ресторанах<br />
                      4. Дистиллированная вода в дорогах<br />
                      5. Машины с кондиционером<br />
                      6. Возможность выбора жилья(Гостиница, Частный дом, Квартира)<br />
                      7. Персональный Гид 24ч
                    </span>
                  </span>
                </span>
              </p>
              <h1>
                <strong>
                  <span style="font-size:11pt">
                    <span style="font-family:NotoSansArmenian-Regular">
                      <span style="color:#000000">1 DAY - 1000&euro;</span>
                    </span>
                  </span>
                </strong>
              </h1>
              <p>
                <span style="font-size:11pt">
                  <span style="font-family:NotoSansArmenian-Regular">
                    <span style="color:#000000">
                      Within the selected tour package<br />
                      1. Food without restriction<br />
                      2. Drinking alcoholic and non-alcoholic drinks<br />
                      3. Food in different Armenian restaurants<br />
                      4. Distilled water on the road<br />
                      5. Air conditioning machines<br />
                      6. The choice of housing (Hotel, Private house, Apartment)<br />
                      7. Personal Guide 24h
                    </span>
                  </span>
                </span>
              </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
            
      <div class="modal fade" id="anasunTextTypeOfficialMessages2" role="dialog">
        <div style="width: 100vw;margin: 5vh 20vw;" class="modal-dialog">
          <div style="width: 60vw;height: 90vh;" class="modal-content">
            <div class="modal-header p-1">
              <h2 style="color: white" class="m-auto">Ultra All Inclusive - Terms</h2>
              <button type="button" class="m-0 close" data-dismiss="modal">&times;</button>
            </div>
            <div style="overflow-x: hidden;" class="modal-body">
                <p style="margin-left:48px; text-align:center"><span style="font-size:22pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>1 DAY - 2000&euro;</strong></span></span></span><br></p>
                    <ol>
                      <li style="list-style-type:decimal"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Медицинская страховка</span></span></span></li>
                      <li style="list-style-type:decimal"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Питание без ограничения</span></span></span></li>
                      <li style="list-style-type:decimal"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Выпивка алкогольных и без алкогольных напитков без ограничения</span></span></span></li>
                      <li style="list-style-type:decimal"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Питание в&nbsp; разных элитных Армянских ресторанах(Выбор кухни по пожеланию)</span></span></span></li>
                      <li style="list-style-type:decimal"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Постоянно пополняемый мини бар&nbsp;</span></span></span></li>
                      <li style="list-style-type:decimal"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Машины с кондиционером</span></span></span></li>
                      <li style="list-style-type:decimal"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Возможность выбора жилья(Гостиница, Частный дом, Квартира)</span></span></span></li>
                      <li style="list-style-type:decimal"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Возможность запланировать ваш последующий день как пожелаете</span></span></span></li>
                      <li style="list-style-type:decimal"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Во время провождения тура возможность изменить его на ваш вкус&nbsp;</span></span></span></li>
                      <li style="list-style-type:decimal"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Персональный Гид переводчик 24ч</span></span></span></li>
                      <li style="list-style-type:decimal"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Посещения винных и коньячных заводов с возможностью дегустации (+Подарок бутылка хорошего напитка)&nbsp;</span></span></span></li>
                      <li style="list-style-type:decimal"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Вам по мимо покупки сувениров для ваших друзей или купли личных вещей не будет необходимости трать ни единого евро.</span></span></span></li>
                    </ol>
                
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Вы будете&nbsp; находится в Армении и получать неограниченное количество&nbsp; безумных эмоций не задумываясь о ценах. Вам надо всего лишь выбрать пункт&nbsp; </span></span></span><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>ULTRA All Inclusive </strong></span></span></span><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">и выбрать количество дней. Остальное за нами вы проведёте незабываемое время в нашей Стране с самой богатой историей мира</span></span></span></p>
                    <p>&nbsp;</p>
                    <p style="margin-left:48px; text-align:center"><span style="font-size:22pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>1 DAY - 2000&euro;</strong></span></span></span></p>
                    <p><br /></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">1. Health insurance</span></span></span></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">2. Food without restriction</span></span></span></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">3. Drinking alcoholic and non-alcoholic beverages without restriction</span></span></span></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">4. Meals in various elite Armenian restaurants (choice of cuisine at will)</span></span></span></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">5. Constantly replenished minibar</span></span></span></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">6. Air conditioning machines</span></span></span></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">7. Possibility to choose housing (Hotel, Private house, Apartment)</span></span></span></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">8. The ability to plan your next day as you wish</span></span></span></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">9. During the tour the opportunity to change it to your taste</span></span></span></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">10. Personal Translator Guide 24h</span></span></span></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">11. Visits to wineries and cognacs with the possibility of tasting (+ Gift a bottle of a good drink)</span></span></span></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">12. In addition to buying souvenirs for your friends or buying personal items, you will not need to spend a single euro.</span></span></span></p>
                    <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">You will be in Armenia and receive an unlimited number of crazy emotions without thinking about prices. You just need to select the ULTRA All Inclusive item and select the number of days. The rest is ours, you will spend unforgettable time in our country with the richest history of the world</span></span></span></p>
                    <p>&nbsp;</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  </div>
  
        <div class="modal fade" id="anasunTextTypeOfficialMessages3" role="dialog">
        <div style="width: 100vw;margin: 5vh 20vw;" class="modal-dialog">
          <div style="width: 60vw;height: 90vh;" class="modal-content">
            <div class="modal-header p-1">
              <h2 style="color: white" class="m-auto">Crazy All Inclusive - Terms</h2>
              <button type="button" class="m-0 close" data-dismiss="modal">&times;</button>
            </div>
            <div style="overflow-x: hidden;" class="modal-body">
                <p>
                      <span style="font-size:11pt"><span style="font-family:NotoSansArmenian-Regular"><span style="color:#000000">Медицинская страховка<br />
                      Питание без ограничения<br />
                      Выпивка алкогольных и без алкогольных напитков без ограничения<br />
                      Питание в &nbsp;разных элитных Армянских ресторанах(Выбор кухни по пожеланию)<br />
                      Прогулки по ночному Еревану,<br />
                      Посещение ночных клубов, Стрип Баров<br />
                      Развлекательное время провождение в молодежных и элитных клубах&nbsp;<br />
                      Постоянно пополняемый мини бар&nbsp;<br />
                      Загородные посиделки &nbsp;в красивых и исторических местах нашей родины<br />
                      Машины с кондиционером<br />
                      Возможность выбора жилья(Гостиница, Частный дом, Квартира)<br />
                      Возможность запланировать ваш последующий день как пожелаете<br />
                      Во время провождения тура возможность изменить его на ваш вкус&nbsp;<br />
                      Персональный Гид переводчик 24ч<br />
                      Посещения винных и коньячных заводов с возможностью дегустации (+Подарок бутылка хорошего напитка)&nbsp;<br />
                      Вам по мимо покупки сувениров для ваших друзей или купли личных вещей не будет необходимости трать ни единого евро.<br />
                      Вы будете &nbsp;находится в Армении и получать неограниченное количество &nbsp;безумных эмоций не задумываясь о ценах. Вам надо всего лишь выбрать пункт &nbsp;ULTRA All Inclusive и выбрать количество дней. Остальное за нами вы проведёте незабываемое время в нашей Стране с самой богатой историей мира</span></span></span>
                    </p>
                    
                    <h1><strong><span style="font-size:11pt"><span style="font-family:NotoSansArmenian-Regular"><span style="color:#000000">1 DAY - 2000&euro;</span></span></span></strong></h1>
                    
                    <p><span style="font-size:11pt"><span style="font-family:NotoSansArmenian-Regular"><span style="color:#000000">1. Health insurance<br />
                    2. Food without restriction<br />
                    3. Drinking alcoholic and non-alcoholic beverages without restriction<br />
                    4. Meals in various elite Armenian restaurants (choice of cuisine at will)<br />
                    5. Walking in night Yerevan<br />
                    6. Visiting nightclubs, Strip Bars<br />
                    7. Entertaining time in youth and elite clubs<br />
                    8. Constantly replenished minibar<br />
                    9. Country gatherings in the beautiful and historical places of our homeland<br />
                    10. Air conditioning machines<br />
                    11. The choice of housing (Hotel, Private house, Apartment)<br />
                    12. The ability to plan your next day as you wish<br />
                    13. During the tour the opportunity to change it to your taste<br />
                    14. Personal 24 hour translator guide<br />
                    15. Visits to wineries and brandies with the possibility of tasting (+ Gift a bottle of a good drink)<br />
                    16. In addition to buying souvenirs for your friends or buying personal items, you will not need to spend a single euro.<br />
                    You will be in Armenia and receive an unlimited number of crazy emotions without thinking about prices. You just need to select the ULTRA All Inclusive item and select the number of days. The rest is ours, you will spend unforgettable time in our country with the richest history of the world</span></span></span><br />
                    &nbsp;</p>
                  <div class="row">
                    <div class="col-lg-4">
                      <a rel="group_crazy" href="/images/Crazzy All Inclusive/44.jpg"><img src="/images/Crazzy All Inclusive/44.jpg" class="img-fluid" alt="Responsive image"></a>
                    </div>
                    <div class="col-lg-4">
                      <a rel="group_crazy" href="/images/Crazzy All Inclusive/luchshie-strip-kluby-kieva.jpg"><img src="/images/Crazzy All Inclusive/luchshie-strip-kluby-kieva.jpg" class="img-fluid" alt="Responsive image"></a>
                    </div>
                    <div class="col-lg-4">
                      <a rel="group_crazy" href="/images/Crazzy All Inclusive/original_55dd8a078a577f3e368b456a_577922db0c630.jpg"><img src="/images/Crazzy All Inclusive/original_55dd8a078a577f3e368b456a_577922db0c630.jpg" class="img-fluid" alt="Responsive image"></a>
                    </div>
                  </div>
    </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- END slider -->
  <div class="page-wraper">
    <!-- <div id="loading-area"></div> -->
    <div class="page-content bg-white">
      <!-- inner page banner -->
      <!-- inner page banner END -->
      <div class="content-block">
        <div class="section-full">
          <div class="container">
            <div class="row m-b50">
              <div class="col-lg-12">
                <div style="min-height: 500px;">
                  <h1 class="text-center m-b50"><?= $tours[$tour_number]['title'] ?></h1>
                  <img style="margin-top: 5px; float: left;" class="mr-4" src="<?= $tours[$tour_number]['image'] ?>">
                  <p class="m-b10"><?= $tours[$tour_number]['desc'] ?></p>
                </div>
                <h2 style="color: RGB(128, 0, 0)" class="text-center m-t30 m-b50"><?= $tours[$tour_number]['h2'] ?></h2>
              </div>
            </div>
            <?php
              $day_image_array = [
                1 => [
                  "/images/horse_tour/cascade.jpg", // cascade                
                  "/images/horse_tour/urtsadzor.jpg", // "/images/horse_tour/horse_tour.jpg",
                  "/images/horse_tour/lanjanist.jpg", // dakhnak -spitak khach ekexeci
                  "/images/horse_tour/surb_karapet.jpg", // Karapet churck
                  "/images/horse_tour/yeranos.jpg",
                  "/images/horse_tour/xosrov.jpg",
                  "/images/horse_tour/zvartnoc.jpg",
                ],
                2=>[
                  "/images/walking_tour/opera.jpg",
                  "/images/walking_tour/noravank.jpg",
                  "/images/walking_tour/tsahats.jpg",
                  "/images/walking_tour/gladzor.jpg",
                  "/images/walking_tour/gnishik.jpg",
                  "/images/walking_tour/noraduz.jpg",
                  "/images/horse_tour/zvartnoc.jpg",
                ],
                3=>[
                  "/images/sightseeing_tour/cascade_to_masis.jpg", // cascade 
                  "/images/sightseeing_tour/garni.jpg",
                  "/images/sightseeing_tour/virap.jpg",
                  "/images/sightseeing_tour/sevan.jpg",
                  "/images/sightseeing_tour/amberd.jpg",
                  "/images/sightseeing_tour/zvartnoc_ruins.jpg",
                  "/images/sightseeing_tour/vernisaj.jpg",
                ],
                4=>[
                  "/images/tour_artsakh/maten_inside.jpg", // cascade 
                  "/images/tour_artsakh/geghard.jpg",
                  "/images/tour_artsakh/tatev.jpg",
                  "/images/tour_artsakh/gandzasar.jpg",
                  "/images/tour_artsakh/karahunj.jpg",
                  "/images/tour_artsakh/goshavanq.jpg",
                  "/images/tour_artsakh/echmiadzin.jpg",
                ],
                5=>[
                  "/images/weekend_tour/cafesjian.png", // cascade 
                  "/images/weekend_tour/geghard.png",
                  "/images/weekend_tour/ararat_brandy.jpg",
                ],
                6=>[
                  "/images/excursion_tour/mesrop.jpg",
                  "/images/excursion_tour/garni.jpg",
                  "/images/excursion_tour/virap.jpg",
                  "/images/excursion_tour/goshavanq.jpg",
                  "/images/excursion_tour/miacin.jpg",
                  
                ]
              ];
              
              $days_title_array = [
                1 => [
                  "Airport - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"group_19\" title=\"YEREVAN\">Yerevan</a> City Tour",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_1\" title=\"YEREVAN\">Yerevan</a> - moving to Urtsadzor village - Training",
                  "Crossing the Dakhnak Mountains - Spitak Khach Church",
                  "Crossing the Urtsky Ridge - Surb Karapet Church",
                  "Crossing the Dakhnak mountains - Summer pastures - Yeranos",
                  "Crossing the buffer zone of Khosrov Reserve to the village of Urtsadzor",
                  "Airport transfer",
                ],
                2 => [
                  "Airport - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"group_19\" title=\"YEREVAN\">Yerevan</a> City Tour",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_1\" title=\"YEREVAN\">Yerevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Noravank Monastery/images (1).jpg\" rel=\"group_13\" title=\"Noravank Monastery\">Noravank Monastery</a> - Arates Monastery - Hermon Village",
                  "Hermon - Yeghegis - Tsahats Kar - Smbataberd - Shatin",
                  "Hermon - Gladzor - Vernashen - Proshaberd - Spitakavor",
                  "Yeghegnadzor - Gnishik - Mozrov - Areni",
                  "Caravanserai - Madina - Noratus - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Sevanavank/images (1).jpg\" rel=\"group_16\" title=\"Sevanavank\">Sevanavank</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_2\" title=\"YEREVAN\">Yerevan</a>",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_3\" title=\"YEREVAN\">Yerevan</a> - airport"
                ],
                3 => [
                  "Airport - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"group_19\" title=\"YEREVAN\">Yerevan</a> City tour",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_1\" title=\"YEREVAN\">Yerevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Garni/images (15).jpg\" rel=\"group_4\" title=\"Garni\">Garni</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Geghard/images (1).jpg\" rel=\"group_5\" title=\"Geghard\">Geghard</a> – <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_2\" title=\"YEREVAN\">Yerevan</a>",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_3\" title=\"YEREVAN\">Yerevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Khor Virap/images (1).jpg\" rel=\"group_10\" title=\"Khor Virap\">Khor Virap</a>, - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Noravank Monastery/images (1).jpg\" rel=\"group_13\" title=\"Noravank\">Noravank</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/TATEV/images (1).jpg\" rel=\"group_17\" title=\"Tatev monastery\">Tatev monastery</a> – <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_4\" title=\"YEREVAN\">Yerevan</a>",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_5\" title=\"YEREVAN\">Yerevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Sevan/images (1).jpg\" rel=\"group_15\" title=\"Sevan\">Sevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Dilijan/images (1).jpg\" rel=\"group_2\" title=\"Dilijan\">Dilijan</a> - Haghartsin - Goshavank – <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_6\" title=\"YEREVAN\">Yerevan</a>",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_7\" title=\"YEREVAN\">Yerevan</a> - Saghmosavank - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Ambert/images (1).jpg\" rel=\"group_0\" title=\"Ambert\">Fortress of Amberd</a> - Byurakan Observatory -  <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_8\" title=\"YEREVAN\">Yerevan</a>",
                  "The Republic Square - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Echmiadzin/images (1).jpg\" rel=\"group_3\" title=\"Echmiadzin\">Echmiadzin</a> - Zvartnots - Brandy Factory",
                  "Parajanov Museum - Vernissage - Central Market",
                ],
                4 => [
                  "Airport - A walk in <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"group_19\" title=\"YEREVAN\">Yerevan</a>",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_1\" title=\"YEREVAN\">Yerevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Garni/images (15).jpg\" rel=\"group_4\" title=\"Garni\">Garni</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Geghard/images (1).jpg\" rel=\"group_5\" title=\"Geghard\">Geghard</a> – <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_2\" title=\"YEREVAN\">Yerevan</a>",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_3\" title=\"YEREVAN\">Yerevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Khor Virap/images (1).jpg\" rel=\"group_10\" title=\"Khor Virap\">Khor Virap</a>, - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Noravank Monastery/images (1).jpg\" rel=\"group_13\" title=\"Noravank\">Noravank</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/TATEV/images (1).jpg\" rel=\"group_17\" title=\"Tatev monastery\">Tatev monastery</a> – Stepanakert",
                  "Stepanakert - Gandzasar - Dadivank – Tigranakert – Stepanakert",
                  "Stepanakert - Shushi - Khndzoresk - Karahunj – <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_4\" title=\"YEREVAN\">Yerevan</a>",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_5\" title=\"YEREVAN\">Yerevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Sevan/images (1).jpg\" rel=\"group_15\" title=\"Sevan\">Sevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Dilijan/images (1).jpg\" rel=\"group_2\" title=\"Dilijan\">Dilijan</a> - Haghartsin - Goshavank – <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_6\" title=\"YEREVAN\">Yerevan</a>",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_7\" title=\"YEREVAN\">Yerevan</a> - Matenadaran - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Echmiadzin/images (1).jpg\" rel=\"group_3\" title=\"Echmiadzin\">Echmiadzin</a> - airport",
                ],
                5 => [
                  "Airport - City Tour in <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"group_19\" title=\"YEREVAN\">Yerevan</a>",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_1\" title=\"YEREVAN\">Yerevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Garni/images (15).jpg\" rel=\"group_4\" title=\"Garni\">Garni</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Geghard/images (1).jpg\" rel=\"group_5\" title=\"Geghard\">Geghard</a> – <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Sevan/images (1).jpg\" rel=\"group_15\" title=\"Sevan\">Sevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_2\" title=\"YEREVAN\">Yerevan</a>",
                  "Republic Square - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Echmiadzin/images (1).jpg\" rel=\"group_3\" title=\"Echmiadzin\">Echmiadzin</a> - Zvartnots - Airport",
                ],
                6 => [
                  "Airport - A walk in <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"group_19\" title=\"YEREVAN\">Yerevan</a>",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_1\" title=\"YEREVAN\">Yerevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Garni/images (15).jpg\" rel=\"group_4\" title=\"Garni\">Garni</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Geghard/images (1).jpg\" rel=\"group_5\" title=\"Geghard\">Geghard</a> – <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_2\" title=\"YEREVAN\">Yerevan</a>",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_3\" title=\"YEREVAN\">Yerevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Khor Virap/images (1).jpg\" rel=\"group_10\" title=\"Khor Virap\">Khor Virap</a>, - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Noravank Monastery/images (1).jpg\" rel=\"group_13\" title=\"Noravank\">Noravank</a> – <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_4\" title=\"YEREVAN\">Yerevan</a>",
                  "<a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_5\" title=\"YEREVAN\">Yerevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Sevan/images (1).jpg\" rel=\"group_15\" title=\"Sevan\">Sevan</a> - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Dilijan/images (1).jpg\" rel=\"group_2\" title=\"Dilijan\">Dilijan</a> - Haghartsin - Goshavank – <a style=\"color: RGB(128, 0, 0)\" href=\"./images/YEREVAN/images (51).jpg\" rel=\"yer_6\" title=\"YEREVAN\">Yerevan</a>",
                  "The Republic Square - <a style=\"color: RGB(128, 0, 0)\" href=\"./images/Echmiadzin/images (1).jpg\" rel=\"group_3\" title=\"Echmiadzin\">Echmiadzin</a> - Zvartnots - Brandy Factory",
                ]
              ];

              $day_desc_array = [
                1 => [
                  '<span>
                    <p>Meeting at the airport</p>
                    <p>Transfer and check in to hotel</p>
                    <p>The tour will begin with a <strong>walking tour of the city</strong>. The architecture of Yerevan is original. Today, Yerevan is a city in which there are various architectural styles, with green alleys, numerous fountains. You will get acquainted with the sights of Yerevan: the Grand Cascade (open-air museum), the Square of France, the Opera and Ballet Theater, North Avenue, the Square of the Republic.</p>
                  </span>',
                  '<span>
                    <p>Early departure</p>
                    <p>Arrival in the village of Urtsadzor, acquaintance and establishing contact with horses, under the guidance of our guides-instructors, training.</p>
                    <p><strong>Advance on horses to the monastery of Gevork Marzpetuni (Tapi bird) 10-13 century.</strong></p>
                    <p>Observation of the flora and fauna of the area.</p>
                    <p><strong>Light lunch on the way.</strong></p>
                    <p>Exploring the fortress and its surroundings.</p>
                    <p><strong>Dinner and overnight in tents.</strong></p>
                  </span>',
                  '<span>
                    <p>Early departure</p>
                    <p><strong>Extension through the Dakhnak Mountains to the Spitak Khach Church.</strong></p>
                    <p>Monitoring rare and endangered species of the flora and fauna of the region.</p>
                    <p><strong>Light snack on halts.</strong></p>
                    <p>Exploring the church and its surroundings.</p>
                    <p><strong>Dinner and overnight in tents near the village of Lanjanist.</strong></p>
                  </span>',
                  '<span>
                    <p>Early departure</p>
                    <p><strong>Crossing the Urtsky Range</strong></p>
                    <p>Monitoring rare biological species.</p>
                    <p><strong>Meeting in alpine meadows with shepherds</strong></p>
                    <p>Easy lunch.</p>
                    <p>Crossing Moshagyuh to Surb Karapet church.</p>
                    <p><strong>Dinner, overnight in tents.</strong></p>
                  </span>',
                  '<span>
                    <p>Early departure</p>
                    <p><strong>Circular maneuver around the Dakhnak mountains watching the wildlife of the region.</strong></p>
                    <p>Descent to the town of Yeranos (not to be confused with the village of Yeranos on Lake Sevan), where shepherd’s families live on summer pastures.</p>
                    <p><strong>Easy lunch on halts</strong></p>
                    <p>The study of khachkars (stones, crosses) 6-8 centuries.</p>
                    <p>The study of khachkars (stones, crosses) 6-8 centuries.</p>
                    <p><strong>Dinner and overnight in tents.</strong></p>
                  </span>',
                  '<span>
                    <p>Early departure</p>
                    <p><strong>Trek in the surroundings of Khosrov reserve to Urtsadzor.</strong></p>
                    <p>Study of the unique ecological diversity of the region.</p>
                    <p><strong>Lunch on the halts.</strong></p>
                    <p>Return from the south to the complex of the monastery of Gevorg Marzpetuni (Tapi bird) 10-13 centuries.</p>
                    <p><strong>Dinner, night in tents. (If you wish - later return to Yerevan).</strong></p>
                  </span>',
                  '<span>
                    <p>Free day</p>
                    <p>Dinner</p>
                    <p>Airport transfer</p>
                    <p><strong>WHAT YOU NEED TO HAVE WITH YOURSELF:</strong> Warm clothes, long sleeved clothes, warm waterproof shoes, since there is still snow in spring, gloves, a hat, an umbrella, phone, laptop and tablet chargers and other equipment, medicines for permanent use, antibacterial gel and wipes, antiseptic lip cream, sunscreen and sunglasses.</p>
                    <p style="font-size: 30px; line-height: 44px;"><strong>WHAT IS NECESSARY TO KNOW ABOUT HORSE TOURS</strong></p>
                    <p>The specificity of horseback riding is that the tourist will spend in the saddle from 3 to 6 hours a day, and this requires certain riding skills. We want to note how it is necessary to treat horses:</p>
                    <ul>
                      <li>one must approach the horse and sit on it on the left side;</li>
                      <li>it is necessary to go around the horse in front;</li>
                      <li>before boarding a horse, check the ammunition: is the saddle-girth tight? does the saddle hang out? are the reins thrown over the neck?</li>
                    </ul>
                    <p style="font-size: 25px; line-height: 44px;"><strong>It is strictly prohibited for your safety:</strong></p>

                    <ul>
                      <li>ride a horse on the right side;</li>
                      <li>release the reins from the hands, fasten them on the saddle, wind on the arm, etc.;</li>
                      <li>go around the horse from behind, especially to touch the croup or tail;</li>
                      <li>ride a tied horse;</li>
                      <li>break the distance in the column, or go for overtaking;</li>
                      <li>carry sharp objects in your pockets that can hurt you when falling from a horse.</li>
                    </ul>

                    <p style="color: red"><strong>It is very important to strictly follow the directions of the instructors.</strong></p>
                    <p style="font-size: 25px; line-height: 44px;"><strong>Requirements for equipment for participation in the horseback tour:</strong></p>
                    <ul>
                      <li>clothing should be comfortable, and trousers and underwear should not have rough internal seams, in order to avoid calluses with a long ride in the saddle;</li>
                      <li>shoes must have a heel. It`s desirable to have boots. It is forbidden to use shoes with highly grooved surfaces or soft shoes, which may prevent the quick release of the foot from the stirrup;</li>
                      <li>in the mountains it is necessary to have changeable clothes that can protect from cold, rain and wind. Shoes must be waterproof. To protect from the sun, you must have a hat and sunscreen.</li>
                    <ul>
                  </span>',
                ],
                2 => [
                  '<span>
                    <p>Meeting at the airport</p>
                    <p>Transfer and check in to hotel</p>
                    <p>The tour will begin with a <strong>walking tour of the city</strong>. The architecture of Yerevan is original. Today, Yerevan is a city in which there are various architectural styles, with green alleys, numerous fountains. You will get acquainted with the sights of Yerevan: <strong>the Grand Cascade (open-air museum), Square of France, Opera and Ballet Theater, Northern Avenue, Republic Square.</strong></p>
                  </span>',
                  '<span>
                    <p>Early departure from Yerevan</p>
                    <p>A small briefing by the instructor guide.</p>
                    <p>The advancement from the 10th kilometer of the road to the village of Khachik along the mountain plateau towards the <strong>monastic complex of Noravank</strong> (the length of the hike is about 10 kilometers). Trekking along the gorge, observation of historical and natural monuments, original flora and fauna of the area. Noravank is one of the most beautiful complexes in Armenia. It was founded in the 12th century on the site of ancient buildings and consists of three unique churches - St. Karapet (9-10c), St. Grigor (13c) and St. Astvatsatsin (14c).</p>
                    <p>Lunch at the restaurant.</p>
                    <p>Departure along the picturesque canyon to the road and transfer to the Arates gorge.</p>
                    <p>Further advancement to the half-ruined, but still majestic mountain <strong>monastery complex Arates</strong>, which is located on the top of a picturesque hill of the tributary of the Yeghegis River. At one time, the complex was a center for copying manuscripts and consisted of three churches - Surb Zion, Surb Karapet and Surb Astvatsatsin, which date back to the 7th-12th centuries and several chapels. The porch of the 13th century is considered to be an amazing monument of the complex.</p>
                    <p>Check in hotel</p>
                    <p>Dinner and overnight in the village of Hermon.</p>
                  </span>',
                  '<span>
                    <p>Departure to Yeghegis</p>
                    <p><strong>Hike to Tsakhats Kar monastery complex (10th century).</strong> Its creation is associated with several battles of the Armenian troops against the invaders of the Sasanian Empire, which took place in Vayots Dzor. The complex consists of several parts. One of the buildings was the Church of the Holy Virgin of the 10th century. Nearby are the main monastic buildings of the complex - the churches of Hovhannes and St. Karapet, decorated with ornaments. In the eastern part rises the original architectural structure - a two-storey tomb - the earliest known similar buildings.</p>
                    <p>A little rest</p>
                    <p><strong>Trekking to the unaccessible fortress Smbataberd (5 in)</strong> protected from three sides. You can get here only from the north. The defensive complex was built according to all the canons of the construction of medieval fortresses. Its total length is about a kilometer. The fortress is divided into two parts, the north and south. Constructions of barracks, pools, stables and other attributes of fortifications were found here.</p>
                    <p><strong>Snack on the route</strong></p>
                    <p>Descent to the village Yeghegis</p>
                    <p>Further if the weather is good, go to the observation deck of the village of Shatin to <strong>observe the Red Book animals.</strong></p>
                    <p>Dinner and overnight in the village of Hermon.</p>
                  </span>',
                  '<span>
                    <p>Early departure</p>
                    <p>A trip to the village Vernashen in the vicinity of which on the picturesque mountain plateau was the <strong>medieval university complex Gladzor (13th century)</strong>. Contemporaries called him "Second Athens", because students received an outstanding education. A number of Armenian public figures and scholars, including an outstanding architect - miniaturist author and artist-sculptor of the Surb Astvatsatsin Church of the Noravank Monastery - Momik, received education here.</p>
                    <p>After visiting the University Museum at the St. Hakob Church in the village of Vernashen, we begin a <strong>hike in the mountains to Spitakavor Monastery (13th century)</strong> and <strong>Proshabird Fortress (13th century)</strong>. The Spitakavor complex consists of a church, a porch, a bell tower and fortress walls around the complex. Its name means “whitish”, because the fortress is built of smooth-hewn white felsite.</p>
                    <p>A little rest. Snack on the route</p>
                    <p>At a distance of 1-2 kilometers from the complex at the top of the mountain stands the <strong>Proshaberd or Boloraberd fortress.</strong> The fortress was inaccessible and fell only once. According to legend, here in the mountains, Prince Prosh hid his treasures and special signs remained on the rocks. If interpreted correctly, one can find treasures hidden for centuries.</p>
                    <p>Dinner and overnight in the city of Yeghegnadzor.</p>
                  </span>',
                  '<span>
                    <p>Departure towards the village Gnishik.</p>
                    <p>Extending along the “red” gorge to the <strong>Mozrovskaya cave</strong>, observing the diversity of the flora and fauna of the area. <strong>Gnishik gorge</strong> is very impressive and full of natural monuments and historical monuments. Along the way you will see the khachkars of the early Christian period and medieval monuments.</p>
                    <p>Exit to the environments of the deepest cave of Armenia - Mozrov. The cave, though unique, is not fully understood, so it’s best to watch it from the entrance.</p>
                    <p>Dinner</p>
                    <p>Further we will continue the <strong>foot way</strong> towards the <strong>village of Areni</strong>. The cave complex is a place of unique archaeological finds from different eras from the 5th century BC.  until the 14th century AD, which significantly changed the idea of an ancient man. The artifacts found here are record breakers of antiquity and they are often mentioned in studies of historians around the world.</p>
                    <p>Near the cave, along with other historical monuments, is another masterpieces  of Momik – the <strong>church of Surb Astvatsatsin (14th century)</strong>.</p>
                    <p>Dinner and overnight in the city of Yeghegnadzor.</p>
                  </span>',
                  '<span>
                    <p>Moving along the Selim Pass (2500m) to the <strong>Caravanserai (14th century)</strong>, built on the Silk Road for caravans with goods going to Europe and to the East.</p>
                    <p><strong>Trekking to the extinct crater</strong> - Lake Ahmakhan and Vishapakara (Stone Dragons). Observation of numerous natural and historical monuments and original steppe flora and fauna, some species of which are endemic to Armenia.</p>
                    <p>Departure to Lake Sevan.</p>
                    <p><strong>Lake Sevan</strong> is a freshwater lake of the Armenian Highland, the largest lake in the Caucasus. It is a large guaranteed source of fresh water in the region.</p>
                    <p>Observation (if desired) of the unique wetland ornithological fauna of the village of Lichk and Seagull Islands, inhabited by an endemic colony of the Armenian gulls.</p>
                    <p>Visit the open-air museum - an ancient burial with <strong>khachkars of the village of Noratus (9-13 century).</strong></p>

                    <p>Lunch at the restaurant</p>
                    <p>Visit to <strong>Sevanavank - a monastery on the northwest coast of Lake Sevan.</strong> The monastery is located on the Sevan peninsula, which was previously a small island.</p>
                    <p>Return to Yerevan</p>
                    <p>Check in hotel</p>
                    <p>Dinner in a restaurant with tasting national dishes</p>
                  </span>',
                  '<span>
                    <p>Exemption numbers</p>
                    <p>Free day</p>
                    <p>Airport transfer</p>
                    <p><strong>Throughout the tour, you will be accompanied by an experienced guide instructor. During the tour, you must strictly follow the instructions of the instructor.</strong></p>
                  </span>',
                ],
                3 => [
                  '<span>
                    <p>The tour in Armenia will start with a sightseeing tour in Yerevan. After breakfast we visit the Institute of Ancient Manuscripts -Matenadaran named after St. Mesrop Mashtots. The most ancient manuscripts are dated back to the 5th century AD and are associated with Mesrop Mashtots, who invented the Armenian alphabet.</p>
                    <p>We shall then proceed to the Cascade. It is a 500-meter high staircase (522 steps) from tuff, with fountains and flower beds, as well as an open air museum, which presents about 30 sculptures by famous masters. Inside the complex Cafesjian Center of Arts is located on 5 tiers.</p>
                    <p>Dinner at a restaurant with tasting of national dishes.</p>
                  </span>',
                  '<span>
                    <p>After breakfast, we go on an excursion in the Yerevan History Museum, which is located in the building of City Hall. The museum\'s collection consists of more than 87 thousand exhibits. The main exhibit is a copy of the cuneiform stone from the fortress of Erebuni, which states that in 782 BC the king of Urartu Argishti I founded a fortress city here.</p>
                    <p>Afterwards we visit the <strong>pagan temple of Garni</strong>, built in the I century by Armenian king Trdat I and dedicated to the god of sun Mihr. According to history, the temple was built on the money of the Roman Emperor Nero. Azat River gorge is famous for its basaltic pillars - the result of a volcanic lava flow.</p>
                    <p>Next stop is <strong>Geghard monastery complex</strong> (IV century), which is included in the list of World Cultural Heritage by the UNESCO. Its full name is <strong>Geghardavank, literally it is translated as "Monastery of the spear"</strong>. The name of the monastery complex comes from Christ Spear (Spear of Longinus), which the Roman soldier Longinus thrust in Jesus Christ. The spear is now kept in the treasury of Echmiadzin Cathedral.</p>
                    <p>Back to Yerevan.</p>
                    <p><strong>Dinner</strong> at a restaurant with tasting of national dishes.</p>
                  </span>',
                  '<span>
                    <p>After breakfast, we go to the Armenian monastery of Khor Virap, situated at the foot of Mount Ararat, near the border with Turkey. It is a place of pilgrimage, which is connected with the legend of Grigor Lusavorich (Grigor the Illuminator). According to church tradition, Gregory was imprisoned on the orders of King Trdat III, caught in that he professes Christianity, and was held there for 13 years. Those interested can go down to the prison, which has a depth of 6 m and a diameter of 4.4 m.</p>
                    <p>Right in front of you, very, very close and in all its beauty you will see the symbol of Armenia - Mount Ararat.</p>
                    <p>Afterwards we go Noravank monastery complex, built in XIII-XIV centuries, which is located  1.5 kilometers east to the village of Areni. The complex is located on a narrow ledge winding gorge tributary of the Arpa River. The gorge is famous for its steep red cliffs, towering behind the monastery.</p>
                    <p>Lunch at a restaurant with tasting of national dishes.<br>Then we continue the journey to the Tatev monastery (IX-XIII centuries), which is located on the edge of a gigantic canyon. Tatev was one of the most famous spiritual and educational centers of the Middle Ages. The complex can be called one of the most noteworthy places on earth. The ropeway "Wings of Tatev" (the longest ropeway in the world - 5752 m, ranked in the Guinness Book of Records) will carry us over the beautiful Vorotan gorge directly to Tatev monastery.</p>
                    <p>Return to Yerevan.</p>
                  </span>',
                  '<span>
                    <p>After breakfast, we continue the tour to the pearl of Armenia - blue Sevan. Lake Sevan is a freshwater lake in the Armenian highlands. It is the largest lake in the Caucasus. It is guaranteed to be the largest source of fresh water in the region.</p>
                    <p>We will also visit the Sevanavank - a monastery in the north-west coast of Lake Sevan. The monastery is located on a peninsula, which was once a small island.</p>
                    <p>We continue our tour to Tavush Province of Armenia – to a small town-resort of Dilijan, located on the picturesque banks of the river Aghstev.</p>
                    <p>The next stop will be Haghartsin Monastery, which was built in the X-XIII centuries, mostly under the auspices of the Bagratuni Dynasty. We will also visit Goshavank - monastery complex, built in XII-XIII centuries in the village of Gosh in Armenia. Goshavank is  the cultural, educational and religious center of medieval Armenia. The sources referred to it as a seminary, university, and so on.</p>
                    <p>Return to Yerevan.</p>
                    <p>Dinner at a restaurant with tasting of national dishes.</p>
                  </span>',
                  '<span>
                    <p>On this day <strong>the tour</strong> starts with a visit to the <strong>Saghmosavank (XII-XIII c.)</strong>. The monastery is located on the right bank of the picturesque gorge of the Kasagh River, opposite the mountain Arailer (2600m.). These monasteries provide us with an opportunity to feel the power and the antiquity of Armenian architecture.</p>
                    <p>There will be a stop at Square of alphabet. This is a <strong>monument to the Armenian alphabet</strong>, which consists of 39 letters of the Armenian alphabet. There are also monuments to Mesrop Mashtots and his disciples.</p>
                    <p>Then we continue our trip to the <strong>fortress of Amberd (Fortress of clouds, VII-XIII century)</strong>, which is located on the southern slope of  mount Aragats, at an altitude of 2300 m. above the sea level.</p>
                    <p>After we continue getting acquainted with Armenia. We visit the <strong>village of Byurakan</strong> (Ten Thousand Springs), where the world famous <strong>Byurakan Astrophysical Observatory</strong>, founded in 1946 by <strong>Academician Viktor Hambardzumyan</strong>, is situated.</p>
                    <p>Back to Yerevan.</p>
                    <p><strong>Dinner</strong> at a restaurant with the tasting of national dishes.</p>
                  </span>',
                  '<span>
                    <p>After breakfast, we visit the <strong>History Museum of Armenia</strong>. The museum has collected about 400,000 exhibits. The museum exposition is divided into several departments: archaeological, ethnographic, numismatic department, historic architecture department, the Department of Modern and Contemporary history of Armenia.</p>
                    <p>Next we visit the city of Ecmiadzin - the center of the Armenian Apostolic Church, where the residence of the Catholicos is located. We will visit Echmiadzin Cathedral (301-483 AD), which is included in the UNESCO World Heritage list.<br />We visit the ruins of <strong>Zvartnots temple</strong>, which was destroyed in the earthquake. In 2000, the ruins of the temple and the archaeological area around it are included in the <strong>UNESCO</strong> World Heritage List.</p>
                    <p>We continue our tour in Armenia and visit <strong>Yerevan Brandy Factory</strong>, where we have a fascinating tour with tasting of 2 types of brandies (a three-year "Ararat" and a ten-year "Akhtamar").</p>
                    <p>We visit the <strong>Tsitsernakaberd memorial complex</strong>, dedicated to the victims of the Armenian Genocide of 1915, and the Genocide Museum.</p>
                    <p><strong>Dinner</strong> at a restaurant with tasting of national dishes.</p>
                  </span>',
                  '<span>
                    <p>We will visit the <strong>Sergei Parajanov Museum</strong>. Sergei Parajanov is a great film director, who created a new language of cinema, an artist, whose art has no analogues in the world of art. Fellini said: "His contribution to world cinema is primarily in the fact that he created a unique cinematic language. Parajanov\'s films’ world is a magical combination of color, plastics, music and words. In his films there are an encyclopedic knowledge of Eastern culture and art, a riot of fantasy ... ".</p>
                    <p>Next we visit the <strong>Vernissage - the market of folk art products</strong>. Here you will find hand-made chess and backgammon made of wood, ceramic pots, made in national style, handmade ornaments, traditional musical instruments, silverware, paintings and many more things.</p>
                    <p>A visit to the <strong>central market in Yerevan</strong>. Dried fruits - a national treasure and the usual accompaniment to cognac. In Armenia, it seems, they can make them of anything you wish. Including watermelon, cantaloupe and even tomatoes!</p>
                    <p>Free evening.</p>
                    <p>A <strong>farewell dinner</strong> at a restaurant with tasting the national dishes.</p>
                    <p>Return to the hotel, check out from the hotel and transfer to the airport.</p>
                  </span>',
                ],
                4 => [
                  '<span>
                    <p>The tour in Armenia will start with a <strong>sightseeing tour in Yerevan</strong>. We visit the <strong>Institute of Ancient Manuscripts</strong> named after St. Mesrop Mashtots. The most ancient manuscripts are dated back to the 5th century BC and are associated with Mesrop Mashtots, who invented the Armenian alphabet.</p>
                    <p>We shall then proceed to the <strong>Cascade</strong>. It is a 500-meter high staircase (522 steps) from tuff, with fountains and flower beds, as well as an open air museum, which presents about 30 sculptures by famous masters. Inside the complex <strong>Cafesjian Center of Arts</strong> is located on 5 tiers.</p>
                  </span>',
                  '<span>
                    <p>The day starts with a <strong>trip to the pagan</strong> temple of Garni built in the I century by Armenian king Trdat I and dedicated to the god of sun Mihr. According to history, the temple was built on the money of the <strong>Roman Emperor Nero</strong>. Azat River Gorge is famous for its basaltic pillars - the result of a volcanic lava flow.</p>
                    <p>Next stop is Gegard monastery complex (IV century), which is included in the list of World Cultural Heritage by the <strong>UNESCO</strong>. Its full name is Gegardavank, literally it is translated as "Monastery of the spear." The name of the monastery complex comes from <strong>Christ Spear (Spear of Longinus)</strong>, which the Roman soldier Longinus thrust in Jesus Christ. The spear is now kept in the museum of Echmiadzin Cathedral.</p>
                    <p>Back to Yerevan.</p>
                  </span>',
                  '<span>
                    <p>This <strong>day trip</strong> begins with a visit to the monastery <strong><a href="https://www.youtube.com/watch?v=bJZqA20uThw">of Khor Virap</a></strong> - one of the symbols of Armenia. The Monastery is a fortress located just 40 kilometers far from Yerevan, and less than a kilometer from the republic\'s border with Turkey. Khor Virap is a place of pilgrimage, which is associated with the legend <strong>of Gregory the Illuminator (Grigor the Illuminator)</strong>. According to church tradition, Gregory was imprisoned on the order of King Trdat III for preaching Christianity, and spent there 13 years. Those interested can go down to the prison, which has a depth of 6 m and a diameter of 4.4 m. Right in front of you, very, very close and in all its beauty you will see the symbol of Armenia - Mount Ararat.</p>
                    <p>Next, we go to <strong>Noravank monastery complex</strong>, built in XIII-XIV centuries, which is located 1.5 kilometers east of the village of Areni. The complex is located on a narrow ledge winding gorge tributary of the Arpa River. The gorge is famous for its steep red cliffs, towering behind the monastery.</p>
                    <p>Then we continue the journey to the <strong>Tatev monastery (IX-XIII centuries)</strong>, which is located on the edge of a gigantic canyon. Tatev was one of the most famous spiritual and educational centers of the Middle Ages. The complex can be called one of the most noteworthy places on earth. The ropeway "Wings of Tatev" (the longest ropeway in the world - 5752 m, ranked in the Guinness Book of Records) will carry us over the beautiful Vorotan gorge directly to Tatev Monastery.</p>
                    <p>Then we will continue our <strong>jorney to the capital of Nagorno-Karabakh Republic (Artsakh) – Stepanakert.</strong></p>
                    <p>Hotel accommodation.</p>
                  </span>',
                  '<span>
                    <p>Stepanakert is a capital of Nagorno-Karabakh (Republic of Artsakh). Current <strong>it’s namehe got in 1923</strong> after Stepan Shaumyan, who was one of the famous revolutionist. There were placed Armenian village named Vararakn on 5th century on todays Stepanakert place. Vararakn is river, which were flowing through Stepanakert. Stepanakert is located on the eastern mountains flank, on the left bank of the river Karkar, approximate 850 meters altitude. Climate is soft, winter is warm and not very hot in summer.</p>
                    <p>After breakfast we will start our <strong>journey through Nagorno Karabakh (Artsakh)</strong> and visiting <strong>Gandzasar monastery</strong> XIII century. Curent monastery of Armenian Apostolic Church is located on the left bank of the river “Khachen”, which is near Vank vilage in Nagorno-Karabakh. Local people named this place Gandzasar, because there were silver mines. (Armenian Gandz means treasure, sar means mountain).</p>
                    <p>Then we will go to the Dadivank or Khutavank monastery (IX-XIII century), which is located half of kilometer to the north from the Tartar River. The first name connected with name of saint Dali, which was preached Christianity in western Armenia and was a discipline of the apostle Thaddeus - one of the seventy Christ’s disciples. Monastery was built over his grave, according to tradition. The second name comes from armenian Khut (khut mean hill) and vank (monastery): “monastery on hill”. Dadivank was built in incredible beautiful place and placed in surrounding landscape.</p>
                    <p>Next we continue our journey visiting old city named Tigranakert, which <strong>is located in province of Nagorno-Karabagh</strong>. Tigranakert one of four old armenian towns, which were founded by Tigran II on I century BC and took his name. The ruins of Tigranakert were discovered in 2005 in lowlands of Karabakh to the north-west of Askeran. This amazing ancient city preserved stone sculptures, churches and other buildings which were carved in the rock. During the meeting of the government of Artsakh it was decided to declare Tigranakert as national park.</p>
                    <p>Returning to Stepanakert.</p>
                  </span>',
                  '<span>
                    <p>Finishing breakfast we will go to the ancient <strong>fortress town named Shushi</strong>, which were cultural center of one of the 15 provinces of historical Armenia during the last thousands of years. In the 19th century medieval Shushi was the largest cultural and educational center of the South Caucasus. The city had school, printing house, theatre, issued about 20 periodicals etc. Shushi is <strong>motherland of many unical attractions, like canyon Unot, Ghazanchetsots Cathedral (19 century), Kanach Zham church (Green church), and ‘’Tank’’ memorial</strong>.</p>
                    <p>Then we will leave Artsakh and continue our journey to the village in the eastern part of the Syunik region of Armenia -<strong>Khndzoresk</strong>. The main attraction of the city is the "cave city". Here people lived in the caves until 1958. In 2012 there was built "Hanging Bridge" over the gorge that connects the two banks of the old village Khndzoresk. The height of the bridge is 63 meters and its length is 160 metres.</p>
                    <p>Afterwards we visit the prehistoric complex <strong>Karahunj (Zorats Karer)</strong>, located at an altitude of 1770m, which is also called "Armenian Stonehenge". The complex consists of lots of large standing stones, some of which have circular openings in thier upper part. Karahunj is considered to be one of the oldest observatories in the world.</p>
                    <p>Back to Yerevan.</p>
                  </span>',
                  '<span>
                    <p>After breakfast, we continue the tour to the <strong>pearl of Armenia - blue Sevan</strong>. Lake Sevan is a freshwater lake in the Armenian highlands. It is the largest lake in the Caucasus. It is guaranteed to be the largest source of fresh water in the region. We will also visit the <strong>Sevanavanq</strong> - a monastery in the north-west coast of Lake Sevan. The monastery is located on a peninsula, which was once a small island.</p>
                    <p>We continue our tour to Tavush region of Armenia – to a small town of <strong>Dilijan</strong>, located on the picturesque banks of the river Aghstev.</p>
                    <p>The next stop will be <strong>Haghartsin Monastery</strong>, which was built in the X-XIII centuries, mostly under the auspices of the Bagratuni Dynasty. We will also visit <strong>Goshavank - monastery complex</strong>, built in XII-XIII centuries in the village of Gosh in Armenia. Goshavank is the cultural, educational and religious center of medieval Armenia. The sources referred to it as a seminary, university, and so on.</p>
                    <p>Return to Yerevan.</p>
                  </span>',
                  '<span>
                    <p>After breakfast we visit the <strong>Institute of Ancient Manuscripts</strong> named after St. Mesrop Mashtots. The most ancient manuscripts are dated back to the 5th century BC and are associated with Mesrop Mashtots, who invented the Armenian alphabet.</p>
                    <p>Next we visit the city of <strong>Echmiadzin - the</strong> center of the Armenian Gregorian Church, where the residence of the Catholicos is located. We will visit <strong>Echmiadzin Cathedral</strong> (301-483 AD), which is included in the UNESCO World Heritage list, the museum and the treasury of Echmiadzin, which houses the <strong>Spear of Longinus (Spear of Destiny, Spear of Christ)</strong>, a part of Noah\'s Ark, the patella John Baptist,etc. We visit to the church of Saint Hripsime and Saint Gayane.</p>
                    <p>We visit the ruins of <strong>Zvartnots temple</strong>, which was destroyed in the earthquake. In 2000, the ruins of the temple and the archaeological area around it are included in the UNESCO World Heritage List.</p>
                    <p>Transfer to the airport.</p>
                  </span>',
                ],
                5 => [
                  '<span>
                    <p>The <strong>weekend tour in Armenia will</strong> start with a <strong>sightseeing tour in Yerevan</strong>. After breakfast we visit the Institute of Ancient Manuscripts - <strong>Matenadaran</strong> named after St. Mesrop Mashtots. The most ancient manuscripts are dated back to the 5th century AD and are associated with Mesrop Mashtots, who invented the Armenian alphabet.</p>
                    <p>We shall then proceed to the <strong>Cascade</strong>. It is a 500-meter high staircase (522 steps) from tuff, with fountains and flower beds, as well as an open air museum, which presents about 30 sculptures by famous masters. Inside the complex <strong>Cafesjian Center of Arts</strong> is located on 5 tiers.</p>
                  </span>',
                  '<span>
                    <p>The day starts with a trip to the pagan temple of Garni built in the I century by Armenian king Trdat I and dedicated to the god of sun Mihr. According to history, the temple was built on the money of the Roman Emperor Nero. Azat River Gorge is famous for its basaltic pillars - the result of a volcanic lava flow.<br />Next stop is Geghard monastery complex (IV century), which is included in the list of World Cultural Heritage by the UNESCO. Its full name is Geghardavank, literally it is translated as "Monastery of the spear". The name of the monastery complex comes from Christ Spear (Spear of Longinus), which the Roman soldier Longinus thrust in Jesus Christ. The spear is now kept in the treasury of Echmiadzin Cathedral.</p>
                    <p>We continue the tour to the pearl of Armenia - blue Sevan. Lake Sevan is a freshwater lake in the Armenian highlands. It is the largest lake in the Caucasus. It is guaranteed to be the largest source of fresh water in the region.</p>
                    <p>We will also visit <strong>Sevanavank</strong> - a monastery in the north-west coast of Lake Sevan. The monastery is located on a peninsula, which was once a small island.</p>
                    <p>Back to Yerevan.</p>
                  </span>',
                  '<span>
                    <p>After breakfast, we visit the Tsitsernakaberd memorial complex, dedicated to the victims of the Armenian Genocide of 1915, and the Genocide Museum.</p>
                    <p>If you wish (for extra payment) we will visit Yerevan Brandy Factory, where we have a fascinating tour with tasting of 2 types of brandies (a three-year old "Ararat" and a ten-year old "Akhtamar").</p>
                    <p>Next we visit the city of Echmiadzin - the Center of the Armenian Apostolic Church, where the residence of the Catholicos is located. We will visit Echmiadzin Cathedral (301-483), which is included in the UNESCO World Heritage list.</p>
                    <p>We visit the ruins of Zvartnots temple, which was destroyed in the earthquake. In 2000, the ruins of the temple and the archaeological area around it are included in the UNESCO World Heritage List.</p>
                    <p>Transfer to the airport.</p>
                    <p style="color: red">Attention!<br /><br />The time and the order of the excursions declared in the program are subject to change. The excursion program of the first and the last days will depend on your arrival and departure time, and the days of the week. Please note that Monday is a day off in Armenia\'s museums.</p>
                  </span>',
                ],
                6 => [
                  '<span>
                    <p><strong>The tour in Armenia</strong> will start with a <strong>sightseeing tour in Yerevan</strong>. We visit the Institute of Ancient Manuscripts - <strong>Matenadaran</strong> named after St. Mesrop Mashtots. The most ancient manuscripts are dated back to the 5th century AD and are associated with Mesrop Mashtots, who invented the Armenian alphabet.</p>
                    <p>We shall then proceed to the <strong>Cascade</strong>. It is a 500-meter high staircase (522 steps) from tuff, with fountains and flower beds, as well as an open air museum, which presents about 30 sculptures by famous masters. Inside the complex <strong>Cafesjian Center of Arts</strong> is located on 5 tiers.</p>
                  </span>',
                  '<span>
                    <p>After breakfast, we go on an excursion in the <strong>Museum of History of Yerevan</strong>, which is located in the building of City Hall. The museum\'s collection consists of more than 87 thousand exhibits. The main exhibit is a copy of the cuneiform stone from the fortress of Erebuni, which states that in 782 BC the king of Urartu Argishti I founded a fortress city here.</p>
                    <p>Afterwards we visit the <strong>pagan temple of Garni</strong>, built in the I century by Armenian king Trdat I and dedicated to the god of sun Mihr. According to history, the temple was built on the money of the Roman Emperor Nero. Azat River Gorge is famous for its basaltic pillars - the result of a volcanic lava flow.</p>
                    <p>Next stop is Geghard monastery complex (IV century), which is included in the list of World Cultural Heritage by the UNESCO. Its full name is <strong>Geghardavank</strong>, literally it is translated as <strong>"Monastery of the spear"</strong>. The name of the monastery complex comes from Christ Spear (Spear of Longinus), which the Roman soldier Longinus thrust in Jesus Christ. The spear is now kept in the threasury of Echmiadzin Cathedral.</p>
                    <p>Back to Yerevan.</p>
                    <p>We will visit Yerevan Brandy Factory, where we have a fascinating tour with tasting of 2 types of brandies (a three-year old "Ararat" and a ten-year old "Akhtamar").</p>
                    <p>We visit the Tsitsernakaberd memorial complex, dedicated to the victims of the Armenian Genocide of 1915, and the Genocide Museum.</p>
                  </span>',
                  '<span>
                    <p>After breakfast, we go to the Armenian <strong>Monastery of Khor Virap</strong>, situated at the foot of Mount Ararat, near the border with Turkey. It is a place of pilgrimage, which is connected with the <strong>legend of Grigor Lusavorich (Grigor the Illuminator)</strong>. According to church tradition, Gregory was imprisoned on the orders of King Trdat III, caught in that he professes Christianity, and was held there for 13years. Those interested can go down to the prison, which has a depth of 6 m and a diameter of 4.4 m.</p>
                    <p>Right in front of you, very, very close and in all its beauty you will see <strong>the symbol of Armenia - Mount Ararat.</strong></p>
                    <p>Then we continue our way to the village of Areni in Vayots Dzor region of Armenia. Village of Areni is famous for its wines till now. Every year in October the annual festival of wines takes place there.</p>
                    <p>After we go <strong>Noravank monastery complex</strong>, built in XIII-XIV centuries, which is located  1.5 kilometers east to the village of Areni. The complex is located on a narrow ledge winding gorge tributary of the Arpa River. The gorge is famous for its steep red cliffs, towering behind the monastery.</p>
                    <p>Return to Yerevan.</p>
                  </span>',
                  '<span>
                    <p>After breakfast, we continue the tour to the pearl of Armenia - <strong>blue Sevan</strong>. Lake Sevan is a freshwater lake in the Armenian highlands. It is the largest lake in the Caucasus. It is guaranteed to be the largest source of fresh water in the region. We will also visit the <strong>Sevanavank</strong> - a monastery in the north-west coast of Lake Sevan. The monastery is located on a peninsula, which was once a small island.</p>
                    <p>We continue our tour to Tavush region of Armenia – to a small town-resort Dilijan, located on the picturesque banks of the river Aghstev.</p>
                    <p>The next stop will be <strong>Haghartsin Monastery</strong>, which was built in the X-XIII centuries, mostly under the auspices of the Bagratuni Dynasty. We will also visit <strong>Goshavank - monastery complex, built in XII-XIII centuries</strong> in the village of Gosh in Armenia. Goshavank is the cultural, educational and religious center of medieval Armenia. The sources referred to it as a seminary, university, and so on.</p>
                    <p>Return to Yerevan.</p>
                  </span>',
                  '<span>
                    <p>After breakfast, we visit the center of Yerevan – the <strong>Republic Square</strong>. The area is famous for its monumental architecture in a deeply traditional style. All the buildings on the Republic Square are made of tufa, and the lower parts are made of basalt. Building facades are faced with felsic tuff of white and pink colors. Here is the country\'s main museum - the <strong>History Museum of Armenia</strong>. The museum has collected about 400,000 exhibits. The museum exposition is divided into several departments: archaeological, ethnographic, numismatic department, historic architecture department, the Department of Modern and Contemporary history of Armenia.</p>
                    <p>Next we visit the city of Echmiadzin - the center of the Armenian Apostolic Church, where the residence of the Catholicos is located. We will visit <strong>Echmiadzin Cathedral</strong> (301-483), which is included in the UNESCO World Heritage list.</p>
                    <p>We visit the ruins of <strong>Zvartnots temple</strong>, which was destroyed in the earthquake. In 2000, the ruins of the temple and the archaeological area around it are included in the UNESCO World Heritage List.</p>
                    <p>Transfer to the airport.</p>
                    <p style="color: #b5b529">Attention!<br><br>The time and the order of the excursions declared in the program are subject to change. The excursion program of the first and the last days will depend on your arrival and departure time, and the days of the week. Please note that Monday is a day off in Armenia\'s museums.</p>
                  </span>',
                ]
              ];
              $length = count($days_title_array[$tour_number]);

              for ($i = 0; $i < $length; $i++) {
                $title_array = $days_title_array[$tour_number];
                $title_name = $title_array[$i];
                $desc_array = $day_desc_array[$tour_number];
                $desc_text  = $desc_array[$i];
                $day_images = $day_image_array[$tour_number];
                $day_image  = $day_images[$i];
              ?>
                <div class="row m-b30">
                  <div class="col-md-3 col-lg-2">
                    <div class="sticky-top">
                      <div class="site-button btn-block">DAY <?= $i + 1 ?></div>
                    </div>
                  </div>
                  <div class="col-md-9 col-lg-10">
                    <div class="day-details-bx">
                      <div class="row">
                        <div class="col-md-12 col-lg-6">
                          <h4 style="color: RGB(128, 0, 0)" class="m-b5"> <?= $title_name ?> </h4>
                          <p><?= $desc_text ?></p>
                        </div>
                        <div class="col-md-12 col-lg-6">
                          <img src="<?= $day_image ?>" class="radius-sm" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              }
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <?php
    include("./footer.php");
    ?>

    <!-- Footer END-->
    <button class="scroltop fa fa-plane"></button>
  </div>
  <!-- JAVASCRIPT FILES ========================================= -->

  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.animateNumber.min.js"></script>
  <script src="/js/bootstrap-datepicker.js"></script>
  <script src="/js/jquery.timepicker.min.js"></script>
  <script src="/js/main.js"></script>
  <script src="js/gallery.js"></script>

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
  <script src="/js/calculate_package.js"></script>

  <script src="/plugins/swiper-master/package/js/swiper.min.js"></script>

  <script>
    $(gallery.construct('group_0|group_1|group_2|group_3|group_4|group_5|group_6|group_7|group_8|group_9|group_10|group_11|group_12|group_13|group_14|group_15|group_16|group_17|group_18|group_19|yer_1|yer_2|yer_3|yer_4|yer_5|yer_6|yer_7|yer_8|group_crazy'));
    $("#footer").prepend( '<ul class="ftco-footer-social"><li><a class="facebook" href="https://www.facebook.com/best.holiday.399"><span class="icon-facebook"></span></a></li></ul>' );
    var swiper = new Swiper('.swiper-container', {
      speed: 2500,
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 1500,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

</body>
<!-- Mirrored from triper.dexignlab.com/xhtml/booking-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 18:17:25 GMT -->

</html>