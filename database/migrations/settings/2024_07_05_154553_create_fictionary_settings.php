<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('fictionary.enabled', false);
    }

    public function down()
    {
        $this->migrator->delete('fictionary.enabled');
    }
};
