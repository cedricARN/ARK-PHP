<?php

declare(strict_types=1);

/*
 * This file is part of ARK PHP.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Ark\API\One;

use BrianFaust\Ark\API\AbstractAPI;
use Illuminate\Support\Collection;

class Blocks extends AbstractAPI
{
    /**
     * @param array $query
     *
     * @return \Illuminate\Support\Collection
     */
    public function all(string $query): Collection
    {
        return $this->get('blocks', $query);
    }

    /**
     * @param string $id
     *
     * @return \Illuminate\Support\Collection
     */
    public function get(string $id): Collection
    {
        return $this->get('blocks/get', compact('id'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function epoch(): Collection
    {
        return $this->get('blocks/getEpoch');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function fee(): Collection
    {
        return $this->get('blocks/getFee');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function fees(): Collection
    {
        return $this->get('blocks/getFees');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function height(): Collection
    {
        return $this->get('blocks/getHeight');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function milestone(): Collection
    {
        return $this->get('blocks/getMilestone');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function nethash(): Collection
    {
        return $this->get('blocks/getNethash');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function reward(): Collection
    {
        return $this->get('blocks/getReward');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function status(): Collection
    {
        return $this->get('blocks/getStatus');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function supply(): Collection
    {
        return $this->get('blocks/getSupply');
    }
}
