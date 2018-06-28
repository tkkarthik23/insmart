-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2018 at 12:04 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `catname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catname`) VALUES
(1, 'Home And Constructions'),
(2, 'Fashion And Jewellery'),
(3, 'Education'),
(4, 'Food And Restaurants'),
(5, 'Health And Medical'),
(6, 'Beauty And Fitness'),
(7, 'Vehicle Showrooms'),
(8, 'Lubricant Engine Oil'),
(9, 'Shops'),
(10, 'General Stores');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state`, `city`) VALUES
(1, 'Andhra Pradesh', 'Tirupathi'),
(2, 'Andhra Pradesh', 'Guntur'),
(3, 'Andhra Pradesh', 'Vizag'),
(4, 'Telangana', 'Hyderabad'),
(5, 'Telangana', 'Warangal'),
(6, 'Telangana', 'Khammam'),
(7, 'Karnataka', 'Banglore'),
(8, 'Karnataka', 'Mysore'),
(9, 'Karnataka', 'Bellari');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `sno` int(220) NOT NULL,
  `sesid` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `phone` varchar(220) NOT NULL,
  `browser` varchar(220) NOT NULL,
  `status` varchar(220) NOT NULL,
  `name` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`sno`, `sesid`, `email`, `phone`, `browser`, `status`, `name`) VALUES
(6, '5b1f9f8722b18', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using : Chrome on : Windows 10', 'active', 'karthik'),
(7, '5b1f9fc87ad6e', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using : Chrome on : Windows 10', 'active', 'karthik'),
(8, '5b20aeb90357e', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'inactive', 'karthik'),
(9, '5b20f6daf0379', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(10, '5b20f6e4f1ba7', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(11, '5b20f7076c671', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(12, '5b235bd3d6827', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(13, '5b2394d7d3665', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(14, '5b261ad21540c', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'inactive', 'karthik'),
(15, '5b261b012fee8', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(16, '5b2626e9aff6c', 'karthikcar12@gmail.com', '9110757559', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(17, '5b26276b07d5f', 'karthikcar12@gmail.com', '9110757559', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(18, '5b2631e4e6d15', 'karthikcar13@gmail.com', '9441128410', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(19, '5b2631f332d2a', 'karthikcar13@gmail.com', '9441128410', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(20, '5b26321b95896', 'karthikcar13@gmail.com', '9441128410', 'Logged in using  Chrome on  Windows 10', 'inactive', 'karthik'),
(21, '5b2636011099d', 'karthikcar13@gmail.com', '9441128410', 'Logged in using  Chrome on  Windows 10', 'inactive', 'karthik'),
(22, '5b26367dc6b88', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'inactive', 'karthik'),
(23, '5b264b348db96', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(24, '5b264c312542d', 'karthikcar14@gmail.com', '9441802562', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(25, '5b264c46ec7b9', 'karthikcar14@gmail.com', '9441802562', 'Logged in using  Chrome on  Windows 10', 'inactive', 'karthik'),
(26, '5b264ccedba9e', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'inactive', 'karthik'),
(27, '5b26aaddecc54', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(28, '5b26ab0090b38', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'inactive', 'karthik'),
(29, '5b27322e9d394', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(30, '5b27322f6728e', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik'),
(31, '5b2734bebf072', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'inactive', 'karthik'),
(32, '5b2a3be3a9016', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'inactive', 'karthik'),
(33, '5b2ac7448dd58', 'tkkarthik23@gmail.com', '7382119361', 'Logged in using  Chrome on  Windows 10', 'active', 'karthik');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(1, 'Andhra Pradesh'),
(2, 'karnataka'),
(3, 'telangana');

-- --------------------------------------------------------

--
-- Table structure for table `storedetails`
--

CREATE TABLE `storedetails` (
  `sno` int(220) NOT NULL,
  `name` varchar(220) NOT NULL,
  `owner` varchar(220) NOT NULL,
  `phone` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `city` varchar(220) NOT NULL,
  `state` varchar(220) NOT NULL,
  `catagorie` varchar(220) NOT NULL,
  `subcatagorie` varchar(220) NOT NULL,
  `image` longblob NOT NULL,
  `address` varchar(220) NOT NULL,
  `services` varchar(220) NOT NULL,
  `fb` varchar(220) NOT NULL,
  `twitter` varchar(220) NOT NULL,
  `premium` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storedetails`
--

