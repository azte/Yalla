<?php

class Comment extends Eloquent{
	protected $guarded = Array();
	public static $rules;

	public function article(){
		return $this->belongsTo('Article');
	}

	
	public function isValid($data)
    {
        $rules = array(
            
            'comment' => 'required',
            'email'=>'Required',

            
        );

        
        $validator = Validator::make($data, $rules);
        
        if ($validator->passes())
        {
            return true;
        }
        
        $this->errors = $validator->errors();
        
        return false;
    }

}

