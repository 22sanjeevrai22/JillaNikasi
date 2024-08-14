<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\VehicleController;
use Symfony\Component\HttpFoundation\Response;

class RouteInputsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

       // Route inputs to PersonController
    //    if ($request->has(['first_name', 'middle_name', 'last_name', 'contact_number', 'address', 'email'])) {
    //     app(PersonController::class)->store($request);
    // }

    // if ($request->has(['vehicle_reg_no', 'vehicle_type_id'])) {
    //     app(VehicleController::class)->store($request);
    // }

    // if ($request->has(['good_name', 'quantity', 'price'])) {  // Adjust these field names to match your form
    //     app(GoodController::class)->store($request);
    // }

    return $next($request);
    }
}