INSERT INTO `storedetails` (`sno`, `name`, `owner`, `phone`, `email`, `city`, `state`, `catagorie`, `subcatagorie`, `image`, `address`, `services`, `fb`, `twitter`, `premium`) VALUES
(4, 'KFC', 'karthik', '7382119361', 'tkkarthik23@gmail.com', 'Guntur', 'Andhra Pradesh', 'Home and constructions', 'Electrical And Plumbing', 0xffd8ffe000104a46494600010100000100010000ffdb00840009060712121215121212151515151515151515151515151515151515161615151515181d2820181a251d151521312125292b2e2e2e171f3338332d37282d2e2b010a0a0a0e0d0e1a10101a2d251f252d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2f2f2d2d2d2d2d2d2d2d2d2d2d2d372d2d2d2d2d2d2d2d2e2d2d2d2d2e2d2d2d2dffc000110800b1011c03012200021101031101ffc4001b00000203010101000000000000000000000102000305060407ffc40040100001030204030603030a0505000000000100021103210405123141516106132271819132a1f052b1c114152342627292a2d1f1073382b2d21624b3c2e1ffc400190101010101010100000000000000000000000102030405ffc4002a110101000202020101070501000000000000010211032112314122041332617191b1335181d1f023ffda000c03010002110311003f00f8e04420885a64c13048982315602982ac270895634a705541384656b4a648d29c1559304484023288608292965511484110145484da5484e154a1a510d4e11015d33b206a60d4f08809a4de89dda40c5eca744bb604f921570a4588208de42eb8e1b71cf9a479994d5eca7785651a3c4db74eda6779fabaed385c2f3ddbdf82a404c36771e4aeab44448b6dc79d95380a6e2624c15a5530c748804c74e49e1a73bccc1c43792f0d462dbc4d13f7f92cea8d32b5e2ce3c9b78da11d3c93d6050605cf2c5df0cc74d9554c91babc8490bcf947b30c8af481cad30ab0d58746028a22a3d02884a88466c3829c155029c1465605635540ab0144ab5a9c05535c9c3918d2c512ea4ae72a1a5494b2a2070514004d08084e0250132ac5384c0246a3ad5da2c0a6b00a6c0e0eb5771149b311a9d66b193f69e6c37db73c015bb85ecbd3b77b55f50989148063073f1bdae7387fa1aac673b24eeaac92b8d56607f00d7364198e175f5ff00fa668d660810d0dd2e04bb4b4b6f21a4f4b42e6321c8f08cd2f6d101c362e7d5747a1769f92e9a8e25d45c5f4a0877c748c00ffda638fc2fe87c27f6775d32b7e1e6c3eeedfabb8e773aec0090fc3bf482090e25ce1c4c362f3fd17378ecac53a8f697c8b9db4dfc460972fa352ed6512feec92c87c383991e841bd377ff0039a4c7e1b0b5a5cdd2e71d81b38742763e7d576c3973c7f1c79f9b870cbfa594dff6ff004f9e60300754f002f0f693123802ba4cbb2def4c30979b987821a06d73b09f73757d0ecf6a7c45892035a77f299e572b5b38c13e950386c39fd254ff0031e49043488d2d3c2d6e83a95ae4e496ea3870f167de59cea7effe1c776cb074e8b69526b9ae7004d4d3700edbfbdb7b0d972f4b2f738ded3eb3e8b4331c11a0f2c68d440f172eb015556a80d3a6f3f144fb792e930d4f6ce5c96dea69898fa504c1d8c2f3b57bf12260f3e7baf1bdb0b9e71eae3f457a5829822e0bcd9c7b78eab7352b9590961717a1ce229510a3d22a208a2084c128441466c3829c15502981445a0a605540a6944d2d0e525560a20a22d051095a982253829e5569c2ac8b4ab02584c15640ba17bf27cb3bef1d424520600061d55c376b4f068fd6770d85f6f1e130dded46d39806ee2376b45dc475e03a90bb5c261c7200001ad6ee1ad03c2d1f57df74936ce79f8cfcda185c28d34c06b5ad00e9636cd126f039fed1927892b468e0c797ac843094622cb56952042e93a78b2efda50a30399037ebd57a698e6aec23381fae2bd94e908dbe8ad5c931e2df65ad80a15b4b9ec1ac0d21dcc706bb98fbbdc10ccb6936355ac3c13bcc8b91e9042f5d0a721cd9890403d48b7979aa3297baa506b2b08ab49ba5dc0ea1674f3989e46c567caebdbd1f778dbbb26cd47461a348d4fab32eb786660004d848dba15e7ae4d3074bc3de6e41dc0266f375a78568758c13faa601b46c7adf65cf6370cea2f970f0ccb9daade3746b33ef1f418f759e4971c66bd7f0caaf806d40481c4ea77eb033f774eab9ec6e0d94dd0f3bdb6371116e12392edbbc93a834069b47befecb073fc26b63880d2e17078da640e52bd5c79ddeabe77271c9dc7299cd101c4b2cde034816dfd471f96c16255160b63101ce0d2ff0816813263aaf1625a382e9962d71e6cd7380fafe899170ba85797923dfc5911c93526705510bcd5ec8e7d141451e91514510108a08a20a609414519304c9014c0a21c221284ed44a762b2156d2ac0519a6684e12b534ab1958d0a384200a15111a3d9c700e7b8f1868e80789def2df65d9601ecda4741f5e6b87c91f1fc47f01f82e9a9beda9bc20ade2f3f34fa9d8612081e70b570e37f3fa2b86c3e31ed8bf85d79e4763f8aeab2cc76a603371e1b731cd69c9bb45b03e6bd34c5f6f55e1c3b8f31edc17af5722276f63fd946f1d3d3de0163e88d324d46b806ed0e0490e0d8305b6bf91e1b6d0682e244fa75d90fcab4116eb2a69d3ce4f7e9eac29b87340893f0991103633b74feeafccf06cacdd045c83a4da66e788e87dd78693582cda800971d060785d7dcde07e1d17bf0e65b05cdd40cb4833e56e6a5ebb74c75678d72b5f0e1800206fc60489b1b40e6b3336759dfaa2f78927a000aea73fc1e963cb5b229bb5b6660070b81eab8bad54ba4bbe23b8d84ef6b7d42f570fd5dbe37db3ff002be35cee321a4000dcc90449dc03373c424c4b29802c473bcf2e16eabdd570ae7d46409000936bf1d8095e9cc704038014c96c4ed13622648f35ebbaf4f1ccba95cbd4c135c7c1501e85a41f480555f9b2a192d6eb0df8b478b48e6e0db81e70b51f812d735a265d12434bdcd6989fd182b4b31a9f9b9b570d486b7d560ef2ab9c0cb487086531f0192ef8893f25e5e6e9f53ec97cbbf8716f6154382f4d67dd799c578abea473ca28a28f4a22a2880a28221105450288cd1099a94270886098250982253b538291a9c2334e0a6095aac0110ec096a26941e1567e5ebc90f81fcdaf3f3683fd56f616a40bec42e6f267f8ea33edb011fe9307fdc3d96a60eb932c9db60b51cb92775b187ac3e1e1b8e86216c65b8a34de38b4c0708e110b94654702b6685498e7c169c328ed5f8cd4606c373b5a57ae8e24006ff5bcfcd732dc28f88ef038d96c31ed022c391f2dacab9f6d6c5623c244c5a0159cca25a26493cced0602152b59b31ba67622ded6faf25a974c678f95dd79b337bdecd2db385d84c8874c80637698b8f5dc2c8667b8c6550d75376ad5e0221ccde356b6cb606e7881b85a15b17e216bcfa7d5d782ad72351009971b098b42eb8d9e9e6be52f7fce9d63f35ac5a1af7eaa75016ea6b4417381f0906639b64df6e2172199e303b4e8101b22789bf2dc0e92775e2c666a58d2d7fc260c0241044439ae176b81b83d3aac9a38e6bdf797cdff00484381e3f0b435a77e20dcadf1c98d39bcb9719e5bfe7f6759d90abaea91a4380832dbd4638130e68e239f9aed71794b4d3754682086f83bb96974807c43769922fca57ca7fc3ded3ba9e22a5430e6d473c70bb76686f002c0afac62bb4749b45f529b9baac0b49bccc587aae5cb96572963d9f67e2e3c30bc79dee7fdd380ed1537530f6973893fb47c369883beeb86ab50ed32b4338cd5f55ee27893f3596eeab5c97e973fb2e1acabcf58aac856bcc84ad5e37d58e71141451e91514510145045104228228cd14c12a6088609c244cd44a709820110887695634aa5a15ad5593b5394ad4c119a4c23f4d6a67992d3e4e11f7c299ed6730e96920ba648dc01ba34a9eaa8c6f1d6dfe53a8fc8143b4adfd2b0f369fbc27c2cfc5198cad546d51ffc4568e0fb455e9fc515075f09f470fe8bceda364aea28d5f1bee3bdc9fb5f46ac349d0efb2fb7b1d8ae9a8b9afbc0226c6c7e6be2b52805bfd8dccf102b0a4d2e7360bae49d2011b9e5703d96a64e19f04d6f17d45f54ed60047cd797119cd3a73a9e1a06e6cbc59d54acda7adadb7972fecbe5589c5d4aee25e4c4d9bc0798e255b74e7c5c5e7dbb4cd7b734da74d169a87ed7c2cf7dcfb2e6f17da1c655dea9603c29f87f9be2f9af2d1c305eaa78559f2af44e2e3c7d466be9bcdcb9c4f32e24fccaba9626b3767f4d82d0761ac9465f54b750a550b049d629bcb606e750111bdfa24ab757e17f679a5a2c4885d1bf1ce00892b032b1017a9ee278aed393ad3c79f0ef3b4b1f7a5aa1585863755d46958cb3dba71e1a79521055aeb4aac9e8b9bd11cea8a28a3d22a28a04051082282228288cd3a212ca20a3274e15729c20b1a9daab05334a22e6270aa6956b7cd19a928872174403c82a8d7ece5269d4f89787681c98d804db99989e5e650cf32eef1cd0d80e9f0cede44f00b1b0f8e7e1aaeb025a6ce6cfc407e2174d87c553aa58f0f641837734473993bab1cb3994cbc9cf6268be890cacc7537700f1a67ab49b387512121aad8b91f25f41c2f688349677acd33b1702d3e84c2f6fe7ea02ed75061e6d149a7dc04d1f793e6570993642faee6b9ec73686ee7ba581e370ca67f5a6c096ec26e0c4f6b88c5e1f0586a957baa6d0234b29b453ef5e4c35b2049e7a8c98959789cf699ab2faa08e7ac13b735c976b736fca2a358dff002d927cdc78fa0fbca7a27967949f0dca7fe2554790cad4182992012d73a5a0ee6fbad1cf32518a0e2d0c6bac69bcb4071de03ea0125aeeb3162be746959767d99cfc772da755c01a7e0b90090d9d3bf422fd127e6bc98f8fd58320d07d13a2b30d37f275b50e6d3b3875121135da3900bb0a3da06805a2a308807492d73499fb26dcd1c3e7607880c3b2604b69d163a679b4022ca693ef25f71cde172ead5585ed639b4a27bd2086907ec13f19f298e30b4f018601825bbda2d1a76d3d6d65d4bf3b657a6454aac2e074cea6f8873b9b2e533bcca961d9a99503aa124318d83b71719b00896dcba91939961452abddb09d2581e1a4c968248d27a5ad3783d249682166e54e73ea3aa543a9ceb927eb60b64811f5c936de515ea295ef4e5575774a8f3bc95592ad79e6a873c4a8d473ea28a23d488a08a02a28a202a28a220a210442306098254c10382982408a0b5a559a9500ab03919580ab187aaa415634aacd2e2992166bb0e3a2d8d4aba0f6b2a35ce631cd274b83c4801d6d5d08317f351ac6e99630e3923f930e417add47492de5b751c0fd72563689710d1b9200f33f822f95671a013d16415d9e032e6380fd052701697349261a2e4cee665697e66a71230b43f84ffc96b4e7973e33db886c2f162688d4be86dcba910670d441e81e6dd3c4bcf86ca69d471fd052007187ff00c934ce3cd8b81a7870782b3f241c87b2e97b47948a5a1ed6b5ad24b486cee7e12649e51ea1650a4a3accf73719c70a3ec8f92b296180e10ba4a186a74b055711518d7bdeeeea8071363705e0739d47ca9f559d4f0a607a28791b2e6106568bb65435ba4251551caddac25026fe890391545551bd5798abf5d9791c546a321451447a5114114054502880a8a228888842510519a7442594510e114a132060982ae5382894e1c9a5560ab01443ca4aed9691d13029a110580d4a42a716021dd40227ef07dd7bfb354353dcf22cd05a3f79c0cfb37fdcbcdd9caba2b9a6622a34800891a85e3d448f45d7e1a832910c630318e13009324ee65c499d86fb40e0ac63932d6e30a8f6b0e1ab3e9d5a0d7b1ae80584b5c0408de43ad1c976f5f30a3f923718439b48b43f6975dc1a0403bc9e6be5dda2a67bf32376b7d63c3f700ba46e24bb237327e176988e58969fba15958cf8f1b25fd1a383ed261ab576328ebd4fb096117b9999da0156e73da2a797914fb8ef5ef697013a00693124de660d805c6f639da31b8770130f77fe37a7edce2fbdc638fd9635b1cb7747f326eace1c667afc9bd82ad5730a355cf63180b8b58180cb61baa64933048e5b2e7f0386a952a368010f2e2c3fb244eb27a0009f45d1f64b1a2961dad86df539c4f52481ec7e4bd34f154d86a572c607683de5413a8b40b802607c2361260720a1e5ab648e7fb6d8a06b53c33006b2834081f68b40683cc86c5ff68a144f840e8161d2a8ea8f75477c4f7171f3276f21b7a2d82748038d9474ca6a487250d2943d415246c8c68a2dc42aead4e1c15fa02a2b307922c8a8baca89573d9d555a11a64a8a288f42281444208a281141114144051082811298221284c8cd8605385504e110c884a0a281daac0ab09c144d1c14cc72aa5469442d725a43dbbb5c1c3cc190bbbc163c550c7c784b750ded3f5f25c43873532fccea50311a993b6c44993a4fa9559cf0f29d353b514dbad8f6c9065a679c4ffea9f02f272ec4b22c093e5f0393b452c5b435b534906608bb48e626e17bf0190556e1abd32e6b9d503f4069304e80d125c044903faa8cef58c97e1cff00670ffdc53238071fe523f15e5cd5c5d89aa7725d03cc3400b6322c9ebd2a9aead22c686384b8b6e496c0026fc6e81ca34d675773db1de6b6b1ba8b899901d2006891c09d95f86bca4cefe8f43e996521161611ce02f16798c2288a7c6a113fbadb9f9c2b73dcf1966b3c4e1bc6c3ccac205f51da9e6780e4072012a618df75edcae9de617bf1170a8c2888573dea2deea8a2257a22caa61844bd116048e435a57d4455555501cad7dd2008b18ea4a0a23b8a8822808452a280a8a288222104503428828894c9814a8828c99149298222c6a74a13209ba66310441416055bda9814da6c88f21a25a753096b86c45885d2e49dae34fc38869701b3d8249fde6fe23d9622475350b25eaba7a9da9c26980daa4f4601c7a90b9ccc734a95acd1a19ca65cefde3f805e60c0ae002d338e18e3e94d0c280bd54990544cc37516ad6a7790aa84c513470100d4650d69b34848984a4224a52e4da81095425217a0c7514511d90221451010a28a208a28a202a28a2062a0514404266a2a256294276a8a222c6a65144042237514503a62a2894008394513e13e55377569dd451529b8260a288864ca28819c9428a2904485451200520514562bffd9, 'Arundelpet', 'ALL TYPES OF SERVICES', 'hello', 'hello', 'no'),
(7, 'karthik', 'karthik', '9441128410', 'karthikcar13@gmail.com', 'Vijayawada', 'Andhra Pradesh', 'Home and constructions', 'Electrical And Plumbing', 0xffd8ffe000104a46494600010100000100010000ffdb00840009060712121215121212151515151515151515151515151515151515161615151515181d2820181a251d151521312125292b2e2e2e171f3338332d37282d2e2b010a0a0a0e0d0e1a10101a2d251f252d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2f2f2d2d2d2d2d2d2d2d2d2d2d2d372d2d2d2d2d2d2d2d2e2d2d2d2d2e2d2d2d2dffc000110800b1011c03012200021101031101ffc4001b00000203010101000000000000000000000102000305060407ffc40040100001030204030603030a0505000000000100021103210405123141516106132271819132a1f052b1c114152342627292a2d1f1073382b2d21624b3c2e1ffc400190101010101010100000000000000000000000102030405ffc4002a110101000202020101070501000000000000010211032112314122041332617191b1335181d1f023ffda000c03010002110311003f00f8e04420885a64c13048982315602982ac270895634a705541384656b4a648d29c1559304484023288608292965511484110145484da5484e154a1a510d4e11015d33b206a60d4f08809a4de89dda40c5eca744bb604f921570a4588208de42eb8e1b71cf9a479994d5eca7785651a3c4db74eda6779fabaed385c2f3ddbdf82a404c36771e4aeab44448b6dc79d95380a6e2624c15a5530c748804c74e49e1a73bccc1c43792f0d462dbc4d13f7f92cea8d32b5e2ce3c9b78da11d3c93d6050605cf2c5df0cc74d9554c91babc8490bcf947b30c8af481cad30ab0d58746028a22a3d02884a88466c3829c155029c1465605635540ab0144ab5a9c05535c9c3918d2c512ea4ae72a1a5494b2a2070514004d08084e0250132ac5384c0246a3ad5da2c0a6b00a6c0e0eb5771149b311a9d66b193f69e6c37db73c015bb85ecbd3b77b55f50989148063073f1bdae7387fa1aac673b24eeaac92b8d56607f00d7364198e175f5ff00fa668d660810d0dd2e04bb4b4b6f21a4f4b42e6321c8f08cd2f6d101c362e7d5747a1769f92e9a8e25d45c5f4a0877c748c00ffda638fc2fe87c27f6775d32b7e1e6c3eeedfabb8e773aec0090fc3bf482090e25ce1c4c362f3fd17378ecac53a8f697c8b9db4dfc460972fa352ed6512feec92c87c383991e841bd377ff0039a4c7e1b0b5a5cdd2e71d81b38742763e7d576c3973c7f1c79f9b870cbfa594dff6ff004f9e60300754f002f0f693123802ba4cbb2def4c30979b987821a06d73b09f73757d0ecf6a7c45892035a77f299e572b5b38c13e950386c39fd254ff0031e49043488d2d3c2d6e83a95ae4e496ea3870f167de59cea7effe1c776cb074e8b69526b9ae7004d4d3700edbfbdb7b0d972f4b2f738ded3eb3e8b4331c11a0f2c68d440f172eb015556a80d3a6f3f144fb792e930d4f6ce5c96dea69898fa504c1d8c2f3b57bf12260f3e7baf1bdb0b9e71eae3f457a5829822e0bcd9c7b78eab7352b9590961717a1ce229510a3d22a208a2084c128441466c3829c15502981445a0a605540a6944d2d0e525560a20a22d051095a982253829e5569c2ac8b4ab02584c15640ba17bf27cb3bef1d424520600061d55c376b4f068fd6770d85f6f1e130dded46d39806ee2376b45dc475e03a90bb5c261c7200001ad6ee1ad03c2d1f57df74936ce79f8cfcda185c28d34c06b5ad00e9636cd126f039fed1927892b468e0c797ac843094622cb56952042e93a78b2efda50a30399037ebd57a698e6aec23381fae2bd94e908dbe8ad5c931e2df65ad80a15b4b9ec1ac0d21dcc706bb98fbbdc10ccb6936355ac3c13bcc8b91e9042f5d0a721cd9890403d48b7979aa3297baa506b2b08ab49ba5dc0ea1674f3989e46c567caebdbd1f778dbbb26cd47461a348d4fab32eb786660004d848dba15e7ae4d3074bc3de6e41dc0266f375a78568758c13faa601b46c7adf65cf6370cea2f970f0ccb9daade3746b33ef1f418f759e4971c66bd7f0caaf806d40481c4ea77eb033f774eab9ec6e0d94dd0f3bdb6371116e12392edbbc93a834069b47befecb073fc26b63880d2e17078da640e52bd5c79ddeabe77271c9dc7299cd101c4b2cde034816dfd471f96c16255160b63101ce0d2ff0816813263aaf1625a382e9962d71e6cd7380fafe899170ba85797923dfc5911c93526705510bcd5ec8e7d141451e91514510108a08a20a609414519304c9014c0a21c221284ed44a762b2156d2ac0519a6684e12b534ab1958d0a384200a15111a3d9c700e7b8f1868e80789def2df65d9601ecda4741f5e6b87c91f1fc47f01f82e9a9beda9bc20ade2f3f34fa9d8612081e70b570e37f3fa2b86c3e31ed8bf85d79e4763f8aeab2cc76a603371e1b731cd69c9bb45b03e6bd34c5f6f55e1c3b8f31edc17af5722276f63fd946f1d3d3de0163e88d324d46b806ed0e0490e0d8305b6bf91e1b6d0682e244fa75d90fcab4116eb2a69d3ce4f7e9eac29b87340893f0991103633b74feeafccf06cacdd045c83a4da66e788e87dd78693582cda800971d060785d7dcde07e1d17bf0e65b05cdd40cb4833e56e6a5ebb74c75678d72b5f0e1800206fc60489b1b40e6b3336759dfaa2f78927a000aea73fc1e963cb5b229bb5b6660070b81eab8bad54ba4bbe23b8d84ef6b7d42f570fd5dbe37db3ff002be35cee321a4000dcc90449dc03373c424c4b29802c473bcf2e16eabdd570ae7d46409000936bf1d8095e9cc704038014c96c4ed13622648f35ebbaf4f1ccba95cbd4c135c7c1501e85a41f480555f9b2a192d6eb0df8b478b48e6e0db81e70b51f812d735a265d12434bdcd6989fd182b4b31a9f9b9b570d486b7d560ef2ab9c0cb487086531f0192ef8893f25e5e6e9f53ec97cbbf8716f6154382f4d67dd799c578abea473ca28a28f4a22a2880a28221105450288cd1099a94270886098250982253b538291a9c2334e0a6095aac0110ec096a26941e1567e5ebc90f81fcdaf3f3683fd56f616a40bec42e6f267f8ea33edb011fe9307fdc3d96a60eb932c9db60b51cb92775b187ac3e1e1b8e86216c65b8a34de38b4c0708e110b94654702b6685498e7c169c328ed5f8cd4606c373b5a57ae8e24006ff5bcfcd732dc28f88ef038d96c31ed022c391f2dacab9f6d6c5623c244c5a0159cca25a26493cced0602152b59b31ba67622ded6faf25a974c678f95dd79b337bdecd2db385d84c8874c80637698b8f5dc2c8667b8c6550d75376ad5e0221ccde356b6cb606e7881b85a15b17e216bcfa7d5d782ad72351009971b098b42eb8d9e9e6be52f7fce9d63f35ac5a1af7eaa75016ea6b4417381f0906639b64df6e2172199e303b4e8101b22789bf2dc0e92775e2c666a58d2d7fc260c0241044439ae176b81b83d3aac9a38e6bdf797cdff00484381e3f0b435a77e20dcadf1c98d39bcb9719e5bfe7f6759d90abaea91a4380832dbd4638130e68e239f9aed71794b4d3754682086f83bb96974807c43769922fca57ca7fc3ded3ba9e22a5430e6d473c70bb76686f002c0afac62bb4749b45f529b9baac0b49bccc587aae5cb96572963d9f67e2e3c30bc79dee7fdd380ed1537530f6973893fb47c369883beeb86ab50ed32b4338cd5f55ee27893f3596eeab5c97e973fb2e1acabcf58aac856bcc84ad5e37d58e71141451e91514510145045104228228cd14c12a6088609c244cd44a709820110887695634aa5a15ad5593b5394ad4c119a4c23f4d6a67992d3e4e11f7c299ed6730e96920ba648dc01ba34a9eaa8c6f1d6dfe53a8fc8143b4adfd2b0f369fbc27c2cfc5198cad546d51ffc4568e0fb455e9fc515075f09f470fe8bceda364aea28d5f1bee3bdc9fb5f46ac349d0efb2fb7b1d8ae9a8b9afbc0226c6c7e6be2b52805bfd8dccf102b0a4d2e7360bae49d2011b9e5703d96a64e19f04d6f17d45f54ed60047cd797119cd3a73a9e1a06e6cbc59d54acda7adadb7972fecbe5589c5d4aee25e4c4d9bc0798e255b74e7c5c5e7dbb4cd7b734da74d169a87ed7c2cf7dcfb2e6f17da1c655dea9603c29f87f9be2f9af2d1c305eaa78559f2af44e2e3c7d466be9bcdcb9c4f32e24fccaba9626b3767f4d82d0761ac9465f54b750a550b049d629bcb606e750111bdfa24ab757e17f679a5a2c4885d1bf1ce00892b032b1017a9ee278aed393ad3c79f0ef3b4b1f7a5aa1585863755d46958cb3dba71e1a79521055aeb4aac9e8b9bd11cea8a28a3d22a28a04051082282228288cd3a212ca20a3274e15729c20b1a9daab05334a22e6270aa6956b7cd19a928872174403c82a8d7ece5269d4f89787681c98d804db99989e5e650cf32eef1cd0d80e9f0cede44f00b1b0f8e7e1aaeb025a6ce6cfc407e2174d87c553aa58f0f641837734473993bab1cb3994cbc9cf6268be890cacc7537700f1a67ab49b387512121aad8b91f25f41c2f688349677acd33b1702d3e84c2f6fe7ea02ed75061e6d149a7dc04d1f793e6570993642faee6b9ec73686ee7ba581e370ca67f5a6c096ec26e0c4f6b88c5e1f0586a957baa6d0234b29b453ef5e4c35b2049e7a8c98959789cf699ab2faa08e7ac13b735c976b736fca2a358dff002d927cdc78fa0fbca7a27967949f0dca7fe2554790cad4182992012d73a5a0ee6fbad1cf32518a0e2d0c6bac69bcb4071de03ea0125aeeb3162be746959767d99cfc772da755c01a7e0b90090d9d3bf422fd127e6bc98f8fd58320d07d13a2b30d37f275b50e6d3b3875121135da3900bb0a3da06805a2a308807492d73499fb26dcd1c3e7607880c3b2604b69d163a679b4022ca693ef25f71cde172ead5585ed639b4a27bd2086907ec13f19f298e30b4f018601825bbda2d1a76d3d6d65d4bf3b657a6454aac2e074cea6f8873b9b2e533bcca961d9a99503aa124318d83b71719b00896dcba91939961452abddb09d2581e1a4c968248d27a5ad3783d249682166e54e73ea3aa543a9ceb927eb60b64811f5c936de515ea295ef4e5575774a8f3bc95592ad79e6a873c4a8d473ea28a23d488a08a02a28a202a28a220a210442306098254c10382982408a0b5a559a9500ab03919580ab187aaa415634aacd2e2992166bb0e3a2d8d4aba0f6b2a35ce631cd274b83c4801d6d5d08317f351ac6e99630e3923f930e417add47492de5b751c0fd72563689710d1b9200f33f822f95671a013d16415d9e032e6380fd052701697349261a2e4cee665697e66a71230b43f84ffc96b4e7973e33db886c2f162688d4be86dcba910670d441e81e6dd3c4bcf86ca69d471fd052007187ff00c934ce3cd8b81a7870782b3f241c87b2e97b47948a5a1ed6b5ad24b486cee7e12649e51ea1650a4a3accf73719c70a3ec8f92b296180e10ba4a186a74b055711518d7bdeeeea8071363705e0739d47ca9f559d4f0a607a28791b2e6106568bb65435ba4251551caddac25026fe890391545551bd5798abf5d9791c546a321451447a5114114054502880a8a228888842510519a7442594510e114a132060982ae5382894e1c9a5560ab01443ca4aed9691d13029a110580d4a42a716021dd40227ef07dd7bfb354353dcf22cd05a3f79c0cfb37fdcbcdd9caba2b9a6622a34800891a85e3d448f45d7e1a832910c630318e13009324ee65c499d86fb40e0ac63932d6e30a8f6b0e1ab3e9d5a0d7b1ae80584b5c0408de43ad1c976f5f30a3f923718439b48b43f6975dc1a0403bc9e6be5dda2a67bf32376b7d63c3f700ba46e24bb237327e176988e58969fba15958cf8f1b25fd1a383ed261ab576328ebd4fb096117b9999da0156e73da2a797914fb8ef5ef697013a00693124de660d805c6f639da31b8770130f77fe37a7edce2fbdc638fd9635b1cb7747f326eace1c667afc9bd82ad5730a355cf63180b8b58180cb61baa64933048e5b2e7f0386a952a368010f2e2c3fb244eb27a0009f45d1f64b1a2961dad86df539c4f52481ec7e4bd34f154d86a572c607683de5413a8b40b802607c2361260720a1e5ab648e7fb6d8a06b53c33006b2834081f68b40683cc86c5ff68a144f840e8161d2a8ea8f75477c4f7171f3276f21b7a2d82748038d9474ca6a487250d2943d415246c8c68a2dc42aead4e1c15fa02a2b307922c8a8baca89573d9d555a11a64a8a288f42281444208a281141114144051082811298221284c8cd8605385504e110c884a0a281daac0ab09c144d1c14cc72aa5469442d725a43dbbb5c1c3cc190bbbc163c550c7c784b750ded3f5f25c43873532fccea50311a993b6c44993a4fa9559cf0f29d353b514dbad8f6c9065a679c4ffea9f02f272ec4b22c093e5f0393b452c5b435b534906608bb48e626e17bf0190556e1abd32e6b9d503f4069304e80d125c044903faa8cef58c97e1cff00670ffdc53238071fe523f15e5cd5c5d89aa7725d03cc3400b6322c9ebd2a9aead22c686384b8b6e496c0026fc6e81ca34d675773db1de6b6b1ba8b899901d2006891c09d95f86bca4cefe8f43e996521161611ce02f16798c2288a7c6a113fbadb9f9c2b73dcf1966b3c4e1bc6c3ccac205f51da9e6780e4072012a618df75edcae9de617bf1170a8c2888573dea2deea8a2257a22caa61844bd116048e435a57d4455555501cad7dd2008b18ea4a0a23b8a8822808452a280a8a288222104503428828894c9814a8828c99149298222c6a74a13209ba66310441416055bda9814da6c88f21a25a753096b86c45885d2e49dae34fc38869701b3d8249fde6fe23d9622475350b25eaba7a9da9c26980daa4f4601c7a90b9ccc734a95acd1a19ca65cefde3f805e60c0ae002d338e18e3e94d0c280bd54990544cc37516ad6a7790aa84c513470100d4650d69b34848984a4224a52e4da81095425217a0c7514511d90221451010a28a208a28a202a28a2062a0514404266a2a256294276a8a222c6a65144042237514503a62a2894008394513e13e55377569dd451529b8260a288864ca28819c9428a2904485451200520514562bffd9, 'Broiepet', 'All', '', '', 'yes'),
(8, 'komal', 'karthik', '9966452323', 'karthikkomal559@gmail.com', 'guntur', 'andhra pradesh', 'Home And Constructions', 'Electrical And Plumbing', '', 'vasantharayiepuram', 'plumbing', '', '', 'yes'),
(9, 'pavan', 'pavankalyan', '9966462303', 'pavan@gmail.com', 'guntur', 'Andhra Pradesh', 'Home And Constructions', 'Electronics', '', 'saradacolony', 'elctronics', 'hello', 'hello', 'no'),
(10, 'venu', 'venubabu', '9963338927', 'venu@gmail.com', 'guntur', 'Andhra Pradesh', 'Home And Constructions', 'Air Conditioner Stores', '', 'gardens', 'air conditioners', 'hello', 'hello', 'yes'),
(11, 'vani', 'vanisri', '9966469250', 'vani@gmail.com', 'guntur', 'Andhra Pradesh', 'Home And Constructions', 'Marble And Tiles', '', 'vengalrao nagar', 'marbles and tiles', 'hello', 'hello', 'no'),
(12, 'alfa', 'sunitha', '8989896996', 'sunitha@gmail.com', 'guntur', 'Andhra pradesh', 'Home and constructions', 'Electrical And Plumbing', '', 'guntur', 'All', '', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `subcat` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `cat`, `subcat`) VALUES
(1, 'Home And Constructions', 'Electrical And Plumbing'),
(2, 'Home And Constructions', 'Electronics'),
(3, 'Home And Constructions', 'Air Conditioner Stores '),
(4, 'Home And Constructions', 'Marble And Tiles'),
(5, 'Home And Constructions', 'Iron And Cement'),
(6, 'Home And Constructions', 'Timber Depo'),
(7, 'Home And Constructions', 'Furniture Shops'),
(8, 'Home And Constructions', 'Kitchenware Stores'),
(9, 'Home And Constructions', 'Hardware And Plywood'),
(10, 'Home And Constructions', 'Inverter And Batteries'),
(11, 'Home And Constructions', 'Paints Shops'),
(12, 'Home And Constructions', 'Kitchens And WardRobes'),
(13, 'Home And Constructions', 'Interior Design Work'),
(14, 'Home And Constructions', 'Glass Design Workshop'),
(15, 'Home And Constructions', 'Electronic Works'),
(16, 'Home And Constructions', 'Iron Design Works'),
(17, 'Home And Constructions', 'Traders'),
(18, 'Home And Constructions', 'Building Materials'),
(19, 'Home And Constructions', 'Sanitary And Plumbing'),
(20, 'Home And Constructions', 'Roof Materials'),
(21, 'Home And Constructions', 'Elevation And Lift'),
(22, 'Home And Constructions', 'Tarpaulin Stores'),
(23, 'Fashion And Jewellery', 'Tailoring Bouquets'),
(24, 'Fashion And Jewellery', 'Cloth Showrooms'),
(25, 'Fashion And Jewellery', 'Boutiques'),
(26, 'Fashion And Jewellery', 'Dresses Jewellery For Rent'),
(27, 'Fashion And Jewellery', 'Jewellery Shops'),
(28, 'Fashion And Jewellery', 'Foot Wear Showrooms'),
(29, 'Fashion And Jewellery', 'Baby Showrooms'),
(30, 'Fashion And Jewellery', 'Furnishings'),
(31, 'Fashion And Jewellery', 'Fashion Designers'),
(32, 'Fashion And Jewellery', 'Dry Cleaners'),
(33, 'Fashion And Jewellery', 'Sun Glasses And Watch Stores'),
(34, 'Education', 'Childrens Home'),
(35, 'Education', 'Books Shop'),
(36, 'Education', 'Schools'),
(37, 'Education', 'Colleges'),
(38, 'Education', 'Computer Institutes'),
(39, 'Education', 'Competitive Institute'),
(40, 'Education', 'Type Writing Institutions'),
(41, 'Education', 'CA/CMA/CS Institutes'),
(42, 'Education', 'Strategic Management'),
(43, 'Education', 'Kids Play Schools'),
(44, 'Education', 'Subjects Tutorials'),
(45, 'Education', 'Internet Cafes'),
(46, 'Education', 'Consultancies'),
(47, 'Education', 'Beauty Training Center'),
(48, 'Food And Restaurants', 'Restaurants'),
(49, 'Food And Restaurants', 'Hotels'),
(50, 'Food And Restaurants', 'Curry Points'),
(51, 'Food And Restaurants', 'Sweet Shops'),
(52, 'Food And Restaurants', 'Bakeries'),
(53, 'Food And Restaurants', 'Biscuit Shops'),
(54, 'Food And Restaurants', 'Ice Cream Parlours'),
(55, 'Food And Restaurants', 'Snacks Stell'),
(56, 'Food And Restaurants', 'Drinks And Juices'),
(57, 'Food And Restaurants', 'Milk Booth'),
(58, 'Food And Restaurants', 'Water Supplies'),
(59, 'Food And Restaurants', 'Tea Stalls'),
(60, 'Health And Medical', 'General Hospitals'),
(61, 'Health And Medical', 'Orthopedic Hospitals'),
(62, 'Health And Medical', 'Homoeopathy Hospitals'),
(63, 'Health And Medical', 'Eye Hospitals'),
(64, 'Health And Medical', 'Dental Hospitals'),
(65, 'Health And Medical', 'E.N.T Hospitals'),
(66, 'Health And Medical', 'Skin Care Hospitals'),
(67, 'Health And Medical', 'Ayurvedic Hospitals'),
(68, 'Health And Medical', 'Medical Stores'),
(69, 'Health And Medical', 'Labs'),
(70, 'Health And Medical', 'Opticals'),
(71, 'Beauty And Fitness', 'Mens Beautyparlour'),
(72, 'Beauty And Fitness', 'Womens Beautyparlour'),
(73, 'Beauty And Fitness', 'Wellness Center'),
(74, 'Beauty And Fitness', 'Beauty Product Shops'),
(75, 'Beauty And Fitness', 'Gym'),
(76, 'Beauty And Fitness', 'Yoga Training'),
(77, 'Beauty And Fitness', 'Karate'),
(78, 'Beauty And Fitness', 'Memory Development'),
(79, 'Beauty And Fitness', 'Uni Sex Parlour'),
(80, 'Vehicle Showrooms', 'Two Wheeler'),
(81, 'Vehical Showrooms', 'Cycle Shops'),
(82, 'Vehical Showrooms', 'Three Wheeler'),
(83, 'Vehical Showrooms', 'Four Wheeler'),
(84, 'Vehical Showrooms', 'Automobile And Services'),
(85, 'Vehical Showrooms', 'Automotive Parts Stores'),
(86, 'Lubricant Engine Oil', 'Lakshmi Enterprises'),
(87, 'Shops', 'Computer Shops'),
(88, 'Shops', 'Mobile Shops'),
(89, 'Shops', 'Camera Service Center'),
(90, 'Shops', 'Stickering Shops'),
(91, 'Shops', 'Letters Design'),
(92, 'Shops', 'Fertilizers'),
(93, 'Shops', 'Weights And Messages'),
(94, 'Shops', 'Sports And Fitness Store'),
(95, 'Shops', 'Rice Stores'),
(96, 'General Stores', 'Super Market'),
(97, 'General Stores', 'Fancy,Gifts And Handicrafts'),
(98, 'General Stores', 'Bags Stories'),
(99, 'General Stores', 'Toy Stores'),
(100, 'General Stores', 'Puja Materials'),
(101, 'General Stores', 'Steel Shops'),
(102, 'General Stores', 'Plastics And Crockeries'),
(103, 'General Stores', 'Polythene And Disposable'),
(104, 'General Stores', 'Home Needs'),
(105, 'Function And Weddings', 'Photo Studio'),
(106, 'Function And Weddings', 'Marriage Live Streaming'),
(107, 'Function And Weddings', 'Marriage Bureaus'),
(108, 'Function And Weddings', 'Flower Decorators'),
(109, 'Function And Weddings', 'Makeup'),
(110, 'Function And Weddings', 'Shamiyana Suppliers'),
(111, 'Function And Weddings', 'Function Halls'),
(112, 'Function And Weddings', 'Sannai Melam'),
(113, 'Function And Weddings', 'Printing Press'),
(114, 'Art And Culture', 'Painting Academies'),
(115, 'Art And Culture', 'Dance Academies'),
(116, 'Art And Culture', 'Music Schools'),
(117, 'Art And Culture', 'Music Instruments'),
(118, 'People And Services', 'Ac Mechanics'),
(119, 'People And Services', 'Refrigeration Works'),
(120, 'People And Services', 'Courier Services'),
(121, 'People And Services', 'Electricians'),
(122, 'People And Services', 'Packers And Movers'),
(123, 'People And Services', 'TV Mechanics'),
(124, 'People And Services', 'Septic Cleaners'),
(125, 'People And Services', 'Event Managers'),
(126, 'Travels And Transport', 'Auto Services'),
(127, 'Travels And Transport', 'Bus Services'),
(128, 'Travels And Transport', 'Cab Services'),
(129, 'Travels And Transport', 'Car Driving School'),
(130, 'Travels And Transport', 'Petrol Bunks'),
(131, 'Travels And Transport', 'Lorry Transport'),
(132, 'Car Accessories', 'Accessories'),
(133, 'Distributors And suppliers', 'Traders'),
(134, 'Market', 'Vegetable Market'),
(135, 'Market', 'NonVeg Market'),
(136, 'Market', 'Fruit Market'),
(137, 'Market', 'Dry Fruits Stores'),
(138, 'Aquaculture', 'Aqua Care'),
(139, 'Pet Center', 'Kens Aquarium'),
(140, 'Pet Center', 'Pet Care'),
(141, 'Professionals', 'Advocates'),
(142, 'Professionals', 'Auditors And Accountants'),
(143, 'Entertainment And Fun', 'Movie Theaters'),
(144, 'Insurance And Banks', 'Banks'),
(145, 'Insurance And Banks', 'Bajaj Allianz'),
(146, 'Insurance And Banks', 'Health Insurances'),
(147, 'Insurance And Banks', 'Loans'),
(148, 'Insurance And Banks', 'Chits Companies'),
(149, 'Astrology And Vastu', 'Astrology'),
(150, 'Astrology And Vastu', ' Vastu'),
(151, 'Real Estate', 'Lands'),
(152, 'Real Estate', 'Houses'),
(153, 'Real Estate', 'ToLet'),
(154, 'City Highlights', 'Walkers Associations'),
(155, 'City Highlights', 'Social Service'),
(156, 'City Highlights', 'Oldage Homes'),
(157, 'City Highlights', 'Political Parties'),
(158, 'Celebraties', 'Films'),
(159, 'Celebraties', 'Anchors'),
(160, 'Celebraties', 'Serials'),
(161, 'Celebraties', 'Politicians');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `name` varchar(220) NOT NULL,
  `phone` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(220) NOT NULL,
  `city` varchar(220) NOT NULL,
  `reset` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `email`, `name`, `phone`, `password`, `address`, `state`, `city`, `reset`) VALUES
(7, 'tkkarthik23@gmail.com', 'karthik', '7382119361', '1f8acca9885ebfdfe898d4c29abbe8f1c95c9bfd', 'details', 'Andhra Pradesh', 'Guntur', '973837'),
(8, 'karthikcar12@gmail.com', 'karthik', '9110757559', '1f8acca9885ebfdfe898d4c29abbe8f1c95c9bfd', 'Madhapur', 'Andhra Pradesh', 'Hyderabad', ''),
(9, 'karthikcar13@gmail.com', 'karthik', '9441128410', '1f8acca9885ebfdfe898d4c29abbe8f1c95c9bfd', 'oisdvods', 'Andhra Pradesh', 'Vijayawada', ''),
(10, 'karthikcar14@gmail.com', 'karthik', '9441802562', '1f8acca9885ebfdfe898d4c29abbe8f1c95c9bfd', 'sbvosovn', 'Andhra Pradesh', 'Guntur', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storedetails`
--
ALTER TABLE `storedetails`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `sno` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `storedetails`
--
ALTER TABLE `storedetails`
  MODIFY `sno` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
