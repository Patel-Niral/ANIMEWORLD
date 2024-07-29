-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 06:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animeworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cover` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `title`, `genre`, `language`, `subtitle`, `description`, `cover`, `banner`) VALUES
(1, 'Jujutsu Kaisen', 'Action, Supernatural, Dark Fantasy, Thriller', 'Japanese, English', 'English', '\"Jujutsu Kaisen\" follows the story of Yuji Itadori, a high school student with extraordinary physical abilities, who becomes entangled in the world of Jujutsu Sorcerers. After consuming a powerful cursed object, he gains the ability to see curses—malevolent spirits formed from human negative energy. To protect his friends and the world from these curses, Yuji joins the Tokyo Metropolitan Magic Technical College under the mentorship of Satoru Gojo. The series is renowned for its intense action sequences, deep lore, and well-developed characters, blending traditional Japanese folklore with modern supernatural elements.', 'jjk.jpg', 'jjkprofile01.jpg'),
(2, 'Ao Ashi', 'Sports, Drama', 'Japanese', 'Japanese, English', 'Aoashi follows the journey of Ashito Aoi, a naturally gifted but unrefined young soccer player from a small town. His life changes when Tatsuya Fukuda, a coach from the prestigious Tokyo City Esperion youth team, recognizes his potential and invites him to Tokyo for a tryout. The series captures Ashito`s determination and growth as he faces numerous challenges on and off the field, learning the importance of teamwork, discipline, and strategic thinking. With a focus on realistic soccer gameplay and character development, Aoashi offers an inspiring and engaging story for sports anime fans.', 'aoshicover.jpg', 'aoashibanner2.webp');

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id` int(11) NOT NULL,
  `episode_number` int(11) NOT NULL,
  `episode_title` varchar(255) NOT NULL,
  `episode_description` text NOT NULL,
  `episode_video` varchar(255) NOT NULL,
  `season_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`id`, `episode_number`, `episode_title`, `episode_description`, `episode_video`, `season_id`) VALUES
