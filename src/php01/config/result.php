<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "お名前は" . $name . "ですね。" . "<br/>";
print "希望商品は" . $choices . "です。" . "<br/>";
print "ご注文数は" . $number . "です。" . "<br/>";