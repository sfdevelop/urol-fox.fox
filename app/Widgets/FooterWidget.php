<?php

namespace App\Widgets;

use App\Services\Contacts\ContactsService;
use Arrilot\Widgets\AbstractWidget;

class FooterWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    private $contact;

    /**
     * @param $contact
     */
    public function __construct(ContactsService $contact)
    {
        $this->contact = $contact;
    }


    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $contactFoot=$this->contact->ContactFoot();

        return view('widgets.footer_widget', [
            'config' => $this->config,
            'contact' =>$contactFoot,
        ]);
    }
}
