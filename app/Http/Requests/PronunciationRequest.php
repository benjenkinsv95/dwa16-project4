<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BuildableFormRequest;

class PronunciationRequest extends BuildableFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->getRuleBuilder()
            ->add('phonemes')->required()
            ->add('word')->required()
            ->add('voice_id')->required()
            ->get();
    }
}
