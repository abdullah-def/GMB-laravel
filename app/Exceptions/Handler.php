<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use App\Models\Post;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    function render($request, Throwable $exception)
    {
            $posts_footer = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(2)->get();


            if ($this->isHttpException($exception)) {
                if ($exception->getStatusCode() == 404) {
                    return response()->view('errors.404', [
                        'title' => config('app.name') . ' - 404',
                        'posts_footer' => $posts_footer,
                    ]);
                }
                if ($exception->getStatusCode() == 500) {
                    return response()->view('errors.500', [
                        'title' => config('app.name') . ' - 500',
                        'posts_footer' => $posts_footer,
                    ]);
                }
            }
            return parent::render($request, $exception);
    }
}
