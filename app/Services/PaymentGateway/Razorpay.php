<?php

namespace Services\PaymentGateway;

class Razorpay
{

    CONST GATEWAY_NAME = 'Razzorpay';

    private $transaction_data;

    private $gateway;

    public function __construct()
    {
        // $this->gateway = $gateway;
        // $this->options = [];
    }

    private function createTransactionData($order_total, $order_email, $event)
    {
        $token = uniqid();
        $this->transaction_data = [
            'amount' => $order_total,
            'currency' => $event->currency->code,
            'description' => 'Order for customer: ' . $order_email,
            'card' => config('attendize.fake_card_data'),
            'token' => $token,
            'receipt_email' => $order_email
        ];

        return $this->transaction_data;
    }

    public function startTransaction($order_total, $order_email, $event)
    {

        // $this->createTransactionData($order_total, $order_email, $event);
        // $transaction = $this->gateway->purchase($this->transaction_data);
        // $response = $transaction->send();

        // return $response;
    }

    public function getTransactionData() {
        return $this->transaction_data;
    }

    public function extractRequestParameters($request)
    {
        foreach ($this->extra_params as $param) {
            if (!empty($request->get($param))) {
                $this->options[$param] = $request->get($param);
            }
        }
    }

    public function completeTransaction($data) {
        dump("completeTransaction");
        dd($data);
    }

    public function getAdditionalData() {}

    public function storeAdditionalData() {
        return false;
    }

    public function refundTransaction($order, $refund_amount, $refund_application_fee) {

        $request = $this->gateway->refund([
            'transactionReference' => $order->transaction_id,
            'amount'               => $refund_amount,
            'refundApplicationFee' => $refund_application_fee
        ]);

        $response = $request->send();

        if ($response->isSuccessful()) {
            $refundResponse['successful'] = true;
        } else {
            $refundResponse['successful'] = false;
            $refundResponse['error_message'] = $response->getMessage();
        }

        return $refundResponse;
    }

}