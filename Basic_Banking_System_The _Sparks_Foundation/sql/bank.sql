
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mesg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'SREE', 'sree@gmail.com', 60000),
(2, 'HARI', 'hari@gmail.com', 70000),
(3, 'KARTHI', 'karthi@gmail.com', 80000),
(4, 'VIJAY', 'vijay@gmail.com', 30000),
(5, 'RAJ', 'raj@gmail.com', 40000),
(6, 'RAM', 'ram@gmail.com', 50000),
(7, 'LOKESH', 'lokesh@gmail.com', 60000),
(8, 'RAGU', 'ragu@gmail.com', 70000),
(9, 'SHANMUGAM', 'shanmugam@gmail.com', 80000),
(10,'VENKAT', 'venkat@gmail.com', 90000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
  
 --
-- Indexes for table `contactus`
--
 
 ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `contactus`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

