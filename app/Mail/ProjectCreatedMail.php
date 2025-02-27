<?php

namespace App\Mail;

use App\Models\Project\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProjectCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $project;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    public function build()
    {
        return $this->subject('New Project Created')
            ->html("
                    <h1>New Project Created</h1>
                    <p>Project Name: {$this->project->name}</p>
                    <p>Project Address: {$this->project->address}</p>
                    <p>Thank you for your attention.</p>
                ");
    }
}
