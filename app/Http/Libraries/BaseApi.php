<?php

namespace App\Http\Libraries;


use Illuminate\Support\Facades\Http;


class BaseAPI
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = 'http://127.0.0.1:1717';
    }

    private function client()
    {
        return Http::baseUrl($this->baseUrl);
    }

    public function index (String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }

    public function store(String $endpoint, Array $data = [])
    {
        return $this->client()->post($endpoint , $data);
    }

    public function show (String $endpoint, Array $data)
    {
        return $this->client()->get($endpoint, $data);
    }

    public function update(String $endpoint, Array $data = [])
    {
        return $this->client()->post($endpoint, $data);
    }

    public function delete($endpoint)
    {
        return $this->client()->post($endpoint);
    }

    public function getTrash(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }

    public function restore(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }

    public function deleteTrash(String $endpoint, Array $data = [])
    {
         return $this->client()->post($endpoint, $data);
    }

}