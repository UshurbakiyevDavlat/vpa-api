<?php

namespace App\Contracts;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

interface AuthInterface
{
    /**
     * Get the authenticated User.
     */
    public function user(): JsonResponse;

    /**
     * Redirect the user to the Azure authentication page.
     */
    public function redirectToProvider(): \Symfony\Component\HttpFoundation\RedirectResponse|RedirectResponse;

    /**
     * Obtain the user information from Azure.
     */
    public function handleProviderCallback(): JsonResponse|Redirector|RedirectResponse|Application;

    /**
     * Log the user out of the application.
     *
     * @param  Request  $request  Request
     * @return \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
     */
    public function logout(Request $request): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application;
}
