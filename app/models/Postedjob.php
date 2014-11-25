<?php


class PostedJob extends Eloquent
{
    public function user() {
        # job belongs to user
        # Define an inverse one-to-many relationship.
        //naming issues here for caps in job
        return $this->belongsTo('User');
    }
}