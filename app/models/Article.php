
<?php
	class Article extends  Eloquent 
	{
		 protected $table = 'article';
		 protected $primaryKey = "article_id";
  	     public function comment()
  	     {
  	     	return $this->hasMany('Comment','comment_article_id');
  	     }

	}

?>