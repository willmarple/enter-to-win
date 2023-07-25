<?php

namespace App\Console\Commands;

use App\Models\Entry;
use App\Models\Winner;
use Illuminate\Console\Command;

class PickWinnerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'entry:pick-winner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pick a random winner from the entries.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        /** @var Entry $entry */
        $entry = Entry::query()
            ->inRandomOrder()
            ->whereDoesntHave('winner')
            ->first();

        if (!$entry) {
            $this->error('There are no entries left to pick a winner from!');
            return;
        }

        $entry->winner()->create($entry->only('first_name', 'last_name', 'email'));

        $this->info('The winner is ' . $entry->first_name . ' ' . $entry->last_name . ' with email ' . $entry->email . '!');
    }
}
