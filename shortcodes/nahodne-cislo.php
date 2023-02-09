<?php
									//vychozi hodnota, pokud neni v shortcodu stanovena
$min = $shortcode->getParameter("od", 15);
$max = $shortcode->getParameter("do");

echo rand($min, $max);
