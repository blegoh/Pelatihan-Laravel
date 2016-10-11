<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 11/10/16
 * Time: 19:56
 */

namespace App\Http\Controllers;


use App\Models\Shipper;
use Illuminate\Http\Request;

class ShipperController extends Controller
{

    public function index()
    {
        $shippers = Shipper::all();
        return view('shippers.index',compact('shippers'));
    }

    public function show($id,$a)
    {
        $shipper = Shipper::find($id);
        return view('shippers.show',compact('shipper'));
    }

    public function create()
    {
        return view('shippers.add');
    }
    
    public function store(Request $request)
    {
        $shipper = Shipper::create($request->all());
        return redirect('shippers');
    }

    public function edit($id)
    {
        $shipper = Shipper::find($id);
        return view('shippers.edit',compact('shipper'));
    }

    public function update($id, Request $request)
    {
        $shipper = Shipper::find($id);
        $shipper->update($request->all());
        return redirect('shippers');
    }

    public function delete($id)
    {
        $shipper = Shipper::find($id);
        $shipper->delete();
        return redirect('shippers');
    }
}