<?php

namespace DTApi\Services\Booking;

/**
 * interface BookingService
 * @package DDTApi\Services\Booking
*/
interface BookingService
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request);

    /**
     * @param $id
     * @return mixed
     */
    public function show($id);

    /**
     * @param int $userId
     * @param array $data
     * @return mixed
     */
    public function store(int $userId, array $data);
}