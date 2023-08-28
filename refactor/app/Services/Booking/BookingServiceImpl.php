<?php

namespace DTApi\Services\Booking;

use DTApi\Repository\BookingRepository;

/**
 * class BookingServiceImpl
 * @package DDTApi\Services\Booking
 */
class BookingServiceImpl implements BookingService
{
    /**
     * @var BookingRepository
     */
    protected $repository;

    /**
     * BookingServiceImpl constructor.
     * @param BookingRepository $bookingRepository
     */
    public function __construct(BookingRepository $bookingRepository)
    {
        $this->repository = $bookingRepository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $authenticatedUser = $request->__authenticatedUser;
        $isAdmin = in_array($authenticatedUser->user_type, [env('ADMIN_ROLE_ID'), env('SUPERADMIN_ROLE_ID')]);
        $response = [];
        if ($isAdmin) {
            $response = $this->repository->getAll($request);
        } elseif ($user_id = $request->get('user_id')) {
            $response = $this->repository->getUsersJobs($user_id);
        }
        return response($response);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return response($this->repository->with('translatorJobRel.user')->find($id));
    }

    /**
     * @param int $userId
     * @param array $data
     * @return mixed
     */
    public function store(int $userId, array $data)
    {

    }

}