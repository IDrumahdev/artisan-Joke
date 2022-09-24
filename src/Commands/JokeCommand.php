<?php

namespace Rumahdevid\ArtisanJoke;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

class JokeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'joke';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ini untuk menjalankan joke api.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client     = new CLient();

        $response   = $client->request('GET','https://icanhazdadjoke.com', [
            'headers' => [
                'Accept'    => 'text/plain',
            ]
        ]);

        if($response->getStatusCode() != 200) {
            $this->error('Gagal akses API Joke.');
            return;
        }
            $this->info((string)$response->getBody());
    }
}
