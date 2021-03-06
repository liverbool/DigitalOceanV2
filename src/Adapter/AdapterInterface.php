<?php

/**
 * This file is part of the DigitalOceanV2 library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DigitalOceanV2\Adapter;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
interface AdapterInterface
{
    /**
     * @param  string            $url
     * @throws \RuntimeException
     * @return string
     */
    public function get($url);

    /**
     * @param  string            $url
     * @param  array             $headers (optional)
     * @throws \RuntimeException
     */
    public function delete($url, $headers = array());

    /**
     * @param  string            $url
     * @param  array             $headers (optional)
     * @param  string            $content (optional)
     * @throws \RuntimeException
     * @return string
     */
    public function put($url, $headers = array(), $content = '');

    /**
     * @param string             $url
     * @param array              $headers (optional)
     * @param string             $content (optional)
     * @throws \RuntimeException
     * @return string
     */
    public function post($url, $headers = array(), $content = '');

    /**
     * @return array
     */
    public function getLatestResponseHeaders();
}
