<?php


class Iugu_WebHook extends APIResource
{
    public static function create($attributes = [])
    {
        return self::createAPI($attributes);
    }
    public static function fetch($key = null)
    {
        return self::fetchAPI($key);
    }
    public function save()
    {
        return $this->saveAPI();
    }
    public function delete()
    {
        return $this->deleteAPI();
    }
    public static function update(string $webhookId, array $attributes = [])
    {
        return self::updateAPI($webhookId, $attributes);
    }
}
