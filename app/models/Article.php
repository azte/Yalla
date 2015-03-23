<?php

class Article extends Eloquent{
	protected $guarded = Array();
	public static $rules;

	public function user(){
		return $this->belongsTo('User');
	}

	public function isValid($data)
    {
        $rules = array(
            'title' => 'required',
            'text' => 'required',
            
        );

        
        $validator = Validator::make($data, $rules);
        
        if ($validator->passes())
        {
            return true;
        }
        
        $this->errors = $validator->errors();
        
        return false;
    }

   	public function comment(){
   		return $this->hasMany('Comment');
   	}

}



