<?php

//
trait CreationAndModificationTrait {

    // Return formatted `creationdate`
    public function getFCreationdate() {
        return date('d.m.Y - H:i:s', $this->creationdate);
    }

    // Return formatted `lastmodificationdate`
    public function getFLastmodificationdate() {
        return empty($this->lastmodificationdate) ? '-' : date('d.m.Y - H:i:s', $this->lastmodificationdate);
    }

    //
    public function isCurrentUserCreator() {
        $currentUser = Yii::app()->user->getId();

        return ($currentUser->id === $this->creationauthor);
    }

    //
    public function isUserCreator($userId) {
        return ($userId === $this->creationauthor);
    }

    //
    public function isCurrentUserLastModifier() {
        $currentUser = Yii::app()->user->getId();

        return ($currentUser->id === $this->lastmodificationauthor);
    }

    //
    public function isUserLastModifier($userId) {
        return ($userId === $this->lastmodificationauthor);
    }

}