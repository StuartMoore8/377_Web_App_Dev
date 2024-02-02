CREATE DATABASE 'Golfers'

CREATE TABLE `Golfers` (
  `Golfer_id` int NOT NULL AUTO_INCREMENT,
  `Golfer_First_Name` varchar(75) NOT NULL,
  `Golfer_Last_Name` varchar(75) NOT NULL,
  `Golfer_Age` int NOT NULL,
  `Golfer_Majors` int NOT NULL,
  `Golfer_Wins` int NOT NULL,
  `Golfer_Sponsor` varchar(25) NOT NULL,
  `Golfer_Driver` varchar(45) NOT NULL,
  `Golfer_Wood` varchar(45) NOT NULL,
  `Golfer_Irons` varchar(45) NOT NULL,
  `Golfer_Wedges` varchar(45) NOT NULL,
  `Golfer_Ball` varchar(15) NOT NULL,
  PRIMARY KEY (`Golfer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci