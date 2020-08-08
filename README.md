# codeigniter-blog
Ready to use Php codeigniter blog app, Jquery, Bootstrap included.

Auth, User, Blog MVC built-in,

But first things first, you need to edit these:

1.) config.php base url

2.) database.php database connection setting

3.) blog table:

CREATE TABLE blog (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NOT NULL,
	`date` DATE NOT NULL,
	`content` MEDIUMTEXT NOT NULL,
	`image` VARCHAR(100) NULL DEFAULT NULL,
	`gallery` VARCHAR(100) NULL DEFAULT NULL,
	`category` VARCHAR(50) NOT NULL,
	`comment_count` INT(10) NULL DEFAULT NULL,
	`uri` VARCHAR(500) NULL DEFAULT NULL
)

4.) categories table:

CREATE TABLE dummy (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(60) NOT NULL
)

4.) run gulp for sass

You need to style Admin Dashboard and views,

Thats all!