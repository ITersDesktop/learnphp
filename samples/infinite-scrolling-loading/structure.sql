CREATE TABLE `php_interview_questions`
(
    `id`       int(8) NOT NULL,
    `question` text NOT NULL,
    `answer`   text NOT NULL
);

--
-- Dumping data for table `php_interview_questions`
--

INSERT INTO `php_interview_questions` (`id`, `question`, `answer`)
VALUES (1, ' What are the widely used array functions in PHP?',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisi mi, lacinia id faucibus at, commodo dapibus turpis. Quisque fermentum arcu vel sem cursus placerat. Etiam egestas eu lorem aliquet finibus. Duis aliquet, nisl a condimentum varius, arcu mi mattis lectus, et volutpat turpis ipsum non ipsum. Donec fringilla id eros id elementum. Curabitur non euismod libero. Maecenas at nisi est.'),
       (2, 'How to redirect using PHP?',
        'Integer vel eros aliquam, efficitur odio sit amet, pharetra neque. Praesent convallis euismod lacus, a semper leo iaculis vitae. Cras ut nibh laoreet, ultricies neque eget, sodales felis. Morbi ut erat nec nibh ullamcorper ornare pellentesque sed lectus. Nam id mauris auctor, ultricies dui eu, placerat sapien.'),
       (3, ' Differentiate PHP size() and count():',
        'Vivamus eget est elit. Ut magna dolor, placerat sed risus ac, varius facilisis leo. Duis hendrerit, ante vitae volutpat eleifend, orci turpis malesuada ligula, sed hendrerit quam dolor sed eros. Suspendisse pulvinar orci non leo vehicula, et commodo leo pharetra. Donec fringilla id eros id elementum. Curabitur non euismod libero. Maecenas at nisi est.'),
       (4, 'What is PHP?',
        'Cras condimentum sapien ullamcorper pellentesque ornare. Nam varius augue sed sem luctus aliquam. Proin et euismod leo. Fusce a mi sit amet augue suscipit tempor vitae ac justo. Donec mattis nisl sed rutrum fringilla. Quisque vulputate purus quam, at dapibus leo commodo ut. Aliquam augue quam, mattis in maximus at, convallis et dui. Vivamus eget risus nec nibh semper tristique. Phasellus a eleifend libero, lacinia condimentum arcu. Suspendisse potenti.'),
       (5, 'What is php.ini?',
        'Donec blandit euismod tincidunt. Sed cursus tellus vulputate lacus rhoncus, sit amet consequat nunc mattis. Sed commodo, mauris et facilisis varius, sem turpis condimentum mauris, non gravida lorem orci sed velit. Ut augue mi, imperdiet sit amet commodo eget, posuere at tellus. Nunc euismod porttitor sollicitudin.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php_interview_questions`
--
ALTER TABLE `php_interview_questions`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php_interview_questions`
--
ALTER TABLE `php_interview_questions`
    MODIFY `id` int (8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
