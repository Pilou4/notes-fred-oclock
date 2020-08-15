<?php

namespace App\Entity;

use App\Repository\TerminalOptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TerminalOptionRepository::class)
 */
class TerminalOption
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $un;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $deux;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $trois;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $quatre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cinq;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $six;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sept;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $huit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $neuf;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $onze;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $douze;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $treize;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $quatorze;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $quinze;

    /**
     * @ORM\ManyToOne(targetEntity=Terminal::class, inversedBy="options")
     */
    private $trId;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUn(): ?string
    {
        return $this->un;
    }

    public function setUn(string $un): self
    {
        $this->un = $un;

        return $this;
    }

    public function getDeux(): ?string
    {
        return $this->deux;
    }

    public function setDeux(?string $deux): self
    {
        $this->deux = $deux;

        return $this;
    }

    public function getTrois(): ?string
    {
        return $this->trois;
    }

    public function setTrois(?string $trois): self
    {
        $this->trois = $trois;

        return $this;
    }

    public function getQuatre(): ?string
    {
        return $this->quatre;
    }

    public function setQuatre(?string $quatre): self
    {
        $this->quatre = $quatre;

        return $this;
    }

    public function getCinq(): ?string
    {
        return $this->cinq;
    }

    public function setCinq(?string $cinq): self
    {
        $this->cinq = $cinq;

        return $this;
    }

    public function getSix(): ?string
    {
        return $this->six;
    }

    public function setSix(?string $six): self
    {
        $this->six = $six;

        return $this;
    }

    public function getSept(): ?string
    {
        return $this->sept;
    }

    public function setSept(?string $sept): self
    {
        $this->sept = $sept;

        return $this;
    }

    public function getHuit(): ?string
    {
        return $this->huit;
    }

    public function setHuit(?string $huit): self
    {
        $this->huit = $huit;

        return $this;
    }

    public function getNeuf(): ?string
    {
        return $this->neuf;
    }

    public function setNeuf(?string $neuf): self
    {
        $this->neuf = $neuf;

        return $this;
    }

    public function getDix(): ?string
    {
        return $this->dix;
    }

    public function setDix(?string $dix): self
    {
        $this->dix = $dix;

        return $this;
    }

    public function getOnze(): ?string
    {
        return $this->onze;
    }

    public function setOnze(?string $onze): self
    {
        $this->onze = $onze;

        return $this;
    }

    public function getDouze(): ?string
    {
        return $this->douze;
    }

    public function setDouze(?string $douze): self
    {
        $this->douze = $douze;

        return $this;
    }

    public function getTreize(): ?string
    {
        return $this->treize;
    }

    public function setTreize(?string $treize): self
    {
        $this->treize = $treize;

        return $this;
    }

    public function getQuatorze(): ?string
    {
        return $this->quatorze;
    }

    public function setQuatorze(?string $quatorze): self
    {
        $this->quatorze = $quatorze;

        return $this;
    }

    public function getQuinze(): ?string
    {
        return $this->quinze;
    }

    public function setQuinze(?string $quinze): self
    {
        $this->quinze = $quinze;

        return $this;
    }

    public function getTrId(): ?Terminal
    {
        return $this->trId;
    }

    public function setTrId(?Terminal $trId): self
    {
        $this->trId = $trId;

        return $this;
    }

}
