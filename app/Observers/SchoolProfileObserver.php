<?php

namespace App\Observers;

use App\Models\SchoolProfile;

class SchoolProfileObserver
{
    public function creating(SchoolProfile $schoolProfile) {
        $fullAddress = 'COU' . $schoolProfile->county->id . 'CON' . $schoolProfile->county->id . 'WAR' . $schoolProfile->county->id;

        $result = app('geocoder')->geocode($fullAddress)->get();

        $coordinates = $result[0]->getCoordinates();

        $schoolProfile->lat = $coordinates->getLatitude();
        $schoolProfile->long = $coordinates->getLongitude();
    }
    /**
     * Handle the SchoolProfile "created" event.
     */
    public function created(SchoolProfile $schoolProfile): void
    {
        //
    }

    /**
     * Handle the SchoolProfile "updated" event.
     */
    public function updated(SchoolProfile $schoolProfile): void
    {
        //
    }

    /**
     * Handle the SchoolProfile "deleted" event.
     */
    public function deleted(SchoolProfile $schoolProfile): void
    {
        //
    }

    /**
     * Handle the SchoolProfile "restored" event.
     */
    public function restored(SchoolProfile $schoolProfile): void
    {
        //
    }

    /**
     * Handle the SchoolProfile "force deleted" event.
     */
    public function forceDeleted(SchoolProfile $schoolProfile): void
    {
        //
    }
}
