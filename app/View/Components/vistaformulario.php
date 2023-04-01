<?php

namespace App\View\Components;
use \App\Models\Tarea;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Carbon\Carbon;

class vistaformulario extends Component
{
    private $tarea;
    /**
     * Create a new component instance. 
     * @param \App\Models\Tarea $tarea
     */
    public function __construct($tarea = null)
    {
        if( is_null($tarea))
        {
            $tarea = Tarea::make([
                'urgencia' => 0,
                'fecha_limite',

            ]);
        }
        $this->tarea = $tarea;
    }

    /**
     * Get the view / contents that represent the component.
     *  
     */
    public function render()
    {
        $params=[

            'tarea' => $this->tarea,    
           'urgencias' => Tarea::URGENCIAS,
        ];
        return view('components.vistaformulario', $params);
    }
}
