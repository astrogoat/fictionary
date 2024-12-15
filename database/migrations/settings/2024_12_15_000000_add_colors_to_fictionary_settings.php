<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('fictionary.colors', [
            "accent" => [
                "50" => "rgb(242, 249, 254)",
                "100" => "rgb(227, 241, 253)",
                "200" => "rgb(195, 229, 250)",
                "300" => "rgb(145, 209, 248)",
                "400" => "rgb(98, 186, 243)",
                "500" => "rgb(75, 163, 227)",
                "600" => "rgb(57, 130, 194)",
                "700" => "rgb(45, 103, 156)",
                "800" => "rgb(38, 88, 129)",
                "900" => "rgb(33, 73, 107)",
                "950" => "rgb(20, 46, 71)"
            ]
        ]);
    }

    public function down()
    {
        $this->migrator->delete('fictionary.colors');
    }
};
