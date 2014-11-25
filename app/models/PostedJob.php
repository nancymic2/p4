<?php


class PostedJob extends Eloquent
{
    public function user() {
        # job belongs to user
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('User');
    }
}