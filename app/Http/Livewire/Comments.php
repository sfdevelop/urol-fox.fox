<?php

namespace App\Http\Livewire;

use App\Model\Comment;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Comments extends Component
{
    public string $name = '';
    public string $email = '';
    public string $description = '';

    /**
     * @param $field
     * @return void
     * @throws ValidationException
     */
    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'description' => 'required|string|min:3',
        ]);
    }

    /**
     * @return void
     */
    public function addComment()
    {

        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'description' => 'required|string|min:3',
        ]);

        Comment::create([
            'name' => $this->name,
            'email' => $this->email,
            'description' => $this->description,
            'date' => Carbon::now(),
        ]);

        $this->reset(['name', 'email', 'description']);

        $this->dispatchBrowserEvent('alert',
            [
                'type' => 'success',
                'message' => __('comment.comments_ok'),
            ]
        );
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
