<?php


namespace Devio\Pipedrive\Resources;

use Devio\Pipedrive\Resources\Basics\Resource;

class Mailbox extends Resource
{
    /**
     * Enabled abstract methods.
     *
     * @var array
     */
    protected $enabled = ['find'];

    public function find($id, $options = [])
    {
        array_set($options, 'id', $id);
        array_set($options, 'include_body', 1);

        return $this->request->get('mailMessages/:id', $options);
    }
}
