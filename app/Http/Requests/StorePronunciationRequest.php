<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BuildableFormRequest;

class StorePronunciation extends BuildableFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->getRuleBuilder()
            ->add('title')->required()
            ->add('comment')->required()
            ->get();
    }
}
