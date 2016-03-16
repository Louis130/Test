while($message = $message->fetch())
					<td> echo '<p>' . htmlspecialchars($message['contenu']) . '</p>' <td>