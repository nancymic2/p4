<?php


class Recruiter extends Eloquent
{
    public function user() {
        # recruiter belongs to user
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('User');
    }


        public function company() {
        # recruiter belongs to company
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('Company');
    }


}