<?php

namespace frontend\models;
use yii\base\Model;
/**
 * 文章表单模型
 * @authors Your Name (you@example.org)
 * @date    2019-05-23 10:16:26
 * @version $Id$
 */


class ArticleForm extends Model {
	public $id;
	public $title;
	public $content;
	public $label_img;
	public $tags;
	public $cat_id;

	public $_lastErr;
	public function rules(){
		return [
			[['id','title','content','cat_id'],'required'],
			[['id','cat_id'],'integer'],
			['title','string','min'=>1,'max'=>20],
		];
	}
	public function attributeLabels(){
		return [
			'id'=>'编码',
			'title'=>'标题',
			'content'=>'内容',
			'label_img'=>'标签图',
			'tags'=>'标签',
			'cat_id'=>'分类',
		];
	}
        
}