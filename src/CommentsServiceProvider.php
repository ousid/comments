<?php

namespace Coderflex\Comments;

use Coderflex\Comments\Commands\CommentsCommand;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CommentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('comments')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_comments_table')
            ->hasCommand(CommentsCommand::class);
    }

    public function bootingPackage()
    {
        $this->registerLivewireComponents();
    }

    public function registerLivewireComponents()
    {
        Livewire::component('comment', Comment::class);
        Livewire::component('comments', Comments::class);
    }
}
