<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class VideoUrl implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $allowedExtensions = ['mp4', 'mov', 'avi', 'mkv'];
        $extension = pathinfo(parse_url($value, PHP_URL_PATH), PATHINFO_EXTENSION);
        return in_array(strtolower($extension), $allowedExtensions) && $this->isVideoUrl($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
