<?php

namespace App\Providers;

use App\Repository\ApiConetable;
use App\Repository\CountryInformationable;
use App\Repository\CountryInformationAddable;
use App\Repository\CountryInformationAddRepository;
use App\Repository\CountryInformationCheckable;
use App\Repository\CountryInformationCheckingRepository;
use App\Repository\CountryInformationRepository;
use App\Repository\CreateUserRepository;
use App\Repository\RestCountryApiRepository;
use App\Repository\Sanitizable;
use App\Repository\SenitizeTheDataRepository;
use App\Repository\UserCreatable;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CountryInformationable::class, CountryInformationRepository::class);
        $this->app->bind(CountryInformationCheckable::class, CountryInformationCheckingRepository::class);
        $this->app->bind(ApiConetable::class, RestCountryApiRepository::class);
        $this->app->bind(CountryInformationAddable::class, CountryInformationAddRepository::class);
        $this->app->bind(UserCreatable::class, CreateUserRepository::class);
        $this->app->bind(Sanitizable::class, SenitizeTheDataRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
