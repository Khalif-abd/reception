
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `reception` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `reception`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `reception`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
