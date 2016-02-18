<?php

$checkins = [
	['name' => 'Theresa W.', 'place' => 'East River Park', 'city' => 'Brooklyn, NY', 'time' => 1455799650, 'pic' => 'http://www.radfaces.com/images/avatars/baby-sinclair.jpg'],
	['name' => 'Nina M.', 'place' => 'Rubirosa', 'city' => 'New York, NY', 'time' => 1455799550],
	['name' => 'Sean B.', 'place' => '', 'city' => 'Brooklyn, NY', 'time' => 1455799450],
	['name' => 'Mike A.', 'place' => '', 'city' => 'Brooklyn, NY', 'time' => 1455799150]
];

foreach ($checkins as $checkin):
?>
<article>
<?php
if(isset($checkin['pic'])): ?>
	<div><img src="<?php echo $checkin['pic'];?>" width="64" height="64" /></div>
<?php
endif;
?>
	<div><?php echo $checkin['name'];?></div>
	<div><?php echo $checkin['place'];?></div>
	<div><?php echo $checkin['city'];?></div>
	<div><?php echo round((time() - $checkin['time'])/60)." minutes ago";?></div>
</article>
<hr />
<?php
endforeach; 
?>
