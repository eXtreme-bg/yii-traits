<?php

//
trait ModelHelpersTrait {

    // Replace empty string from database with NULL
    function replaceEmptyStringWithNull($attributes) {
        foreach ($attributes as $attribute) {
            if (empty($this->$attribute)) {
                $this->$attribute = NULL;
            }
        }
    }

    // Return localized attribute
    function getLocalizedAttribute($attribute, $languages) {
        $language = Yii::app()->session['language'];

        if (!in_array($language, $languages)) {
            return FALSE;
        }

        $localized = $attribute . '_' . $language;

        return $this->$localized;
    }

}