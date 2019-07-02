<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Barcodes;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = Good::orderBy('id','DESC')->get();
        error_log($goods);
        return view('was.goods.index', compact('goods'));
    }
    public function addagain($id)
    {
        $mytime =Carbon::now('Europe/Berlin')->format('h:i:s');
        $serialTime=str_replace(":", "",$mytime);
        $barCode1=$this->generateBarcodeNumber();
        $good = Good::find($id);
        $BD='';
        return view('was.goods.addagain', compact('good','barCode1','serialTime','BD'));
    }
    public function edit($id)
    {
        $good = Good::find($id);
        return view('was.goods.update', compact('good'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function barcodeNumberExists($code) {
        return Good::where('name', "'.$code'")->exists();
    }
    public function generateBarcodeNumber() {
        $length = 8;
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $barCode= substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
        if ($this->barcodeNumberExists($barCode)) {
            return generateBarcodeNumber();
        }
        return $barCode;
    }
    public function create()
    {
        $mytime =Carbon::now('Europe/Berlin')->format('h:i:s');
        $serialTime=str_replace(":", "",$mytime);
        $barCode1=$this->generateBarcodeNumber();
        return view('was.goods.create',compact('barCode1','serialTime'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'name' => 'required',
            'Reihe' =>'required',
            'HÃ¶he' =>'required',
            'Stellplatz' =>'required',
            'unit' => 'required',
            'width' => 'required',
            'hub_art' => 'required',
        ];
        $customMessages = [
            'required' => 'Nicht alle benÃ¶tigten Felder ausgefÃ¼llt!',
        ];
        Validator::make($request->all(), $rules, $customMessages)->validate();
        if($request->input('addagain')=='yes')
        {
            $bc=array();
            $loop=(int)$request->input('cutit');
            $old=Good::find($request->input('idold'));
            $getWidth=(int)$request->input('width');
            $getCut=(int)$request->input('cutit');
            $oldwidth=(int)$request->input('oldwidth');
            $OLDdatetime=$request->input('datetime');
            $final_data=$oldwidth-$getWidth*$getCut;
            error_log($final_data);
            $old->width = $final_data;
            $old->isplit=1;
            $old->save();
          for($i=1;$i<=$loop;$i++){
            $good = new Good();
            $good->timestamps = false; // disable timestamps for this creation
            $good->name = $request->input('name');
            $good->item_no = $request->input('item_no');
            $good->unit = $request->input('unit');
            $good->width = $request->input('width');
            $good->rm = $request->input('rm');
            $good->hub_art = $request->input('hub_art');
            $good->kombi_nr = $request->input('kombi_nr');
            $good->loc_row= $request->input('Reihe');
            $good->loc_height = $request->input('HÃ¶he');
            $good->loc_rack = $request->input('Stellplatz');
            $good->innendurchmesser = $request->input('innendurchmesser');
            $good->maschine = $request->input('maschine');
            $good->fremd_hub = $request->input('fremd_hub');
            $good->kommission = $request->input('kommission');
            $good->FremdSomeText= $request->input('FremdSomeText');
            $good->kunde = $request->input('kunde');
            $good->we_datum = $request->input('we_datum');
            $good->serial_no = $request->input('serial_no');
            $good->created_at = $OLDdatetime; // <- datetime here

            if($i==1){
                $good->barcode = $request->input('barcode');
                array_push($bc,$good->barcode);
            }
            if($i>1){
                $good->barcode =$this->generateBarcodeNumber();
                array_push($bc,$good->barcode);
            }
            // $good->location = $request->input('location');op
            $good->multiartikel = $request->input('multiartikel');
            $good->cutit = $request->input('cutit');
            $good->use = "new";
            $good->save();}
            $mytime = Carbon::now();
            $barcodeDB = new Barcodes();
            $barcodeDB->MainBarcode=$request->oldBarcode;
            $barcodeDB->DividedBarcodes=serialize($bc);
            $barcodeDB->Date=$mytime->toDateTimeString();
            $barcodeDB->save();
            $BD=$barcodeDB->id;
           return redirect()->back()->with('data', $BD);
        }
        else{
        $good = new Good();
        $good->name = $request->input('name');
        $good->item_no = $request->input('item_no');
        $good->unit = $request->input('unit');
        $good->width = $request->input('width');
        $good->rm = $request->input('rm');
        $good->hub_art = $request->input('hub_art');
        $good->kombi_nr = $request->input('kombi_nr');
        $good->maschine = $request->input('maschine');
        $good->fremd_hub = $request->input('fremd_hub');
        $good->kommission = $request->input('kommission');
        $good->FremdSomeText= $request->input('FremdSomeText');
        $good->innendurchmesser = $request->input('innendurchmesser');
        $good->kunde = $request->input('kunde');
        $good->we_datum = $request->input('we_datum');
        $good->serial_no = $request->input('serial_no');
        $good->barcode = $request->input('barcode');
        $good->loc_row= $request->input('Reihe');
        $good->loc_height = $request->input('HÃ¶he');
        $good->loc_rack = $request->input('Stellplatz');
        $good->multiartikel = $request->input('multiartikel');
        $good->cutit = $request->input('cutit');
        $good->use = "new";

        $good->save();

        return redirect('/dashboard/was/goods');
        }
    }
        public function ShowBarcodes($barcode){
        $detials=Barcodes::where('id', '=', $barcode)->get();
        return response()->json($detials);
        }
        public function MultibarcodePrnting($id){
            return view('was.goods.add', compact('good'));
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $good = Good::find($id);
        return view('was.goods.view', compact('good'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateit($id,Request $request)
    {
        $good = Good::find($id);
        $good->name = $request->input('name');
        $good->item_no = $request->input('item_no');
        $good->unit = $request->input('unit');
        $good->width = $request->input('widthq');
        $good->rm = $request->input('rm');
        $good->hub_art = $request->input('hub_art');
        $good->kombi_nr = $request->input('kombi_nr');
        $good->maschine = $request->input('maschine');
        $good->fremd_hub = $request->input('fremd_hub');
        $good->kommission = $request->input('kommission');
        $good->FremdSomeText= $request->input('FremdSomeText');
        $good->kunde = $request->input('kunde');
        $good->serial_no = $request->input('serial_no');
        $good->barcode = $request->input('barcode');
         $good->loc_row= $request->input('Reihe');
        $good->loc_height = $request->input('Höhe');
        $good->loc_rack = $request->input('Stellplatz');
        // $good->location = $request->input('location');
        $good->multiartikel = $request->input('multiartikel');
        $good->cutit = $request->input('cutit');
        $good->use = "new";
        $good->save();

        return redirect('/dashboard/was/goods');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Good::destroy($id);
        return redirect('/dashboard/was/goods');

    }
    public function LocationControl()
    {
        $goods_loc = Good::whereNull('user_id')->get();
        return view('location',compact('goods_loc'));
    }
    public function getlocresults($m,$e,$rack) {
        $data= DB::table('goods')->select('serial_no')->where('loc_row', $m)->where('loc_rack','>=', $e)->where('loc_rack','<=', $rack)
        ->get();
        return json_encode($data);
     }
}
