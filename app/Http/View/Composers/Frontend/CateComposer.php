<?php

namespace App\Http\View\Composers\Frontend;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Cate;

class CateComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
/*     public function compose(View $view)
    {
        $categories = Cate::select()->get()->toArray();
        return $view->with('categories', $categories);
    } */
}
