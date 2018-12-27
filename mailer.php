<?php
/**
 * This sends an email
 * 
 * PHP version 7.2
 * 
 * Copyright (C) <2018>  <Herobone>
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 * 
 * @category Misc
 * @package  Auto_Mailer
 * @author   Herobone <info@herobone.de>
 * @license  GNU GPL V3
 * @version  GIT: 1.2.3
 * @link     https://herobone.de/quick-projects/auto-mailer/
 */

$to_email = $_GET["email"];

$email_text =  file_get_contents("emailTemplate.html");
$from = "mailer@herobone.de";
$subject = "Hello there!";

$header  = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=utf-8\r\n";
$header .= "From: Your Name <$from>\r\n";
$header .= "Reply-To: $to_mail\r\n";
$header .= "X-Mailer: PHP ". phpversion();

$email_text = str_replace("§§EMAIL_PLACEHOLDER§§", $to_email, $email_text);

mail($to_email, $subject, $email_text, $header);
 
echo "Mail was sent!";
?>
