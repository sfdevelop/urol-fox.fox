<?php

namespace App\Services\Contacts;

use App\Model\Contact;

class ContactsService
{
    public function ContactFoot()
    {
        $contactFoot=Contact::withTranslation()
        ->firstOrFail();
        return $contactFoot;
    }
}
