<?php

use Helix\Lego\Database\MigrateBrick;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Astrogoat\Fictionary\Sections\Features\WithProductScreenshot;

return new class extends Migration {
    public function up(): void
    {
        MigrateBrick::withinSection(WithProductScreenshot::class)
            ->move('screenshot', 'image.media')->migrate();
    }

    public function down(): void
    {
        MigrateBrick::withinSection(WithProductScreenshot::class)
            ->move('screenshot.media', 'screenshot')->migrate();
    }
};
