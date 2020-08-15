<?php

namespace App\Entity;

use App\Repository\TerminalUtilRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TerminalUtilRepository::class)
 */
class TerminalUtil
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
    private $first;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $second;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $third;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $four;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $five;

    /**
     * @ORM\ManyToOne(targetEntity=Terminal::class, inversedBy="utils")
     */
    private $terminalId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirst(): ?string
    {
        return $this->first;
    }

    public function setFirst(string $first): self
    {
        $this->first = $first;

        return $this;
    }

    public function getSecond(): ?string
    {
        return $this->second;
    }

    public function setSecond(?string $second): self
    {
        $this->second = $second;

        return $this;
    }

    public function getThird(): ?string
    {
        return $this->third;
    }

    public function setThird(?string $third): self
    {
        $this->third = $third;

        return $this;
    }

    public function getFour(): ?string
    {
        return $this->four;
    }

    public function setFour(?string $four): self
    {
        $this->four = $four;

        return $this;
    }

    public function getFive(): ?string
    {
        return $this->five;
    }

    public function setFive(?string $five): self
    {
        $this->five = $five;

        return $this;
    }

    public function getTerminalId(): ?Terminal
    {
        return $this->terminalId;
    }

    public function setTerminalId(?Terminal $terminalId): self
    {
        $this->terminalId = $terminalId;

        return $this;
    }
}
