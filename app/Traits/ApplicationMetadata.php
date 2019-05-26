<?php

namespace XpBar\Traits;

use Illuminate\Support\Carbon;

trait ApplicationMetadata
{
    /**
     * Return the full set of application metadata.
     *
     * @return array
     */
    final public static function get(): array
    {
        return [
            'app' => "Lumen API Scaffolding",
            'version' => '0.1.0',
            'copyright' => "© " . Carbon::now()->format('Y') . " Nicholas Ireland, All Rights Reserved.",
            'author' => [
                'name' => 'Nicholas Ireland',
                'email' => 'nick@nicholasireland.ca',
                'github' => 'https://github.com/xp-bar'
            ]
        ];
    }

    /**
     * Return an array of data merged with the metadata.
     *
     * @param array $data
     * @return array
     */
    final public static function with(array $data): array
    {
        return self::get() + [
            'data' => $data
        ];
    }
}
