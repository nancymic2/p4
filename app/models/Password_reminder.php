<?php


class Password_reminder extends Eloquent
{
    public function user() {
        # application belongs to user
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('User');
    }
}