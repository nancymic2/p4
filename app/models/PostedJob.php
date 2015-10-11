<?php



class Postedjob extends Eloquent
{
    public function user() {
        # job belongs to user
        # Define an inverse one-to-many relationship.
        //////////////////////////////////
        return $this->belongsTo('User');
    }


///add this function 10-11-15

    public function company() {
        # job belongs to user
        # Define an inverse one-to-many relationship.
        //////////////////////////////////
        return $this->belongsTo('Company');
    }




}