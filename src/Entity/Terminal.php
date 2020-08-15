<?php

namespace App\Entity;

use App\Repository\TerminalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TerminalRepository::class)
 */
class Terminal
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
    private $commande;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $signification;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fonction;

    /**
     * @ORM\OneToMany(targetEntity=TerminalUtil::class, mappedBy="terminalId")
     */
    private $utils;

    /**
     * @ORM\OneToMany(targetEntity=TerminalOption::class, mappedBy="trId")
     */
    private $options;

    public function __construct()
    {
        $this->utils = new ArrayCollection();
        $this->options = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommande(): ?string
    {
        return $this->commande;
    }

    public function setCommande(string $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    public function getSignification(): ?string
    {
        return $this->signification;
    }

    public function setSignification(?string $signification): self
    {
        $this->signification = $signification;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * @return Collection|terminalUtil[]
     */
    public function getUtils(): Collection
    {
        return $this->utils;
    }

    public function addUtil(terminalUtil $util): self
    {
        if (!$this->utils->contains($util)) {
            $this->utils[] = $util;
            $util->setTerminalId($this);
        }

        return $this;
    }

    public function removeUtil(terminalUtil $util): self
    {
        if ($this->utils->contains($util)) {
            $this->utils->removeElement($util);
            // set the owning side to null (unless already changed)
            if ($util->getTerminalId() === $this) {
                $util->setTerminalId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|terminaloption[]
     */
    public function getOptions(): Collection
    {
        return $this->options;
    }

    public function addOption(terminaloption $option): self
    {
        if (!$this->options->contains($option)) {
            $this->options[] = $option;
            $option->setTrId($this);
        }

        return $this;
    }

    public function removeOption(terminaloption $option): self
    {
        if ($this->options->contains($option)) {
            $this->options->removeElement($option);
            // set the owning side to null (unless already changed)
            if ($option->getTrId() === $this) {
                $option->setTrId(null);
            }
        }

        return $this;
    }
}
