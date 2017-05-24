<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Repositories\Eloquent\EloquentRoleRepository;
use App\Repositories\Eloquent\EloquentUserRepository;
use App\Repositories\Eloquent\EloquentBlogRepository;
use App\Repositories\Eloquent\EloquentCityRepository;
use App\Repositories\Eloquent\EloquentSubjectRepository;
use App\Repositories\Eloquent\EloquentDayRepository;
use App\Repositories\Eloquent\EloquentPartnerRepository;
use App\Repositories\Eloquent\EloquentContactRepository;
use App\Repositories\Eloquent\EloquentSubscribeRepository;
use App\Repositories\Contracts\RoleRepository;
use App\Repositories\Contracts\UserRepository;
use App\Repositories\Contracts\BlogRepository;
use App\Repositories\Contracts\CityRepository;
use App\Repositories\Contracts\SubjectRepository;
use App\Repositories\Contracts\DayRepository;
use App\Repositories\Contracts\PartnerRepository;
use App\Repositories\Contracts\ContactRepository;
use App\Repositories\Contracts\SubscribeRepository;
use App\Models\Role;
use App\Models\User;
use App\Models\Blog;
use App\Models\City;
use App\Models\Subject;
use App\Models\Day;
use App\Models\Partner;
use App\Models\Contact;
use App\Models\Subscribe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // code
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            RoleRepository::class, function () {
                return new EloquentRoleRepository(new Role());
            }
        );
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
        $this->app->bind(
            ContactRepository::class, function () {
                return new EloquentContactRepository(new Contact());
            }
        );
        $this->app->bind(
            SubscribeRepository::class, function () {
                return new EloquentSubscribeRepository(new Subscribe());
            }
        );
    }
}
