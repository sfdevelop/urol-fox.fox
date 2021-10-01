<?php

namespace App\Widgets;

use App\Services\Count\CountService;
use Arrilot\Widgets\AbstractWidget;

class countQuestions extends AbstractWidget
{
    private $questions;



    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * @param $questions
     */
    public function __construct(CountService $questions)
    {
        $this->questions = $questions;
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $countQuestions=$this->questions->countQuestions();

        return view('widgets.count_questions', [
            'config' => $this->config,
            'countQuestions' => $countQuestions,
        ]);
    }
}
