<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\ContactInterface;
use App\Http\Traits\ContactTrait;
use App\Models\ContactUs;

class ContactRepository implements ContactInterface
{
    use ContactTrait;
    private $contactModel;

    public function __construct(ContactUs $contact)
    {
        $this->contactModel = $contact;
    }

    public function index()
    {
        $messages  = $this->getMessages();
        return view('Admin.contact.index',compact('messages'));
    }

    public function delete($request)
    {
        $this->getMessage($request->id)->delete();
    }
}
