<?php
class Post extends AppModel {

	

    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
	

	
	
	public function isOwnedBy($post, $user) {
         return $this->field('id', 
		 array('id' => $post, 'user_id' => $user)) === $post;
}
	
	
	public $belongsTo = array(
         'User' => array(
         'className' => 'User',
         'foreignKey '=> 'user_id')
    );	

	}

?>