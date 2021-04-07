<?php

namespace App\Entity;

use App\Repository\ReferenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReferenceRepository::class)
 */
class Reference
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="date_immutable")
     */
    private $starAt;

    /**
     * @ORM\Column(type="date_immutable")
     */
    private $endAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company;

    /**
     * @ORM\OneToMany(targetEntity=media::class, mappedBy="reference")
     */
    private $Medias;

    /**
     * @ORM\OneToMany(targetEntity=Media::class, mappedBy="relation")
     */
    private $media;

    public function __construct()
    {
        $this->Medias = new ArrayCollection();
        $this->media = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getStarAt(): ?\DateTimeImmutable
    {
        return $this->starAt;
    }

    public function setStarAt(\DateTimeImmutable $starAt): self
    {
        $this->starAt = $starAt;

        return $this;
    }

    public function getEndAt(): ?\DateTimeImmutable
    {
        return $this->endAt;
    }

    public function setEndAt(\DateTimeImmutable $endAt): self
    {
        $this->endAt = $endAt;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return Collection|media[]
     */
    public function getMedias(): Collection
    {
        return $this->Medias;
    }

    public function addMedia(media $media): self
    {
        if (!$this->Medias->contains($media)) {
            $this->Medias[] = $media;
            $media->setReference($this);
        }

        return $this;
    }

    public function removeMedia(media $media): self
    {
        if ($this->Medias->removeElement($media)) {
            // set the owning side to null (unless already changed)
            if ($media->getReference() === $this) {
                $media->setReference(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Media[]
     */
    public function getMedia(): Collection
    {
        return $this->media;
    }

    public function addMedium(Media $medium): self
    {
        if (!$this->media->contains($medium)) {
            $this->media[] = $medium;
            $medium->setRelation($this);
        }

        return $this;
    }

    public function removeMedium(Media $medium): self
    {
        if ($this->media->removeElement($medium)) {
            // set the owning side to null (unless already changed)
            if ($medium->getRelation() === $this) {
                $medium->setRelation(null);
            }
        }

        return $this;
    }
}
