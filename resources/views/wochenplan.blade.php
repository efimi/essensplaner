<div class="box">
	<table>
	<thead>
		<th>Zeit</th>
		<th>Montag</th>
		<th>Dienstag</th>
		<th>Mittwoch</th>
		<th>Donnerstag</th>
		<th>Freitag</th>
		<th>Samsatag</th>
		<th>Sonntag</th>	
	</thead>
	<tbody>
		<tr>
			<td>Frühstück</td>
		@for ($i = 0; $i < 7; $i++)
    		<td></td>
		@endfor
		</tr>
		<tr>
			<td>Mittagessen</td>
		@for ($i = 0; $i < 7; $i++)
    		<td></td>
		@endfor
		</tr>
		<tr>
			<td>Abendessen</td>
		@for ($i = 0; $i < 7; $i++)
    		<td></td>
		@endfor
		</tr>
	</tbody>
</table>


</div>