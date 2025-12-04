<?php
Yii::import('zii.widgets.CPortlet');
 
class TagCloud extends CPortlet
{
    public $title='Tags';
    public $maxTags=20;
 
    protected function renderContent()
    {
        $tags=Tag::model()->findTagWeights($this->maxTags);
 
        foreach($tags as $tag=>$weight)
        {
            $link=CHtml::link(CHtml::encode($tag), array('post/index','tag'=>$tag));
            // weight is a computed numeric value (may be small); convert to a readable pixel size
            $size = max(12, (int)round($weight * 12)); // ensure at least 12px
            echo CHtml::tag('span', array(
                'class'=>'tag',
                'style'=>"font-size:{$size}px;margin-right:6px;display:inline-block",
            ), $link)."\n";
        }
    }
}