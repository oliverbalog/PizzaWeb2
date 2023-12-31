<?php

namespace App\Controllers;

use App\Helpers\RouteCollection;
use App\Models\Order;
use Exception;

class ApiOrderController extends Controller
{
	/**
	 * @param RouteCollection $routes
	 */
	public function __construct(RouteCollection $routes)
	{
		parent::__construct($routes);
	}

	public function index()
	{
		$orders = Order::query()->getAll();

		return $this->response($orders);
	}

	public function store()
	{
		try {

			$validated = $this->validate([
				'pizza_name' => ['required', 'string'],
				'amount' => ['required', 'int']
			]);

		} catch(Exception $e) {
			return $this->response([
				'error' => 'A pizza neve és mennyisége kötelező'
			], 400);
		}

		$order = $validated;
		$order['ordered_at'] = date('Y-m-d H:i:s');
		$order['delivery_at'] = date('Y-m-d H:i:s', strtotime('+1 hours'));

		try {
			Order::query()->insert($order);
		} catch(Exception $e) {
			return $this->response([
				'error' => 'Nincs ilyen nevű pizza'
			], 404);
		}

		return $this->response([
			'status' => 'Megrendelés hozzáadva',
			'order' => $order
		]);
	}

	public function update()
	{
		parse_str(file_get_contents("php://input"), $data);

		try {

			$validated = $this->validate([
				'id' => ['required'],
				'pizza_name' => ['required'],
				'amount' => ['required'],
				'ordered_at' => ['required'],
				'delivery_at' => ['required'],
			], $data);

		} catch(Exception $e) {
			return $this->response([
				'error' => 'A pizza neve és mennnyisége kötelező'
			], 400);
		}

		$id = $validated['id'];
		unset($validated['id']);
		$order = $validated;

		try {
			Order::query()->update($id, $order);
		} catch(Exception $e) {
			return $this->response([
				'error' => 'Nincs ilyen nevű pizza',
				'sql' => $e->getMessage()
			], 404);
		}

		return $this->response([
			'status' => 'Megrendelés frissítve',
			'order' => $order
		]);
	}

	public function delete()
	{
		parse_str(file_get_contents("php://input"), $data);

		try {

			$validated = $this->validate([
				'id' => ['required'],
			], $data);

		} catch(Exception $e) {
			return $this->response([
				'error' => 'ID kötelező'
			], 400);
		}

		try {
			Order::query()->delete($validated['id']);
		} catch(Exception $e) {
			return $this->response([
				'error' => 'Nincs ilyen megrendelés'
			], 404);
		}

		return $this->response([
			'status' => 'Megrendelés törölve',
		]);
	}

	/**
	 * @param $data
	 * @param $code
	 * @return void
	 */
	private function response($data, $code = 200)
	{
		// clear the old headers
		header_remove();
		// set the actual code
		http_response_code($code);
		// set the header to make sure cache is forced
		header('Cache-Control: no-transform,public,max-age=300,s-maxage=900');
		header('Content-Type: application/json; charset=utf-8');

		echo json_encode($data);
	}
}