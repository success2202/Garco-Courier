<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Models\CourierDetails;
use App\Models\TrackingHistory;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class AdminShippingController extends Controller
{
    //

    public function Search(Request $req)
    {
        
        $searchDetails = CourierDetails::where('sender_name','LIKE',  "%$req->SearchID%")->get();
        
        // $searchDetails = CourierDetails ::where('id', 'LIKE', "%{$req->SearchID}%")->first();
       if(!$searchDetails)
        {
           
            return back()->withErrors(['message' => 'Courier not found.']);
           
        }
        return view('admin.courier.search')
        ->with('searchDetails', $searchDetails)
        ->with('breadcrumb', 'Shipments');
        return back();
       
    
    }


    public function Index()
    {
        return view('admin.courier.index')
        ->with('shipping', CourierDetails::latest()->get())
        
        ->with('breadcrumb', 'Shipments');
    }

    public function CreateShippingInfo()
    {
        return view('admin.courier.create')
                ->with('breadcrumb', 'Create Courier Info');
    }

    public function ShipmentStore(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'images' => 'required',
            'sender_email' => 'required',
            'receiver_email' => 'required',
            'sender_name' => 'required',
            'receiver_name' => 'required',
            'destination' => 'required',
        ]);
        if($valid->fails())
        {
            Session::flash('alert', 'error');
            Session::flash('message', 'Some Fields are missing');
            return back()->withInput($request->all()); 
        }
        try{
        if ($request->images) {
            $images = [];
            foreach ($request->images as $image) {
                $fileName = $image->getClientOriginalName();
                $image->move('images', $fileName);
                $images[] = $fileName;
            }
        }

        $shipmentInfo =   CourierDetails::create([
            'product' => $request->product,
            'images' => json_encode($images),
            'weight'  => $request->weight,
            'amount' => $request->amount,
            'payment' => $request->payment,
            'size' => $request->size,
            'type' => $request->type,
            'invoice_id' => rand(1111111111, 999999999),
            'sender_name' => $request->sender_name,
            'sender_email' => $request->sender_email,
            'sender_phone' => $request->sender_phone,
            'sender_address' => $request->sender_address,
            'receiver_name' => $request->receiver_name,
            'receiver_email' => $request->receiver_email,
            'receiver_phone' => $request->receiver_phone,
            'receiver_address' => $request->receiver_address,
            'pick_date' => $request->pick_date,
            'departure_date' => $request->departure_date,
            'origin' => $request->origin,
            'destination' => $request->destination,
            'mode' => $request->mode,
            'qty' => $request->qty,
            'frieght' => $request->frieght,
        ]);
       
        Session::flash('alert', 'success');
        Session::flash('message', 'Courier Informaiton added successfully');
        return back();
        // if ($shipmentInfo) {
        //     Session::flash('alert', 'success');
        //     Session::flash('message', 'Courier Informaiton added successfully');
        //     return back();
        // }
    }catch(\Exception $e)
    {
        Session::flash('alert', 'error');
        Session::flash('message', 'Something  went wrong');
        return back();
    }

   
    }

    public function ShipmentEdit($id)
    {
        return view('admin.courier.edit')
        ->with('shipment', CourierDetails::where('id', decrypt($id))->first())
        ->with('breadcrumb', 'Shipment Edit');
    }


        public function ShipmentUpdate(Request $req, $id)
    {
        try{
        if ($req->images) {
            $images = [];
            foreach ($req->images as $image) {
                $fileName = $image->getClientOriginalName();
                $image->move('images', $fileName);
                $images[] = $fileName;
            }
        }
        $shipment = CourierDetails::where('id', decrypt($id))->first();
        if($shipment)
        {
            $shipment->product = $req->product;      
            $shipment->images = isset($images)?json_encode($images):$shipment->images;
            $shipment->weight  = $req->weight;
            $shipment->amount = $req->amount;
            $shipment->payment = $req->payment;
            $shipment->size = $req->size;
            $shipment->type = $req->type;
            $shipment->sender_name = $req->sender_name;
            $shipment->sender_email = $req->sender_email;
            $shipment->sender_phone = $req->sender_phone;
            $shipment->sender_address = $req->sender_address;
            $shipment->receiver_name = $req->receiver_name;
            $shipment->receiver_email = $req->receiver_email;
            $shipment->receiver_phone = $req->receiver_phone;
            $shipment->receiver_address = $req->receiver_address;
            $shipment->pick_date = $req->pick_date;
            $shipment->departure_date = $req->departure_date;
            $shipment->origin = $req->origin;
            $shipment->destination = $req->destination;
            $shipment->mode = $req->mode;
            $shipment->qty = $req->qty;
            $shipment->frieght = $req->frieght;
            $shipment->save();
            Session::flash('alert', 'success');
            Session::flash('message', 'Courier Informaiton added successfully');
            return back();
        }
    }catch(\Exception $e)
    {
        Session::flash('alert', 'error');
        Session::flash('message', 'Something  went wrong');
        return back();
    }
    
    }

    public function Tracking($id)
    {
        return view('admin.courier.tracking')
        ->with('shipment', CourierDetails::where('id', decrypt($id))->first())
        ->with('breadcrumb', 'Create Tracking ID');
    }
    

    public function TrackingStore(Request $req)
    {

    
        $courier = CourierDetails::where('id', $req->courier_info_id)->first();
      $tracking =  Tracking::create([
            'courier_info_id' => $req->courier_info_id,
            'const_no' => 'GAR-'.rand(111111111,99999999),
            'update_date'=> $req->update_date,
            'current_city'=> $req->current_city,
            'current_location'=> $req->current_location,
            'arrival_time'=> $req->arrival_time,
            'status'=> $req->status,
            'lat',
            'long',
            'comment'=> $req->comment,

        ]);
        $info = $courier->load('TrackingInfo');
       
        if ($tracking) {
            $date = Carbon::now();
            TrackingHistory::create([
            'tracking_id' => $tracking->id, 
            'date' => $date,
            'time' =>  date('h:ia'), 
            'location' => $req->current_location, 
            'status' => $req->status,
            'updated_by' =>auth()->user()->name,
            'Remarks' => $req->comment
            ]);
            // Mail::to($courier->receiver_email)->send(new CourierMail($info->toArray()));
            Session::flash('alert', 'success');
            Session::flash('message', 'Tracking Informaiton added successfully');
            return redirect()->intended(route('admin.courier.index'));
        }
  
    }


    public function TrackingDetails($id)
    {
        try{
        $track = Tracking::where('courier_info_id', decrypt($id))->first();
        if(!$track)
        { 
            Session::flash('alert', 'error');
            Session::flash('message', 'You dont have Tracking information for this courier');
            return back();

        }
        return view('admin.courier.tracking_details')
        ->with('tracking', $track)
        ->with('courier', CourierDetails::where('id', decrypt($id))->first())
        ->with('breadcrumb', 'tracking details');
    }catch(\Exception $e)
    {
        Session::flash('alert', 'error');
        Session::flash('message', 'Something  went wrong');
        return back();
    }
    }


    public function UpdateTracking(Request $request, $id)
    {
        // try{
        $track = Tracking::where('id', decrypt($id))->first();
        $courier = CourierDetails::where('id', $track->courier_info_id)->first();
        if($track)
        { 
            $track->fill($request->all())->save();

            $date = Carbon::now();
            TrackingHistory::create([
            'tracking_id' => $track->id, 
            'date' => $date,
            'time' =>  date('h:ia'), 
            'location' => $request->current_location, 
            'status' => $request->status,
            'updated_by' => auth()->user()->name,
            'Remarks' => $request->comment
            ]);
        }
        $info = $courier->load('TrackingInfo');
        if ($track) {
            // Mail::to($courier->receiver_email)->send(new CourierMail($info->toArray()));
            Session::flash('alert', 'success');
            Session::flash('message', 'Tracking Informaiton updated successfully');
            return redirect()->intended(route('admin.courier.index'));
        }
    // }catch(\Exception $e)
    // {
    //     Session::flash('alert', 'error');
    //     Session::flash('message', 'Something  went wrong');
    //     return back();
    // }
    }
}
