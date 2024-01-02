<?php

namespace Tests\Traits;

use Illuminate\Support\Facades\File;

trait SandboxesTests
{
    private static function createSandbox(): void
    {
        config(['AudioStreaming.album_cover_dir' => 'sandbox/img/covers/']);
        config(['AudioStreaming.artist_image_dir' => 'sandbox/img/artists/']);

        @mkdir(public_path(config('AudioStreaming.album_cover_dir')), 0755, true);
        @mkdir(public_path(config('AudioStreaming.artist_image_dir')), 0755, true);
    }

    private static function destroySandbox(): void
    {
        File::deleteDirectory(public_path('sandbox'));
    }
}
