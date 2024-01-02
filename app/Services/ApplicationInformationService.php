<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Contracts\Cache\Repository as Cache;

class ApplicationInformationService
{
    public function __construct(private Client $client, private Cache $cache)
    {
    }

    /**
     * Get the latest version number of AudioStreaming from GitHub.
     */
    public function getLatestVersionNumber(): string
    {
        return attempt(function () {
            return $this->cache->remember('latestAudioStreamingVersion', now()->addDay(), function (): string {
                return json_decode($this->client->get('https://api.github.com/repos/AudioStreaming/AudioStreaming/tags')->getBody())[0]
                    ->name;
            });
        }) ?? AudioStreaming_version();
    }
}
