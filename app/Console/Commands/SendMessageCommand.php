<?php

namespace App\Console\Commands;

use App\Events\MessageSent;
use Illuminate\Console\Command;

use function Laravel\Prompts\text;

class SendMessageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send message to user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = text(
            label: 'What is your name?',
            placeholder: 'E.g. Yobu',
            hint: 'This will be displayed on your profile.',
            required: true
        );
        $text = text(
            label: 'What is your message?',
            placeholder: 'E.g. Yobu',
            required: true
        );
        MessageSent::dispatch($name, $text);
    }
}
