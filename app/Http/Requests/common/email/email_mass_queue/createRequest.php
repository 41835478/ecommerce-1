<?php
namespace App\Http\Requests\common\email\email_mass_queue;

use App\Http\Requests\Request;

class createRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
    "subject"=>'required',
    "language"=>'required',
    "last_users_id"=>'required',
    "status"=>'required',
    "email_group_id"=>'required',



        ];
    }
}
