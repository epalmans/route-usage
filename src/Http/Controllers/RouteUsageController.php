<?php

namespace Julienbourdeau\RouteUsage\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Julienbourdeau\RouteUsage\RouteUsage;
use Illuminate\Support\Facades\Gate;

class RouteUsageController extends Controller
{
    public function index(Request $request)
    {
        $mayAccess = Gate::has('viewRouteUsage') ? Gate::allows('viewRouteUsage') : true;
        abort_unless($mayAccess, 403);
        
        $order = $request->get('orderBy') ?? 'updated_at';
        $sort = $request->get('sort') ?? 'asc';

        if (is_null($route = RouteUsage::first())) {
            return 'No route access logged yet.';
        }

        $attributes = array_keys($route->getAttributes());
        if (!in_array($order, $attributes)) {
            $order = 'updated_at';
        }
        if (!in_array($sort, ['asc', 'desc'])) {
            $sort = 'asc';
        }

        return view('route-usage::index', [
            'routes' => RouteUsage::orderBy($order, $sort)->get(),
        ]);
    }
}
