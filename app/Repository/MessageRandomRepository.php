<?php

namespace App\Repository;

use App\Models\MessageRandom;

class MessageRandomRepository
 {
    private $entity;

    public function __construct( MessageRandom $MessageRandom )
 {
        $this->entity = $MessageRandom;
    }

    public function FindByMessage(): MessageRandom
 {
        $randid = rand( 1, $this->entity->count() );
        $message = $this->entity->findOrFail( $randid );
        return $message;
    }

    public function createMessage( array $data )
 {
        return $this->entity->create( [ 'text' => $data[ 'message' ] ] );

    }
}