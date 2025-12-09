<?php
trait HasUuid {
    public function generateUuid() {
        return uniqid('id_', true);
    }
}