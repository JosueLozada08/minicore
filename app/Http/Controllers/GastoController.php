<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    /**
     * Muestra la lista de gastos filtrados por rango de fechas
     * y calcula el total del monto en el rango.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Filtrar los gastos por rango de fechas si se proporcionan
        $gastos = Gasto::query()
            ->when($request->filled(['fecha_inicio', 'fecha_fin']), function ($query) use ($request) {
                $query->whereBetween('fecha', [$request->fecha_inicio, $request->fecha_fin]);
            })
            ->with('empleado.departamento') // Cargar relaciones
            ->get();

        // Calcular la sumatoria del monto de los gastos filtrados
        $totalGastos = $gastos->sum('monto');

        // Retornar la vista con los gastos y el total
        return view('gastos.index', compact('gastos', 'totalGastos'));
    }
}
