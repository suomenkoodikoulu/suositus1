<?php

namespace Survey\Surveypage\Api\Data;

interface ResultInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ETUNIMI            = 'etunimi';
    const SUKUNIMI           = 'sukunimi';
    const EMAIL              = 'email';
    const AVARUUS            = 'avaruus';
    const TUOTE              = 'tuote';
    /**#@-*/


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getFirstName();

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getLastName();

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getEmail();

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getSpace();

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */

    public function getProduct();

    public function setFirstName($fname);

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setLastName($lname);

    /**
     * Set Crated At
     *
     * @param int $createdAt
     * @return $this
     */
    public function setEmail($email);

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setSpace($space);

    public function setProduct($product);
}