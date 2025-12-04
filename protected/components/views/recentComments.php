<?php $comments = $this->getRecentComments(); ?>
<?php if(empty($comments)): ?>
	<div class="recent-comments-empty">No recent comments.</div>
<?php else: ?>
	<ul>
	<?php foreach($comments as $comment): ?>
		<li><?php echo $comment->authorLink; ?> on
			<?php echo CHtml::link(CHtml::encode($comment->post->title), $comment->getUrl()); ?>
		</li>
	<?php endforeach; ?>
	</ul>
<?php endif; ?>