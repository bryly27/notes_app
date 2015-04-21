<?php  
				foreach($notes as $note)
				{ ?>
					<div class='note col-md-3'>
						<p><a href="/notes/delete/<?= $note['id'] ?>">X</a></p>
						<h3 class='title'><?= $note['title'] ?></h3>
						<form action='/notes/update' method='post'>
							<textarea name='description' placeholder='enter info here'><?= $note['description'] ?></textarea>
							<input type='hidden' name='note_id' value='<?= $note['id'] ?>'>
						</form>
					</div>
<?php		}
?>