<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Skill
 * @package App\Entity
 * @ORM\Entity(repositoryClass="SkillRepository")
 */
class Skill
{
    /**
     * @var int|null
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     *
     */
    private $id = null;

    /**
     * @var string|null
     * @ORM\column
     */
     private  $name;

    /**
     * @var int|null
     * @ORm\column (type="integer")
     */
    private $level;

    /**
     * @return null|string
     */
    public function getName ()
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     */
    public function setName ($name)
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getLevel ()
    {
        return $this->level;
    }

    /**
     * @param int|null $level
     */
    public function setLevel ($level)
    {
        $this->level = $level;
    }

    /**
     * @return int|null
     */
    public function getId ()
    {
        return $this->id;
    }


}