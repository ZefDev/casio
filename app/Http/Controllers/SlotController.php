<?php

namespace App\Http\Controllers;

use App\Services\SlotService;
use App\Http\Requests\StoreSlotRequest;

class SlotController extends Controller
{
    protected $slotService;

    public function __construct(SlotService $slotService)
    {
        $this->slotService = $slotService;
    }

    public function index()
    {
        $slots = $this->slotService->getAllSlots();
        return view('welcome', compact('slots'));
    }

    public function store(StoreSlotRequest $request)
    {
        $data = $request->validated(); 
        $this->slotService->createSlot($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->slotService->deleteSlot($id);
        return redirect()->back();
    }
    
    public function show($slug)
    {
        $slot = $this->slotService->getSlotBySlug($slug);

        if (!$slot) {
            abort(404);
        }
        return view('page', ['slot' => $slot]);
    }
}