<?php
/**
 * This file is part of the FIREGENTO project.
 *
 * FireGento_GermanSetup is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  FireGento
 * @package   FireGento_ContentSync
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2013 FireGento Team (http://www.firegento.de). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     0.1.0
 */

abstract class FireGento_ContentSync_Model_Storage_Abstract
{

    protected $id_field = 'id';

    /**
     * @param $id_field
     */
    public function setIdField($id_field)
    {
        $this->id_field = $id_field;
    }

    /**
     * @return string
     */
    public function getIdField()
    {
        return $this->id_field;
    }


    /**
     * @param array $data
     * @param string $entityType
     */
    abstract public function storeData($data, $entityType);

    /**
     * @param string $entityType
     * @return array
     */
    abstract public function loadData($entityType);
}