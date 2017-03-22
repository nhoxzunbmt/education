<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Eloquent\EloquentUserRepository;
use App\Repositories\Eloquent\EloquentBlogRepository;
use App\Repositories\Eloquent\EloquentCityRepository;
use App\Repositories\Eloquent\EloquentSubjectRepository;
use App\Repositories\Eloquent\EloquentDayRepository;
use App\Repositories\Eloquent\EloquentPartnerRepository;
use App\Repositories\Contracts\UserRepository;
use App\Repositories\Contracts\BlogRepository;
use App\Repositories\Contracts\CityRepository;
use App\Repositories\Contracts\SubjectRepository;
use App\Repositories\Contracts\DayRepository;
use App\Repositories\Contracts\PartnerRepository;
use App\Models\User;
use App\Models\Blog;
use App\Models\City;
use App\Models\Subject;
use App\Models\Day;
use App\Models\Partner;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserRepository::class, function () {
                return new EloquentUserRepository(new User());
            }
        );
        $this->app->bind(
            CityRepository::class, function () {
                return new EloquentCityRepository(new City());
            }
        );
        $this->app->bind(
            DayRepository::class, function () {
                return new EloquentDayRepository(new Day());
            }
        );
        $this->app->bind(
            SubjectRepository::class, function () {
                return new EloquentSubjectRepository(new Subject());
            }
        );
        $this->app->bind(
            BlogRepository::class, function () {
                return new EloquentBlogRepository(new Blog());
            }
        );
        $this->app->bind(
            PartnerRepository::class, function () {
                return new EloquentPartnerRepository(new Partner());
            }
        );
    }
}
