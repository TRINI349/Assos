<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //changer le false par true afin de permettre à la requette de passer
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()

    //pour éviter d'avoir des messages d'erreur si on ne remplie pas  tous les champs ou certain et de retour à la page creatAction

    {
        return [
            ['dateAction'=>'required',
            'titre'=>'required|min=5|max=150',
            'adresseAction'=>'required|min=5',
            'contenu'=>'required',
            'image'=>'required'

        ];
    }
}
