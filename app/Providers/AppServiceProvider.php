<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Site root for page links when it differs from what Laravel detected.
     */
    protected ?string $siteRoot = null;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Static files live in public/. On shared hosting the document root is the project folder,
        // so files are reachable under /public while pages must stay at the site root.
        // With `php artisan serve` (document root = public/) nothing needs changing.
        $root = rtrim($this->app['request']->root(), '/');

        if (str_ends_with($root, '/public')) {
            // Requests reach public/index.php through /public, so Laravel thinks the site lives there
            $this->siteRoot = substr($root, 0, -strlen('/public'));
            $publicRoot = $root;
        } elseif (defined('LARAVEL_SERVED_FROM_ROOT')) {
            // Requests reach the project-root index.php
            $publicRoot = $root.'/public';
        } else {
            return;
        }

        if (!config('app.asset_url')) {
            config(['app.asset_url' => $publicRoot]);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->siteRoot) {
            \URL::forceRootUrl($this->siteRoot);
        }

        // On a fresh database (e.g. before `php artisan migrate`) there are no settings to load yet
        if ($this->app->runningInConsole() && !\Schema::hasTable('generals')) {
            return;
        }

        $general = general();
        if (!$general) {
            return;
        }

        \Config::set("services.facebook.client_id", $general->fb_app_id);
        \Config::set("services.facebook.client_secret", $general->fb_app_secret);
        \Config::set("services.facebook.redirect", $general->fb_app_secret);

        \Config::set("services.google.client_id", $general->google_client_id);
        \Config::set("services.google.client_secret", $general->google_client_secret);
        \Config::set("services.google.redirect", $general->google_client_redirect_url);

        \Config::set("mail.mailers.smtp.transport", $general->mail_driver);
        \Config::set("mail.mailers.smtp.host", $general->mail_host);
        \Config::set("mail.mailers.smtp.port", $general->mail_port);
        \Config::set("mail.mailers.smtp.encryption", $general->mail_encryption);
        \Config::set("mail.mailers.smtp.username", $general->mail_username);
        \Config::set("mail.mailers.smtp.password", $general->mail_password);
    }
}
