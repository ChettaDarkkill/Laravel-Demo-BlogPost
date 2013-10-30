
<?php
	class Comment extends  Eloquent 
	{
		 protected $table = "comment";
		 protected $primaryKey = "comment_id";
  	     public function article()
  	     {
  	       return $this->belongsTo('Article','comment_article_id');
  	     }
	}
?>