<?php

use Illuminate\Support\Facades\Broadcast;

// Broadcast::channel('messages', function ($user) {
//     return true;
// });

Broadcast::channel('messages.rooms.{id}', function ($user,$id) {
    return $user->rooms->contains($id);
});
