<!-- Quiz_history View -->
<div class="clear"></div>
<div id="videoContent" class="grid_12">

	<table width='600'>
	<tr>
		<th><b>Date</b></th>
		<th><b>Chapter</b></th>
		<th><b>Marks</b></th>
		<th><b>Percentage</b></th>
	</tr>

	<?php foreach($history as $item): ?>
	<tr>
	
	<td><?php echo $item->date; ?></td>
	<td><?php echo $item->quiz_chapter; ?></td>
	<td><?php echo $item->marks; ?></td>
	<td><?php echo $item->percentage; ?></td>
	
	</tr>
	<?php endforeach; ?>
	
	</table>
</div>
