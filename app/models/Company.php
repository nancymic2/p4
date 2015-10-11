<?php


class Company extends Eloquent
{
    public function user() {
        # recruiter belongs to user
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('User');
    }


}