(1, 1, 'Ryomen Sukuna', 'Yuji Itadori is a high school student with extraordinary physical abilities. He spends his days either in the Occult Research Club or visiting his hospitalized grandfather. One day, the Occult Research Club comes across a sealed cursed object, a rotting finger, which they unwittingly unleash, attracting evil spirits. To save his friends, Yuji swallows the finger and becomes the host of a powerful curse named Ryomen Sukuna.', 'Jujutsu Kaisen S1 - 01 [1080P] [Dual] @infinite_anime.mp4', 1),
(2, 2, 'For Myself', 'After swallowing the finger, Yuji finds himself under the control of Sukuna, who wreaks havoc. Jujutsu sorcerer Megumi Fushiguro and his teacher Satoru Gojo arrive to take care of the situation. Yuji manages to regain control of his body, and Gojo gives him a choice: help them retrieve all of Sukuna fingers or be executed on the spot.', 'Jujutsu Kaisen S1 - 02 [1080P] [Dual] @infinite_anime.mp4', 1),
(3, 3, 'Girl of Steel', 'Yuji, now enrolled in the Tokyo Metropolitan Magic Technical College, meets Nobara Kugisaki, a new classmate. They embark on a mission to exorcise curses in an abandoned building. Nobara unique abilities and strong personality are on full display, and Yuji realizes the real dangers of being a Jujutsu sorcerer.', 'Jujutsu Kaisen S1 - 03 [1080P] [Dual] @infinite_anime.mp4', 1),
(4, 4, 'Curse Womb Must Die', 'Yuji, Megumi, and Nobara are sent to investigate a \"curse womb\" at a detention center. They discover the womb is incubating a powerful curse spirit. The situation becomes dire when they are trapped inside the detention center, and Yuji must confront his fear of losing control to Sukuna.', 'Jujutsu Kaisen S1 - 04 [1080P] [Dual] @infinite_anime.mp4', 1),
(5, 5, 'Curse Womb Must Die -II-', ' In the continuation of the battle at the detention center, Yuji fights the powerful curse spirit. Sukuna takes advantage of Yuji`s weakened state and seizes control. Sukuna defeats the curse easily and challenges Megumi to a fight, putting Yuji`s friends in danger.', 'Jujutsu Kaisen S1 - 05 [1080P] [Dual] @infinite_anime.mp4', 1),
(6, 6, 'After Rain', 'With Yuji temporarily out of the picture, the focus shifts to other characters. Megumi and Nobara continue their training while Gojo confronts higher-ups about Yuji`s situation. The episode explores the motivations and backstories of the main characters.', 'Jujutsu Kaisen S1 - 06 [1080P] [Dual] @infinite_anime.mp4', 1),
(7, 7, 'Assault', ' Gojo takes Yuji under his wing and begins intense training to prepare him for the upcoming challenges. Gojo also demonstrates his incredible power during a confrontation with a powerful curse spirit, showcasing why he is considered one of the strongest sorcerers.', 'Jujutsu Kaisen S1 - 07 [1080P] [Dual] @infinite_anime.mp4', 1),
(8, 8, 'Boredom', 'The students of the Tokyo Metropolitan Magic Technical College prepare for an exchange event with the Kyoto school. Yuji meets new classmates and rivals, including the energetic and competitive Panda, the shy and reserved Toge Inumaki, and the hardworking and disciplined Maki Zenin.', 'Jujutsu Kaisen S1 - 08 [1080P] [Dual] @infinite_anime.mp4', 1),
(9, 9, 'Small Fry and Reverse Retribution', 'As the exchange event approaches, Yuji and his classmates face various challenges. Yuji is sent on a mission to investigate a series of curse-related deaths. He encounters Junpei Yoshino, a bullied high school student who has fallen under the influence of a malevolent curse user.', 'Jujutsu Kaisen S1 - 09 [1080P] [Dual] @infinite_anime.mp4', 1),
(10, 10, 'Idle Transfiguration', 'Yuji`s investigation into Junpei Yoshino`s situation leads him to confront the curse user Mahito, who has the ability to manipulate souls. Mahito`s twisted philosophy and sadistic nature pose a significant threat to Yuji and his friends.', 'Jujutsu Kaisen S1 - 10 [1080P] [Dual] @infinite_anime.mp4', 1),
(11, 11, 'Narrow-minded', ' The battle between Yuji and Mahito intensifies, with Junpei caught in the middle. Mahito reveals his true power and forces Yuji to confront the harsh realities of being a Jujutsu sorcerer. The episode is filled with intense action and emotional moments.', 'Jujutsu Kaisen S1 - 11 [1080P] [Dual] @infinite_anime.mp4', 1),
(12, 12, 'To You, Someday', 'The aftermath of the battle with Mahito leaves Yuji and his friends emotionally and physically drained. Yuji reflects on his journey so far and his commitment to becoming a stronger sorcerer. The episode sets the stage for the upcoming Kyoto Sister School Exchange Event.', 'Jujutsu Kaisen S1 - 12 [1080P] [Dual] @infinite_anime.mp4', 1),
(13, 13, 'Tomorrow', 'The Tokyo and Kyoto students gather for the exchange event, which is a friendly competition between the two schools. However, tensions run high as the Kyoto students have ulterior motives regarding Yuji. The episode introduces new characters and builds anticipation for the event.', 'Jujutsu Kaisen S1 - 13 [1080P] [Dual] @infinite_anime.mp4', 1),
(14, 14, 'Kyoto Sister School Exchange Event - Group Battle 0 -', 'The exchange event begins with a group battle between the Tokyo and Kyoto students. Yuji`s unexpected appearance surprises everyone, and the battle quickly escalates into a fierce competition. The episode showcases the diverse abilities and personalities of the students.', 'Jujutsu Kaisen S1 - 14 [1080P] [Dual] @infinite_anime.mp4', 1),
(15, 15, 'Kyoto Sister School Exchange Event - Group Battle 1 -', 'The group battle continues, with intense fights and strategic maneuvers from both sides. Yuji faces off against Aoi Todo, a powerful and eccentric Kyoto student. Their battle is filled with action and unexpected twists.', 'Jujutsu Kaisen S1 - 15 [1080P] [Dual] @infinite_anime.mp4', 1),
(16, 16, 'Kyoto Sister School Exchange Event - Group Battle 2 -', 'The group battle reaches its climax as Yuji and Todo`s fight takes center stage. The two form an unlikely bond through their mutual love of martial arts and become formidable allies. Meanwhile, other students continue their battles, showcasing their unique abilities.', 'Jujutsu Kaisen S1 - 16 [1080P] [Dual] @infinite_anime.mp4', 1),
(17, 17, 'Kyoto Sister School Exchange Event - Group Battle 3 -', 'The group battle concludes with surprising outcomes and newfound respect between the students. The focus shifts to individual battles as the next phase of the exchange event begins. Yuji`s determination and growth as a sorcerer are highlighted.', 'Jujutsu Kaisen S1 - 17 [1080P] [Dual] @infinite_anime.mp4', 1),
(18, 18, 'Sage', 'The individual battles begin, and the students showcase their abilities in one-on-one fights. Maki Zenin faces off against her cousin Mai Zenin, revealing the complex dynamics within the Zenin clan. The episode explores themes of family, strength, and ambition.', 'Jujutsu Kaisen S1 - 18 [1080P] [Dual] @infinite_anime.mp4', 1),
(19, 19, 'Black Flash', 'The individual battles continue, with Yuji and Nobara taking on powerful opponents. Yuji learns to harness the power of the Black Flash, a technique that enhances his combat abilities. The episode is action-packed and showcases the characters growth and determination.', 'Jujutsu Kaisen S1 - 19 [1080P] [Dual] @infinite_anime.mp4', 1),
(20, 20, 'Nonstandard', 'The exchange event is interrupted by a surprise attack from powerful curse users. The students must put aside their rivalries and work together to fend off the threat. The episode features intense battles and unexpected alliances.', 'Jujutsu Kaisen S1 - 20 [1080P] [Dual] @infinite_anime.mp4', 1),
(21, 21, 'Jujutsu Koshien', 'The students regroup after the attack and participate in a friendly baseball game to relieve stress and build camaraderie. The episode is lighthearted and provides a break from the intense action, showcasing the characters personalities and relationships.', 'Jujutsu Kaisen S1 - 21 [1080P] [Dual] @infinite_anime.mp4', 1),
(22, 22, 'The Origin of Blind Obedience', 'Yuji, Megumi, and Nobara are sent on a mission to investigate a series of mysterious deaths linked to a bridge. They encounter a powerful curse spirit and must work together to uncover the truth behind the deaths. The episode delves into Megumi`s backstory and motivations.', 'Jujutsu Kaisen S1 - 22 [1080P] [Dual] @infinite_anime.mp4', 1),
(23, 23, 'The Origin of Blind Obedience - 2 -', 'The mission continues as the trio faces off against a curse spirit that can manipulate shadows. Megumi`s past and his connection to the Zenin clan are further explored. The episode is filled with intense battles and emotional revelations.', 'Jujutsu Kaisen S1 - 23 [1080P] [Dual] @infinite_anime.mp4', 1),
(24, 24, 'Accomplices', ' The season finale wraps up the mission and sets the stage for future conflicts. Yuji, Megumi, and Nobara successfully exorcise the curse spirit, but they realize that their journey as Jujutsu sorcerers is far from over. The episode highlights their growth and the challenges that lie ahead.', 'Jujutsu Kaisen S1 - 24 [1080P] [Dual] @infinite_anime.mp4', 1),
(25, 1, ' Hidden Inventory 1', 'The story revisits the past, focusing on Satoru Gojo and Suguru Geto during their time as second-year students at Tokyo Metropolitan Magic Technical College. They are assigned a mission to protect the Star Plasma Vessel, Riko Amanai, from the Time Vessel Association.', 'Jujutsu Kaisen S2 - 01 [1080P] [Dual] @infinite_anime .mp4', 2),
(26, 2, 'Hidden Inventory 2', ' Gojo and Geto continue their mission to protect Riko Amanai. They face various adversaries, including the skilled curse user Toji Fushiguro, who is hired to assassinate Riko. The episode delves into the bond between Gojo and Geto and their views on their roles as Jujutsu sorcerers.', 'Jujutsu Kaisen S2 - 02 [1080P] [Dual] @infinite_anime .mp4', 2),
(27, 3, 'Hidden Inventory 3', 'The battle against Toji Fushiguro intensifies as Gojo and Geto struggle to keep Riko safe. Toji`s abilities and tactics push Gojo to his limits, leading to a dramatic confrontation. The episode explores themes of duty, friendship, and the sacrifices made by Jujutsu sorcerers.', 'Jujutsu Kaisen S2 - 03 [1080P] [Dual] @infinite_anime .mp4', 2),
(28, 4, 'Hidden Inventory 4', 'The climax of the Hidden Inventory arc unfolds as Gojo and Geto face their most challenging battle yet. Toji`s relentless pursuit of Riko and the toll it takes on Gojo and Geto are highlighted. The episode sets the stage for the pivotal events that shape their futures.', 'Jujutsu Kaisen S2 - 04 [1080P] [Dual] @infinite_anime .mp4', 2),
(29, 5, 'Hidden Inventory 5', 'The Hidden Inventory arc concludes with a dramatic resolution. The aftermath of the mission has lasting effects on Gojo and Geto, leading to significant changes in their lives and ideologies. The episode transitions back to the present, setting up the next arc.', 'Jujutsu Kaisen S2 - 05 [1080P] [Dual] @infinite_anime .mp4', 2),
(30, 6, 'Premature Death', 'This episode explores the fallout from the Hidden Inventory arc, delving into the changing dynamics between Gojo and Geto. The episode provides insights into the emotional and psychological impacts of their experiences, highlighting their diverging paths.', 'Jujutsu Kaisen S2 - 06 [1080P] [Dual] @infinite_anime .mp4', 2),
(31, 7, 'Evening Festival', ' The Shibuya Incident arc begins with the preparation for a major festival in Shibuya. Yuji and his friends are drawn into a complex web of events orchestrated by powerful curse users. The episode sets the stage for the intense battles and revelations to come.', 'Jujutsu Kaisen S2 - 07 [1080P] [Dual] @infinite_anime .mp4', 2),
(32, 8, 'Shibuya Incident - Part 1', 'The Shibuya Incident arc kicks into high gear as curses and sorcerers clash in the heart of Shibuya. Yuji, Megumi, and their allies face formidable enemies, and the stakes are higher than ever. The episode showcases the escalating chaos and danger.', 'Jujutsu Kaisen S2 - 08 [1080P] [Dual] @infinite_anime .mp4', 2),
(33, 9, 'Shibuya Incident - Part 2', 'The battle in Shibuya intensifies, with each side unleashing their full power. Yuji and his friends must navigate treacherous situations and face powerful adversaries. The episode is action-packed and reveals critical plot points and character developments.', 'Jujutsu Kaisen S2 - 09 [1080P] [Dual] @infinite_anime .mp4', 2),
(34, 10, 'Shibuya Incident - Part 4', 'The fight in Shibuya reaches new heights with unexpected twists and turns. Key characters face life-threatening situations, and alliances are tested.', 'Jujutsu Kaisen S2 - 10 [1080P] [Dual] @infinite_anime .mp4', 2),
(35, 11, 'Shibuya Incident - Part 5', 'The Shibuya Incident arc continues with intense and dramatic confrontations. Yuji and his friends push their limits to protect the city and their loved ones.', 'Jujutsu Kaisen S2 - 11 [1080P] [Dual] @infinite_anime .mp4', 2),
(36, 12, 'Shibuya Incident - Part 6', 'As the Shibuya Incident arc progresses, the stakes become even higher. Yuji and his allies face devastating losses and must find a way to turn the tide.', 'Jujutsu Kaisen S2 - 12 [1080P] [Dual] @infinite_anime .mp4', 2),
(37, 13, 'Shibuya Incident - Part 7', 'The battle in Shibuya reaches its climax with dramatic and intense showdowns. Yuji and his friends must confront their greatest fears and make difficult choices.', 'Jujutsu Kaisen S2 - 13 [1080P] [Dual] @infinite_anime .mp4', 2),
(38, 14, 'Shibuya Incident - Part 8', 'The aftermath of the Shibuya Incident leaves lasting effects on the characters and the world of Jujutsu sorcery. The episode explores the consequences of the battles and the impact on relationships.', 'Jujutsu Kaisen S2 - 14 [1080P] [Dual] @infinite_anime .mp4', 2),
(39, 15, 'Perfect Preparation - Part 1', 'In the aftermath of the Shibuya Incident, the Jujutsu sorcerers regroup and prepare for future challenges. The episode introduces new characters and alliances as the sorcerers work to strengthen their defenses.', 'Jujutsu Kaisen S2 - 15 [1080P] [Dual] @infinite_anime .mp4', 2),
(40, 16, 'Perfect Preparation - Part 2', 'The preparations for the upcoming conflicts continue, with the characters training and strategizing. The episode delves into the personal growth and development of key characters.', 'Jujutsu Kaisen S2 - 16 [1080P] [Dual] @infinite_anime .mp4', 2),
(41, 17, 'Perfect Preparation - Part 3', 'As the sorcerers prepare for future battles, they uncover new threats and mysteries. The episode focuses on the characters` determination and resolve to protect their world.', 'Jujutsu Kaisen S2 - 17 [1080P] [Dual] @infinite_anime .mp4', 2),
(42, 18, 'Perfect Preparation - Part 4', 'The preparations culminate in a series of intense training sessions and strategic planning. The episode highlights the characters` growth and readiness to face the impending threats.', 'Jujutsu Kaisen S2 - 18 [1080P] [Dual] @infinite_anime .mp4', 2),
(43, 19, 'Perfect Preparation - Part 5', 'The final preparations are made as the characters brace themselves for the upcoming battles. The episode sets the stage for the next phase of the story, with alliances formed and new challenges on the horizon', 'Jujutsu Kaisen S2 - 19 [1080P] [Dual] @infinite_anime .mp4', 2),
(44, 20, 'Battle at Tokyo Jujutsu High', 'The characters are thrust into intense battles as the conflicts come to a head. The episode features dramatic confrontations, strategic maneuvers, and pivotal moments that shape the future of the Jujutsu sorcerers', 'Jujutsu Kaisen S2 - 20 [1080P] [Dual] @infinite_anime .mp4', 2),
(45, 21, 'The Path of Destruction', 'The battles continue with escalating intensity, pushing the characters to their limits. The episode explores the consequences of the fights and the emotional toll on the sorcerers.', 'Jujutsu Kaisen S2 - 21 [1080P] [Dual] @infinite_anime .mp4', 2),
(46, 22, 'Fate', 'The characters face the aftermath of their battles, dealing with losses and regrouping for the future. The episode delves into the personal growth and development of key characters as they prepare for what lies ahead.', 'Jujutsu Kaisen S2 - 22 [1080P] [Dual] @infinite_anime .mp4', 2),
(47, 23, 'New Horizons', ' The season finale sets the stage for future conflicts and adventures. The characters reflect on their journey so far and look towards new horizons, ready to face whatever comes their way.', 'Jujutsu Kaisen S2 - 23 [1080P] [Dual] @infinite_anime .mp4', 2),
(48, 1, 'First Kick', 'Ashito Aoi, a talented yet impulsive young soccer player from a small town, catches the eye of Tatsuya Fukuda, a coach for the Tokyo City Esperion youth team. After an impressive but chaotic display of skill, Ashito is invited to Tokyo for a tryout, marking the beginning of his journey to achieve his dreams.', 'aoshiep1.mp4', 3),
(49, 2, 'Tokyo Tryout', 'Ashito arrives in Tokyo and is introduced to the competitive world of the Esperion youth team. Facing skilled players and high expectations, Ashito must prove himself in the tryouts, showcasing his raw talent while struggling to adapt to the new environment.', 'aoshiep2.mp4', 3),
(50, 3, 'New Challenges', 'The tryouts continue, pushing Ashito to his limits. He learns valuable lessons about teamwork and strategy from his new teammates and coaches. Despite facing tough competition, Ashito`s determination and unique playing style begin to shine.', 'aoshiep3.mp4', 3),
(51, 4, 'Making the Cut', ' The final day of tryouts arrives, and tensions are high as Ashito and the other players vie for a spot on the team. Ashito`s performance impresses the coaches, but will it be enough to secure his place on the prestigious Tokyo City Esperion youth team?', 'aoshiep4.mp4', 3),
(52, 5, 'First Steps', 'Having made the team, Ashito now faces the reality of training and living in Tokyo. He struggles to balance his new life while improving his skills and understanding the intricacies of high-level soccer. The episode explores his interactions with new friends and mentors.', 'aoshiep5.mp4', 3),
(53, 6, 'Learning the Game', 'Ashito dives deeper into the tactical aspects of soccer under Coach Fukuda`s guidance. He begins to understand the importance of positioning, teamwork, and game strategy, leading to significant personal growth and improved performance on the field.', 'aoshiep6.mp4', 3),
(54, 7, 'Rivalries', 'As Ashito becomes more integrated into the team, he encounters rival players who challenge his abilities and push him to improve. The episode highlights the development of key rivalries and friendships that shape Ashito`s journey.', 'aoshiep7.mp4', 3),
(55, 8, 'Teamwork', 'Ashito learns the importance of relying on his teammates and builds stronger connections with them. The episode focuses on team dynamics, practice sessions, and the development of a cohesive unit capable of taking on tougher opponents.', 'aoshiep8.mp4', 3),
(56, 9, 'Facing Adversity', 'Ashito and his team face a formidable opponent in a crucial match. The episode showcases intense gameplay, strategic maneuvers, and Ashito`s determination to overcome personal and team challenges, culminating in a dramatic and pivotal moment on the field.', 'aoshiep9.mp4', 3),
(57, 10, 'Breakthrough', 'After a series of struggles and setbacks, Ashito experiences a breakthrough in his understanding of the game and his own abilities. This newfound insight leads to improved performance and a renewed sense of confidence, setting the stage for future achievements.', 'aoshiep10.mp4', 3),
(58, 11, 'The Road Ahead', 'Ashito reflects on his progress and the challenges he has faced since joining the Esperion youth team. As the season progresses, he sets new goals for himself and prepares for upcoming matches. The episode delves into his evolving relationships with teammates and coaches, highlighting his determination to continue improving and reaching for his dreams.', 'aoshiep11.mp4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `id` int(11) NOT NULL,
  `anime_id` int(11) DEFAULT NULL,
  `season_number` int(11) DEFAULT NULL,
  `season_coverimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`id`, `anime_id`, `season_number`, `season_coverimage`) VALUES
(1, 1, 1, 'jjk.jpg'),
(2, 1, 2, 'jjk.webp'),
(3, 2, 1, 'aoshicover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(255) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `username`, `mobile`, `password`) VALUES
(1, 'niral', 1234567890, '123456'),
(2, 'niral', 123456789, '123456'),
(3, 'niral', 123456, '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `season_id` (`season_id`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anime_id` (`anime_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `episode_ibfk_1` FOREIGN KEY (`season_id`) REFERENCES `season` (`id`);

--
-- Constraints for table `season`
--
ALTER TABLE `season`
  ADD CONSTRAINT `season_ibfk_1` FOREIGN KEY (`anime_id`) REFERENCES `anime` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
