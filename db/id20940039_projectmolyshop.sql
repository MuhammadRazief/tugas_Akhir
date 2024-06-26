

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `price` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `pay` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`id`, `fname`, `bname`, `price`, `name`, `mobile`, `pay`) VALUES
(1, 'eiger ', 'eiger', '200.000', 'zaki', '8451621321', 'cash on delivery'),
(2, 'gucci ', 'gucci', '250.000', 'adil', '1461864', 'cash on delivery'),
(3, 'erigo', 'erigo', '150.000', 'Ashik', '8086764596', 'online pay'),
(4, 'adidas', 'adidas', '120.000', 'razief', '32432432', 'cash on delivery');

-- --------------------------------------------------------

--
-- Table structure for table `food_tb`
--

CREATE TABLE `food_tb` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_tb`
--

INSERT INTO `food_tb` (`id`, `fname`, `bname`, `price`, `image`) VALUES
(1, 'erigo', 'erigo', '179', '5906078f0cbeef0acff9a645.png'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_tb`
--
ALTER TABLE `food_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food_tb`
--
ALTER TABLE `food_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
