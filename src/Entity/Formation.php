<?php
/**
 * Created by PhpStorm.
 * User: mzb
 * Date: 07/04/2021
 * Time: 21:43
 */

namespace App\Entity;
use Doctrine\ORM\Mapping;

class Formation
{
    /**
     * @var int|null
     * @ORM\Id
     * @ORM\GeneratedValue(stategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id = null;

    /**
     * @ORM\Column(type="integer")
     * @var int| null
     */

    /**
     * @ORM\Column(type="integer")
     * @var int| null
     */
    private $gradeLevel = null;

    /**
     *  @ORM\Column(type="text")
     * @var string | null
     */
    private $description = null;

    /**
     * @ORM\Column(type="date_immutable")
     * @var int | null
     */
    private $startedAt = null;

    /**
     * @ORM\Column(type="date_immutable", nullable=true)
     * @var dateTime | null
     */
    private $endAt = null;

    /**
     * @return int|null
     */
    public function getGradeLevel ()
    {
        return $this->gradeLevel;
    }

    /**
     * @param int|null $gradeLevel
     */
    public function setGradeLevel ($gradeLevel)
    {
        $this->gradeLevel = $gradeLevel;
    }

    /**
     * @return null|string
     */
    public function getDescription ()
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     */
    public function setDescription ($description)
    {
        $this->description = $description;
    }

    /**
     * @return int|null
     */
    public function getStartedAt ()
    {
        return $this->startedAt;
    }

    /**
     * @param int|null $startedAt
     */
    public function setStartedAt ($startedAt)
    {
        $this->startedAt = $startedAt;
    }

    /**
     * @return dateTime|null
     */
    public function getEndAt ()
    {
        return $this->endAt;
    }

    /**
     * @param dateTime|null $endAt
     */
    public function setEndAt ($endAt)
    {
        $this->endAt = $endAt;
    }

    /**
     * @return int|null
     */
    public function getId ()
    {
        return $this->id;
    }

    

}