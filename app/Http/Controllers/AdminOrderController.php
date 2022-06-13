<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Check if user is admin
        if ($request->json('is_admin') === true) {
            return response()->json(['error' => 'not authorized'], 403);
        }
        return Order::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // Check if user is admin
        if ($request->json('is_admin') === true) {
            return response()->json(['error' => 'not authorized'], 403);
        }
        $order = Order::findOrfail($id);

        return response()->json([
            'success' => true,
            'message' => 'Order Data',
            'data'    => $order
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Check if user is admin
        if ($request->json('is_admin') === true) {
            return response()->json(['error' => 'not authorized'], 403);
        }

        $this->validate($request, [
            'user_id' => 'required|integer',
            'user_name' => 'required|string',
            'kamar_id' => 'required|integer',
            'tanggal_masuk' => 'required|date',
            'tanggal_keluar' => 'required|date',
            'jumlah_orang' => 'required|integer',
        ]);

        $order = Order::create([
            'user_id' => $request->json('user_id'),
            'user_name' => $request->json('user_name'),
            'kamar_id' => $request->json('kamar_id'),
            'tanggal_masuk' => $request->json('tanggal_masuk'),
            'tanggal_keluar' => $request->json('tanggal_keluar'),
            'jumlah_orang' => $request->json('jumlah_orang'),
        ]);

        if ($order) {
            return response()->json([
                'success' => true,
                'message' => 'Order Created',
                'data'    => $order
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'Order Failed to Create',
        ], 409);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Check if user is admin
        if ($request->json('is_admin') === true) {
            return response()->json(['error' => 'not authorized'], 403);
        }

        $this->validate($request, [
            'user_name' => 'required|string',
            'kamar_id' => 'required|integer',
            'tanggal_masuk'   => 'required|date',
            'tanggal_keluar' => 'required|date',
            'jumlah_orang' => 'required|integer',
        ]);

        $order = Order::findOrFail($id);

        $order->user_name = $request->user_name;
        $order->kamar_id = $request->kamar_id;
        $order->tanggal_masuk = $request->tanggal_masuk;
        $order->tanggal_keluar = $request->tanggal_keluar;
        $order->jumlah_orang = $request->jumlah_orang;
        $order->save();

        if ($order) {
            return response()->json([
                'success' => true,
                'message' => 'Order Updated',
                'data'    => $order
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'Order Failed to Update',
        ], 409);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        // Check if user is admin
        if ($request->json('is_admin') === true) {
            return response()->json(['error' => 'not authorized'], 403);
        }
        $order->delete();

        if ($order) {
            return response()->json([
                'success' => true,
                'message' => 'Order Deleted',
                'data'    => $order
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'Order Failed to Delete',
        ], 409);
    }
}
