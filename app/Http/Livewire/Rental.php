<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Conversation;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Rental extends Component
{
    public $rental;
    public $authenticatedUserId;

    public function mount($rental)
    {
        $this->rental = $rental;
        $this->authenticatedUserId = Auth::id();
    }

    public function render()
    {
        $car = Car::with('showroom.user')->findOrFail($this->rental);
        return view('livewire.rental', compact('car'));
    }

    public function message($userId)
    {
        $authenticatedUserId = $this->authenticatedUserId;

        $existingConversation = Conversation::where(function ($query) use ($authenticatedUserId, $userId) {
            $query->where('sender_id', $authenticatedUserId)
                  ->where('receiver_id', $userId);
            })
            ->orWhere(function ($query) use ($authenticatedUserId, $userId) {
                $query->where('sender_id', $userId)
                      ->where('receiver_id', $authenticatedUserId);
            })->first();

        if ($existingConversation) {
            return redirect()->route('chat', ['query' => $existingConversation->id]);
        }

        $createdConversation = Conversation::create([
            'sender_id' => $authenticatedUserId,
            'receiver_id' => $userId,
        ]);

        return redirect()->route('chat', ['query' => $createdConversation->id]);
    }
}
