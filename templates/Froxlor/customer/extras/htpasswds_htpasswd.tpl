<tr>
	<td>{$row['username']}</td>
	<td>{$row['path']}</td>
	<td>
		<a href="{$linker->getLink(array('section' => 'extras', 'page' => 'htpasswds', 'action' => 'edit', 'id' => $row['id']))}" style="text-decoration:none;">
			<img src="images/Froxlor/icons/edit.png" alt="{$lng['panel']['edit']}" />
		</a>&nbsp;
		<a href="{$linker->getLink(array('section' => 'extras', 'page' => 'htpasswds', 'action' => 'delete', 'id' => $row['id']))}" style="text-decoration:none;">
			<img src="images/Froxlor/icons/delete.png" alt="{$lng['panel']['delete']}" />
		</a>
	</td>
</tr>
