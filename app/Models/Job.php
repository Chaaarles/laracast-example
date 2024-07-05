<?php

namespace App\Models;

class Job
{
    public static function find(int $id): array
    {
        $job = collect(self::all())->firstWhere("id", $id);
        if (!$job) {
            abort(404);
        }

        return $job;
    }

    public static function all(): array
    {
        return [
            ["id" => 1, "title" => "PHP Developer", "description" => "This is an awesome job", "salary" => "$60k"],
            ["id" => 2, "title" => "Python Developer", "description" => "This is an awesome job", "salary" => "$60k"],
            ["id" => 3, "title" => "Ruby Developer", "description" => "This is an awesome job", "salary" => "$60k"],
            ["id" => 4, "title" => "Java Developer", "description" => "This is an awesome job", "salary" => "$60k"],
            ["id" => 5, "title" => "C# Developer", "description" => "This is an awesome job", "salary" => "$60k"]
        ];
    }
}
