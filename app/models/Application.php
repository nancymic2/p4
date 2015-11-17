<?php


class Application extends Eloquent
{
    public function user() {
        # application belongs to user
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('User');
    }

    public function recruiter() {
        # application belongs to recruiter
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('Recruiter');
    }
}