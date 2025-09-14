<?php 

namespace App\Services;

use App\Models\Slot;

class SlotService
{
    public function getAllSlots()
    {
        return Slot::all();
    }

    public function createSlot(array $data)
    {
        if (isset($data['image_url'])) {
            $data['image_url'] = $this->uploadImage($data['image_url']);
            var_dump($data['image_url']);
        }
        
        return Slot::create($data);
    }

    public function deleteSlot($id)
    {
        return Slot::destroy($id);
    }

    protected function uploadImage($image)
    {
        return $image->store('images', 'public');
    }

    public function getSlotBySlug($slug)
    {
        return Slot::where('slug', $slug)->first();
    }
}