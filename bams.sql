SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `loans` (
  `loanid` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `loanamount` int(11) NOT NULL,
  `issuedate` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `user_details` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `loans` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `user_emp_details` (
  `Serial` int(3) NOT NULL,
  `worktype` varchar(50) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `post` varchar(30) NOT NULL,
  `salary` int(15) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `loans`
  MODIFY `loanid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `user_emp_details`
  MODIFY `Serial` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;