<?php


class Resume extends Eloquent
{
    public function user() {
        # resume belongs to user
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('User');
    }
}