<?php

namespace App\Forms\Builders;

use App\Note;
use LaravelEnso\Forms\App\Services\Form;

class NoteForm
{
    protected const TemplatePath = __DIR__.'/../Templates/notes.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Note $note)
    {
        return $this->form->edit($note);
    }
}