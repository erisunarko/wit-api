<?php

namespace App\Http\Controllers;

class chartData
{
    public $labels;
    public $datasets;
}

class dataSets
{
    public $label;
    public $borderColor;
    public $fill;
    public $data;
}

class ChartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getData()
    {
        $dt = new chartData();
        $datasets = new dataSets();
        $datasets2 = new dataSets();

        $labels = ['00:00', '06:00', '12:00', '18:00', '24:00'];

        $datasets->label = 'Male';
        $datasets->borderColor = 'blue';
        $datasets->fill = false;
        $datasets->data = [30, 50, 70, 60, 30];

        $datasets2->label = 'Female';
        $datasets2->borderColor = 'red';
        $datasets2->fill = false;
        $datasets2->data = [35, 70, 80, 60, 40];

        $dt->labels = $labels;
        $dt->datasets = array($datasets, $datasets2);

        $v = array($dt);

        return response()->json(['data' => $v]);
    }

    //
}
