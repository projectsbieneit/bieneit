<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DateTime;

class TkmOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = DB::table('orders')->orderBy('status','ASC')->get();
       error_log($orders);

        return view('tkm.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tkm.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        $rules = [
            'name' => 'required',
            'unit' => 'required',
            'width' => 'required',
            'hub_art' => 'required',
        ];
        $customMessages = [
            'required' => 'Nicht alle benötigten Felder ausgefüllt!',
        ];
        Validator::make($request->all(), $rules, $customMessages)->validate();

        $order->name = $request->input('name');
        $order->item_no = $request->input('item_no');
        $order->unit = $request->input('unit');
        $order->width = $request->input('width');
        $order->rm = $request->input('rm');
        $order->hub_art = $request->input('hub_art');
        $order->kombi_nr = $request->input('kombi_nr');
        $order->maschine = $request->input('maschine');
        $order->fremd_hub = $request->input('fremd_hub');
        $order->Innendurchmesser= $request->input('Innendurchmesser');
        $order->FremdSomeText= $request->input('FremdSomeText');
        $order->DeliveryDate= $request->input('deliveryDate');
        $order->kommission = $request->input('kommission');
        $order->menge = $request->input('menge');
        $order->technisch_notwendig = $request->input('technisch_notwendig');
        $order->bemerkung = $request->input('bemerkung');
        $order->use = $request->input('use');
        $order->user_id = Auth::user()->id;


        $order->status = 1;

        $order->save();

        return redirect('/dashboard/tkm/orders');
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
        

        return view('tkm.orders.view', compact('order'));
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
        $order = Order::find($id);
        return view('tkm.orders.update', compact('order'));
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
         $order = Order::find($id);
       //  exit("====");
         $rules = [
            'name' => 'required',
            'unit' => 'required',
            'width' => 'required',
            'hub_art' => 'required',
        ];
        $customMessages = [
            'required' => 'Nicht alle benötigten Felder ausgefüllt!',
        ];
        Validator::make($request->all(), $rules, $customMessages)->validate();

        $order->name = $request->input('name');
        $order->item_no = $request->input('item_no');
        $order->unit = $request->input('unit');
        $order->width = $request->input('width');
        $order->rm = $request->input('rm');
        $order->hub_art = $request->input('hub_art');
        $order->kombi_nr = $request->input('kombi_nr');
        $order->maschine = $request->input('maschine');
        $order->fremd_hub = $request->input('fremd_hub');
        $order->Innendurchmesser= $request->input('Innendurchmesser');
        $order->FremdSomeText= $request->input('FremdSomeText');
        $order->DeliveryDate= $request->input('deliveryDate');
        $order->kommission = $request->input('kommission');
        $order->menge = $request->input('menge');
        $order->technisch_notwendig = $request->input('technisch_notwendig');
        $order->bemerkung = $request->input('bemerkung');
        $order->use = $request->input('use');
        $order->user_id = Auth::user()->id;
        $order->save();
        return redirect('/dashboard/tkm/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // exit("Hi this is test");
        Order::destroy($id);
        return redirect('/dashboard/tkm/orders');

    }
}
