<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Good;
use Illuminate\Support\Facades\DB;

class WasOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = DB::table('orders')->orderBy('status','ASC')->get();
        return view('was.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function statuschange(Request $request)
    {
        $order = Order::find($request->id);
        $order->status = $request->status;
        $order->save();
        return redirect('/dashboard/was/orders');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('was.orders.view', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function status(Request $request, $id){

        $order = Order::find($id);
        $order->status = $request->status;

        if($request->status == 2 && $order->use == "new"){
            
            $good = Good::whereNull('user_id')->where('use',$order->use)->where('rm',$order->rm)->where('width','>=',$order->width)->get();

            if(!isset($good[0])){

                $order->status = 3;
                $order->save();
                return redirect('/dashboard/was/orders');
            
            }

            if($good[0]->width - $order->width != 0){
            $good1 = new Good();
            $good1->name = $good[0]->name;
            $good1->item_no = $good[0]->item_no;
            $good1->unit = $good[0]->unit;
            $good1->serial_no = $good[0]->serial_no . ".1";
            $good1->barcode = $good[0]->barcode;
            $good1->width = $order->width;
            $good1->rm = $good[0]->rm;
            $good1->hub_art = $good[0]->hub_art;
            $good1->kombi_nr = $good[0]->kombi_nr;
            $good1->maschine = $good[0]->maschine;
            $good1->fremd_hub = $good[0]->fremd_hub;
            $good1->use = "remain";
            $good1->kommission = $good[0]->kommission;
            $good1->kunde = $good[0]->kunde;
            $good1->we_datum = $good[0]->we_datum;
            $good1->user_id = $order->user_id;
            $good1->save();

            $good2 = new Good();
            $good2->name = $good[0]->name;
            $good2->item_no = $good[0]->item_no;
            $good2->unit = $good[0]->unit;
            $good2->serial_no = $good[0]->serial_no . ".2";
            $good2->barcode = $good[0]->barcode;
            $good2->width = $good[0]->width - $order->width;
            $good2->rm = $good[0]->rm;
            $good2->hub_art = $good[0]->hub_art;
            $good2->kombi_nr = $good[0]->kombi_nr;
            $good2->maschine = $good[0]->maschine;
            $good2->fremd_hub = $good[0]->fremd_hub;
            $good2->use = "remain";
            $good2->kommission = $good[0]->kommission;
            $good2->kunde = $good[0]->kunde;
            $good2->we_datum = $good[0]->we_datum;
            $good2->save();

            $good[0]->delete();

            }

            else {
                
                $good[0]->user_id = $order->user_id;
                $good[0]->save();
            }


        }

        else if($request->status == 2 && $order->use == "remain"){

            
            $good = Good::whereNull('user_id')->where('use',$order->use)->where('rm',$order->rm)->where('width','>=',$order->width)->get();

            
            if(isset($good[0])){
                $good[0]->user_id = $order->user_id;
                $good[0]->save();
            }
            else {
                $order->status = 3;
            }
        }

        $order->save();
        return redirect('/dashboard/was/orders');
    }
}
