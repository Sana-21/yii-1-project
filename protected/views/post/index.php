<?php if(!empty($_GET['tag'])): ?>
<h1>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?>

<?php
// Temporary debug: append &debug=1 to URL to see what the widgets fetch
// if(isset($_GET['debug']) && $_GET['debug']) {
// 	echo "<h3>Debug output</h3>\n<pre>";
// 	echo "Tag weights:\n";
// 	var_export(Tag::model()->findTagWeights(Yii::app()->params['tagCloudCount']));
// 	echo "\n\nRecent comments:\n";
// 	var_export(Comment::model()->findRecentComments(Yii::app()->params['recentCommentCount']));
// 	echo "</pre>";
// }

?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
)); ?>
