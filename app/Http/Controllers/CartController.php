<?php

namespace App\Http\Controllers;

use PDF;
use Auth;
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;
use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;
use App\Bill;
use App\Game;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "trending" => Game::orderBy('created_at', 'DESC')->first(),
        ];
        return view('main.cart', $data);
    }

    public function pay()
    {
        $error = null;
        $res = null;
        $total = Cart::getTotal();
        if(Auth::user()->money < $total){
            $error = "no-money";
        }
        //Check stock
        $stock = true;
        foreach(Cart::content() as $item){
            if($item->quantity > Game::find($item->id)->stock){
                $stock = false;
                break;
            }
        }
        if(!$stock){
            $error = "no-stock";
        }

        if($error == null){ // SI ON PROCEDE A L'ACHAT
            foreach(Cart::content() as $item){
                $game = Game::find($item->id);
                $game->stock = $game->stock - $item->quantity;
                $game->save();
                for ($i = 0; $i < $item->quantity; $i++) {
                    $game->users()->attach(Auth::user(), ['price' => $game->price]);
                }
            }

            Auth::user()->money = Auth::user()->money - Cart::getTotal();
            Auth::user()->save();

            // Cart::content();
            // Mail::to('newuser@example.com')->send(new MailtrapExample());
            $date = date_create();

            $pdf = PDF::loadView('mails.facture', ["total" => Cart::getTotal(), "cart" => Cart::content()]);
            $pdf->save(storage_path().'\\app\\public\\bills\\' . Auth::user()->id . Auth::user()->name . date_timestamp_get($date) .'.pdf');
            $bill = new Bill;
            $bill->user_id = Auth::user()->id;
            $bill->pdf = '\\app\\public\\bills\\' . Auth::user()->id . Auth::user()->name . date_timestamp_get($date) .'.pdf';
            $bill->total = Cart::getTotal();
            $bill->save();

            Cart::clear();
            Cart::store(Auth::user()->id);
        }

        $data = [
            "trending" => Game::orderBy('created_at', 'DESC')->first(),
            "error" => $error,
            "res" => $res
        ];
        // Mail::to('newuser@example.com')->send(new MailtrapExample());
        return view('main.pay', $data);
    }


    public function add($id)
    {
        $game = Game::find($id);
        Cart::add($game->id, $game->name, $game->price, 1);
        Cart::store(Auth::user()->id);
        return redirect()->back();
    }
    public function empty()
    {
        Cart::clear();
        Cart::store(Auth::user()->id);
        return redirect()->back();
    }
    public function remove($id)
    {
        Cart::remove($id);
        Cart::store(Auth::user()->id);
        return redirect()->back();
    }
    public function setQuantity(Request $request, $id)
    {
        if (Cart::has($id)) {
            $cartItem = Cart::get($id);
            $cartItem->quantity = $request->input('quantity');
        }
        Cart::store(Auth::user()->id);
        return redirect()->back();
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
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
